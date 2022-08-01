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
                <li><a class="s-sidebar__nav-link" href="#0"><i class="bi bi-house-fill"></i><em>Home</em></a></li>
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
                            <h2 class="text-white">Welcome to the travel tracker.</h2>
                            <p class="text-white">Please select from the following options:</p>
                            <div class="m-menu mb-4">
                                <div class="title d-flex align-items-center text-center text-white"><h4>
                                        <a href="/classes">Setup classes</a></h4>
                                </div>
                                <div class="goto d-flex justify-content-center align-items-center text-center">
                                    <i class="bi bi-arrow-right-short"></i>
                                </div>
                            </div>
                            <div class="m-menu mb-4">
                                <div class="title d-flex align-items-center text-center text-white">
                                    <h4><a href="/baseline">Setup baseline data</a></h4>
                                </div>
                                <div class="goto d-flex justify-content-center align-items-center text-center">
                                    <i class="bi bi-arrow-right-short"></i>
                                </div>
                            </div>
                            <div class="m-menu mb-4">
                                <div class="title d-flex align-items-center text-center text-white">
                                    <h4><a href="/details">Setup school</a></h4>
                                </div>
                                <div class="goto d-flex justify-content-center align-items-center text-center">
                                    <i class="bi bi-arrow-right-short"></i>
                                </div>
                            </div>
                            <div class="m-menu mb-4">
                                <div class="title d-flex align-items-center text-center text-white">
                                    <h4><a href="/holidays">Setup holidays</a></h4>
                                </div>
                                <div class="goto d-flex justify-content-center align-items-center text-center">
                                    <i class="bi bi-arrow-right-short"></i>
                                </div>
                            </div>
                            <div class="m-menu mb-4">
                                <div class="title d-flex align-items-center text-center text-white">
                                    <h4><a href="/logout">Log out</a></h4>
                                </div>
                                <div class="goto d-flex justify-content-center align-items-center text-center">
                                    <i class="bi bi-arrow-right-short"></i></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </div>
    

@endsection
