@extends('layouts.site')
@section('titulo','Cadastro de Bebidas')
@section('conteudo')

    <div class="container">
        <div class="form-img">
            <img src="/img/cad-img.png" alt="" srcset="">
        </div>
        
       
        <div class="form">
            <form action="{{route('salvar')}}" method="post" enctype="multipart/form-data">
                {{ csrf_field() }}
                <div class="form-header">
                    <h2>Cadastro de Bebidas</h2>
                </div>
               @include('layouts.form')
               
        </form>
        </div>
    </div>

@endsection