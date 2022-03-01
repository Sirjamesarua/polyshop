<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;
use App\Models\Reviews;
use App\Models\Product;
use App\Models\User;



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

/*Route::get('/', function () {
    return view('welcome');
});*/

Route::get('/', [App\Http\Controllers\PagesController::class, 'index']);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::resource('products','App\Http\Controllers\ProductsController');

Route::post('/products/createreview', [App\Http\Controllers\ReviewsController::class, 'create'])->name('createreview');

Route::get('/logout', function(){
	Auth::logout();
	return Redirect::to('login');
});

Route::get('/{menu}/menu', [App\Http\Controllers\MenuAndOthersprofileController::class, 'menu']);
Route::get('/{authur_id}/{username}/profile', [App\Http\Controllers\MenuAndOthersprofileController::class, 'othersprofile']);

Route::post('/addfavourite', [App\Http\Controllers\AddFavouriteController::class, 'addfavourite'])->name('addfavourite');

Route::get('/myfavourite', [App\Http\Controllers\AddFavouriteController::class, 'myfavourite'])->name('destroy');


Route::delete('/products/{product_id}/removefavourite', [App\Http\Controllers\AddfavouriteController::class, 'removefavourite']);

Route::post('/profile', [App\Http\Controllers\HomeController::class, 'changepix']);
