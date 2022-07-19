@extends('layouts.master')

@section('content')

    @include('layouts.flash_message')

    <!-- main content -->

    <div class="main d-flex justify-content-center algin-items-center">
        <div class="container d-flex justify-content-center align-items-center">
            <div class="m-card d-flex justify-content-center align-items-center">
                <div class="m-card-body py-5 px-2">
                    <h2 class="text-white">Welcome to the travel tracker.</h2>
                    <p class="text-white">Please select from the following options:</p>
                    <div class="m-menu mb-4">
                        <div class="title d-flex align-items-center text-center text-white"><h4>
                                <a href="/classes">Setup classes</a></h4>
                        </div>
                        <div class="goto d-flex justify-content-center align-items-center text-center">
                            <i class="bi bi-arrow-right-short"></i>
                        </div>
                    </div>
                    <div class="m-menu mb-4">
                        <div class="title d-flex align-items-center text-center text-white">
                            <h4><a href="/baseline">Setup baseline data</a></h4>
                        </div>
                        <div class="goto d-flex justify-content-center align-items-center text-center">
                            <i class="bi bi-arrow-right-short"></i>
                        </div>
                    </div>
                    <div class="m-menu mb-4">
                        <div class="title d-flex align-items-center text-center text-white">
                            <h4><a href="/details">Setup school</a></h4>
                        </div>
                        <div class="goto d-flex justify-content-center align-items-center text-center">
                            <i class="bi bi-arrow-right-short"></i>
                        </div>
                    </div>
                    <div class="m-menu mb-4">
                        <div class="title d-flex align-items-center text-center text-white">
                            <h4><a href="/holidays">Setup holidays</a></h4>
                        </div>
                        <div class="goto d-flex justify-content-center align-items-center text-center">
                            <i class="bi bi-arrow-right-short"></i>
                        </div>
                    </div>
                    <div class="m-menu mb-4">
                        <div class="title d-flex align-items-center text-center text-white">
                            <h4><a href="/logout">Log out</a></h4>
                        </div>
                        <div class="goto d-flex justify-content-center align-items-center text-center">
                            <i class="bi bi-arrow-right-short"></i></div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
