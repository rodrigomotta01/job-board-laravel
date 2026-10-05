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
    $jobs = Job::with('employer')->latest()->paginate(10); // eager loading using the relationship name 
    return view('jobs.index', [                // fixes N+1 problem
        'jobs' => $jobs
    ]);
});

Route::get("/jobs/create", function () {
    return view('jobs.create');
});


//Get
Route::get('/jobs/{id}', function ($id) {
    $job = Job::find($id);
    
    return view('jobs.show', ['job' => $job]);
});

//Edit
Route::get('/jobs/{id}/edit', function ($id) {
    $job = Job::find($id);
    
    return view('jobs.edit', ['job' => $job]);
});

//Update
Route::patch('/jobs/{id}/', function ($id) {
    request()->validate([
        'title' => ['required', 'min:3'],
        'salary' => 'required'
    ]);

    $job = Job::findOrFail($id);

    $job->update([
        'title' => request('title'),
        'salary' => request('salary'),
    ]);


    return redirect('/jobs/'. $job->id);
});

//Delete
Route::delete('/jobs/{id}/', function ($id) {
    $job = Job::findOrFail($id);
    $job->delete();

    return redirect('/jobs');
});

Route::post('/jobs', function () {
    request()->validate([
        'title' => ['required', 'min:3'],
        'salary' => 'required'
    ]);

    Job::create([
            'title' => request('title'),
            'salary' => request('salary'),
            'employer_id' => 1
        ]);

    return redirect('/jobs');
});