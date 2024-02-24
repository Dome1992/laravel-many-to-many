<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

//IMPORTIAMO IL MODEL 
use App\Models\Type;

class TypeController extends Controller
{
    public function index() {

        $types = Type :: all();

        return view('pages.type.index' , compact ('types'));
    }
}
