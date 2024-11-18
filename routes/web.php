<?php

use App\Http\Controllers\ContactController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {

    $data['title'] = 'Assignmnet Writing Help Online | Get Expert Help @40 Off   ';
    $data['description'] = 'We provide best assignment help services for all academic subjects. Affordable prices, timely delivery by PhD expert writers, Get 100% plagiarism-free content.';
    return view('welcome');
});

 
Route::get('/about-us', function () {

    $data['title'] = 'About Global Assignment Support | Leading Assignment Help Services';
    $data['description'] = 'Learn about Global Assignment Support, your trusted partner for top assignments, homework, research papers, essay and dissertation help services online.';
    return view('about');
});

Route::get('/contact-us', function () {
    $data['title'] = '';
    $data['description'] = '';
    return view('contact');
});

Route::get('/order-now', function(){
    $data['title'] = '';
    $data['description'] = '';
    return view('order-now');
});

Route::get('/global', function(){
    $data['title'] = '';
    $data['description'] = '';
    return view('global');
});
 

Route::get('/services', function () {
    $data['title'] = '';
    $data['description'] = '';
    return view('services');
});

Route::get('/assignment-writing-help-services', function () {
    $data['title'] = 'Online Assignment Writing Services | Assignmnet Help @40 Off   ';
    $data['description'] = 'Looking for assignment writing help? Get expert help in over 200+ subjects. Affordable prices, 100% plagiarism-free, & 24/7 support @ Global Assignment Support';
    return view('assignment');
});

Route::get('/homework-writing-help', function () {
    $data['title'] = 'Homework Help - Best Homework Help Online by Experts @40 Off';
    $data['description'] = 'Need homework help? Get fast, affordable assistance from expert tutors in various subjects. 24/7 support with accurate, plagiarism-free solutions @ ';
    return view('homework');
});


Route::get('/dissertation-writing-help-services', function () {
    $data['title'] = 'Dissertation Help | Write My Dissertation For Me @40 Discount';
    $data['description'] = 'Need homework help? Get fast, cheap online help for college homework from our team of expert tutors in all subjects. 24/7 support and 100 % plagiarism-free work.';
    return view('dissertation');
});
Route::get('/term-and-condition', function () {
    return view('term');
});
Route::get('/privacy-policy', function () {
    return view('privacy');
});


Route::post('/contact', [ContactController::class, 'store'])->name('contact.store');
Route::get('/data-of-contact-form-for-leads-and-order-generation', [ContactController::class, 'show'])->name('contact.show');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
