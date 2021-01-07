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
Genero: <input type="text" name="id_genero"><br>
Autor: <input type="text" name="id_autor"><br>
Sinopse: <textarea name="sinopse">{{old('sinopse')}} </textarea><br>
<input type="submit" value="Enviar">

</form>

</body>
</html>