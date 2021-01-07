<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Autor;
class AutoresController extends Controller
{
   public function index(){
	//$autor=autor::all()->sortbydesc('idl');
	//$autor= Autor::paginate(4);
	$autor= Autor::all();
	return view ('autores.index', ['autores'=>$autor]);
}
public function show (Request $request){
	$idAutor=$request->id;

	//$livro = Livro::findOrFail($idLivro);

	//$livro= livro::find($idLivro);

	$autor=Autor::where('id_autor',$idAutor)->first();
	
	return view ('autores.show',['autor'=>$autor]);
}
public function create() {

	
	return view ('autores.create');
}
public function store(Request $request){
	// $novoLivro = $request ->all()

	$novoAutor=$request -> validate ([
		'nome'=>['required','min:3','max:100'],
		'nacionalidade'=>['nullable','min:3','max:20'],
		'data_nascimento'=>['nullable','date'],
		'fotografia'=>['nullable'],
		
	]);
$autor=Autor::create($novoAutor);
	return redirect()->route('autores.show',['id'=>$autor->id_autor]);



}
public function edit (Request $request){
$idAutor=$request->id;
$Autor = Autor::where('id_autor',$idAutor)->first();

return view('autores.edit',['autor'=>$autor]);
}

public function update (Request $request){
$idAutor=$request->id;
$Autor=Autor::findOrFail($idAutor);

$autalizarAutor=$request -> validate ([
		'nome'=>['required','min:3','max:100'],
		'nacionalidade'=>['nullable','min:3','max:20'],
		'data_nascimento'=>['nullable','date'],
		'fotografia'=>['nullable'],
	]);
$Autor->update($autalizarAutor);

return redirect()->route('autores.show',['id'=>$autor->id_autor]);
}



}
