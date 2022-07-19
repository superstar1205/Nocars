@extends('layouts.master')

@section('content')

    @include('layouts.flash_message')

    <!-- main content -->
    <div class="main d-flex justify-content-center algin-items-center">
        <div class="container d-flex justify-content-center align-items-center">
            <div class="m-card d-flex justify-content-center align-items-center">
                <div class="m-card-body py-5 px-2">
                    <div class="row justify-content-center">
                        <div class="col-md-6">
                        <form role="form" method="post" action="/reset" class="needs-validation" novalidate>
                            @csrf()
                            <div class="mb-3">
                                <label for="start" class="txt-l">Start Date</label>
                                <input type="date" class="form-control" placeholder="Start Date" name="start">
                            </div>
                            <div class="mb-4">
                                <label for="end" class="txt-l">End Date</label>
                                <input type="date" class="form-control" placeholder="End Date" name="end">
                            </div>
                            <button type="submit" class="w-100 btn btn-warning txt-l" name="submit">Save</button>
                        </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection