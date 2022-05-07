<?php

use App\Http\Controllers\FeaturedController;
use App\Models\Featured;
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
// Route::get('/carshop', function () {
//     return view('carshop');
// });
Route::get('/carshop', [FeaturedController::class, 'index']);
Route::post('/carshop', [CarController::class, 'store']);
