<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    function Contacto()
    {
        return view('contacto');
    }

    function Somos()
    {
        return view('somos');
    }

    function Tours()
    {
        return view('tours');
    }

    function TulumTour()
    {
        return view('tulum-ultimate');
    }
}
