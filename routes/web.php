<?php

use App\Http\Controllers\{CompaniesController, UsersController, OffersController, ProjectsController};
use Illuminate\Support\Facades\Auth;
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
    return view('index');
})->name('home');

//? Companies Routes
Route::controller(CompaniesController::class)->middleware('guest')->group(function () {
    Route::get('register/company', 'register')->name('companies.register');
    Route::post('register/company', 'store')->name('companies.store');

    Route::get('login/company', 'login')->name('companies.login');
    Route::post('login/company', 'signin')->name('companies.login');
});

//? Users Routes
Route::controller(UsersController::class)->middleware('guest')->group(function () {
    Route::get('register', 'register')->name('users.register');
    Route::post('register', 'store')->name('users.store');

    Route::get('login', 'login')->name('users.login');
    Route::post('login', 'signin')->name('users.signin');
});

Route::post('logout', function () {
    auth()->logout();
    Auth::guard('company')->logout();
    return redirect()->route('home')->with('message', 'You are logged out!');
})->middleware('auth')->name('users.logout');

//? Projects routes
Route::controller(ProjectsController::class)->middleware('auth')->group(function () {
    Route::get('projects', 'index')->name('projects');
    Route::get('projects/{project}', 'show')->name('projects.show');

    Route::get('project/create', 'create')->name('project.create');
    Route::post('project/create', 'store')->name('project.store');

    Route::get('project/update/{project}', 'update')->name('project.update');
    Route::post('project/update/{project}', 'edit')->name('project.edit');

    Route::post('project/delete/{project}', 'destroy')->name('project.delete');
});

//? Offers routes
Route::controller(OffersController::class)->middleware('auth')->group(function () {
    Route::get('offers', 'index')->name('offers');
    Route::get('offers/{offer}', 'show')->name('offers.show');

    Route::get('offer/create', 'create')->name('offer.create');
    Route::post('offer/create', 'store')->name('offer.store');

    Route::get('offer/update/{offer}', 'update')->name('offer.update');
    Route::post('offer/update/{offer}', 'edit')->name('offer.edit');

    Route::post('offer/delete/{offer}', 'destroy')->name('offer.delete');
});
