@extends('layout.master')

@section('content')
    <div class="d-flex flex-column justify-content-center align-items-center" style="padding: 4rem; min-height: 64.9vh">
        <h1 class="text-decoration-underline" style="margin-bottom: 2rem">LOGIN</h1>

        <form method="POST" enctype="multipart/form-data" action="/login" class="d-flex flex-column" style="gap: 1rem">
            @csrf
            @method('POST')
            <div class="d-flex justify-content-between" style="gap: 1.5rem">
                <h3>Email Address:</h3>
                <input type="text" name="email" id="email" class="border" value="{{ old('email') }}">

                @error('email')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>

            <div class="d-flex justify-content-between" style="gap: 1.5rem">
                <h3>Password:</h3>
                <input type="password" name="pass" id="pass" class="border">

                @error('pass')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>

            <div class="d-flex flex-column justify-content-center align-items-center" style="gap: 1rem">
                <button type="submit" class="bg-warning p-2 border-0" style="width: 6rem">Submit</button>
                <a href="/register">Dont have an account? click here to sign up</a>
            </div>
        </form>
    </div>
@endsection