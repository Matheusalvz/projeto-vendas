<?php

namespace App\Http\Controllers\Site;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Veiculo;

class HomeController extends Controller
{
    public function index(){
        $veiculos = Veiculo::all(); //Acessa o conteudo da tabela veiculos no BD
        return view('home', compact('veiculos')); //Diretorio da tela index, compact exibe o conteudo
    }
}
