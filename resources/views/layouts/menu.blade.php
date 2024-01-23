<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}">
    <title>@yield('titulo')</title>
</head>
<body>
    <div class="menu">
        <img src="/img/logo.png" alt="starbucks logo" srcset="" class="logo">

        <div class="busca">
            <input type="text" placeholder="Search"/>
            <img src="/img/loupe.png" alt="" srcset="">
        </div>
        
        <div class="btn-expandir">
            <img src="/img/menu.png" alt="" srcset="" id="btn-expandir">
        </div>
        
        <!-- MENU LATERAL -->
        <nav class="menu-bar expandir" id="menu-bar">
            <div class="btn-expandir">
                <img src="/img/menu.png" alt="" srcset="" id="btn-esconder">
            </div>
            <ul>
                <li class="item-menu">
                    <a href="{{route('home')}}">
                        <span>Página Inicial</span>
                    </a>
                </li>
            
                <li class="item-menu">
                    <a href="{{route('cadastro')}}">
                        <span>Cadastro de Bebidas</span>
                    </a>
                </li>

                <li class="item-menu">
                    <a href="{{route('bebidas')}}">
                        <span>Ver Bebidas</span>
                    </a>
                </li>
            </ul>
        </nav>
        
        
        
    </div>

<script>
    

    var btn_exp = document.querySelector('#btn-expandir');
    var btn_esc = document.querySelector('#btn-esconder');
    var menu_lat=document.querySelector('#menu-bar');

    btn_exp.addEventListener('click', function() {
        // O PROBLEMA É COM A NAV BAR!!!!!!!!!!!!!!!!!
        menu_lat.classList.add('expandir');
    });

    btn_esc.addEventListener('click', function() {
        menu_lat.classList.remove('expandir');
    });


</script>