@extends('layouts.site')
@section('titulo','Editar Bebida')
@section('conteudo')
<div class="container">
        <div class="form-img">
            <img src="/img/editar-bg.jpg" alt="" srcset="">
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
@endsection