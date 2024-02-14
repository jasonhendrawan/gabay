@extends('layout.master')

@section('content')
    <div class="p-4" style="min-height: 75vh">
        <h2 style="margin-bottom: 2rem; margin-top: 6rem">CARTS</h2>

        <div class="row" style="margin-bottom: 8rem">
            @foreach ($items as $item)
                <div class="border border-1 border-black col mx-2 p-2">
                    <h5>{{ $item->id }}</h5>
                    <p>User: {{ $item->account_id }}</p>
                    <p>Price: {{ $item->price }}</p>
                    <a href="/delete/{{ $item->id }}">delete</a>
                </div>
            @endforeach
        </div>

        <a href="/checkout">CHECKOUT</a>
    </div>
@endsection