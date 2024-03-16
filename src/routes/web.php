<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RestaurantController;
use App\Http\Controllers\RegistrationController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ReservationController;
use App\Http\Controllers\FavoriteController;

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

Route::get('/', [RestaurantController::class, 'index']);
Route::get('/detail', [RestaurantController::class, 'detail']);


// Route::post('/detail/confirm', [ReservationController::class,'confirm']);
// Route::post('/detail', [ReservationController::class, 'store']);



Route::get('/register', [RegistrationController::class,'register']);
Route::post('/register', [RegistrationController::class,'store']);
Route::get('/thanks', [RegistrationController::class, 'thanks'])->middleware('verified');


Route::get('/login', [LoginController::class,'showLogin'])->name('showLogin');
Route::post('/login', [LoginController::class,'login']);

Route::group(['middleware' => ['auth']], function(){
    Route::post('/logout', [LoginController::class, 'logout'])->name('logout');
});



Route::get('/menu', [RestaurantController::class, 'menu'])->name('menu');

Route::get('/detail/{id}', [RestaurantController::class, 'detail'])->name('restaurant.detail');
Route::post('/reservation', [ReservationController::class,'store']);
Route::get('/done', [ReservationController::class,'done']);


Route::get('/search', [RestaurantController::class,'search'])->name('keyword');

Route::get('/mypage', [ReservationController::class, 'mypage'])->middleware('verified');

Route::get('/like/{shop}', [FavoriteController::class, 'like'])->name('like');
Route::get('/unlike/{shop}', [FavoriteController::class,'unlike'])->name('unlike');

Route::get('/mypage/{id}',[ReservationController::class,'delete'])->name('delete');

Route::get('/change/{id}',[ReservationController::class,'change'])->name('change');

Route::post('/mypage',[ReservationController::class,'update'])->name('update');

Route::get('/changed',[ReservationController::class,'update']);

Route::get('/review/{id}',[ReservationController::class,'review_page'])->name('review_page');

Route::get('/thanks2',[ReservationController::class,'review']);

Route::post('/thanks2',[ReservationController::class,'review']);