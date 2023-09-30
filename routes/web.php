<?php

use App\Livewire\ComponentA;
use App\Livewire\ComponentB;
use App\Livewire\ComponentD;
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
    return view('welcome');
});

Route::get('a', ComponentA::class);

Route::get('b', ComponentB::class);

Route::get('d', ComponentD::class);
