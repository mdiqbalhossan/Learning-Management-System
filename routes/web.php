<?php

use App\Http\Controllers\Admin\AuthenticatedSessionController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\CourseController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\LessonController;
use App\Http\Controllers\Admin\PurchaseController;
use App\Http\Controllers\Admin\RegisteredAdminController;
use App\Http\Controllers\Admin\SectionController;
use App\Http\Controllers\Admin\SettingController;
use App\Http\Controllers\Admin\StudentController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\SingleCourseController;
use App\Http\Controllers\StripeController;
use App\Http\Controllers\WelcomeController;
use Illuminate\Support\Facades\Route;


Route::get('/', [WelcomeController::class, 'index'])->name('home');
Route::get('/category/{slug}', [WelcomeController::class, 'category'])->name('category');
Route::get('/course', [WelcomeController::class, 'course'])->name('course');
Route::get('/course/{slug}', [SingleCourseController::class, 'index'])->name('single.course');


Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

/*********Cart Route */
Route::get('/cart', [CartController::class, 'index'])->name('cart');
Route::post('/cart', [CartController::class, 'store'])->name('cart.store');
Route::post('/remove', [CartController::class, 'remove'])->name('cart.remove');
Route::get('/checkout', [CartController::class, 'checkout'])->name('cart.checkout');
Route::post('/payment', [CartController::class, 'payment'])->name('cart.payment');

/***** Stripe Payment Route  */
Route::get('/stripe', [StripeController::class, 'stripe'])->name('stripe');
Route::post('/stripe', [StripeController::class, 'stripePost'])->name('stripe.post');

/******* Admin Route ********/
Route::post('/admin/register', [RegisteredAdminController::class, 'store']);
Route::get('/admin/register', [RegisteredAdminController::class, 'create'])->name('admin.register');
Route::post('/admin/login', [AuthenticatedSessionController::class, 'store']);
Route::get('/admin/login', [AuthenticatedSessionController::class, 'create'])->name('admin.login');

Route::middleware(['auth:admin'])->prefix('admin')->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('admin.dashboard');
    Route::get('/profile', [DashboardController::class, 'profile'])->name('admin.profile');
    Route::post('/profile', [DashboardController::class, 'profileUpdate'])->name('admin.profile.update');
    Route::get('/change/password', [DashboardController::class, 'changePassword'])->name('admin.change.password');
    Route::post('/change/password', [DashboardController::class, 'changePasswordUpdate'])->name('admin.change.password.update');
    Route::resource('category', CategoryController::class);
    Route::resource('course', CourseController::class);
    Route::resource('section', SectionController::class);
    Route::resource('lesson', LessonController::class);
    Route::post('lesson_course', [LessonController::class, 'section_id'])->name('section_id');
    Route::resource('student', StudentController::class);
    Route::get('purchase', [PurchaseController::class, 'index'])->name('purchase.course');
    Route::get('setting/main', [SettingController::class, 'main'])->name('setting.main');
    Route::post('setting/main', [SettingController::class, 'mainUpdate'])->name('setting.main.update');
    Route::get('setting/payment', [SettingController::class, 'payment'])->name('setting.payment');
    Route::post('setting/payment', [SettingController::class, 'paymentUpdate'])->name('setting.payment.update');
});
