@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}

<br>
<a href="{{route('livros.index')}}">Livros</a>
<br>
<a href="{{route('generos.index')}}">Generos</a>
<br>
<a href="{{route('editoras.index')}}">Editoras</a>
<br>
<a href="{{route('autores.index')}}">Autores</a>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
