<!DOCTYPE html>
<html>
<head>
	<title>Create livros</title>
</head>
<body>
<form action="{{route('livros.update',['id'=>$livro->id_livro])}}" method="post">
	@csrf
	@method ('patch')
Titulo: <input type="text" name="titulo" value="{{$livro->titulo}}"><br>
Idioma: <input type="text" name="idioma" value="{{$livro->idioma}}"><br>
Total paginas: <input type="text" name="total_paginas" value="{{$livro->total_paginas}}"><br>
Data edição: <input type="date" name="data_edicao" value="{{$livro->data_edicao}}"><br>
ISBN: <input type="text" name="isbn" value="{{$livro->isbn}}"><br>
@if($errors->has('isbn'))

Deverá indicar um ISBN correto (13carateres)
<br>
@endif
Observações:<textarea name="observacoes">{{$livro->observacoes}}</textarea><br>
Imagem capa: <input type="text" name="imagem_capa" value="{{$livro->imagem_capa}}"><br>
Genero: <input type="text" name="id_genero" value="{{$livro->id_genero}}"><br>
Autor: <input type="text" name="id_autor" value="{{$livro->id_autor}}"><br>
Sinopse: <textarea name="sinopse">{{$livro->sinopse}} </textarea><br>
<input type="submit" value="Enviar">

</form>

</body>
</html>