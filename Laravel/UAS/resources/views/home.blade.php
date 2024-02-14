@extends('layout.master')

@section('content')
    <div class="p-4" style="min-height: 75vh">
        <h2 style="margin-bottom: 2rem; margin-top: 6rem">LIST OF ITEMS</h2>

        <div class="row">
            @foreach ($items as $item)
                <div class="border border-1 border-black col mx-2 p-2">
                    <h5>{{ $item->item_name }}</h5>
                    <p>{{ $item->item_desc }}</p>
                    <p>{{ $item->price }}</p>
                    <a href="/item/{{ $item->id }}">Detail</a>
                </div>
            @endforeach
        </div>
    </div>
@endsection