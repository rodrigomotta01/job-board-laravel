<?php

use Illuminate\Support\Facades\Route;
use App\Models\Job;

Route::get('/', function () {
    return view('welcome', [
        'name' => 'Rodrigo'
    ]);
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/jobs', function () {
    $jobs = Job::with('employer')->paginate(5); // eager loading using the relationship name 
    return view('jobs', [                // fixes N+1 problem
        'jobs' => $jobs
    ]);
});

Route::get('/jobs/{id}', function ($id) {
    $job = Job::find($id);
    return view('job', ['job' => $job]);
});