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
                        <a class="nav-link nav-color nav-setc" href="/holidays">Holidays</a>
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
                    <div class="py-3">
                        <div class="t-box table-responsive">
                            <table class="tbl table table-centered table-nowrap">
                                <thead class="thead-light">
                                    <tr  class="m-trh">
                                        <th class="text-center txt-l" style="width: 25%">Holiday Name</th>
                                        <th class="text-center txt-l" style="width: 20%">Start Date</th>
                                        <th class="text-center txt-l" style="width: 20%;">End Date</th>
                                        <th class="text-center txt-l" style="width: 15%;">Applies</th>
                                        <th class="text-center txt-l" style="width: 10%;">Edit</th>
                                        <th class="text-center txt-l" style="width: 10%;">Delete</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr class="m-tr">
                                        <td class="text-center align-middle txt-l">New Year</td>
                                        <td class="text-center align-middle txt-l">2022-01-02</td>
                                        <td class="text-center align-middle txt-l">2022-01-03</td>
                                        <td class="text-center align-middle txt-l">One</td>
                                        <td class="text-center align-middle ">
                                            <button class="btn btn-success"><i class="bi bi-pencil-square txt-l"></i></button>
                                        </td>
                                        <td class="text-center align-middle txt-l">
                                            <button class="btn btn-danger"><i class="bi bi-trash txt-l"></i></button>
                                        </td>
                                    </tr>
                                    <tr class="m-tr">
                                        <td class="text-center align-middle txt-l">New Year</td>
                                        <td class="text-center align-middle txt-l">2022-01-02</td>
                                        <td class="text-center align-middle txt-l">2022-01-03</td>
                                        <td class="text-center align-middle txt-l">One</td>
                                        <td class="text-center align-middle ">
                                            <button class="btn btn-success"><i class="bi bi-pencil-square txt-l"></i></button>
                                        </td>
                                        <td class="text-center align-middle txt-l">
                                            <button class="btn btn-danger"><i class="bi bi-trash txt-l"></i></button>
                                        </td>
                                    </tr>
                                    <tr class="m-tr">
                                        <td class="text-center align-middle txt-l">New Year</td>
                                        <td class="text-center align-middle txt-l">2022-01-02</td>
                                        <td class="text-center align-middle txt-l">2022-01-03</td>
                                        <td class="text-center align-middle txt-l">One</td>
                                        <td class="text-center align-middle ">
                                            <button class="btn btn-success"><i class="bi bi-pencil-square txt-l"></i></button>
                                        </td>
                                        <td class="text-center align-middle txt-l">
                                            <button class="btn btn-danger"><i class="bi bi-trash txt-l"></i></button>
                                        </td>
                                    </tr>
                                    <tr class="m-tr">
                                        <td class="text-center align-middle txt-l">New Year</td>
                                        <td class="text-center align-middle txt-l">2022-01-02</td>
                                        <td class="text-center align-middle txt-l">2022-01-03</td>
                                        <td class="text-center align-middle txt-l">One</td>
                                        <td class="text-center align-middle ">
                                            <button class="btn btn-success"><i class="bi bi-pencil-square txt-l"></i></button>
                                        </td>
                                        <td class="text-center align-middle txt-l">
                                            <button class="btn btn-danger"><i class="bi bi-trash txt-l"></i></button>
                                        </td>
                                    </tr>
                                    <tr class="m-tr">
                                        <td class="text-center align-middle txt-l">New Year</td>
                                        <td class="text-center align-middle txt-l">2022-01-02</td>
                                        <td class="text-center align-middle txt-l">2022-01-03</td>
                                        <td class="text-center align-middle txt-l">One</td>
                                        <td class="text-center align-middle ">
                                            <button class="btn btn-success"><i class="bi bi-pencil-square txt-l"></i></button>
                                        </td>
                                        <td class="text-center align-middle txt-l">
                                            <button class="btn btn-danger"><i class="bi bi-trash txt-l"></i></button>
                                        </td>
                                    </tr>
                                    <tr class="m-tr">
                                        <td class="text-center align-middle txt-l">New Year</td>
                                        <td class="text-center align-middle txt-l">2022-01-02</td>
                                        <td class="text-center align-middle txt-l">2022-01-03</td>
                                        <td class="text-center align-middle txt-l">One</td>
                                        <td class="text-center align-middle ">
                                            <button class="btn btn-success"><i class="bi bi-pencil-square txt-l"></i></button>
                                        </td>
                                        <td class="text-center align-middle txt-l">
                                            <button class="btn btn-danger"><i class="bi bi-trash txt-l"></i></button>
                                        </td>
                                    </tr class="m-tr">
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <form role="form" method="post" action="/reset" class="needs-validation" novalidate>
                        @csrf()
                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <input type="text" class="form-control" name="name" placeholder="Name">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label class="txt-l">Start Date</label>
                                <input type="date" class="form-control" name="start">
                            </div>
                            <div class="col-md-6 mb-4">
                                <label class="txt-l">End Date</label>
                                <input type="date" class="form-control" name="start">
                            </div>
                            <div class="col-md-6 mb-4">
                                <select class="form-select" name="year" aria-label="Year">
                                    <option selected>Applies</option>
                                    <option value="1">one</option>
                                    <option value="2">two</option>
                                    <option value="3">three</option>
                                </select>
                            </div>
                            <div class="col-md-12 mb-4">
                                <button type="button" class="w-100 btn btn-warning txt-l" name="submit">Save</button>
                            </div> 
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

@endsection