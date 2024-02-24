@extends('layouts.main-layout')
@section('head')

@endsection
@section('content')
    <h1>progetti</h1>
    
    <ul>
        @foreach ($projects as $project)
        <li>
            <b>{{ $project -> name }}</b> :
            {{ $project -> type -> name}}
           
        </li>
        @endforeach
        
    </ul>
    
@endsection
