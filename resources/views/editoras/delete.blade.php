<h2>deseja eliminar o editora</h2>
<h2>{{$livro->titulo}}</h2>

<form method="post" action="{{route('editoras.destroy',['id'=>$editora->id_editora])}}">
	@csrf
	@method('delete')
	<input type="submit" name="enviar">





</form>