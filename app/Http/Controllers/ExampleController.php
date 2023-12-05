<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ExampleController extends Controller
{
    public function login(Request $request)
    {
        return view('login');
    }
    public function logged(Request $request)
    {
        return $request->all();
    }
}
