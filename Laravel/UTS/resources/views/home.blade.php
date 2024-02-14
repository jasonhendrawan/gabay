@extends('layouts.master')

@section('content')
    <h1>RESEP TERBARU</h1>

    @foreach ($food as $item)
        @if ($item->id == 1)

            <div>  
            </div>
            <div class="d-flex bg-secondary p-2 justify-content-between text-white align-items-end">

                
                <div class="d-flex flex-column mb-5">
                    <h1>{{ $item->title }}</h1>
                    <h5>{{ $item->created_at }} | By: {{ $item->author }}</h5>

                    <div class="d-flex">
                        <a href="MENUSARAPAN">
                        <p  class="p-3 bg-white rounded-lg text-primary font-weight-bold">{{ $item->category }}</p>
                        </a>
                    </div>
                </div>



                <div>
                    <a href="/{{ $item->category }}/{{ $item->id }}" class="btn btn-primary active" role="button" data-bs-toggle="button" aria-pressed="true">Active toggle link</a>
                </div>
            </div>
        @else


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

        @endif
    @endforeach
@endsection