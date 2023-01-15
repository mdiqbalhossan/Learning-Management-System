<?php

use App\Http\Controllers\Admin\AuthenticatedSessionController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\CourseController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\RegisteredAdminController;
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

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

/******* Admin Route ********/
// Route::group(['prefix' => 'admin', 'middleware' => ['auth:admin']], function () {
// });
Route::post('/admin/register', [RegisteredAdminController::class, 'store']);
Route::get('/admin/register', [RegisteredAdminController::class, 'create'])->name('admin.register');
Route::post('/admin/login', [AuthenticatedSessionController::class, 'store']);
Route::get('/admin/login', [AuthenticatedSessionController::class, 'create'])->name('admin.login');

Route::middleware(['auth:admin'])->prefix('admin')->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('admin.dashboard');
    Route::resource('category', CategoryController::class);
    Route::resource('course', CourseController::class);
});
