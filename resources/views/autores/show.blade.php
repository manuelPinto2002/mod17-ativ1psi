ID:{{$autor->id_autor}}<br>
Nome:{{$autor->nome}}<br>
nacionalidade:{{$autor->nacionalidade}}
@foreach ($autor->livro as $livro)
<h3>{{$livro->titulo}}</h3>
@endforeach

<br>
<a href="{{route('autores.edit',['id'=>$autor->id_autor])}}">Editar</a>