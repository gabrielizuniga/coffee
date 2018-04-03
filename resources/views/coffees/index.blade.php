@extends('layouts.app')

@section('content')
    <h1>Coffee Club</h1>
    <h2>Here is the selection of all our coffees</h2>

@foreach($coffees as $coffee)
        <ul>
            <li>{{ $coffee->name }}</li>
        </ul>
@endforeach

@endsection