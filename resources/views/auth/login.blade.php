@extends('layouts.main')

@section('content')

    @include('layouts.flash_message')

    <!-- main content -->
    <div class="register d-flex justify-content-center algin-items-center">
        <div class="container d-flex justify-content-center align-items-center">
            <div class="au-card d-flex justify-content-center align-items-center">
                <div class="au-card-body py-5 px-2">
                    <p class="au-txt-h text-start">Login</p>
                    <p>Forgotten your password? <a href="/forgot">Reset password</a></p>
                    <form role="form" method="post" action="/login" class="needs-validation" novalidate>
                        @csrf()
                        <input type="text" class="mb-3 form-control" id="username" name="username" placeholder="Username">
                        <input type="password" class="mb-3 form-control" id="password" name="password" placeholder="Password">
                        <button type="submit" name="register" class="w-100 btn btn-warning">Login</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

@endsection