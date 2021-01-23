<?php

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


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/student', [App\Http\Controllers\StudentController::class, 'index'])->middleware('role:student');
Route::get('/company', [App\Http\Controllers\CompanyController::class, 'index'])->middleware('role:company');
Route::get('/educator', [App\Http\Controllers\EducatorController::class, 'index'])->middleware('role:educator');


// Route::group(['middleware' => ['role:student']], function () {
//     Route::get('/student', function () {
//         return view('student');
//     });
// });
