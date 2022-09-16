<?php

namespace App\Http\Controllers;

class HomeController extends Controller
{
    
    function home()
    {
        return view('FE.index');
    }
}
