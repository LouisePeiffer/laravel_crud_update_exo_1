@extends('layouts.index')

@section('content')
    <h3>Liste des animaux</h3>
    <div>
        @foreach ($allAnimals as $animal)
            <div>
                {{$animal->genre}}
                <a href="{{route('show.animal', $animal->id)}}" class="btn btn-warning">Show</a>
                <a href="{{route('edit.animal', $animal->id)}}" class="btn btn-success">Edit</a>
            </div>
        @endforeach
    </div>
@endsection