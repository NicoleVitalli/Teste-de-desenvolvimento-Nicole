@extends('layouts.site')
@section('titulo','Editar Bebida')
@section('conteudo')
<div class="container">
        <div class="form-img">
            <img src="/img/editar-bg.jpg" alt="" srcset="">
        </div>
        
       
        <div class="form">
            <form action="#" method="post" enctype="multipart/form-data">
                {{ csrf_field() }}
                <div class="form-header">
                    <h2>Editar Bebida</h2>
                </div>
               @include('layouts.form')
               
        </form>
        </div>
    </div>
@endsection