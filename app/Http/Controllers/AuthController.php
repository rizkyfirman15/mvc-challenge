<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function index() {
        return view('register');
    }

    public function register(Request $request) {
        $first = $request["first"];
        $last = $request["last"];
        return view('welcome', ['first' => $first, 'last' => $last ]);
    }
}
