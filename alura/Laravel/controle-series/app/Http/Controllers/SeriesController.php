<?php

namespace App\Http\Controllers;

use App\Serie;
use Illuminate\Http\Request;

class SeriesController extends Controller
{
    public function index(Request $request)
    {
        $series = Serie::all();
        /* $series = [
            'Grey\'s Anatomy',
            'Lost',
            'Agents of SHIELD',
            'Brooklyn Nine Nine',
            'Friends',
            'How I met your mother',
            'Big Bang Theory',
            'The Simpsons',
        ]; */

        return view('series.index', compact('series'));
    }

    public function create()
    {
        return view('series.create');
    }

    public function store(Request $request)
    {
        $nome = $request->nome;
        $serie = Serie::create($request->all());
        /* $serie = new Serie();
        $serie->nome = $nome;
         var_dump($serie->save());*/
        echo "Série com id ({$serie->id}) criada: ({$serie->nome})";
    }
}
