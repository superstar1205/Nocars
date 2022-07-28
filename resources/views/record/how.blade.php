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
                        <a class="nav-setc nav-link nav-color" href="/how">How</a>
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
    <div class="main d-flex justify-content-center">
        <div class="container d-flex flex-column justify-content-around align-item-center">
            <div class="d-flex justify-content-center align-item-center py-4">
                <div class="h-top">
                    <img class="w-100" src="../icon/007.png">
                </div>
            </div>
            
            <div class="h-card py-5">
                <div class="d-flex flex-wrap justify-content-center align-items-center">
                    <div class="h-btg text-center">
                        <div class="h-btm">
                            <img class="w-100" src="../icon/walking.png">
                        </div>
                        <p class="h-txt-p">Walk/Wheel</p>
                    </div>
                    <div class="h-btg text-center">
                        <div class="h-btm">
                            <img class="w-100" src="../icon/cycling.png">
                        </div>
                        <p class="h-txt-p">Cycle</p>
                    </div>
                    <div class="h-btg text-center">
                        <div class="h-btm">
                            <img class="w-100" src="../icon/scooter.png">
                        </div>
                        <p class="h-txt-p">Scooter</p>
                    </div>
                    <div class="h-btg text-center">
                        <div class="h-btm">
                            <img class="w-100" src="../icon/park.png">
                        </div>
                        <p class="h-txt-p">Park & Stride</p>
                    </div>
                    <div class="h-btg text-center">
                        <div class="h-btm">
                            <img class="w-100" src="../icon/driving.png">
                        </div>
                        <p class="h-txt-p">Driven</p>
                    </div>
                    <div class="h-btg text-center">
                        <div class="h-btm">
                            <img class="w-100" src="../icon/bus.png">
                        </div>
                        <p class="h-txt-p">Bus</p>
                    </div>
                    <div class="h-btg text-center">
                        <div class="h-btm">
                            <img class="w-100" src="../icon/taxi.png">
                        </div>
                        <p class="h-txt-p">Taxi</p>
                    </div>
                    <div class="h-btg text-center">
                        <div class="h-btm">
                            <img class="w-100" src="../icon/other.png">
                        </div>
                        <p class="h-txt-p">Other</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection