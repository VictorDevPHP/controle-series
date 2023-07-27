<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SeriesController extends Controller
{
    public $series; 

    public function index(Request $request){
        $series = [
            'Demolidor',
            'Senhor dos aneis',
            'A casa do dragão',
            'Game of thrones',
            'Teu pai tem gonorreia'
        ];
        return view('series.index', compact('series'));
    }
    public function create(){
        return  view('series.create'); 
    }
}
