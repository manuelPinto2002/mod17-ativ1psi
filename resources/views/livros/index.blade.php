
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="fa/css/all.css">
	<script type="text/javascript" src="fa/js/all.js"></script>
	<script src="js/jquery-3.5.1.min.js" type="text/javascript"></script>
	<script src="js/bootstrap.min.js" type="text/javascript"></script>

	@if(auth()->check())
Id utilizador: {{Auth::user()->id}}<br>
Email: {{Auth::user()->email}}<br>
Nome: {{Auth::user()->name}}<br>

	<br>

<a href="{{route('logout')}} " 
onclick="event.preventDefault(); 
document.getElementById('logout-form').submit();">
	Logout
</a>
<form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
     @csrf
</form>
@endif
<br>
<br>
<br>


@foreach($livros as $livro)
<li>
	<a href="{{route('livros.show',['id'=>$livro->id_livro])}}">
		{{$livro->titulo}}
	</a>

</li>
@endforeach
<br>
<br>
<a href="{{route('livros.create')}}">criar</a>