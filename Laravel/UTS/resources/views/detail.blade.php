@extends('layouts.master')

@section('content')
    
    @if($food)
        <h1>{{ $food->title }}</h1>
        <h5>By: {{ $food->author }}</h5>
        <p>{{ $food->description }}</p>
    @endif

@endsection