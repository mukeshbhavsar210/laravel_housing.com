<?php

use App\Livewire\HomeController;
use App\Livewire\Property;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Livewire\PropertySearch;
use App\Livewire\Registration;
use App\Http\Controllers\FrontController;
use App\Http\Controllers\ShopController;

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


//Route::get('/',[FrontController::class,'index'])->name('front.home');
Route::get('/shop/{categorySlug?}/{subCategorySlug?}',[ShopController::class,'index'])->name('front.shop');
Route::get('/{slug}',[ShopController::class,'product'])->name('front.product');

Route::get('/', HomeController::class)->name('home');
Route::get('/result', PropertySearch::class)->name('search');
//Route::get('/city', FrontController::class)->name('city');
//Route::get('/area', PropertySearch::class)->name('area');
Route::get('/{id}', Property::class)->name('propertyDetail');

//User realted
Route::group(['prefix' => 'account'], function(){
    Route::get('/register',[AuthController::class,'register'])->name('account.register');
    Route::post('/process-register',[AuthController::class,'processRegister'])->name('account.processRegister');    
    
    //Route::get('/register',[Registration::class,'register'])->name('account.register');
    //Route::post('/process-register',[Registration::class,'processRegister'])->name('account.processRegister');    
});


require __DIR__.'/auth.php';