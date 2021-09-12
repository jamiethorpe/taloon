<?php

use App\Http\Controllers\ShopController;
use Illuminate\Support\Facades\Route;
use App\Http\Livewire\Auth\Register;
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

Route::get('/register', Register::class);

Route::get('/shop/{userId}', [ShopController::class, 'show'])->name('shop.show');

Route::get('/login', function () {
    return 'login';
});
