<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController as Home;
use App\Http\Controllers\DirectoryController as Directory;
use App\Http\Controllers\ProfileController as Profile;
use App\Http\Controllers\RewardController as Reward;
use App\Http\Controllers\Backend\HomeController as Dashboard;
use App\Http\Controllers\Backend\RoleController;
use App\Http\Controllers\Backend\UserController;

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

Auth::routes();

Route::get('/', [Home::class, 'index'])->name('home');
Route::get('/home', [Home::class, 'index']);
Route::get('/directory', [Directory::class, 'index'])->name('directory');
Route::get('/profile', [Profile::class, 'index'])->name('profile');
Route::get('/rewards', [Reward::class, 'index'])->name('rewards');

Route::group(['prefix'=>'apanel', 'middleware' => ['auth','admin']], function () {
    Route::get('/', [Dashboard::class, 'index'])->name('apanel');
    Route::resource('roles', RoleController::class);
    Route::resource('users', UserController::class);
    Route::resource('courses', CourseController::class);
});
