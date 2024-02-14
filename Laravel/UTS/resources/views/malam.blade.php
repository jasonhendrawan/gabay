@extends('layouts.master')

@section('content')
    
    @foreach ($food as $item)

    @if($item->id == 1)
    <h5>{{ $item->category }}</h5>
    <img src="./assets/spirit.jpg" class="img-fluid w-25 me-5">
    @endif

        
    @endforeach
@endsection