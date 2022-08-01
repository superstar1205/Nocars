@extends('layouts.main')

@section('content')

    @include('layouts.flash_message')

    <!-- main content -->

    <h1>Welcome to No Cars</h1>

    <p>Encouraging school children to get to school without using air polluting vehicles</p>
    <p>If you have an account with us already, please <a href="/login">Login</a></p>
    <p>If you are a school and would like to join us, you can <a href="/register">register here</a>.</p>

@endsection
