<!DOCTYPE html>
<html>
    <head>
        <title>@yield('titulo')</title>
        <!--Import Google Icon Font-->
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <!--Import materialize.css-->
        <!-- Compiled and minified CSS -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css"> 
        <!--Let browser know website is optimized for mobile-->
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    </head>

<body>
    <header>
        <nav>
            <div class="nav-wrapper blue accent-1">
            <a href="#!" class="brand-logo">|  Vendas Conquista</a>
            <!--<a href="#" data-activates="mobile" class="button-collapse"><i class="material-icons">menu</i></a>-->
            <ul class="right hide-on-med-and-down">
            <li><a href="/">Home</a></li>
                @if (Auth::guest()) <!-- Verifica se te um usuário logado. Caso negativo retorna true-->
                    <li> <a href="{{route('site.login')}}">Login</a></li>
                @else <!-- Se tiver usuário logado exibe a lista de veículos (Versão admin), o nome do Usuário e a opção de logout-->
                    <li> <a href="{{route('admin.veiculos')}}">Login</a></li> 
                    <li> <a href="#">{{Auth::user()->name}}</a></li> <!-- Pega o nome do usuário logado-->
                    <li> <a href="{{route('site.login.sair')}}">Sair</a></li>
                @endif 
            </ul>
            <ul class="side-nav" id="mobile">
                <li><a href="/">Home</a></li>
                    @if (Auth::guest()) <!-- Verifica se te um usuário logado. Caso negativo retorna true-->
                        <li> <a href="{{route('site.login')}}">Login</a></li>
                    @else <!-- Se tiver usuário logado exibe a lista de veículos (Versão admin), o nome do Usuário e a opção de logout-->
                        <li> <a href="{{route('admin.veiculos')}}">Login</a></li> 
                        <li> <a href="#">{{Auth::user()->name}}</a></li> <!-- Pega o nome do usuário logado-->
                        <li> <a href="{{route('site.login.sair')}}">Sair</a></li>
                    @endif 
            </ul>
            </div>




    </nav>
</header>


