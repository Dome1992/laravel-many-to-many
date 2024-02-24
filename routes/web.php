<?php

use Illuminate\Support\Facades\Route;

//IMPORTIAMO I CONTROLLER
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\TypeController;

//IMPORTIAMO I MODEL
// use App\Models\Project;

Route::get('/', function () {

    return view('pages.index');
});

Route::get('/projects' , [ProjectController :: class, 'index'])
    -> name('project.index');

Route::get('/types' , [TypeController :: class, 'index'])
    -> name('type.index');
