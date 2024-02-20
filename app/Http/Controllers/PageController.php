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
        return view('landings.tulum-ultimate');
    }

    function ChichenTour()
    {
        return view('landings.chichen-experience');
    }

    function Traslados()
    {
        return view('landings.traslados');
    }

    function Aventura()
    {
        return view('landings.aventura');
    }

    function BarcosAgua()
    {
        return view('landings.barcos-acuaticos');
    }

    function Combos()
    {
        return view('landings.combos');
    }

    function TurismoCultura()
    {
        return view('landings.turismo-cultura');
    }

    function ExperienciasPrivadas()
    {
        return view('landings.experiencias-privadas');
    }

    function ComidaBebida()
    {
        return view('landings.comida-bebidas');
    }

    function FiestaVidaNocturna()
    {
        return view('landings.fiesta-vida-nocturna');
    }

    function ParqueTematico()
    {
        return view('landings.parques-tematicos');
    }

    function Gracias()
    {
        return view('sections.gracias');
    }
}
