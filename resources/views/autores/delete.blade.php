<h2>deseja eliminar o autor</h2>
<h2>{{$livro->titulo}}</h2>

<form method="post" action="{{route('autores.destroy',['id'=>$autor->id_autor])}}">
	@csrf
	@method('delete')
	<input type="submit" name="enviar">





</form>