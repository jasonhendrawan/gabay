@extends('layouts.master')

@section('content')
    


    @foreach ($food as $item)
    <div class="d-flex pt-5 ">

        <img src="./assets/spirit.jpg" class="img-fluid w-25 me-5">


        <div>
            <h1>{{ $item->title }}</h1>
            <h5>{{ $item->created_at }} | By: {{ $item->author }}</h5>
            <h5>{{ $item->category }}</h5>
            <h5>{{ $item->short_desc }}</h5>

            <a href="/{{ $item->category }}/{{ $item->id }}" class="btn btn-primary active" role="button" data-bs-toggle="button" aria-pressed="true">Baca Selengkapnya</a>
        </div>
    </div>
    @endforeach

@endsection