<?php

use App\Http\Controllers\OffersController;
use App\Http\Controllers\ProjectsController;
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

//? Login Routes
Route::get('login/company', function () {
    return view('company.login-company');
})->name('login.company');

Route::get('login', function () {
    return view('user.login-user');
})->name('login.user');

//? Register Routes
Route::get('register/company', function () {
    return view('company.register-company');
})->name('register.company');

Route::get('register', function () {
    return view('user.register-user');
})->name('register.user');

//? Projects routes
Route::get('projects', [ProjectsController::class, 'index'])->name('projects');
Route::get('projects/{project}', [ProjectsController::class, 'show'])->name('projects.show');
Route::get('projects/create', [ProjectsController::class, 'create'])->name('projects.create');
Route::get('projects/update/{project}', [ProjectsController::class, 'update'])->name('projects.update');

//? Offers routes
Route::get('offers', [OffersController::class, 'index'])->name('offers');
Route::get('offers/{offer}', [OffersController::class, 'show'])->name('offers.show');
Route::get('offers/create', [OffersController::class, 'create'])->name('offers.create');
Route::get('offers/update/{offer}', [OffersController::class, 'update'])->name('offers.update');
