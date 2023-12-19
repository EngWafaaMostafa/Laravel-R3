<?php

use App\Http\Controllers\ExampleController;
use App\Http\Controllers\loginController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\carController;
use App\Http\Controllers\PostController;
use App\Models\Post;

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
//day 4
Route::get('Cars', [carController::class, 'index']); //it must done before show data
Route::get('createCar', [carController::class, 'create']);
//end of day 4 
Route::get('UpdateCar/{id}', [carController::class, 'edit']);
Route::put('Update/{id}', [carController::class, 'update'])->name('update');
Route::get('showCar/{id}', [carController::class, 'show'])->name('show');
Route::post('storeCar', [carController::class, 'store'])->name('storeCar'); //another way to insert using model
Route::get('deleteCar/{id}', [carController::class, 'destroy']);
Route::get('forceDeleteCar/{id}', [carController::class, 'forceDelete'])->name('forceDelete');
Route::get('trashedCar', [carController::class, 'trashed'])->name('trashedCar');
Route::get('restoreCar/{id}', [carController::class, 'restore'])->name('restoreCar');


Route::get('Posts', [postController::class, 'index']);
Route::get('AddPost', [PostController::class, 'create']);
Route::post('AddPost', [PostController::class, 'store'])->name('AddPost');
Route::get('Posts/{id}', [postController::class, 'show'])->name('show');
//task day 5
Route::get('updatePosts/{id}', [PostController::class, 'edit']);
Route::put('update/{id}', [PostController::class, 'update'])->name('update');
Route::get('showPost/{id}', [PostController::class, 'show'])->name('show');

//Route::post('storeCar', [carController::class, 'store'])->name('storeCar');
//end of task 5
//task day 6
Route::get('deletePost/{id}', [PostController::class, 'destroy']);
Route::get('trashedPost', [PostController::class, 'trashed'])->name('trashedPost');
Route::get('forceDelete/{id}', [PostController::class, 'forceDelete'])->name('forceDelete');
Route::get('restorePost/{id}', [PostController::class, 'restore'])->name('restorePost');
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
