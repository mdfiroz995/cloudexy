<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\{
    ProfileController,
    MailSettingController,
    ServicesController,
    ContactController,
    TestimonialController,
    CourseController,
    BatchController,
};

use App\Http\Controllers\StaticPageController;
use App\Http\Controllers\ServicesController as Serv;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\ReviewController;
use App\Http\Controllers\ContactController as ContactCont;
use App\Http\Controllers\CustomisationController;
use App\Http\Controllers\SearchController;


Route::get('/dashboard', function () {
    return view('front.dashboard');
})->middleware(['front'])->name('dashboard');


require __DIR__.'/front_auth.php';

// Admin routes
Route::get('/admin/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('admin.dashboard');

require __DIR__.'/auth.php';

Route::namespace('App\Http\Controllers\Admin')->name('admin.')->prefix('admin')
    ->group(function(){
        Route::resource('roles','RoleController');
        Route::resource('permissions','PermissionController');
        Route::resource('users','UserController');
        Route::resource('posts','PostController');
        Route::get('/profile',[ProfileController::class,'index'])->name('profile');
        Route::put('/profile-update',[ProfileController::class,'update'])->name('profile.update');
        Route::get('/mail',[MailSettingController::class,'index'])->name('mail.index');
        Route::put('/mail-update/{mailsetting}',[MailSettingController::class,'update'])->name('mail.update');
        Route::get('/contact', [ContactController::class, 'index'])->name('index.contact');
        Route::put('/contact/{id}', [ContactController::class, 'destroy'])->name('destroy.contact');
        Route::get('/services', [ServicesController::class, 'index'])->name('index.services');
        Route::put('/services/{id}', [ServicesController::class, 'destroy'])->name('destroy.services');

        Route::get('/testimonial',[TestimonialController::class,'index'])->name('test.index');
        Route::get('/testimonial/create',[TestimonialController::class,'create'])->name('test.create');
        Route::post('/testimonial/create',[TestimonialController::class,'store'])->name('test.store');
        Route::get('/testimonial/edit/{id}',[TestimonialController::class,'edit'])->name('test.edit');
        Route::put('/testimonial/update{test}',[TestimonialController::class,'update'])->name('test.update');
        Route::delete('/testimonial/delete{id}',[TestimonialController::class,'destroy'])->name('test.destroy');

        Route::get('courses',[CourseController::class,'index'])->name('courses.index');
        Route::get('courses/create',[CourseController::class,'create'])->name('courses.create');
        Route::post('courses/create',[CourseController::class,'store'])->name('courses.store');
        Route::get('/courses/edit/{id}',[CourseController::class,'edit'])->name('courses.edit');
        Route::put('/courses/update{course}',[CourseController::class,'update'])->name('courses.update');
        Route::delete('/courses/delete{id}',[CourseController::class,'destroy'])->name('courses.destroy');

        Route::get('batch',[BatchController::class,'index'])->name('batch.index');
        Route::get('batch/create',[BatchController::class,'create'])->name('batch.create');
        Route::post('batch/create',[BatchController::class,'store'])->name('batch.store');
        Route::get('/batch/edit/{id}',[BatchController::class,'edit'])->name('batch.edit');
        Route::put('/batch/update{course}',[BatchController::class,'update'])->name('batch.update');
        Route::delete('/batch/delete{id}',[BatchController::class,'destroy'])->name('batch.destroy');

        Route::get('batch/reg',[BatchController::class,'reg'])->name('batch.reg');


});

Route::get('admin/customisation', [CustomisationController::class, 'index'])->name('customisation.index');
Route::put('admin/customisation/{id}',[CustomisationController::class,'update'])->name('customisation.update');


//StaticPage
Route::controller(StaticPageController::class)->group(function () {
    Route::get('/', 'home')->name('home');
    Route::get('/about-us', 'aboutUs')->name('home.about');
    Route::get('/our-case-studies', 'caseStudies')->name('home.case');
});


//Services
Route::get('/services', [Serv::class, 'services'])->name('home.services');
Route::post('/services', [Serv::class, 'ServicePost'])->name('post.services');


//Blogs
Route::get('/blog', [BlogController::class, 'blog'])->name('home.blog');

//Single Blog Post
Route::get('/blog/{id}', [BlogController::class, 'show'])->name('single.post');

//for course details
Route::get('/course/{id}', [BlogController::class, 'course_detail'])->name('course.details');


//Booking
Route::get('/book-now', [BookNowController::class, 'getBookNow'])->name('get.book');

//Contact
Route::get('/contact-us', [ContactCont::class, 'contactUsGet'])->name('get.contact');
Route::post('/contact-us', [ContactCont::class, 'contactUsPost'])->name('post.contact');

//Search

Route::get('/s', [SearchController::class, 'search'])->name('search');
Route::get('/demo', [StaticPageController::class, 'demo'])->name('demo');
Route::post('review_store', [ReviewController::class, 'reviewstore'])->name('review_store');
Route::get('/review', [ReviewController::class, 'show'])->name('review');

