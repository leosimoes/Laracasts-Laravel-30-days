<?php

use Illuminate\Support\Facades\Route;
use App\Models\JobListing;

Route::get('/', function () {
    return view('home');
});

Route::get('/about', function (){
   return view('about');
});

Route::get('/contact', function (){
   return view('contact');
});

Route::get('/jobs', function () {
    JobListing::create([
        'title' => 'Acme Director',
        'salary' => '1000000',
    ]);
    $jobs = JobListing::all();
    return dd($jobs);
});
