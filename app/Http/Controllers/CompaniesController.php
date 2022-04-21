<?php

namespace App\Http\Controllers;

use App\Models\Company;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class CompaniesController extends Controller
{
    public function register()
    {
        return view('company.register-company');
    }

    public function login()
    {
        return view('company.login-company');
    }

    public function store(Request $request)
    {
        $company = Company::create($request->validate([
            'name' => 'required:max:255|unique:companies,name',
            'password' => 'required|max:255',
            'website_link' => 'max:255',
            'logo_link' => 'max:255',
        ]));

        Auth::guard('company')->login($company);

        return redirect()->route('offers')->with('message', 'Company created successfully!');
    }

    public function signin(Request $request)
    {
        $request->validate([
            'name' => 'required|max:255',
            'password' => 'required',
        ]);

        $company = Company::where('name', $request->name)->first();

        if (!$company || !Hash::check($request->password, $company->password)) {
            return redirect()->back()->with('error', 'Invalid credentials!');
        }

        Auth::guard('company')->login($company);

        return redirect()->route('offers')->with('message', 'You are logged in!');
    }
}
