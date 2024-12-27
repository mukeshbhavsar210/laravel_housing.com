<?php

use App\Livewire\HomeController;
use App\Livewire\Property;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Livewire\PropertySearch;
use App\Livewire\Registration;
use App\Http\Controllers\FrontController;
use App\Http\Controllers\ShopController;
use App\Http\Controllers\ShopController2;
use App\Http\Controllers\ProductSubCategoryController;
use App\Livewire\PropertyDetails;

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


Route::get('/', HomeController::class)->name('home');
Route::get('/shop/{categorySlug?}/{subCategorySlug?}', PropertyDetails::class)->name('front.shop');
Route::get('/shop/{categorySlug?}/{subCategorySlug?}',[ShopController::class,'index'])->name('front.shop');
Route::get('/{slug}',[ShopController::class,'property'])->name('front.product');
Route::get('/product-subcategories', [ProductSubCategoryController::class, 'index'])->name('area');
Route::get('/result', PropertySearch::class)->name('search');
Route::get('/{id}', Property::class)->name('propertyDetail');

//User realted
Route::group(['prefix' => 'account'], function(){
    Route::get('/register',[AuthController::class,'register'])->name('account.register');
    Route::post('/process-register',[AuthController::class,'processRegister'])->name('account.processRegister');    
    
    //Route::get('/register',[Registration::class,'register'])->name('account.register');
    //Route::post('/process-register',[Registration::class,'processRegister'])->name('account.processRegister');    
});


require __DIR__.'/auth.php';