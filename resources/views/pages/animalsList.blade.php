@extends('layouts.index')

@section('content')
    <h3>Liste des animaux</h3>
    <div>
        @foreach ($allAnimals as $animal)
            <div>
                {{$animal->genre}}
                <a href="{{route('show.animal', $animal->id)}}" class="btn btn-warning">Show</a>
                <a href="{{route('edit.animal', $animal->id)}}" class="btn btn-success">Edit</a>
                <form method="POST" action="{{route('destroy.animal', $animal->id)}}">
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-danger" type="submit">Delete</button>
                </form>
            </div>
        @endforeach
    </div>
@endsection