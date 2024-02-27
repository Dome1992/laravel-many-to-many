@extends('layouts.main-layout')
@section('head')

@endsection
@section('content')
    <h1>Create New Project</h1>
    <form method="POST">

    @csrf
    @method("PUT")

    <label for="name">Name</label>
    <input type="text" name="name" id="name" value="{{ $project -> name }}">
    <br>
    <label for="description">Description</label>
    <input type="text" name="description" id="description" value="{{ $project -> description }}">
    <br>
    <label for="type_id">Type</label>
    <select name="type_id" id="type_id">
        @foreach ($types as $type)
            <option value="{{ $type -> id }}"
                @selected($project -> type -> id === $type ->id)
            >

                {{ $type -> name }}
            </option>
        @endforeach
    </select>
    <br><br>
    @foreach ($technologies as $technology)
        <div>
            <input 
            type="checkbox"
            name="technology_id[]"
            value="{{ $technology -> id }}"
            id="{{ 'technology-' . $technology -> id }}"
            >
            <label for="{{ "technology-" . $technology -> id }}">
                {{ $technology -> name }}
            </label>
        </div>
    @endforeach
    <input type="submit" value="UPDATE" >

    </form>
    
@endsection