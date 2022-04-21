<?php

use App\Http\Controllers\{CompaniesController, UsersController, OffersController, ProjectsController};
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
    if (auth()->check())
        return redirect()->route('projects')->with('message', 'You are already logged in!');

    return view('index');
})->name('home');

//? Companies Routes
Route::get('register/company', [CompaniesController::class, 'register'])->name('companies.register');
Route::post('register/company', [CompaniesController::class, 'store'])->name('companies.store');
Route::get('login/company', [CompaniesController::class, 'login'])->name('companies.login');
Route::post('login/company', [CompaniesController::class, 'signin'])->name('companies.login');

//? Users Routes
Route::get('register', [UsersController::class, 'register'])->name('users.register');
Route::post('register', [UsersController::class, 'store'])->name('users.store');
Route::get('login', [UsersController::class, 'login'])->name('users.login');
Route::post('login', [UsersController::class, 'signin'])->name('users.signin');
Route::post('logout', [UsersController::class, 'logout'])->name('users.logout');

//? Projects routes
Route::get('projects', [ProjectsController::class, 'index'])->name('projects');
Route::get('projects/{project}', [ProjectsController::class, 'show'])->name('projects.show');
Route::get('project/create', [ProjectsController::class, 'create'])->name('project.create');
Route::get('project/update/{project}', [ProjectsController::class, 'update'])->name('project.update');

//? Offers routes
Route::get('offers', [OffersController::class, 'index'])->name('offers');
Route::get('offers/{offer}', [OffersController::class, 'show'])->name('offers.show');
Route::get('offer/create', [OffersController::class, 'create'])->name('offer.create');
Route::get('offer/update/{offer}', [OffersController::class, 'update'])->name('offer.update');
