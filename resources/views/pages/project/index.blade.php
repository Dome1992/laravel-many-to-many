@extends('layouts.main-layout')
@section('head')

@endsection
@section('content')
    <h1>progetti</h1>
    <a href="{{ route('project.create') }}">CREATE</a>
    
    <ul>
        @foreach ($projects as $project)
        <li>
            <b>{{ $project -> name }}</b> :
            {{ $project -> description }}
            {{ $project -> type -> name}}
            <br>
            <a href="{{ route('project.edit', $project -> id) }}">EDIT ME</a>
            <b>TECHNOLOGIES:</b>
            <ul>
                @foreach ($project -> technologies as $technology)
                <li>
                    {{ $technology -> name }}
                </li>
                @endforeach
            </ul> 
        </li>
        @endforeach
        
    </ul>
    
@endsection

