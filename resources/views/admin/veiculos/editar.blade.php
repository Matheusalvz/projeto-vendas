@extends('layout.site') 
<!--aponta para o template site no diretório layout dispensando o uso das tags php a cada view(basta editar a seção) --> 

@section('titulo','Veículos')

@section('conteudo')
    <div class="container">
    <h3 class="center">Editando Curso</h3>
    <div class="row">
        <form class="" action="{{ route('admin.veiculos.atualizar',$registro->id) }}" method="post" enctype="multipart/form-data">

            {{ csrf_field() }} <!-- Token de validação (segurança) próprio do Laravel-->
            <input type="hidden" name="_method" value="put"> <!-- Alterar o método-->
            @include('admin.veiculos._form') <!-- Chama o formulario de edição em html-->

            <button class="btn deep-orange">Atualizar</button>

        </form>
    </div>

    </div>
    
 
@endsection