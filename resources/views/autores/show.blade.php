ID:{{$autor->id_autor}}<br>
Nome:{{$autor->nome}}<br>
nacionalidade:{{$autor->nacionalidade}}
@foreach ($autor->livro as $livro)
<h3>{{$livro->titulo}}</h3>
@endforeach

<br>
<a href="{{route('autores.edit',['id'=>$autor->id_autor])}}">Editar</a>

<a href="{{route('autores.delete',['id'=>$autor->id_autor])}}">Eliminar</a>
@if(session()->has('mensagem'))
<div class="alert alert-danger" role="alert">
{{session('mensagem')}}
</div>
@endif