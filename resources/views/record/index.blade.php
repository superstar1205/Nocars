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
                        <a class="nav-link nav-color" href="/holidays">Holidays</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link nav-color" href="/report">Report</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-setc nav-link nav-color" href="/record">Record</a>
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
    <div class="record d-flex justify-content-center">
        <div class="container d-flex justify-content-center">
            <div class="w-100 d-flex flex-column justify-content-between align-item-center">
                <div class="d-flex justify-content-end">
                    <div class="t-dategrop">
                        <div class="t-cell d-l"><i class="bi bi-caret-left-fill"></i></div>
                        <div>
                            <div class="text-center d-ct">Tue</div>
                            <div class="text-center d-cb">19 Jul 2022</div>
                        </div>
                        <div class="t-cell d-r"><i class="bi bi-caret-right-fill"></i></div>
                    </div>
                </div>
                <div class="r-card d-flex flex-wrap justify-content-center align-items-start mt-5 pt-3 pb-5">
                    <div class="r-cell r-cell-b"><img class="w-100" src="../icon/001.png"></div>
                    <div class="r-cell r-cell-a">
                        <img class="w-100" src="../icon/002.png">
                        <div class="r-cell-ac">
                            <img class="w-100" src="../icon/scooter.png">
                        </div>
                    </div>
                    <div class="r-cell r-cell-a">
                        <img class="w-100" src="../icon/003.png">
                        <div class="r-cell-ac">
                            <img class="w-100" src="../icon/walking.png">
                        </div>
                    </div>
                    <div class="r-cell r-cell-b"><img class="w-100" src="../icon/004.png"></div>
                    <div class="r-cell r-cell-b"><img class="w-100" src="../icon/005.png"></div>
                    <div class="r-cell r-cell-b"><img class="w-100" src="../icon/006.png"></div>
                    <div class="r-cell r-cell-a">
                        <img class="w-100" src="../icon/007.png">
                        <div class="r-cell-ac">
                            <img class="w-100" src="../icon/walking.png">
                        </div>
                    </div>
                    <div class="r-cell r-cell-b"><img class="w-100" src="../icon/008.png"></div>
                    <div class="r-cell r-cell-a">
                        <img class="w-100" src="../icon/009.png">
                        <div class="r-cell-ac">
                            <img class="w-100" src="../icon/scooter.png">
                        </div>
                    </div>
                    <div class="r-cell r-cell-b"><img class="w-100" src="../icon/010.png"></div>
                    <div class="r-cell r-cell-b"><img class="w-100" src="../icon/011.png"></div>
                    <div class="r-cell r-cell-b"><img class="w-100" src="../icon/021.png"></div>
                    <div class="r-cell r-cell-a">
                        <img class="w-100" src="../icon/022.png">
                        <div class="r-cell-ac">
                            <img class="w-100" src="../icon/scooter.png">
                        </div>
                    </div>
                    <div class="r-cell r-cell-a">
                        <img class="w-100" src="../icon/023.png">
                        <div class="r-cell-ac">
                            <img class="w-100" src="../icon/walking.png">
                        </div>
                    </div>
                    <div class="r-cell r-cell-b"><img class="w-100" src="../icon/024.png"></div>
                    <div class="r-cell r-cell-b"><img class="w-100" src="../icon/025.png"></div>
                    <div class="r-cell r-cell-b"><img class="w-100" src="../icon/026.png"></div>
                    <div class="r-cell r-cell-a">
                        <img class="w-100" src="../icon/027.png">
                        <div class="r-cell-ac">
                            <img class="w-100" src="../icon/walking.png">
                        </div>
                    </div>
                    <div class="r-cell r-cell-b"><img class="w-100" src="../icon/028.png"></div>
                    <div class="r-cell r-cell-a">
                        <img class="w-100" src="../icon/029.png">
                        <div class="r-cell-ac">
                            <img class="w-100" src="../icon/scooter.png">
                        </div>
                    </div>
                    <div class="r-cell r-cell-b"><img class="w-100" src="../icon/030.png"></div>
                    <div class="r-cell r-cell-b"><img class="w-100" src="../icon/031.png"></div>
                    <div class="r-cell r-cell-a">
                        <img class="w-100" src="../icon/032.png">
                        <div class="r-cell-ac">
                            <img class="w-100" src="../icon/scooter.png">
                        </div>
                    </div>
                    <div class="r-cell r-cell-a">
                        <img class="w-100" src="../icon/033.png">
                        <div class="r-cell-ac">
                            <img class="w-100" src="../icon/walking.png">
                        </div>
                    </div>
                    <div class="r-cell r-cell-b"><img class="w-100" src="../icon/034.png"></div>
                    <div class="r-cell r-cell-a">
                        <img class="w-100" src="../icon/012.png">
                        <div class="r-cell-ac">
                            <img class="w-100" src="../icon/scooter.png">
                        </div>
                    </div>
                    <div class="r-cell r-cell-a">
                        <img class="w-100" src="../icon/013.png">
                        <div class="r-cell-ac">
                            <img class="w-100" src="../icon/walking.png">
                        </div>
                    </div>
                    <div class="r-cell r-cell-a">
                        <img class="w-100" src="../icon/019.png">
                        <div class="r-cell-ac">
                            <img class="w-100" src="../icon/scooter.png">
                        </div>
                    </div>
                    <div class="r-cell r-cell-b"><img class="w-100" src="../icon/020.png"></div>
                </div>
            </div>
        </div>
    </div>

@endsection