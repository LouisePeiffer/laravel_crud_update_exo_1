@extends('layouts.index')

@section('content')
    <h2>Bonjour, j'aime bien les animaux hihi</h2>
    <a href="{{route('create.animal')}}">Ajouter un animal</a>
@endsection