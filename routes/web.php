<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\DashboardController;


// ================== Root ==================

Route::get('/admin', fn() => redirect()->route('admin.dashboard'))->name('admin.home');

// ================== Logout ==================

Route::post('/logout', function () {
    return redirect()->route('admin.dashboard');
})->name('logout');

// ================== Legal (standalone) ==================

Route::get('/privacy-policy', fn() => view('backend.page.privacy-policy'))->name('privacy');
Route::get('/terms-of-service', fn() => view('backend.page.terms'))->name('terms');


// ================== Admin ==================

Route::prefix('admin')->name('admin.')->group(function () {

    // Dashboard
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

    // ── Home ──────────────────────────────────────────────
    Route::prefix('home')->name('home.')->group(function () {
        Route::get('/why-led-event',  fn() => view('backend.page.dashboard'))->name('why-led-event.index');
        Route::get('/our-services',   fn() => view('backend.page.dashboard'))->name('our-services.index');
        Route::get('/feature-project',fn() => view('backend.page.dashboard'))->name('feature-project.index');
        Route::get('/how-we-work',    fn() => view('backend.page.dashboard'))->name('how-we-work.index');
    });

    // ── Services ──────────────────────────────────────────
    Route::prefix('services')->name('services.')->group(function () {
        Route::get('/led-screen-rental',      fn() => view('backend.page.dashboard'))->name('led-screen-rental.index');
        Route::get('/stage-rental',           fn() => view('backend.page.dashboard'))->name('stage-rental.index');
        Route::get('/sound-system',           fn() => view('backend.page.dashboard'))->name('sound-system.index');
        Route::get('/lighting-production',    fn() => view('backend.page.dashboard'))->name('lighting-production.index');
        Route::get('/full-event-production',  fn() => view('backend.page.dashboard'))->name('full-event-production.index');
    });

    // ── Projects ──────────────────────────────────────────
    Route::prefix('projects')->name('projects.')->group(function () {
        Route::get('/all',       fn() => view('backend.page.dashboard'))->name('all.index');
        Route::get('/concert',   fn() => view('backend.page.dashboard'))->name('concert.index');
        Route::get('/corporate', fn() => view('backend.page.dashboard'))->name('corporate.index');
        Route::get('/festival',  fn() => view('backend.page.dashboard'))->name('festival.index');
        Route::get('/outdoor',   fn() => view('backend.page.dashboard'))->name('outdoor.index');
    });

    // ── Why Us ────────────────────────────────────────────
    Route::prefix('why-us')->name('whyus.')->group(function () {
        Route::get('/system',    fn() => view('backend.page.dashboard'))->name('system.index');
        Route::get('/backup',    fn() => view('backend.page.dashboard'))->name('backup.index');
        Route::get('/team',      fn() => view('backend.page.dashboard'))->name('team.index');
        Route::get('/execution', fn() => view('backend.page.dashboard'))->name('execution.index');
        Route::get('/experience',fn() => view('backend.page.dashboard'))->name('experience.index');
    });

    // ── Media ─────────────────────────────────────────────
    Route::prefix('media')->name('media.')->group(function () {
        Route::get('/event-video',   fn() => view('backend.page.dashboard'))->name('event-video.index');
        Route::get('/gallery',       fn() => view('backend.page.dashboard'))->name('gallery.index');
        Route::get('/behind-scenes', fn() => view('backend.page.dashboard'))->name('behind-scenes.index');
    });

    // ── Blog ──────────────────────────────────────────────
    Route::prefix('blog')->name('blog.')->group(function () {
        Route::get('/articles',        fn() => view('backend.page.dashboard'))->name('articles.index');
        Route::get('/event-guides',    fn() => view('backend.page.dashboard'))->name('event-guides.index');
        Route::get('/led-knowledge',   fn() => view('backend.page.dashboard'))->name('led-knowledge.index');
        Route::get('/production-tips', fn() => view('backend.page.dashboard'))->name('production-tips.index');
    });

    // ── Products ──────────────────────────────────────────
    Route::prefix('products')->name('products.')->group(function () {
        Route::get('/fox-effects', fn() => view('backend.page.dashboard'))->name('fox-effects.index');
        Route::get('/led-display', fn() => view('backend.page.dashboard'))->name('led-display.index');
    });

    // ── Contact ───────────────────────────────────────────
    Route::prefix('contact')->name('contact.')->group(function () {
        Route::get('/form-info',    fn() => view('backend.page.dashboard'))->name('form-info.index');
        Route::get('/contact-info', fn() => view('backend.page.dashboard'))->name('contact-info.index');
    });

});

//=============== API ===============



//============= Frontend ===============
Route::get("/", function () {
    return view('welcome');
})->name('home');
Route::get('/services', function () {
    return view('frontend.pages.services');
})->name('services');
Route::get('/contact', function () {
    return view('frontend.pages.contact');
})->name('contact');
Route::get('/why-us', function () {
    return view('frontend.pages.whyUs');
})->name('why-us');
Route::get('/blog', function () {
    return view('frontend.pages.blog');
})->name('blog');
Route::get('/projects', function () {
    return view('frontend.pages.projects');
})->name('projects');
Route::get('/products', function () {
    return view('frontend.pages.products');
})->name('products');
Route::get('/media', function () {
    return view('frontend.pages.media');
})->name('media');
