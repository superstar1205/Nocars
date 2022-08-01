@extends('layouts.main')

@section('content')

    @include('layouts.flash_message')

    <!-- main content -->
    <div class="s-layout">
        <!-- Sidebar -->
        <div class="s-layout__sidebar">
            <a class="s-sidebar__trigger" href="#0">
                <i class="bi bi-list"></i>
            </a>
            <nav class="s-sidebar__nav">
            <ul>
                <li><a class="s-sidebar__nav-link" href="/home"><i class="bi bi-house-fill"></i><em>Home</em></a></li>
                <div class="dline"></div>
                <li><a class="s-sidebar__nav-link" href="/classes"><i class="bi bi-file-earmark-plus-fill"></i><em>Classes</em></a></li>
                <li><a class="s-sidebar__nav-link" href="/baseline"><i class="bi bi-file-earmark-plus-fill"></i><em>Baseline</em></a></li>
                <li><a class="s-sidebar__nav-link" href="/details"><i class="bi bi-ticket-detailed"></i><em>Detail</em></a></li>
                <li><a class="s-sidebar__nav-link" href="/holidays"><i class="bi bi-file-earmark-plus-fill"></i><em>Holidays</em></a></li>
                <li><a class="s-sidebar__nav-link" href="/report"><i class="bi bi-newspaper"></i><em>Report</em></a></li>
                <div class="dline"></div>
                <li><a class="s-sidebar__nav-link" href="/record"><i class="bi bi-circle-square"></i><em>Record</em></a></li>
                <li><a class="s-sidebar__nav-link" href="/how"><i class="bi bi-file-spreadsheet-fill"></i><em>How</em></a></li>
                <div class="dline"></div>
                <li><a class="s-sidebar__nav-link" href="/logout"><i class="bi bi-box-arrow-right"></i><em>Log out</em></a></li>
            </ul>
        </nav>
        </div>

        <!-- Content -->
        <main class="s-layout__content">
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
        </main>
    </div>
    

@endsection