<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\{Offer};

class OffersController extends Controller
{
    public function index()
    {
        return view('user.offers', [
            'offers' => Offer::all()
        ]);
    }

    public function show(Offer $offer)
    {
        return view('user.offer', [
            'offer' => $offer
        ]);
    }

    public function create()
    {
        return view('user.create-offer');
    }

    public function update(Offer $offer)
    {
        return view('user.update-offer', [
            'offer' => $offer
        ]);
    }
}
