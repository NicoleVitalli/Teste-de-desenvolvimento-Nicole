@extends('layouts.site')
@section('titulo','Bebidas Cadastradas')
@section('conteudo')
<h2>Bebidas Cadastradas </h2>
<!-- 
<SE CHEGOU PELO BOTÃO DE PESQUISA, MOSTRARÁ SOMENTE A BEBIDA PESQUISADA->BOTÃO DE MOSTRAR TUDO?

SE CHEGOU PELO MENU, MOSTRARÁ TODAS -->
<div class="wrapper">
<div class="table-card">
    @foreach($bebidas as $bebida)
            <div class="card">
                <div class="img-card">
                <img src="{{ asset($bebida->imagem) }}" alt="">  
                </div>

                <div class="texto-card">
                    <H3>{{ $bebida->nome }}</H3>
                    <div class="btn-card">
                        <!-- DEFINIR AS ROTAS AQUI -->
                        <a href="{{route('editar', ['id' => $bebida->id])}}">Editar</a>
                        <a href="{{route('deletar', ['id' => $bebida->id])}}">Excluir</a>
                    </div>
                
            </div>
  
    @endforeach


    </div>


   
</div>


@endsection