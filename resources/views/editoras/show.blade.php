ID:{{$editora->id_editora}}<br>
Nome:{{$editora->nome}}<br>
Morada:{{$editora->morada}}
<br>
<a href="{{route('editoras.edit',['id'=>$editora->id_editora])}}">Editar</a>

<a href="{{route('editoras.delete',['id'=>$editora->id_editora])}}">Eliminar</a>
@if(session()->has('mensagem'))
<div class="alert alert-danger" role="alert">
{{session('mensagem')}}
</div>
@endif