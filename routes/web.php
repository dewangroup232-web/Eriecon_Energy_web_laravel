<?php

use App\Http\Controllers\Admin\AuthController;
use App\Http\Controllers\Admin\BlogPostController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\HeroBannerController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/index', [HomeController::class, 'index']);
Route::get('/index.html', [HomeController::class, 'index']);

Route::get('/blog', [BlogController::class, 'index'])->name('blog.index');
Route::get('/blog.html', [BlogController::class, 'index']);
Route::get('/blog-single', [BlogController::class, 'legacy']);
Route::get('/blog-single.html', [BlogController::class, 'legacy']);
Route::get('/blog/{slug}', [BlogController::class, 'show'])->name('blog.show');

Route::post('/contact', [ContactController::class, 'store'])
    ->middleware('throttle:6,1')
    ->name('contact.store');

Route::middleware('guest')->group(function () {
    Route::get('/admin/login', [AuthController::class, 'create'])->name('admin.login');
    Route::post('/admin/login', [AuthController::class, 'store'])->name('admin.login.store');
});

Route::prefix('admin')->name('admin.')->middleware(['auth', 'admin'])->group(function () {
    Route::get('/', DashboardController::class)->name('dashboard');
    Route::post('/logout', [AuthController::class, 'destroy'])->name('logout');
    Route::resource('banners', HeroBannerController::class)->except('show');
    Route::resource('blogs', BlogPostController::class)->except('show')
        ->parameters(['blogs' => 'blog']);
});

$pages = [
    '1', '404', 'about-us', 'contact', 'faq', 'projects',
    'services-Design-Manufacturing', 'services-EPC-Projects',
    'services-Equipmen-Rental', 'services-Infrastructure-Projects',
    'services-Plant-Maintenance-Turnarounds', 'services-Power-Automation-Projects',
    'services-Procurement', 'services-Project-Support',
    'services-Rigging-Lifting-Projects', 'services-Scaffolding',
    'services-major-equipment-list', 'services', 'sticky-stacking-cards',
];

foreach ($pages as $page) {
    Route::view('/'.$page, $page);
    Route::view('/'.$page.'.html', $page);
}
