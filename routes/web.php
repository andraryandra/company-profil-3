<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use Illuminate\Routing\Route as RoutingRoute;
use App\Http\Controllers\FullCalenderController;
use App\Http\Controllers\IndexHomeController\CarouselCaptionController;

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
//     return view('component.index');
// });

// Route::get('about-us', function() {
//     return view('component.about_us');
// });

// Route::get('blog', function () {
//     return view('component.blog');
// });

Route::get('/', function () {
    return view('layouts.partials.menu.index-coba');
});

Route::get('/getstarted', function () {
    return view('layouts.partials.menu.get-started');
});

Route::get('about-us-coba', function () {
    return view('layouts.partials.menu.about-us-coba');
});

Route::get('geosplatial-platforming', function () {
    return view('layouts.partials.menu.submenu.geosplatial-platforming');
});

Route::get('transportation-logistik', function () {
    return view('layouts.partials.menu.submenu.transportation-logistik');
});

Route::get('geosplatial-aset-management', function () {
    return view('layouts.partials.menu.submenu.geosplatial-aset-management');
});

Route::get('smart-plantation', function () {
    return view('layouts.partials.menu.submenu.smart-plantation');
});

Route::get('geosplatial-homan-resourch', function () {
    return view('layouts.partials.menu.submenu.geosplatial-homan-resourch');
});

Route::get('multimedia-ondemand', function () {
    return view('layouts.partials.menu.submenu.multimedia-ondemand');
});

Route::get('project-management', function () {
    return view('layouts.partials.menu.submenu.project-management');
});

Route::get('other-solution', function () {
    return view('layouts.partials.menu.submenu.other-solution');
});

Route::get('developer-modules', function () {
    return view('layouts.partials.menu.submenu.developer-modules');
});


Route::get('contact-us', function() {
    return view('layouts.partials.menu.contact-us');
});

Route::get('inner-page', function() {
    return view('component.inner-page');
});

Route::get('login', function() {
    return view('component.login');
});

Route::get('portofolio-details', function() {
    return view('component.portfolio-details');
});

Route::get('solution', function() {
    return view('layouts.partials.menu.solution');
});

Route::get('business-solutions', function() {
    return view('layouts.partials.menu.submenu.business-solutions');
});

Route::get('study-case', function() {
    return view('layouts.partials.menu.study-case');
});

Route::get('why-us', function() {
    return view('layouts.partials.menu.why-us');
});



Route::get('blog-coba', function () {
    return view('layouts.partials.menu.blog-coba');
});

Route::get('why-us-details1-', function() {
    return view('layouts.partials.menu.why-us-details1-');
});

//sub menu blog
Route::get('blog-press', function () {
    return view('layouts.partials.menu.submenu.blog-press');
});

Route::get('blog-lowongan-kerja', function () {
    return view('layouts.partials.menu.submenu.blog-lowongan-kerja');
});

Route::get('blog-single', function () {
    return view('layouts.partials.menu.submenu.blog_single');
});

Route::get('free-download', function () {
    return view('layouts.partials.menu.free-download');
});



Route::get('coba-dropdown', function () {
    return view('layouts.partials.menu.coba-dropdown');
});

// Route::get('blog-event', function () {
//     return view('layouts.partials.menu.submenu.blog-event');
// });

Route::controller(FullCalenderController::class)->group( function() {
    Route::get('blog-event', 'index');
    Route::post('fullcalenderAjax', 'ajax')->middleware('auth');
});

Auth::routes();

// Route::get('login', [HomeController::class, 'login'])->name('login');
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


// Route::get('/carousel-caption', function () {
//     return view('admin.partialsAdmin.crud-indexHome.index');
// });

// Route::controller(CarouselCaptionController::class)->group(function() {
//     Route::get('/carousel-caption', 'index')->name('carousel-caption');
//     Route::post('/carousel-caption/store', 'store')->name('carousel-caption.store');
//     Route::get('/carousel-caption/edit/{id}', 'edit')->name('carousel-caption.edit');
//     Route::post('/carousel-caption/update/{id}', 'update')->name('carousel-caption.update');
//     Route::post('/carousel-caption/destroy/{id}', 'destroy')->name('carousel-caption.destroy');
// });

Route::resource('carousel-caption', CarouselCaptionController::class);
