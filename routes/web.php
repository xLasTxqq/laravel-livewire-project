<?php

use App\Http\Livewire\CreateCars;
use App\Http\Livewire\Main;
use App\Http\Livewire\Requests;
use App\Http\Livewire\ViewCar;
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

// Route::get('/', function () {
//     return view('welcome');
// }); 

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

Route::middleware('auth')->get('requests',Requests::class)->name('requests');
Route::middleware('auth')->get('createcars',CreateCars::class)->name('createcars');
Route::get('viewcar/{id}',ViewCar::class)->name('viewcar');

Route::get('/', Main::class)->name('main');

require __DIR__.'/auth.php';
