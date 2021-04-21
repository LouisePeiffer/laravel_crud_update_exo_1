@extends('layouts.index')

@section('content')
    <form method="POST" action="{{route('store.animal')}}">
        @csrf
        <label for="genre">Genre</label>
        <input type="text" name="genre" placeholder="Genre">
        <br>
        <label for="Age">Age</label>
        <input type="text" name="age" placeholder="Age">
        <br>
        <button type="submit" class="btn btn-success">Ajouter</button>
    </form>
@endsection