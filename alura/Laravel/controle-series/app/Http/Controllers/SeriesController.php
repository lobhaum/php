<?php

namespace App\Http\Controllers;

class SeriesController extends Controller
{
    public function listarSeries()
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
        echo $html;
    }
}
