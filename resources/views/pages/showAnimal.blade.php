@extends('layouts.index')

@section('content')
    <div>
        {{$animal->genre}}
        {{$animal->age}}
    </div>
@endsection