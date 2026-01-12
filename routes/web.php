<?php

use Illuminate\Support\Facades\Route;

// 1. HOME PAGE ROUTE (This remains your main landing page)
Route::get('/', function () {
    return view('welcome');
})->name('home');


// 2. UX RESEARCH ROUTE
Route::get('/ux-research', function () {
    return view('ux-research'); // 
})->name('ux-research');

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
    return view('graphic-design');
})->name('graphic-design');

// 6. CONTACT US ROUTE
Route::get('/contact', function () {
    return view('contact-us');
})->name('contact');

// 7. BSU ROUTE
Route::get('/bsu-creative-work', function () {
	return view('projects.graphicdesign.bsu-creative-work');
})->name('bsu-project');

// 8. CLT ROUTE
Route::get('/clt-brand-design', function () {
    return view('projects.graphicdesign.clt-brand-design'); 
})->name('clt-design');

// 9. WEBPAGE REDESIGN ROUTE
Route::get('/webpage-redesign/san-diego-coupons', function () {
    return view('projects.webredesign.san-diego-coupons');
})->name('san-diego-coupons');

// 10. UX CARD 1 ROUTE
Route::get('/ux-research/hci-bibliography', function () {
    return view('projects.uxresearch.hci-bibliography');
})->name('hci-bibliography');

// 11. PORTFOLIO ROUTE
Route::get('/portfolio', function () {
    return view('projects.personalprojects.portfolio'); 
})->name('portfolio');

// 12. THANK YOU ROUTE
Route::get('/thank-you', function () {
    return view('thanks'); 
})->name('thanks');