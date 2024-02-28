<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ApiController extends Controller
{
    
    public function getTest() {

        return response()->json ([
            'status' => 'success',
            'message' => 'This is a test message'

        ]);
        
    }
}
