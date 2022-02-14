<?php

use App\Http\Controllers\MyAuthController;
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
Route::get('list',                  [MyAuthController::class, 'list'])->name('users');
Route::get('registration',          [MyAuthController::class, 'registration'])->name('register-user');
Route::post('submit-registration',  [MyAuthController::class, 'submitRegistration'])->name('register.submit');
