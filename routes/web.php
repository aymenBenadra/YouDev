<?php

use App\Models\{Offer, Project, User, Company};
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

// Projects routes
Route::get('/projects', function () {
    return Project::with('user')->get();
});

// User Projects
Route::get('/user/{user}/projects', function (User $user) {
    return $user->projects;
});

// Offers routes
Route::get('/offers', function () {
    cache()->get('offers') ?? cache()->remember('offers', 60, function () {
        return Offer::orderBy('id', 'desc')->get();
    });

    return cache()->get('offers') ?? Offer::orderBy('id', 'desc')->get();
});

// Company Offers
Route::get('/company/{company}/offers', function (Company $company) {
    return $company->offers;
});
