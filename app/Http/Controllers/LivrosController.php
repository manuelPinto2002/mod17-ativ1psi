<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Livro;

class LivrosController extends Controller
{
public function index(){
	//$livro= Livro::all()->sortbydesc('idl');
	//$livro= Livro::paginate(10);
$livro= Livro::all();
	return view ('livros.index', ['livros'=>$livro]);
}
public function show (Request $request){
	$idLivro=$request->id;

	//$livro = Livro::findOrFail($idLivro);

	//$livro= livro::find($idLivro);

	$livro=Livro::where('id_livro',$idLivro)->with(['genero','autores','editoras'])->first();

	
	return view ('livros.show',['livro'=>$livro]);


}

public function create() {

	
	return view ('livros.create');
}
public function store(Request $request){
	// $novoLivro = $request ->all()

	$novoLivro=$request -> validate ([
		'titulo'=>['required','min:3','max:100'],
		'idioma'=>['nullable','min:3','max:20'],
		'total_paginas'=>['nullable','numeric','min:1'],
		'data_edicao'=>['nullable','date'],
		'isbn'=>['required','min:13','max:13'],
		'observacoes'=>['nullable','min:3','max:255'],
		'imagem_capa'=>['nullable'],
		'id_genero'=>['nullable','numeric'],
		'id_autor'=>['nullable','numeric'],
		'sinopse'=>['nullable','min:3','max:255'],
	]);
$livro=livro::create($novoLivro);
	return redirect()->route('livros.show',['id'=>$livro->id_livro]);
}


public function edit (Request $request){
$idLivro=$request->id;
$livro = Livro::where('id_livro',$idLivro)->first();

return view('livros.edit',['livro'=>$livro]);
}

public function update (Request $request){
$idLivro=$request->id;
$livro=Livro::findOrFail($idLivro);

$autalizarLivro=$request -> validate ([
		'titulo'=>['required','min:3','max:100'],
		'idioma'=>['nullable','min:3','max:20'],
		'total_paginas'=>['nullable','numeric','min:1'],
		'data_edicao'=>['nullable','date'],
		'isbn'=>['required','min:13','max:13'],
		'observacoes'=>['nullable','min:3','max:255'],
		'imagem_capa'=>['nullable'],
		'id_genero'=>['nullable','numeric'],
		'id_autor'=>['nullable','numeric'],
		'sinopse'=>['nullable','min:3','max:255'],
	]);
$livro->update($autalizarLivro);

return redirect()->route('livros.show',['id'=>$livro->id_livro]);
}

}