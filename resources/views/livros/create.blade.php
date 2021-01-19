<!DOCTYPE html>
<html>
<head>
	<title>Create livros</title>
</head>
<body>
<form action="{{route('livros.store')}}" method="post">
	@csrf

Titulo: <input type="text" name="titulo"><br>
Idioma: <input type="text" name="idioma"><br>
Total paginas: <input type="text" name="total_paginas"><br>
Data edição: <input type="date" name="data_edicao"><br>
ISBN: <input type="text" name="isbn" value="{{old('isbn')}}"><br>
@if($errors->has('isbn'))

Deverá indicar um ISBN correto (13carateres)
<br>
@endif
Observações:<textarea name="observacoes"></textarea><br>
Imagem capa: <input type="text" name="imagem_capa"><br>
Genero: <select name="id_genero">
	@foreach($generos as $genero)
	<option value="{{$genero->id_genero}}">{{$genero->designacao}}</option>
	@endforeach
</select><br>
Autor: <select name="id_autor[]" multiple="multiple">
	@foreach($autores as $autor)
	<option value="{{$autor->id_autor}}">{{$autor->nome}}</option>
	@endforeach
</select><br>
Editora: <select name="id_editora[]" multiple="multiple">
	@foreach($editoras as $editora)
	<option value="{{$editora->id_editora}}">{{$editora->nome}}</option>
	@endforeach
</select><br>
Sinopse: <textarea name="sinopse">{{old('sinopse')}} </textarea><br>


<br>


<input type="submit" value="Enviar">
</form>

</body>
</html>