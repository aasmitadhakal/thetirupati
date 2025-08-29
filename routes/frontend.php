<?php

use App\Http\Controllers\FrontendController;
use App\Http\Controllers\S3Controller;
use Illuminate\Support\Facades\Route;

Route::name('frontend.')->group(
    function () {
        Route::get('/', [FrontendController::class, 'home'])->name('home');
        Route::get('/about-us', [FrontendController::class, 'about'])->name('about');
        Route::get('/services', [FrontendController::class, 'service'])->name('service');
        Route::get('/study-abroad', [FrontendController::class, 'abroadstudies'])->name('abroad');
        Route::get('/study-abroad/{slug}', [FrontendController::class, 'abroadstudiesingle'])->name('abroadsingle');
        Route::get('/test-preparation', [FrontendController::class, 'course'])->name('course');
        Route::get('/test-preparation/{slug}', [FrontendController::class, 'coursesingle'])->name('coursesingle');
        Route::get('/blogs', [FrontendController::class, 'blog'])->name('blog');
        Route::get('/blogs/{slug}', [FrontendController::class, 'blogsingle'])->name('blogsingle');
        Route::get('/contact-us', [FrontendController::class, 'contact'])->name('contact');
        Route::get('/student-registers', [FrontendController::class, 'stregister'])->name('register');
        Route::post('/student-registers', [FrontendController::class, 'registerstudent'])->name('register.submit');

        Route::get('/our-team', [FrontendController::class, 'team'])->name('team');
        Route::get('/visa-granted', [FrontendController::class, 'visagrantes'])->name('visagrantes');
        Route::get('/message-from-founder', [FrontendController::class, 'messagefromfounder'])->name('messagefromfounder');
        Route::post('/contact-us', [FrontendController::class, 'contact_submite'])->name('contact.submit');
        Route::post('/', [FrontendController::class, 'contact_submite_home'])->name('contact.submit.home');
        Route::get('/pages/{slug}', [FrontendController::class, 'page'])->name('pages');


        Route::get('/upload', [S3Controller::class, 'index'])->name('upload.form');
        Route::post('/upload', [S3Controller::class, 'upload'])->name('upload');
        Route::delete('/upload/delete/{file}', [S3Controller::class, 'destroy'])->name('delete');
        Route::post('/edit/{file}', [S3Controller::class, 'update'])->name('update');
    }
);
