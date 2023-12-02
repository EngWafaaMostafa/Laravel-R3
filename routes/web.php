<?php

use App\Http\Controllers\ExampleController;
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
Route::get('About', function () {
    return view('about');
});
Route::get('Contact', function () {
    return view('Contact');
});
Route::prefix('Blog')->group(function () {
    Route::get('Sciense', function () {
        return view('sciense');
    });
    Route::get('Sports', function () {
        return view('sports');
    });
    Route::get('Math', function () {
        return view('math');
    });
    Route::get('Medical', function () {
        return view('medical');
    });
});
Route::get('control', [ExampleController::class, 'show']);
