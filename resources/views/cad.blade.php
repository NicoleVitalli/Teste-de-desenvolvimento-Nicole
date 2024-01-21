@extends('layouts.site')
@section('titulo','Cadastro de Bebidas')
@section('conteudo')

    <div class="container">
        <div class="form-img">
            <img src="/img/cad-img.png" alt="" srcset="">
        </div>
        
       
        <div class="form">
            <form action="" method="post">
                <div class="form-header">
                    <h2>Cadastro de Bebidas</h2>
                </div>
               <div class="input-box">
                    <label for="nome">Nome da Bebida:</label>
                    <input type="text" placeholder="Digite o nome" id="nome" name="nome">
               </div>
               
               <div class="input-box" id="btn-img">
                    <label for="btn-img">Imagem:</label>
                    <input type="file" id="img" name="img">
               </div>
               <div class="btn-enviar">
                    <button type="submit">Enviar</button>
               </div>
               
        </form>
        </div>
    </div>

@endsection