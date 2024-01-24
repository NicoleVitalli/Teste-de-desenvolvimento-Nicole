<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Bebida;

class BebidaController extends Controller
{
    // MESMA COISA NA HOME PARA MOSTRAR OS REGISTROS!!!!
    public function bebidasHome()
    {
        $registros=Bebida::all();
        return view('home', compact('registros'));
    }

    public function bebidasPesquisa(Request $request)
    {
        $search = $request->input('search');

        if($search) {
            $bebidas = Bebida::where([
                ['nome', 'like', '%'.$search.'%']
            ])->get();

        }else{
            $bebidas = Bebida::all();
        }

        return view('bebidas',['bebidas' => $bebidas, 'search' => $search]);
    }

    public function salvar(Request $req){
        $dados = $req->all();

        // tratamento de imagem
        if($req-> hasfile('imagem')){
            // pega a imagem do campo do form
            $imagem = $req->file('imagem');
            $num = rand(1111,9999);
            $dir = "img/bebidas/";
            $ex= $imagem->guessClientExtension();
            $nomeImagem= "imagem_".$num.".".$ex;
            // move a imagem para o diretório especificado
            $imagem->move($dir,$nomeImagem);
            // salva a imagem no banco de dados
            $dados['imagem']= $dir."/".$nomeImagem;
        }
        Bebida::create($dados);
        return redirect()->route('home.bebidas');
    }
}
