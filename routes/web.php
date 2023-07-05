<?php

use App\Http\Controllers\AboutPageController;
use App\Http\Controllers\ContactPageController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\MainPageController;
use App\Http\Controllers\ServicePageController;
use App\Http\Controllers\websiteController;
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

Route::controller(websiteController::class)->group(function () {
    Route::get('/', 'index')->name('home');
    Route::get('/about', 'about')->name('about');
    Route::get('/services', 'services')->name('services');
    Route::get('/blog', 'blog')->name('blog');
    Route::get('/blog/{id}', 'post')->name('post');
    Route::get('/contact', 'contact')->name('contact');
    Route::get('/policy', 'policy')->name('policy');
    Route::get('/privicy', 'privicy')->name('privicy');
});



Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {

    Route::controller(DashboardController::class)->group(function () {
        Route::get('/dashboard', 'index')->name('dashboard');
        Route::post('/dashboard', 'storeHeader')->name('dashboard.storeHeader');
    });

    Route::controller(MainPageController::class)->group(function () {
        Route::get('/main', 'index')->name('main.show');
        Route::post('/main', 'storeHeader')->name('main.storeHeader');
        Route::post('/main/services', 'storeServices')->name('main.storeServices');
        Route::post('/main/mini', 'storeMini')->name('main.storeMini');
        Route::post('/main/faq', 'storefaqs')->name('main.storefaqs');
    });

    Route::controller(AboutPageController::class)->group(function () {
        Route::get('/aboutPage', 'index')->name('about.show');
        Route::post('/main/header', 'storeHeader')->name('about.storeHeader');
        Route::post('/main/about', 'storeAbout')->name('about.storeAbout');
        Route::post('/main/catelog', 'storeCatelog')->name('about.storeCatelog');
    });

    Route::controller(ServicePageController::class)->group(function () {
        Route::get('/servicesPage', 'index')->name('services.show');
        Route::post('/servicesPage', 'storeHeader')->name('services.storeHeader');
        Route::post('/servicesPage/update', 'update')->name('services.update');
    });

    Route::controller(ContactPageController::class)->group(function () {
        Route::get('/contactPage', 'index')->name('contact.show');
        Route::post('/contactPage', 'storeHeader')->name('contact.storeHeader');
        Route::post('/contactPage/map', 'storeMap')->name('contact.storeMap');
    });
});
