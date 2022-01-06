<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Veiculo;

class VeiculoController extends Controller
{
    public function index(){
        $registros = Veiculo::all(); //Acessa o conteudo da tabela veiculos no BD
        return view('admin.veiculos.index', compact('registros')); //Diretorio da tela index, compact exibe o conteudo
    }

    public function adicionar(){
        return view('admin.veiculos.adicionar '); //Exibe a view de cadastro
    }

    public function salvar(Request $req){
        $dados=$req->all();

        if(isset($dados['publicado'])){ //Se tiver dados no checkbox publicado ele altera o conteúdo da varável para sim ou não
            $dados['publicado'] = 'sim';
        }else{
            $dados['publicado'] = 'nao';
        }

        if($req->hasfile('imagem')){ // Teste se tem imagem
            $imagem = $req->file('imagem');
            $num = rand(1111,9999);
            $dir = "img/cursos/";
            $ex = $imagem->guessClientExtension();
            $nomeimagem = "imagem_".$num.".".$ex;
            $imagem->move($dir,$nomeimagem);
            $dados['imagem'] = $dir."/".$nomeimagem; // Nomenclatura e diretório da imagem  
        }
        Veiculo::create($dados); // salva os dados

        return redirect()->route('admin.veiculos'); // redireciona para a home com a lista de cursos
    }

    public function editar($id){ // Recebe um id para identificar o objeto que se deseja alterar
        $registro = Veiculo::find($id); 
        return view('admin/veiculos.editar',compact('registro')); // Este método apenas exibe a tela para atualizar info sobre o veículo
    }

    public function atualizar(Request $req, $id){
        $dados=$req->all();

        if(isset($dados['publicado'])){ //Se tiver dados no checkbox publicado ele altera o conteúdo da varável para sim ou não
            $dados['publicado'] = 'sim';
        }else{
            $dados['publicado'] = 'nao';
        }

        if($req->hasfile('imagem')){  
            $imagem = $req->file('imagem');
            $num = rand(1111,9999);
            $dir = "img/cursos/";
            $ex = $imagem->guessClientExtension();
            $nomeimagem = "imagem_".$num.".".$ex;
            $imagem->move($dir,$nomeimagem);
            $dados['imagem'] = $dir."/".$nomeimagem;
        }
        Veiculo::find($id)->update($dados); // Encontra o curso pelo ID e atualiza as informações

        return redirect()->route('admin.veiculos'); // redireciona para a home com a lista de cursos
    }

    public function deletar($id){
        Veiculo::find($id)->delete(); // Localiza na lista de cursos aquele com o ID selecionado e deleta
        return redirect()->route('admin.veiculos'); // redireciona para a home com a lista de cursos
    }
}