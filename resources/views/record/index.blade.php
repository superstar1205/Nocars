@extends('layouts.master')

@section('content')

    @include('layouts.flash_message')

    <!-- main content -->
    <header>
        <div class="toggle">
            <i class="fas fa-bars"></i>
        </div>
        <h3>Dashboard</h3>
        <a href="#">
            <i class="fas fa-sign-out-alt"></i>
        </a>
    </header>
    <nav>
        <ul>
            <li>
                <a class="toggle">
                    <span class="icon"><i class="fas fa-bars"></i></span>
                    <span class="title">Menu</span>
                </a>
            </li>
            <li>
                <a href="#">
                    <span class="icon"><i class="fas fa-home"></i></span>
                    <span class="title">Home</span>
                </a>
            </li>
            <li>
                <a href="#">
                    <span class="icon"><i class="fas fa-user"></i></span>
                    <span class="title">Profile</span>
                </a>
            </li>
            <li>
                <a href="#">
                    <span class="icon"><i class="fas fa-envelope"></i></span>
                    <span class="title">Messages</span>
                </a>
            </li>
            <li>
                <a href="#">
                    <span class="icon"><i class="fas fa-info"></i></span>
                    <span class="title">Help</span>
                </a>
            </li>
            <li>
                <a href="#">
                    <span class="icon"><i class="fas fa-cog"></i></span>
                    <span class="title">Setting</span>
                </a>
            </li>
            <li>
                <a href="#">
                    <span class="icon"><i class="fas fa-lock"></i></span>
                    <span class="title">Password</span>
                </a>
            </li>
            <li>
                <a href="#">
                    <span class="icon"><i class="fas fa-sign-out-alt"></i></span>
                    <span class="title">Sign Out</span>
                </a>
            </li>
        </ul>
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