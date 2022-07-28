@extends('layouts.master')

@section('content')

    @include('layouts.flash_message')

    <!-- main content -->
    <nav class="navbar navbar-expand-md cnav-bar navbar-dark fixed-top">
        <div class="container nav-bcolor">
            <a class="navbar-brand" href="#"><h3>Logo</h3></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavbar">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="collapsibleNavbar">
                <ul class="navbar-nav me-auto">
                    <li class="nav-item">
                        <a class="nav-link nav-color" href="/classes">Classes</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link nav-color" href="/baseline">Baseline</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link nav-color" href="/details">School</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link nav-color" href="/holidays">Holidays</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link nav-color" href="/report">Report</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link nav-color" href="/record">Record</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link nav-color" href="/how">How</a>
                    </li>
                </ul>
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link nav-color" href="/logout">Log out</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
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
