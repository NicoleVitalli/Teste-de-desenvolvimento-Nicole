@extends('layouts.site')
@section('titulo','Bebidas Cadastradas')
@section('conteudo')
<div class="titulo-bebidas form-header">
<h2>Bebidas Cadastradas </h2>
</div>

<!-- 
<SE CHEGOU PELO BOTÃO DE PESQUISA, MOSTRARÁ SOMENTE A BEBIDA PESQUISADA->BOTÃO DE MOSTRAR TUDO?

SE CHEGOU PELO MENU, MOSTRARÁ TODAS -->
<div class="container-table">
            @foreach($bebidas as $bebida)
            <div class="card">
                <div class="img-card" style="background-image: url('{{ asset($bebida->imagem)}}'); background-size: cover; background-position:center center;">
         
                    <img src="" alt="">  
                </div>

                <div class="texto-card">
                    <H3>{{ $bebida->nome }}</H3>
                    <div class="btn-card">
                        <!-- DEFINIR AS ROTAS AQUI -->
                 
                        <a href="{{ route('editar', $bebida->id) }}">Editar</a>
               
                        <a href="{{ route('deletar', $bebida->id) }}">Excluir</a>
                    </div>
                </div>
                
            </div>
           
            @endforeach
            @if(count($bebidas) == 0 && $search)
                <p>Não foi possível encontrar resultados para '{{ $search }}'</p><a href="pesquisa"> Ver todas</a>
            @elseif(count($bebidas) == 0)
                <p>Não há bebidas cadastradas</p>
            @endif


    </div>


   



@endsection