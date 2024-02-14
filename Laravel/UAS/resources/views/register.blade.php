@extends('layout.master')

@section('content')
    <div class="d-flex flex-column justify-content-center align-items-center" style="padding: 4rem; min-height: 64.9vh">
        <h1 class="text-decoration-underline" style="margin-bottom: 3rem">Register</h1>

        <form method="POST" action="/register" class="d-flex flex-column" style="gap: 1rem" enctype="multipart/form-data">
            @csrf

            <div class="d-flex" style="gap: 5rem">
                <div class="d-flex flex-column" style="gap: 1.5rem">
                    <div class="d-flex justify-content-between">
                        <h4 style="margin-right: 10px">First Name: </h4>
                        <input type="text" name="first_name" class="border" value="{{ old('first_name') }}">

                        @error('first_name')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="d-flex justify-content-between">
                        <h4 style="margin-right: 10px">Email: </h4>
                        <input type="text" name="email" class="border" value="{{ old('email') }}">

                        @error('email')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="d-flex justify-content-between">
                        <h4 style="margin-right: 10px">Gender: </h4>
                        <div style="margin-left: -25px">
                            <input type="radio" class="form-check-input" name="gender" id="1" value="1"
                                checked>
                            <label for="Male">Male</label>
                        </div>
                        <div>
                            <input type="radio" class="form-check-input" name="gender" id="2" value="2">
                            <label for="Female">Female</label>
                        </div>

                        @error('gender')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="d-flex justify-content-between">
                        <h4 style="margin-right: 10px">Password: </h4>
                        <input type="password" name="pass" class="border" value="{{ old('pass') }}">

                        @error('pass')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                </div>

                <div class="d-flex flex-column" style="gap: 1.5rem">
                    <div class="d-flex justify-content-between">
                        <h4 style="margin-right: 10px">Last Name: </h4>
                        <input type="text" name="last_name" class="border" value="{{ old('last_name') }}">

                        @error('last_name')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="d-flex justify-content-between">
                        <h4 style="margin-right: 10px">Role: </h4>
                        <select name="role" id="role" class="d-flex" style="width: 11.6rem">
                            <option value="1">Admin</option>
                            <option value="2">User</option>
                        </select>

                        @error('role')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="d-flex justify-content-between">
                        <h4 style="margin-right: 10px">Display Picture: </h4>
                        <input type="file" id="display_picture_link" name="display_picture_link"
                            class="border file-input file-input-bordered file-input-sm rounded-none"
                            style="padding: 0; width: 11.6rem">

                        @error('display_picture_link')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="d-flex justify-content-between">
                        <h4 style="margin-right: 10px">Confirm Password: </h4>
                        <input type="password" name="confirm_pass" class="border" value="{{ old('confirm_pass') }}">

                        @error('confirm_pass')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                </div>
            </div>

            <div class="d-flex flex-column justify-content-center align-items-center" style="margin-top: 3rem">
                <button type="submit" class="bg-warning border-0 p-3" style="width: 10rem">Submit</button>
                <a href="/login">Already have an account? click here to login</a>
            </div>
        </form>
    </div>
@endsection
