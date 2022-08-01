@extends('layouts.master')

@section('content')

    @include('layouts.flash_message')

    <!-- main content -->
    <div class="container-fluid">
        <div class="row flex-nowrap">
            <div class="col-auto col-md-3 col-xl-2 px-sm-2 px-0 bg-dark">
                <div class="d-flex flex-column align-items-center align-items-sm-start px-3 pt-2 text-white min-vh-100">
                    <a href="/" class="d-flex align-items-center pb-3 mb-md-0 me-md-auto text-white text-decoration-none">
                        <span class="fs-5 d-none d-sm-inline">Menu</span>
                    </a>
                    <ul class="nav nav-pills flex-column mb-sm-auto mb-0 align-items-center align-items-sm-start" id="menu">
                        <li class="nav-item">
                            <a href="#" class="nav-link align-middle px-0">
                                <i class="fs-4 bi-house"></i> <span class="ms-1 d-none d-sm-inline">Home</span>
                            </a>
                        </li>
                        <li>
                            <a href="#" class="nav-link px-0 align-middle">
                                <i class="fs-4 bi-table"></i> <span class="ms-1 d-none d-sm-inline">Orders</span></a>
                        </li>
                        <li>
                            <a href="#submenu2" data-bs-toggle="collapse" class="nav-link px-0 align-middle ">
                                <i class="fs-4 bi-bootstrap"></i> <span class="ms-1 d-none d-sm-inline">Bootstrap</span></a>
                            <ul class="collapse nav flex-column ms-1" id="submenu2" data-bs-parent="#menu">
                                <li class="w-100">
                                    <a href="#" class="nav-link px-0"> <span class="d-none d-sm-inline">Item</span> 1</a>
                                </li>
                                <li>
                                    <a href="#" class="nav-link px-0"> <span class="d-none d-sm-inline">Item</span> 2</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="#submenu3" data-bs-toggle="collapse" class="nav-link px-0 align-middle">
                                <i class="fs-4 bi-grid"></i> <span class="ms-1 d-none d-sm-inline">Products</span> </a>
                                <ul class="collapse nav flex-column ms-1" id="submenu3" data-bs-parent="#menu">
                                <li class="w-100">
                                    <a href="#" class="nav-link px-0"> <span class="d-none d-sm-inline">Product</span> 1</a>
                                </li>
                                <li>
                                    <a href="#" class="nav-link px-0"> <span class="d-none d-sm-inline">Product</span> 2</a>
                                </li>
                                <li>
                                    <a href="#" class="nav-link px-0"> <span class="d-none d-sm-inline">Product</span> 3</a>
                                </li>
                                <li>
                                    <a href="#" class="nav-link px-0"> <span class="d-none d-sm-inline">Product</span> 4</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="#" class="nav-link px-0 align-middle">
                                <i class="fs-4 bi-people"></i> <span class="ms-1 d-none d-sm-inline">Customers</span> </a>
                        </li>
                    </ul>
                    <div class="nav pb-4">
                        <li class="nav-item">
                            <a href="#" class="nav-link align-middle px-0">
                                <i class="fs-4 bi bi-box-arrow-right"></i><span class="ms-1 d-none d-sm-inline">Log out</span>
                            </a>
                        </li>
                    </div>
                </div>
            </div>
            <div class="col px-0">
                <div class="main d-flex justify-content-center algin-items-center">
                    <div class="container d-flex justify-content-center align-items-center">
                        <div class="m-card d-flex justify-content-center align-items-center">
                            <div class="m-card-body py-5 px-2">
                                <div class="py-3">
                                    <div class="t-box table-responsive">
                                        <table class="tbl table table-centered table-nowrap">
                                            <thead class="thead-light">
                                                <tr class="m-trh">
                                                    <th class="text-center txt-l" style="width:30%">Class Name</th>
                                                    <th class="text-center txt-l" style="width:20%">Year</th>
                                                    <th class="text-center txt-l" style="width: 20%;">Size</th>
                                                    <th class="text-center txt-l" style="width: 15%;">Edit</th>
                                                    <th class="text-center txt-l" style="width: 15%;">Delete</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr class="m-tr">
                                                    <td class="text-center align-middle txt-l">Woodpeckers</td>
                                                    <td class="text-center align-middle txt-l">Year 4</td>
                                                    <td class="text-center align-middle txt-l">29</td>
                                                    <td class="text-center align-middle ">
                                                        <button class="btn btn-success"><i class="bi bi-pencil-square txt-l"></i></button>
                                                    </td>
                                                    <td class="text-center align-middle txt-l">
                                                        <button class="btn btn-danger"><i class="bi bi-trash txt-l"></i></button>
                                                    </td>
                                                </tr>
                                                <tr class="m-tr">
                                                    <td class="text-center align-middle txt-l">Woodpeckers</td>
                                                    <td class="text-center align-middle txt-l">Year 4</td>
                                                    <td class="text-center align-middle txt-l">29</td>
                                                    <td class="text-center align-middle ">
                                                        <button class="btn btn-success"><i class="bi bi-pencil-square txt-l"></i></button>
                                                    </td>
                                                    <td class="text-center align-middle txt-l">
                                                        <button class="btn btn-danger"><i class="bi bi-trash txt-l"></i></button>
                                                    </td>
                                                </tr>
                                                <tr class="m-tr">
                                                    <td class="text-center align-middle txt-l">Woodpeckers</td>
                                                    <td class="text-center align-middle txt-l">Year 4</td>
                                                    <td class="text-center align-middle txt-l">29</td>
                                                    <td class="text-center align-middle ">
                                                        <button class="btn btn-success"><i class="bi bi-pencil-square txt-l"></i></button>
                                                    </td>
                                                    <td class="text-center align-middle txt-l">
                                                        <button class="btn btn-danger"><i class="bi bi-trash txt-l"></i></button>
                                                    </td>
                                                </tr>
                                                <tr class="m-tr">
                                                    <td class="text-center align-middle txt-l">Woodpeckers</td>
                                                    <td class="text-center align-middle txt-l">Year 4</td>
                                                    <td class="text-center align-middle txt-l">29</td>
                                                    <td class="text-center align-middle ">
                                                        <button class="btn btn-success"><i class="bi bi-pencil-square txt-l"></i></button>
                                                    </td>
                                                    <td class="text-center align-middle txt-l">
                                                        <button class="btn btn-danger"><i class="bi bi-trash txt-l"></i></button>
                                                    </td>
                                                </tr>
                                                <tr class="m-tr">
                                                    <td class="text-center align-middle txt-l">Woodpeckers</td>
                                                    <td class="text-center align-middle txt-l">Year 4</td>
                                                    <td class="text-center align-middle txt-l">29</td>
                                                    <td class="text-center align-middle ">
                                                        <button class="btn btn-success"><i class="bi bi-pencil-square txt-l"></i></button>
                                                    </td>
                                                    <td class="text-center align-middle txt-l">
                                                        <button class="btn btn-danger"><i class="bi bi-trash txt-l"></i></button>
                                                    </td>
                                                </tr>
                                                <tr class="m-tr">
                                                    <td class="text-center align-middle txt-l">Woodpeckers</td>
                                                    <td class="text-center align-middle txt-l">Year 4</td>
                                                    <td class="text-center align-middle txt-l">29</td>
                                                    <td class="text-center align-middle ">
                                                        <button class="btn btn-success"><i class="bi bi-pencil-square txt-l"></i></button>
                                                    </td>
                                                    <td class="text-center align-middle txt-l">
                                                        <button class="btn btn-danger"><i class="bi bi-trash txt-l"></i></button>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                <form role="form" method="post" action="/reset" class="needs-validation" novalidate>
                                    @csrf()
                                    <div class="row">
                                        <div class="col-md-4 mb-3">
                                            <input type="text" class="form-control" name="name" placeholder="Name">
                                        </div>
                                        <div class="col-md-4 mb-3">
                                            <input type="" class="form-control" name="size" placeholder="Size">
                                        </div>
                                        <div class="col-md-4 mb-3">
                                        <select class="form-select" name="year" aria-label="Year">
                                            <option selected>Select Year</option>
                                            <option value="1">Year 1</option>
                                            <option value="2">Year 2</option>
                                            <option value="3">Year 3</option>
                                            <option value="4">Year 4</option>
                                        </select>
                                        </div>
                                        <div class="col-md-12 mb-3">
                                            <button type="button" class="w-100 btn btn-warning txt-l" name="submit">Save</button>
                                        </div> 
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection