@extends('layouts.master')

@section('content')

    @include('layouts.flash_message')

    <!-- main content -->
    <div class="main d-flex justify-content-center">
        <div class="container d-flex flex-column justify-content-around align-item-center">
            <div class="d-flex justify-content-center align-item-center py-4">
                <div class="h-top">
                    <img class="w-100" src="../icons/007.png">
                </div>
            </div>
            
            <div class="h-card py-5">
                <div class="d-flex flex-wrap justify-content-center align-items-center">
                    <div class="h-btg text-center">
                        <div class="h-btm">
                            <img class="w-100" src="../icons/walking.png">
                        </div>
                        <p class="h-txt-p">Walk/Wheel</p>
                    </div>
                    <div class="h-btg text-center">
                        <div class="h-btm">
                            <img class="w-100" src="../icons/cycling.png">
                        </div>
                        <p class="h-txt-p">Cycle</p>
                    </div>
                    <div class="h-btg text-center">
                        <div class="h-btm">
                            <img class="w-100" src="../icons/scooter.png">
                        </div>
                        <p class="h-txt-p">Scooter</p>
                    </div>
                    <div class="h-btg text-center">
                        <div class="h-btm">
                            <img class="w-100" src="../icons/park.png">
                        </div>
                        <p class="h-txt-p">Park & Stride</p>
                    </div>
                    <div class="h-btg text-center">
                        <div class="h-btm">
                            <img class="w-100" src="../icons/driving.png">
                        </div>
                        <p class="h-txt-p">Driven</p>
                    </div>
                    <div class="h-btg text-center">
                        <div class="h-btm">
                            <img class="w-100" src="../icons/bus.png">
                        </div>
                        <p class="h-txt-p">Bus</p>
                    </div>
                    <div class="h-btg text-center">
                        <div class="h-btm">
                            <img class="w-100" src="../icons/taxi.png">
                        </div>
                        <p class="h-txt-p">Taxi</p>
                    </div>
                    <div class="h-btg text-center">
                        <div class="h-btm">
                            <img class="w-100" src="../icons/other.png">
                        </div>
                        <p class="h-txt-p">Other</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection