@extends('layouts.site')
@section('titulo','Editar Bebida')
@section('conteudo')
<div class="mae">
<div class="container">
<div class="form-img" style="background-image: url('../img/editar-bg.jpg'); background-size: cover; background-position:center center;">
        
        </div>
        
       
        <div class="form">
            <form action="{{route('atualizar',$registro->id)}}" method="post" enctype="multipart/form-data">
                
                {{ csrf_field() }}
                <input type="hidden" name="_method" value="put">
                <div class="form-header">
                    <h2>Editar Bebida</h2>
                </div>
               @include('layouts.form')
               
        </form>
        </div>
    </div>
    </div>
@endsection