<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Traits\ApiResponses;

class AuthController extends Controller
{
    use ApiResponses;

    public function login()
    { 
        return $this->ok('Hello, Login!');
        
        return response()->json([
            'message' => 'Hello, Login!'
        ], 200);
        
    }
}
