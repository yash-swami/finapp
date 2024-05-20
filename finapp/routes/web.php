<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('pages.index');
});

Route::get('/home2', function () {
    return view('pages.homepage2');
});

Route::get('/home3', function () {
    return view('pages.homepage3');
});

Route::get('/home4', function () {
    return view('pages.homepage4');
});

Route::get('/markets', function () {
    return view('pages.markets');
});


Route::get('/About', function () {
    return view('pages.about');
});

Route::get('/Blog', function () {
    return view('pages.blog');
});

Route::get('/Careers', function () {
    return view('pages.careers');
});

Route::get('/Contact', function () {
    return view('pages.contact');
});


Route::get('/education', function () {
    return view('pages.education');
});

Route::get('/Help-Center', function () {
    return view('pages.help-center');
});

Route::get('/Customers', function () {
    return view('pages.customers');
});

Route::get('/Roadmap', function () {
    return view('pages.roadmap');
});

Route::get('/Legal-Docs', function () {
    return view('pages.legal-docs');
});

Route::get('/Log-in', function () {
    return view('pages.signin');
});

Route::get('/Sign up', function () {
    return view('pages.');
});















