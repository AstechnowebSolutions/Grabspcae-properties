<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;

// All frontend route here

Route::get('/', function () {
    return view('frontend.index');
});
Route::get('/contact', function () {
    return view('frontend.contact');
});
Route::get('/services', function () {
    return view('frontend.services');
});
Route::get('/about', function () {
    return view('frontend.about');
});
Route::get('/blog',function(){
    return view('frontend.blog');
});
Route::get('/blog-single',function(){
    return view('frontend.blog_single');
});
Route::get('/gallery',function(){
    return view('frontend.gallery');
});
Route::get('/tour',function(){
    return view('frontend.tour');
});
Route::get('/service-single',function(){
    return view('frontend.service_single');
});
Route::get('/terms',function(){
    return view('frontend.terms');
});
Route::get('/faq',function(){
    return view('frontend.faq');
});



// Auth route 
// Admin all route 


Route::get('/dashboard', function () {
    return view('admin/index');
})->middleware(['auth', 'verified'])->name('dashboard');


Route::controller(AdminController::class)->group(function() {
 
    Route::get('/admin/logout','destroy')->name('admin.logout'); 
    Route::get('/admin/profile','profile')->name('admin.profile.show');
    Route::get('/admin/profile/edit','edit')->name('admin.profile.edit');
    Route::post('/admin/profile/store','store')->name('store.profile');


    Route::get('/change/password','changePassword')->name('change.password');
    Route::post('/update/password','updatePassword')->name('update.password');
});
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
