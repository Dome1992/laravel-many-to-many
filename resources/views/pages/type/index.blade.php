@extends('layouts.main-layout')
@section('head')

@endsection
@section('content')
    <h1>Tipologia</h1>
    
    <ul>
        @foreach ($types as $type)
        <li>
            {{ $type -> name }}: <br>
            <ul>
                @foreach ($type -> projects as $project)
                <li>
                    {{ $project -> name }}
                </li>
                @endforeach
            </ul>
        </li>
        @endforeach 
    </ul>
    
@endsection
<!-- IN QUESTO ESEMPIO QUELLO CON I PALLINI BUCATI SONO I PROGETTI, QUELLI CON I PALLINI PIENI SONO I TIPI -->