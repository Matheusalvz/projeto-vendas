<?php

namespace App\Http\Controllers\Site;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;//SIstema que vai trabalhar para fazer a autenticação do usuário

class LoginController extends Controller
{
    public function index(){
        return view('login.index');
        
    }

    public function entrar(Request $req){

        $dados = $req->all();
        if (Auth::attempt(['email'=>$dados['email'],'password'=>$dados['senha']])) { //Relacionado ao Use Auth, faz a verificação da informações de login
            return redirect()->route('admin.veiculos');
        }

        return redirect()->route('login.index');
    }
    
    public function sair(){
        Auth::logout();
        return redirect()->route('site.home');
    }
}
