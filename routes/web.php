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
Route::get('/register', function () {
    return view('auth.register')->name('register');
});
route::GET('/login','App\Http\Controllers\keyqeenController@login')->name('login');
route::GET('/register','App\Http\Controllers\keyqeenController@register')->name('register');

route::POST('/home','App\Http\Controllers\keyqeenController@store')->name('publish');
route::POST('/{keyqeen}/like','App\Http\Controllers\keyqeenLikeController@store')->middleware(['auth:sanctum', 'verified']);
route::DELETE('/{keyqeen}/dislike','App\Http\Controllers\keyqeenLikeController@destroy')->middleware(['auth:sanctum', 'verified']);
route::POST('/profile/{user:name}/follow','App\Http\Controllers\FollowController@store')->middleware(['auth:sanctum', 'verified']);
route::GET('/explore','App\Http\Controllers\ExploreController@index')->name('explore');
route::get('/home','App\Http\Controllers\keyqeenController@show')->middleware(['auth:sanctum', 'verified'])->name('home');
route::get('/profile/{user:name}','App\Http\Controllers\ProfileController@show')->middleware(['auth:sanctum', 'verified'])->name('profile');
route::get('/profile/{user:name}/edit','App\Http\Controllers\ProfileController@edit')->middleware(['auth:sanctum', 'verified'])->name('edit');
route::PATCH('/profile/{user:name}','App\Http\Controllers\ProfileController@update')->middleware(['auth:sanctum', 'verified'])->name('edit');

// Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
//     return view(
//         'dashboard',
//         ['keyqeen' => auth()->user()->timeline()]
// //     );
// })->name('dashboard');
