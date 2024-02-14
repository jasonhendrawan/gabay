@extends('layout.master')

@section('content')
    <div class="container" style="min-height: 61.7vh">
        <h2 style="margin-bottom: 2rem; margin-top: 6rem">ITEMS</h2>

        <div class="container">
            <div class="border border-1 border-black col mx-2 p-2">
                <h5>{{ $item->item_name }}</h5>
                <p>{{ $item->item_desc }}</p>
                <p>{{ $item->price }}</p>
                <a href="/order/{{ $item->id }}">Add to cart</a>
            </div>
        </div>
    </div>
@endsection