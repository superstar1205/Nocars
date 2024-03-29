@extends('layouts.main')

@section('content')

    @include('layouts.flash_message')

    <!-- main content -->

    <div class="s-layout">
    <!-- Sidebar -->
    <div class="s-layout__sidebar">
        <a class="s-sidebar__trigger" href="#0"><i class="bi bi-list"></i></a>
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
    </main>
    </div>
@endsection