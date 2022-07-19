@extends('layouts.master')

@section('content')

    @include('layouts.flash_message')

    <!-- main content -->
    <div class="register d-flex justify-content-center algin-items-center">
        <div class="container d-flex justify-content-center align-items-center">
            <div class="au-card d-flex justify-content-center align-items-center">
                <div class="au-card-body py-5 px-2">
                    <p class="au-txt-h text-start">Complete the form below to register with us</p>
                    <p>Aleady have an account? <a href="/login">Login</a></p>
                    <form role="form" method="post" action="/register" class="needs-validation" novalidate>
                        @csrf()
                        <input type="text" class="mb-3 form-control" id="name" name="name" placeholder="School name">
                        <input type="text" class="mb-3 form-control" id="seed" name="seed" placeholder="URN/SEED">
                        <input type="text" class="mb-3 form-control" id="postcode" name="postcode" placeholder="postcode">
                        <input type="text" class="mb-3 form-control" id="email" name="email" placeholder="Contact email">
                        <input type="text" class="mb-3 form-control" id="name" name="name" placeholder="Contact name">
                        <input type="text" class="mb-3 form-control" id="phone" name="phone" placeholder="Contact phone">
                        <input type="text" class="mb-3 form-control" id="referal" name="referal" placeholder="Referal code (optional)">
                        <button type="submit" name="register" class="w-100 btn btn-warning">Register</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

@endsection