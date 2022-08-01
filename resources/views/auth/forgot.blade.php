@extends('layouts.main')

@section('content')

    @include('layouts.flash_message')

    <!-- main content -->
    <div class="forgot d-flex justify-content-center algin-items-center">
        <div class="container d-flex justify-content-center align-items-center">
            <div class="au-card d-flex justify-content-center align-items-center">
                <div class="au-card-body py-5 px-2">
                    <p class="au-txt-h text-start">Forgot your password?</p>
                    <p> If you have forgotten your password please enter your username here and click Send Email.
                        We will email a link to the account holder to reset your password.</p>
                    <p>Remembered your password? <a href="/login">Login</a></p>
                    <form role="form" method="post" action="/forgot" class="needs-validation" novalidate>
                        @csrf()
                        <input type="text" class="mb-3 form-control" id="username" name="username" placeholder="Username">
                        <button type="submit" name="submit" class="w-100 btn btn-warning">Send Email</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

@endsection