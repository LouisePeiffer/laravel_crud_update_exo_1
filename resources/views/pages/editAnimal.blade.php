@extends('layouts.index')

@section('content')
    <h3>Edit un animal :</h3>
    <form action="{{route('update.animal', $animal->id)}}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="genre">Genre de l'animal</label>
            <input type="text" value="{{$animal->genre}}" class="form-control" id="genre" name="genre" placeholder="Genre">
        </div>
        <div class="form-group">
            <label for="age">Age de l'animal</label>
            <input type="text" value="{{$animal->age}}" class="form-control" id="age" name="age" placeholder="Age">
        </div>
        <button class="btn btn-primary" type="submit">Modifier</button>
    </form>
@endsection