<div class="input-box">
        <label for="nome">Nome da Bebida:</label>
        <input type="text" placeholder="Digite o nome" id="nome" name="nome" value="{{isset($registro->nome) ? $registro->nome : ''}}">
</div>
               
<div class="input-box" id="btn-img">
    <label for="btn-img">Imagem:</label>
    <input type="file" id="imagem" name="imagem">
</div>
<div class="btn-enviar">
    <button type="submit">Enviar</button>
</div>
