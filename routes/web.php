<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
// Website routes
// About page
Route::view('/about', 'website.about')->name('about');

// Blog
Route::view('/blog', 'website.blog-grid')->name('blog.grid');
Route::view('/blog/{post}', 'website.blog-single-post')->name('blog.single');

// Careers
Route::view('/careers', 'website.careers')->name('careers');

// Case studies
Route::view('/case-studies', 'website.case-studies')->name('case-studies');
Route::view('/case-studies/{study}', 'website.case-studies-single')->name('case-studies.single');

// Clearing
Route::view('/clearing', 'website.clearing')->name('clearing');

// Contacts
Route::view('/contacts', 'website.contacts')->name('contacts');

// Delivery
Route::view('/delivery', 'website.delivery')->name('delivery');

// FAQs
Route::view('/faqs', 'website.faqs')->name('faqs');

// Locations
Route::view('/find-location', 'website.find-location')->name('find-location');
Route::view('/global-locations', 'website.global-locations')->name('global-locations');

// Gallery
Route::view('/gallery', 'website.gallery')->name('gallery');

// Home pages
Route::view('/', 'website.index')->name('index');
Route::view('/home', 'website.home')->name('home');

// Leadership
Route::view('/leadership-team', 'website.leadership-team')->name('leadership-team');

// Rates
Route::view('/rates', 'website.rates')->name('rates');

// Registration
Route::view('/registration', 'website.registration')->name('registration');

// Quote
Route::view('/request-quote', 'website.request-quote')->name('request-quote');

// Services
Route::view('/services', 'website.services')->name('services');
Route::view('/services/{service}', 'website.single-service')->name('services.single');

// Industries
Route::view('/industries/{industry}', 'website.single-industry')->name('industries.single');

// Shipment tracking
Route::view('/track-shipment', 'website.track-shipment')->name('track-shipment');

// Why choose us?
Route::view('/whyus', 'website.why-us')->name('whyus');

// Why choose us?
Route::view('/contact', 'website.contact')->name('contact');

//website posts
// Form Interactions:
// Handle inquiry form submission
Route::post('/inquiry-submit', 'App\Http\Controllers\InquiryController@store')->name('inquiry.store');

// Handle package tracking form submission
Route::post('/track-package-submit', 'PackageController@track')->name('package.track');

// Handle quote request form submission
Route::post('/request-quote-submit', 'QuoteRequestController@store')->name('quote.store');
