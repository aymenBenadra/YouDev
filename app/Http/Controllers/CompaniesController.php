<?php

namespace App\Http\Controllers;

use App\Models\Company;
use Illuminate\Http\Request;
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
        return $request->all();
        $request->validate([
            'name' => 'required:max:255|unique:company',
            'password' => 'required|max:255',
            'website_link' => 'max:255',
            'logo_link' => 'max:255',
        ]);

        $company = new Company;
        $company->name = $request->name;
        $company->email = $request->email;
        $company->password = bcrypt($request->password);
        $company->save();

        return redirect()->route('login')->with('message', 'Company created successfully!');
    }

    public function signin(Request $request)
    {
        $request->validate([
            'name' => 'required|max:255',
            'password' => 'required',
        ]);

        $company = Company::where('email', $request->email)->first();

        if (!$company || !Hash::check($request->password, $company->password)) {
            return redirect()->back()->with('error', 'Invalid credentials!');
        }

        auth()->login($company);

        return redirect()->route('home')->with('message', 'You are logged in!');
    }
}
