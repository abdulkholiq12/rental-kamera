<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    function login(Request $request)
    {
      print_r($this->input());
    }
    public function __construct()
    {
        $this->middleware('auth');
    }
}
