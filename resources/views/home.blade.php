@extends('layout.site') 
<!--aponta para o template site no diretório layout dispensando o uso das tags php a cada view(basta editar a seção) --> 

@section('titulo','Veículos')

@section('conteudo')
    <div class="container">
    <h3 class="center">Lista de Veículos</h3>
    <div class="row">
    <!--Lista os cursos do banco na variável curso-->
        @foreach($veiculos as $veiculo) 
            <div class="col s12 m4"> 
            <div class="card">
                <div class="card-image">
                <img src="{{asset($veiculo->imagem)}}"> 
                </div>
                <div class="card-content">
                <h4>{{$veiculo->titulo}}</h4>
                <p>{{$veiculo->descricao}}</p>
                </div>
                <div class="card-action">
                <a h'ref="#">Ver mais...</a>
                </div>
            </div>
            </div>
        @endforeach
    </div>




    </div>
    
 
@endsection