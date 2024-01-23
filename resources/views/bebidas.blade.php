@extends('layouts.site')
@section('titulo','Bebidas Cadastradas')
@section('conteudo')
<h2>Bebidas Cadastradas </h2>
<!-- 
<SE CHEGOU PELO BOTÃO DE PESQUISA, MOSTRARÁ SOMENTE A BEBIDA PESQUISADA->BOTÃO DE MOSTRAR TUDO?

SE CHEGOU PELO MENU, MOSTRARÁ TODAS -->
<div class="wrapper">
<div class="table-card">
    @foreach($registro as $registro)
            <div class="card">
                <div class="img-card">
                <img src="{{ asset($registro->imagem) }}" alt="">  
                </div>

                <div class="texto-card">
                    <H3>{{ $registro->nome }}</H3>
                    <div class="btn-card">
                        <!-- DEFINIR AS ROTAS AQUI -->
                        <a href="http://">Alterar</a>
                        <a href="http://">Excluir</a>
                    </div>
                
            </div>
  
    @endforeach


    </div>


   
</div>


@endsection