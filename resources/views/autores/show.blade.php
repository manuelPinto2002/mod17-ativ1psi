	<head>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="fa/css/all.css">
	<script type="text/javascript" src="fa/js/all.js"></script>
	<script src="js/jquery-3.5.1.min.js" type="text/javascript"></script>
	<script src="js/bootstrap.min.js" type="text/javascript"></script>
</head>
ID:{{$Autor->id_autor}}<br>
Nome:{{$Autor->nome}}<br>
nacionalidade:{{$Autor->nacionalidade}}
@foreach ($Autor->livro as $livro)
<h3>{{$livro->titulo}}</h3>
@endforeach

<br>
@if(auth()->check())
<a href="{{route('autores.edit',['id'=>$Autor->id_autor])}}">Editar</a>
<a href="{{route('autores.delete',['id'=>$Autor->id_autor])}}">Eliminar</a>
@endif

@if(session()->has('mensagem'))
<div class="alert alert-danger" role="alert">
{{session('mensagem')}}
</div>
@endif