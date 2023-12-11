<?php

use App\Http\Controllers\ExampleController;
use App\Http\Controllers\loginController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\carController;
use App\Http\Controllers\PostController;

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
Route::post('storeCar', [carController::class, 'store'])->name('storeCar');
Route::get('createCar', [carController::class, 'create']);
//Route::get('createCar', [carController::class, 'create']);
Route::get('AddPost', [PostController::class, 'create']);
Route::post('AddPost', [PostController::class, 'store'])->name('AddPost');
// Route::get('login', [loginController::class, 'create']);
// Route::post('logged', [loginController::class, 'store'])->name('logged');
// Route::get('login', function () {
//     return view('login');  
// });
// Route::post('logged', function () {
//     // return 'you are logged in';
// })->name('login');
//Route::get('login', [loginController::class, 'create'])->name('login.create');
// Route::get('test', function () {
//     return view('test');
// });
// Route::get('food', function () {
//     return view('food');
// });
// Route::get('blog', function () {
//     return view('blog');
// });
// task2
// Route::get('About', function () {
//     return view('about');
// });
// Route::get('Contact', function () {
//     return view('Contact');
// });
// Route::prefix('Blog')->group(function () {
//     Route::get('Sciense', function () {
//         return view('sciense');
//     });
//     Route::get('Sports', function () {
//         return view('sports');
//     });
//     Route::get('Math', function () {
//         return view('math');
//     });
//     Route::get('Medical', function () {
//         return view('medical');

//     });
// });
//Route::get('control1', [ExampleController::class, 'show']);
//Route::get('control', [loginController::class, 'create']);
