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
        $html = '<ul>';
        foreach ($series as $serie) {
            $html .= "<li>{$serie}</li>";
        }
        $html .= '</ul>';

        return $html;
    }
}
