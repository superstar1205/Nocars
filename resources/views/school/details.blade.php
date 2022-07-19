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
                            <div class="col-md-4 mb-4">
                                <input type="text" class="form-control" placeholder="School name" name="school_name">
                            </div>
                            <div class="col-md-4 mb-4">
                                <input type="text" class="form-control" placeholder="URN/SEED" name="seed">
                            </div>
                            <div class="col-md-4 mb-4">
                                <input type="number" class="form-control" placeholder="Pupils" name="pupils">
                            </div>
                            <div class="col-md-12 mb-4">
                                <input type="text" class="form-control" placeholder="Address" name="address">
                            </div>
                            <div class="col-md-4 mb-4">
                                <input type="text" class="form-control" placeholder="Postcode" name="postcode">
                            </div>
                            <div class="col-md-4 mb-4">
                                <input type="text" class="form-control" placeholder="Town" name="town">
                            </div>
                            <div class="col-md-4 mb-4">
                                <input type="text" class="form-control" placeholder="Country" name="country">
                            </div>
                            <div class="col-md-6 mb-4">
                                <input type="text" class="form-control" placeholder="Office email" name="seed">
                            </div>
                            <div class="col-md-6 mb-4">
                                <input type="tel" class="form-control" placeholder="Telephone" name="telephone">
                            </div>
                            <div class="col-md-12 form-check mb-4">
                                <input class="m-checkbox" type="checkbox" id="myCheck" name="modeshift">
                                <label class=" txt-l" for="myCheck">Modeshift stars</label>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                            <button type="button" class="w-100 btn btn-warning txt-l" name="submit">Save</button>
                            </div> 
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

@endsection