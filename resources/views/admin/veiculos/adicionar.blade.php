@extends('layout.site') 
<!--aponta para o template site no diretório layout dispensando o uso das tags php a cada view(basta editar a seção) --> 

@section('titulo','Veiculos')

@section('conteudo')
    <div class="container">
    <h3 class="center">Adicionar Veículo</h3>
    <div class="row">
        <form class="" action="{{ route('admin.veiculos.salvar') }}" method="post" enctype="multipart/form-data">

            {{ csrf_field() }} <!-- Token de validação (segurança) próprio do Laravel-->

            @include('admin.veiculos._form')

            <button class="btn deep-orange">Salvar</button>

        </form>
    </div>

    </div>
    
 
@endsection