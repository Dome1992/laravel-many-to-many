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

// ROTTA PER IL METODO CREATE/STORE
Route::get('/projects/create' , [ProjectController :: class, 'create'])  
    -> name('project.create');
Route::post('/projects/create' , [ProjectController :: class, 'store'])  
    -> name('project.store');

// ROTTA PER IL METODO EDIT/UPDATE
Route::get('/projects/{id}/edit' , [ProjectController :: class, 'edit'])  
    -> name('project.edit');
Route::post('/projects/{id}' , [ProjectController :: class, 'update'])  
    -> name('project.update');
