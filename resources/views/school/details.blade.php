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
        </main>
    </div>
    

@endsection