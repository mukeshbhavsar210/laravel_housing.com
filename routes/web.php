<?php

use App\Livewire\Account;
use App\Livewire\AuthRegister;
use App\Livewire\Home;
use App\Livewire\Login;
use App\Livewire\Mukesh;
use App\Livewire\Property;
use App\Livewire\PropertyDetail;
use App\Livewire\Register;
use App\Livewire\RegisterAccount;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\FrontController;

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

Route::get('/', Home::class)->name('home');
Route::get('/city', Home::class)->name('city');
Route::get('/area', Home::class)->name('area');
Route::get('/{id}', Property::class)->name('propertyDetail');

//User realted
Route::group(['prefix' => 'account'], function(){
    //Route::get('/login',[AuthController::class,'login'])->name('account.login');
    //Route::post('/login',[AuthController::class,'authenticate'])->name('account.authenticate');
    Route::get('/register',[AuthController::class,'register'])->name('account.register');
    Route::post('/process-register',[AuthController::class,'processRegister'])->name('account.processRegister');
    //Route::get('/logout',[AuthController::class,'logout'])->name('account.logout');
});


require __DIR__.'/auth.php';