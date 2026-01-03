<?php

use Illuminate\Support\Facades\Route;

// 1. HOME PAGE ROUTE (This remains your main landing page)
Route::get('/', function () {
    return view('welcome');
})->name('home');


// 2. CASE STUDIES ROUTE
Route::get('/case-studies', function () {
    return view('case-studies');
})->name('case-studies');


// 3. WEBPAGE REDESIGN ROUTE
Route::get('/webpage-redesign', function () {
    return view('webpage-redesign');
})->name('webpage-redesign');


// 4. PERSONAL PROJECTS ROUTE
Route::get('/personal-projects', function () {
    return view('personal-projects');
})->name('personal-projects');

// 5. GRAPHIC DESIGN ROUTE
Route::get('/graphic-design', function () {
    // You will need to create this Blade file later: graphic-design.blade.php
    return view('graphic-design');
})->name('graphic-design');

// 6. CONTACT US ROUTE
Route::get('/contact', function () {
    return view('contact-us');
})->name('contact');

// The first part is the URL in the browser
// The second part 'projects.bsu-creative-work' tells Laravel: "Look in views/projects/"
Route::view('/graphic-design/bsu-creative-work', 'projects.graphicdesign.bsu-creative-work')->name('bsu-project');

Route::get('/clt-brand-design', function () {
    // Adding 'projects.' tells Laravel to look inside the projects folder
    return view('projects.graphicdesign.clt-brand-design'); 
})->name('clt-design');

Route::get('/webpage-redesign/san-diego-coupons', function () {
    return view('projects.webredesign.san-diego-coupons');
})->name('san-diego-coupons');

Route::get('/case-studies/hci-bibliography', function () {
    return view('projects.casestudies.hci-bibliography');
})->name('hci-bibliography');

Route::get('/portfolio', function () {
    // We use dots to represent the folders: projects > personalprojects > portfolio
    return view('projects.personalprojects.portfolio'); 
})->name('portfolio');