<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\UserHome;
use App\Http\Controllers\AdminHome;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('pages.home.index');
});
Route::get('/register', function () {
    return view('Login_Register.registration');
});
Route::get('/login', function () {
    return view('Login_Register.login');
});
Route::get('/update', function () {
    return view('Admin.admin_update');
});

//cart
Route::get('/cart', function () {
    return view('cart.cart');
});




//Route For User Registration
Route::post('/reg',[UserController::class,'add']);

//Route For the Login
Route::post('/login',[UserController::class,'login']);



//admin product
Route::post('/additem',[ProductController::class,'addproduct']);
Route::get('/dashboard',[ProductController::class,'viewData']);
Route::get('/{product_id}deleteproduct',[ProductController::class,'delete'])->name('deleteproduct');
Route::get('/{product_id}/updateview',[ProductController::class,'updateshow'])->name('updateview');
Route::put('updateproduct/{id}',[ProductController::class,'update'])->name('update');


//view product in admin home
Route::get('/viewproduct',[AdminHome::class,'viewData']);

//view product in user home
Route::get('/viewproductuser',[UserHome::class,'viewData']);



Route::get('/panel', function () {
    return view('Admin.admin_home.admin_home');
})->name('panel')->middleware('admin');
