<?php

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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/dashboard', [App\Http\Controllers\HomeController::class, 'dashboard'])->name('dashboard');
Route::get('/estate', [App\Http\Controllers\HomeController::class, 'estate'])->name('estate');
Route::get('/country', [App\Http\Controllers\HomeController::class, 'country'])->name('country');
Route::get('/city', [App\Http\Controllers\HomeController::class, 'city'])->name('city');
Route::get('/area', [App\Http\Controllers\HomeController::class, 'area'])->name('area');
Route::get('/currency', [App\Http\Controllers\HomeController::class, 'currency'])->name('currency');
Route::get('/notification', [App\Http\Controllers\HomeController::class, 'notification'])->name('notification');
Route::get('/offer', [App\Http\Controllers\HomeController::class, 'offer'])->name('offer');
Route::get('/ticket', [App\Http\Controllers\HomeController::class, 'ticket'])->name('ticket');
Route::post('/store/country', [App\Http\Controllers\HomeController::class, 'store_country'])->name('store_country');
Route::post('/store/city', [App\Http\Controllers\HomeController::class, 'store_city'])->name('store_city');
Route::post('/store/area', [App\Http\Controllers\HomeController::class, 'store_area'])->name('store_area');
Route::post('/store/currency', [App\Http\Controllers\HomeController::class, 'store_currency'])->name('store_currency');
Route::post('/store/estate', [App\Http\Controllers\HomeController::class, 'store_estate'])->name('store_estate');
Route::post('/store/ticket', [App\Http\Controllers\HomeController::class, 'store_ticket'])->name('store_ticket');
Route::post('/store/offer', [App\Http\Controllers\HomeController::class, 'store_offer'])->name('store_offer');
Route::post('/store/notify', [App\Http\Controllers\HomeController::class, 'store_notify'])->name('store_notify');
Route::get('/estate/view', [App\Http\Controllers\HomeController::class, 'show_estate'])->name('show_estate');
Route::get('/estate/delete/{id}', [App\Http\Controllers\HomeController::class, 'delete_estate'])->name('delete_estate');
Route::get('/estate/search', [App\Http\Controllers\HomeController::class, 'search_estate'])->name('search_estate');
Route::get('/estate/view/details/{id}', [App\Http\Controllers\HomeController::class, 'show_estate_details'])->name('show_estate_details');
