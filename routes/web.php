<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;

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

Route::get('/', [PageController::class, 'indexHome']);

Route::get('/contact', [PageController::class, 'indexContact']);

Route::get('/about', [PageController::class, 'indexAbout']);

Route::get('/services', [PageController::class, 'indexServices']);

Route::get('/services/moreInfoServicesOne', [PageController::class, 'moreInfoServicesOne']);
Route::get('/services/moreInfoServicesTwo', [PageController::class, 'moreInfoServicesTwo']);
Route::get('/services/moreInfoServicesThree', [PageController::class, 'moreInfoServicesThree']);
Route::get('/services/moreInfoServicesFour', [PageController::class, 'moreInfoServicesFour']);
