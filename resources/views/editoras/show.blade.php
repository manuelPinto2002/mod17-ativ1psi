	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="fa/css/all.css">
	<script type="text/javascript" src="fa/js/all.js"></script>
	<script src="js/jquery-3.5.1.min.js" type="text/javascript"></script>
	<script src="js/bootstrap.min.js" type="text/javascript"></script>

ID:{{$editora->id_editora}}<br>
Nome:{{$editora->nome}}<br>
Morada:{{$editora->morada}}
<br>
@if(auth()->check())
<a href="{{route('editoras.edit',['id'=>$editora->id_editora])}}">Editar</a>
<a href="{{route('editoras.delete',['id'=>$editora->id_editora])}}">Eliminar</a>
@endif
@if(session()->has('mensagem'))
<div class="alert alert-danger" role="alert">
{{session('mensagem')}}
</div>
@endif