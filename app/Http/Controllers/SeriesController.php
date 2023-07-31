<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Serie; 

class SeriesController extends Controller
{

    public function index(Request $request){

        $series = Serie::all(); 

        $mensagemSucesso = $request->session()->get('mensagem.sucesso');

        return view('series.index', compact('series'))
        ->with('mensagemSucesso', $mensagemSucesso); 
    }

    public function create(Request $request){
        // Serie::create($request->all());
        // $request->session()->flash('mensagem.sucesso', 'Serie Adicionada com sucesso'); 
        return  view('series.create'); 
    }

    public function store(Request $request){
        Serie::create($request->all());
        return to_route('index');
    }    

    public function destroy(Request $request){
        Serie::destroy($request->serie); 
        $request->session()->flash('mensagem.sucesso', 'Serie exlcuida com sucesso'); 
        return to_route('index');
    }
} 
