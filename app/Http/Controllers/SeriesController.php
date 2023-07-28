<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Serie; 

class SeriesController extends Controller
{

    public function index(){

        $series = Serie::all(); 

        return view('series.index', compact('series')); 
    }

    public function create(){

        return  view('series.create'); 
    }

    public function store(Request $request){
        Serie::create($request->all());
        return to_route('/');
    }    
} 
