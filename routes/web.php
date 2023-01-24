<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RestController;

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

//認証画面の表示
Route::post('/register', [RestController::class, 'signup'])->name('rest.signup');

//ログイン画面の表示
// Route::get('/login', [RestController::class, 'login'])->name('rest.login');

//一覧画面の表示
Route::get('/', [RestController::class, 'index'])->name('rest.index')->middleware('auth');

Route::get('/home', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
