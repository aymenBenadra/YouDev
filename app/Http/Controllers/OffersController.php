<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\{Offer};
use Illuminate\Support\Facades\Auth;

class OffersController extends Controller
{
    public function index()
    {
        return view('company.offers', [
            'offers' => Offer::all()
        ]);
    }

    public function show(Offer $offer)
    {
        return view('company.offer', [
            'offer' => $offer
        ]);
    }

    public function create()
    {
        return view('company.create-offer');
    }

    public function store(Request $request)
    {
        Offer::create(array_merge(
            $request->validate([
                'title' => 'required|max:255',
                'description' => 'required|max:255',
                'application_link' => 'required|max:255',
            ]),
            [
                'company_id' => Auth::guard('company')->user()->id
            ]
        ));

        return redirect()->route('offers')->with('message', 'Offer created successfully!');
    }

    public function update(Offer $offer)
    {
        return view('company.update-offer', [
            'offer' => $offer
        ]);
    }

    public function edit(Request $request, Offer $offer)
    {
        ddd($request, $offer);
        $offer->update($request->validate([
            'title' => 'required|max:255',
            'description' => 'required|max:255',
            'salary' => 'required|max:255',
            'company_id' => 'required|max:255',
        ]));

        return redirect()->route('offers')->with('message', 'Offer updated successfully!');
    }

    public function destroy(Offer $offer)
    {
        $offer->delete();

        return redirect()->route('offers')->with('message', 'Offer deleted successfully!');
    }
}
