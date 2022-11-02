<?php

use App\Http\Controllers\UserController;
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

Route::get('/dashboard', function()
{
  return view ('dashboard');
})->middleware(['auth'])->name('dashboard');

Route::get('/dashboard',[UserController::class,'home'])
->middleware(['auth'])->name('dashboard');

Route::get('/dashboard/admin', function () 
{
    return view('admin.dashboard');
})->middleware(['auth','admin'])->name('dashboard_admin');


require __DIR__.'/auth.php';
