@extends('layouts.app')

@section('content')
    <h1>Coffee Club</h1>
    <h2>Current Members</h2>

@foreach($famous_coffee_drinkers as $coffee_drinkers)
        <ul>
            <li>{{ $coffee_drinkers }}</li>
        </ul>
@endforeach

@endsection