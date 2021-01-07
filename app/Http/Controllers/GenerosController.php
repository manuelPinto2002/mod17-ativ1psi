<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Genero;
class GenerosController extends Controller
{
    //
           public function index(){
//$genero=genero::all()->sortbydesc('idg');
	$genero= Genero::paginate(4);

	return view ('generos.index', ['generos'=>$genero]);
}
public function show (Request $request){
	$idGenero=$request->id;

	//$livro = Livro::findOrFail($idLivro);

	//$livro= livro::find($idLivro);

	$genero=Genero::where('id_genero',$idGenero)->with('livro')->first();
	
	return view ('generos.show',['genero'=>$genero]);
}

public function create() {

	
	return view ('generos.create');
}
public function store(Request $request){
	// $novoGenero = $request ->all()

	$novoGenero=$request -> validate ([
		'designacao'=>['required','min:3','max:100'],
		'observacoes'=>['nullable','min:3','max:255'],
	]);
$genero=Genero::create($novoGenero);
	return redirect()->route('generos.show',['id'=>$genero->id_genero]);
}

}