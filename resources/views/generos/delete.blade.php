<h2>deseja eliminar o genero</h2>
<h2>{{$livro->titulo}}</h2>

<form method="post" action="{{route('generos.destroy',['id'=>$genero->id_genero])}}">
	@csrf
	@method('delete')
	<input type="submit" name="enviar">





</form>