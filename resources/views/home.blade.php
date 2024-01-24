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
        <div class="grid-texto btn-sabermais">
                <h2>Quatro Bebidas, Um milhão de Razões</h2>
                <p><i>"Apenas ame a si mesmo"-Lady gaga</i></p>
                <p>Lady Gaga e a Starbucks compartilham uma missão: construir um mundo mais amável e corajoso. Por meio da Fundação Born This Way, Lady Gaga inspirou seus fãs a abraçar a bondade em suas comunidades - online e no mundo todo. Com a sua ajuda, podemos capacitar os jovens a espalhar mais gentileza.</p>
                <button class="abrir" id="abrir-1" onclick="abrirModal1()">Saiba Mais</button>
        </div>
        
    </div>
    <div class="grid-item" style="background-image: url('../img/f2.jpg'); background-size: cover; background-position:center center;">
       
    </div>
     <div class="grid-item" style="background-image: url('../img/f1.jpg'); background-size: cover; background-position:center center;">
    
    </div>
    <div class="grid-item" style="background-image: url('../img/f3.jpg'); background-size: cover; background-position:center center;">
        
    </div>
    <div class="grid-item">
        <div class="grid-texto btn-sabermais">
            <h2>Apresentando Vanilla Sweet Cream Cold Brew- Doce, Cremoso, Frio, Ousado.</h2>
            <p> 
                Pouco antes de servir, nosso café Starbucks&reg Cold Brew de
                mistura lenta e personalizada é coberto com um delicado
                creme de baunilha doce feito em casa que se espalha por
                toda à xícara.
            </p>
            <button class="abrir" id="abrir-2"  onclick="abrirModal2()">Saiba Mais</button>
        </div>
        
    </div>
     <div class="grid-item" style="background-image: url('../img/f4.jpg'); background-size: cover; background-position:center center;">
    </div>
    <div class="grid-item" style="background-image: url('../img/bg2.jpg'); background-size:cover; background-position:center center;">
        <div class="grid-texto btn-sabermais">
            <h2>Chegou O Novo Ultra Caramel Frappuccino!</h2>
            <p> 
                Parabéns por fazer isso!Isso exige caramelo. Muitos disso. Com creme de leite fresco. Chegou o novo Ultra Caramel Frappuccino!

            </p>
            <button class="abrir" id="abrir-3"  onclick="abrirModal3()">Saiba Mais</button>
        </div>
       

       
    </div>
       
    <div class="grid-item" style="background-image: url('../img/f5.jpg'); background-size: cover; background-position:center bottom;">

    </div>
    
    
</div>

<div class="texto-copos form-header" style="background-image: url('../img/bg3.jpg'); background-size: 700px; background-position:top right; background-repeat:no-repeat;">
    <h2>A Bondade Começa Com Uma Xícara </h2>
    <div class="texto btn-sabermais">
        <p>Apresentando a coleção Cups of
        Kindness: quatro drinks muito especiais
        tão deliciosos e refrescantes quanto
        lindos. Duas novas criações, Matcha
        Lemonade e Violet Drink, irão se juntar à
        Pink Drink e Ombré Pink Drink como
        favoritos instantâneos do verão.</p>
        <button class="abrir" id="abrir-4"  onclick="abrirModal4()">Saiba Mais</button>
    </div>
    
  
</div>
<div class="img-final">
    <img src="/img/bg4.jpg" alt="" srcset="">
</div>

<!-- JANELAS MODAIS -->
<div class="modal mostrar" id="modal-1">
        <div class="modal-itens">
            <div class="modal-texto">
                <h2>Starbucks&reg</h2>
                <p>
                O Starbucks teve início em 1971 em Seattle como uma pequena loja de grãos de café. Hoje, é uma das maiores cadeias de cafeterias do mundo, conhecida não apenas por suas bebidas, mas pela experiência única que oferece, buscando criar momentos de conforto e descontração.
                </p>
            </div>
            <button id="fechar-1" onclick="fecharModal1()">Fechar</button>
        </div> 
</div>
<div class="modal mostrar" id="modal-2">
        <div class="modal-itens">
            <div class="modal-texto">
                <h2>Starbucks&reg</h2>
                <p>
                Além de ser uma gigante no ramo de cafeterias, o Starbucks é reconhecido por seu compromisso com a sustentabilidade e o comércio ético de café. A empresa implementa programas e iniciativas sociais, como o C.A.F.E. Practices e o Youth Leadership Council, visando não apenas a excelência em produtos, mas também contribuir positivamente para comunidades locais.
                </p>
            </div>
            <button id="fechar-2" onclick="fecharModal2()">Fechar</button>
        </div> 
</div>
<div class="modal mostrar" id="modal-3">
        <div class="modal-itens">
            <div class="modal-texto">
                <h2>Starbucks&reg</h2>
                <p>
                Os objetivos do Starbucks transcendem o comercial. Buscando inovação e inspirando 
                mudanças positivas, personalizamos a experiência do cliente com diversidade e inclusão. 
                O Starbucks se destaca não apenas como ícone cultural, mas também por seu compromisso 
                em fazer a diferença no mundo, tanto por suas práticas empresariais quanto por suas 
                iniciativas sociais.
                </p>
            </div>
            <button id="fechar-3" onclick="fecharModal3()">Fechar</button>
        </div> 
</div>
<div class="modal mostrar" id="modal-4">
        <div class="modal-itens">
            <div class="modal-texto">
                <h2>Starbucks&reg</h2>
                <p>
                O Starbucks redefine a comida de cafeteria com uma proposta culinária gourmet, incluindo sanduíches artesanais, bowls de aveia e iogurtes parfaits. A abordagem refinada faz da marca não apenas uma cafeteira, mas um destino gastronômico que cativa amantes de café e boa comida.
                </p>
            </div>
            <button id="fechar-4" onclick="fecharModal4()">Fechar</button>
        </div> 
</div>
<script>
    var modal1=document.getElementById('modal-1')
var modal2=document.getElementById('modal-2')
var modal3=document.getElementById('modal-3')
var modal4=document.getElementById('modal-4')

// FUNÇÕES DE ABRIR
function abrirModal1(){
modal1.classList.add('mostrar')
}
function abrirModal2(){
    modal2.classList.add('mostrar')
}
function abrirModal3(){
    modal3.classList.add('mostrar')
}
function abrirModal4(){
    modal4.classList.add('mostrar')
}

// FUNÇÕES DE FECHAR
function fecharModal1(){
    modal1.classList.remove('mostrar')
}
function fecharModal2(){
    modal2.classList.remove('mostrar')
}
function fecharModal3(){
    modal3.classList.remove('mostrar')
}
function fecharModal4(){
    modal4.classList.remove('mostrar')
}
</script>
@endsection
