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
                        <a class="nav-setc nav-link nav-color" href="/baseline">Baseline</a>
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
                    <form role="form" method="post" action="/reset" class="needs-validation" novalidate>
                        @csrf()
                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <input type="number" class="form-control" placeholder="Walk/Wheel" name="walk">
                            </div>
                            <div class="col-md-6 mb-3">
                                <input type="number" class="form-control" placeholder="Cycle" name="cycle">
                            </div>
                            <div class="col-md-6 mb-3">
                                <input type="number" class="form-control" placeholder="Scooter" name="scoot">
                            </div>
                            <div class="col-md-6 mb-3">
                                <input type="number" class="form-control" placeholder="Park & stride" name="park">
                            </div>
                            <div class="col-md-6 mb-3">
                                <input type="number" class="form-control" placeholder="Driven" name="driven">
                            </div>
                            <div class="col-md-6 mb-3">
                                <input type="number" class="form-control" placeholder="Bus" name="bus">
                            </div>
                            <div class="col-md-6 mb-3">
                                <input type="number" class="form-control" placeholder="Taxi" name="taxi">
                            </div>
                            <div class="col-md-6 mb-3">
                                <input type="number" class="form-control" placeholder="Other" name="other">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <button type="submit" class="w-100 btn btn-warning">Save</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

@endsection