<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HelloWorldController; 
use App\Http\Controllers\about; 
use App\Http\Controllers\kontak; 
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
// Route::get('

// Route::get('/about', function () {
//     return view('about');
// });
Route::get('/project', function () {
    return view('project');
});
Route::get('/terserah', function () {
    return view('terserah');
});

Route::get('helloworld', [HelloWorldController::class, 'hello']); 



Route::get('about', [about::class, 'index']); 
Route::get('kontak', [kontak::class, 'index']); 

