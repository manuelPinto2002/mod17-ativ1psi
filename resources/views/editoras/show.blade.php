ID:{{$editora->id_editora}}<br>
Nome:{{$editora->nome}}<br>
Morada:{{$editora->morada}}
<br>
<a href="{{route('editoras.edit',['id'=>$editora->id_editora])}}">Editar</a>