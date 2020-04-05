<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SeriesController extends Controller
{
    public function index(Request $request)
    {
        $series = [
            'Grey\'s Anatomy',
            'Lost',
            'Agents of SHIELD',
            'Brooklyn Nine Nine',
            'Friends',
            'How I met your mother',
            'Big Bang Theory',
            'The Simpsons',
        ];

        return view('series.index', compact('series'));
    }

    public function create()
    {
        return view('series.create');
    }
}
