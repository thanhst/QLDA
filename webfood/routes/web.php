<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

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
    return view('Home.index');
})->name('home');
Route::get('/Error',function(){
    return view('Pages.404');
})->name('error');
Route::get('/Contact',function(){
    return view('Pages.contact');
})->name('contact');
Route::get('/Chackout',function(){
    return view('Pages.chackout');
})->name('chackout');
Route::get('/testimonial',function(){
    return view('Pages.testimonial');
})->name('testimonial');
Route::get('/Shop-detail',function(){
    return view('Pages.shop-detail');
})->name('shop-detail');
Route::get('/Shop',function(){
    return view('Pages.shop');
})->name('shop');



Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::get('/Cart',function(){
        return view('Pages.cart');
    })->name('cart');
});

require __DIR__.'/auth.php';
