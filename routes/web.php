<?php

use App\Livewire\Home;
use App\Livewire\Property;
use App\Livewire\PropertyDetail;
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

Route::get('/', Home::class)->name('home');
Route::get('/city', Home::class)->name('city');
Route::get('/area', Home::class)->name('area');
Route::get('/{id}', Property::class)->name('propertyDetail');

require __DIR__.'/auth.php';
