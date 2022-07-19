@extends('layouts.master')

@section('content')

    @include('layouts.flash_message')

    <!-- main content -->
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