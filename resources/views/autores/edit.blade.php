<!DOCTYPE html>
<html>
<head>
	<title>Create livros</title>
</head>
<body>
<form action="{{route('livros.update',['id'=>$livro->id_livro])}}" method="post">
	@csrf
	@method ('patch')
Nome: <input type="text" name="nome" value="{{$autor->nome}}"><br>
Nacionalidade: <input type="text" name="nacionalidade" value="{{$autor->nacionalidade}}"><br>
Data Nascimento: <input type="date" name="data_nascimento" value="{{$autor->data_nascimento}}"><br>
fotografa: <input type="text" name="fotografia" value="{{$autor->fotografia}}"><br>
<input type="submit" value="Enviar">

</form>

</body>
</html>