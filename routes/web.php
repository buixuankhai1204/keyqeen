<?php

use App\Models\keyqeen;
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

Route::get('/', function () {
    return view('welcome');
});
route::POST('/dashboard','App\Http\Controllers\keyqeenController@store')->name('publish');
// route::get('/dashboard','App\Http\Controllers\keyqeenController@store')->middleware(['auth:sanctum', 'verified']);
Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view(
        'dashboard',
        ['keyqeen' => auth()->user()->timeline()]
    );
})->name('dashboard');
