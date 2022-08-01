@extends('layouts.main')

@section('content')

    @include('layouts.flash_message')

    <!-- main content -->
    <div class="forgot d-flex justify-content-center algin-items-center">
        <div class="container d-flex justify-content-center align-items-center">
            <div class="au-card d-flex justify-content-center align-items-center">
                <div class="au-card-body py-5 px-2">
                    <p class="au-txt-h text-start">Reset password</p>
                    <p>Please enter your new password below then click Reset Password.</p>
                    <form role="form" method="post" action="/reset" class="needs-validation" novalidate>
                        @csrf()
                        <input type="password" class="mb-3 form-control" id="password" name="password" placeholder="New password">
                        <input type="password" class="mb-3 form-control" id="cpassword" name="cpassword" placeholder="Confirm password">
                        <button type="submit" name="submit" class="w-100 btn btn-warning">Reset Password</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

@endsection