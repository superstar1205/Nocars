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
        </main>
    </div>
    

@endsection