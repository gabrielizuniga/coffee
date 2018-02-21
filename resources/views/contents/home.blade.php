@extends('layouts.app')

@section('content')
    <h1>Home of Coffee Club</h1>
    <h2>Featured Coffee</h2>

@foreach($coffees as $coffee)
        <ul>
            <li>{{ $coffee }}</li>
        </ul>
@endforeach

@endsection