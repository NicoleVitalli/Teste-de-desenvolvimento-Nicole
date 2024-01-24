@extends('layouts.site')
@section('titulo','Página Inicial')
@section('conteudo')
<div class="bebidas-tela" style=" background-image: url('../img/bg.jpg'); background-size: cover; background-position:center center; ">

    <div class="texto-informativo">
        <h1>Starbucks&reg<br>
            Happy Hour
        </h1>
        <p>Encontraremos você em sua caixa de entrada. Ofertas de bebidas estão a caminho</p>

        <div class="bebidas-cadastradas">
            <!-- limitar futuramente só para 3 registros -->
            @foreach($registros as $registro)
                <div class="bebida">
                    <div class="img-bebida">
                        <img src="{{ asset($registro->imagem) }}">
                    </div>
                    <div class="nome-bebida">
                        <p><b>{{ $registro->nome }}</b></p>
                    </div>
                   
                </div>
            @endforeach
        </div>
    </div>
    
    
    <!-- <img src="/img/bg.jpg" alt="" srcset=""> -->
</div>
<div class="grid-info">
    <div class="grid-item">
        <div class="grid-texto">
                <h2>Quatro Bebidas, Um milhão de Razões</h2>
                <p><i>"Apenas ame a si mesmo"-Lady gaga</i></p>
                <p>Lady Gaga e a Starbucks compartilham uma missão: construir um mundo mais amável e corajoso. Por meio da Fundação Born This Way, Lady Gaga inspirou seus fãs a abraçar a bondade em suas comunidades - online e no mundo todo. Com a sua ajuda, podemos capacitar os jovens a espalhar mais gentileza.</p>
                <button>Saiba Mais</button>
        </div>
        
    </div>
    <div class="grid-item">
        <img src="/img/f2.jpg" alt="" srcset="">
    </div>
     <div class="grid-item">
        <img src="/img/f1.jpg" alt="" srcset="">
    </div>
    <div class="grid-item">
        <img src="/img/f3.jpg" alt="" srcset="">
    </div>
    <div class="grid-item">
        <div class="grid-texto">
            <h2>Apresentando Vanilla Sweet Cream Cold Brew- Doce, Cremoso, Frio, Ousado.</h2>
            <p> 
                Pouco antes de servir, nosso café Starbucks&reg Cold Brew de
                mistura lenta e personalizada é coberto com um delicado
                creme de baunilha doce feito em casa que se espalha por
                toda à xícara.
            </p>
            <button>Saiba Mais</button>
        </div>
        
    </div>
     <div class="grid-item">
        <img src="/img/f4.jpg" alt="" srcset="">
    </div>
    <div class="grid-item" style="background-image: url('../img/bg2.jpg'); background-size:cover;">
        <div class="grid-texto">
            <h2>Chegou O Novo Ultra Caramel Frappuccino!</h2>
            <p> 
                Parabéns por fazer isso!Isso exige caramelo. Muitos disso. Com creme de leite fresco. Chegou o novo Ultra Caramel Frappuccino!

            </p>
            <button>Saiba Mais</button>
        </div>
       

       
    </div>
       
    <div class="grid-item">
        <img src="/img/f5.jpg" alt="" srcset="">
    </div>
    
    
</div>
<div class="texto-copos" style="background-image: url('../img/bg3.jpg'); background-size:auto; ">
    <h2>A Bondade Começa Com Uma Xícara </h2>
    <p>Apresentando a coleção Cups of
Kindness: quatro drinks muito especiais
tão deliciosos e refrescantes quanto
lindos. Duas novas criações, Matcha
Lemonade e Violet Drink, irão se juntar à
Pink Drink e Ombré Pink Drink como
favoritos instantâneos do verão.</p>
<img src="/img/bg4.jpg" alt="" srcset="">
</div>
@endsection
