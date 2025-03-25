<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WebController extends Controller
{
    public function index()
    {
        return view('web.index');
    }

    public function consultancies()
    {
        return view('web.services.consultancies');
    }

    public function administration()
    {
        return view('web.services.administration');
    }

    public function sanitation()
    {
        return view('web.services.sanitation');
    }

    public function auction()
    {
        return view('web.services.auction');
    }

    public function search()
    {
        return view('web.search');
    }
}