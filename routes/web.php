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
route::POST('/home','App\Http\Controllers\keyqeenController@store')->name('publish');
route::get('/home','App\Http\Controllers\keyqeenController@show')->middleware(['auth:sanctum', 'verified'])->name('home');
route::get('/profile/{user}','App\Http\Controllers\ProfileController@show')->middleware(['auth:sanctum', 'verified'])->name('profile');

// Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
//     return view(
//         'dashboard',
//         ['keyqeen' => auth()->user()->timeline()]
// //     );
// })->name('dashboard');
