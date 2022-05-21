@extends('layouts.dashboard.master')

@section('main')
    <main class="page-content">


        <div class="row">
            <div class="col-12 col-lg-12 col-xl-4 d-flex">
                <div class="card w-100 radius-10">
                    <div class="card-body">
                        <div class="card radius-10 border shadow-none">
                            <div class="card-body pb-0">
                                <div class="d-flex align-items-center">
                                    <div class="">
                                        <h6 class="mb-0">Montly Sales</h6>
                                    </div>
                                    <div class="fs-5 ms-auto dropdown">
                                        <div class="dropdown-toggle dropdown-toggle-nocaret cursor-pointer" data-bs-toggle="dropdown">
                                            <i class="bi bi-three-dots"></i>
                                        </div>
                                        <ul class="dropdown-menu">
                                            <li><a class="dropdown-item" href="#">Action</a></li>
                                            <li><a class="dropdown-item" href="#">Another action</a></li>
                                            <li>
                                                <hr class="dropdown-divider">
                                            </li>
                                            <li><a class="dropdown-item" href="#">Something else here</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="mt-0">
                                    <div class="widget-icon mx-auto mb-2 bg-light-primary text-primary">
                                        <i class="bi bi-bank2"></i>
                                    </div>
                                    <h4 class="mb-0 text-center">$45,865</h4>
                                </div>
                                <div id="chart15"></div>
                            </div>
                        </div>
                        <div class="card radius-10 border shadow-none">
                            <div class="card-body">
                                <div class="d-flex align-items-center">
                                    <div class="">
                                        <h6 class="mb-0">Total Clicks</h6>
                                    </div>
                                    <div class="fs-5 ms-auto dropdown">
                                        <div class="dropdown-toggle dropdown-toggle-nocaret cursor-pointer" data-bs-toggle="dropdown">
                                            <i class="bi bi-three-dots"></i>
                                        </div>
                                        <ul class="dropdown-menu">
                                            <li><a class="dropdown-item" href="#">Action</a></li>
                                            <li><a class="dropdown-item" href="#">Another action</a></li>
                                            <li>
                                                <hr class="dropdown-divider">
                                            </li>
                                            <li><a class="dropdown-item" href="#">Something else here</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div id="chart14"></div>
                            </div>
                        </div>
                        <div class="card radius-10 border shadow-none mb-0">
                            <div class="card-body">
                                <div class="d-flex align-items-center">
                                    <div class="">
                                        <h6 class="mb-0">Sessions</h6>
                                    </div>
                                    <div class="fs-5 ms-auto dropdown">
                                        <div class="dropdown-toggle dropdown-toggle-nocaret cursor-pointer" data-bs-toggle="dropdown">
                                            <i class="bi bi-three-dots"></i>
                                        </div>
                                        <ul class="dropdown-menu">
                                            <li><a class="dropdown-item" href="#">Action</a></li>
                                            <li><a class="dropdown-item" href="#">Another action</a></li>
                                            <li>
                                                <hr class="dropdown-divider">
                                            </li>
                                            <li><a class="dropdown-item" href="#">Something else here</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div id="chart16"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-lg-12 col-xl-8 d-flex">
                <div class="w-100">
                    <div class="row">
                        <div class="col-12 col-lg-12 col-xl-12">
                            <div class="card radius-10">
                                <div class="card-body">
                                    <div class="d-flex align-items-center">
                                        <h6 class="mb-0">Visitors</h6>
                                        <div class="fs-5 ms-auto dropdown">
                                            <div class="dropdown-toggle dropdown-toggle-nocaret cursor-pointer"
                                                 data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></div>
                                            <ul class="dropdown-menu">
                                                <li><a class="dropdown-item" href="#">Action</a></li>
                                                <li><a class="dropdown-item" href="#">Another action</a></li>
                                                <li>
                                                    <hr class="dropdown-divider">
                                                </li>
                                                <li><a class="dropdown-item" href="#">Something else here</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="d-sm-flex align-items-center gap-3 mt-3">
                                        <div class="mb-2 mb-sm-0">
                                            <h4 class="mb-0">254,852</h4>
                                            <p class="mb-0">New / Returning</p>
                                        </div>
                                        <div class="d-none d-sm-block border-end sepration-2"></div>
                                        <div class="align-self-end mb-2 mb-sm-0">
                                            <p class="mb-0">45,762 / 2,491</p>
                                        </div>
                                        <div class="align-self-end ms-auto">
                                            <div class="d-flex align-items-center gap-3">
                                                <p class="mb-0 font-13">
                                                    <i class="bi bi-square-fill ms-1 text-primary"></i> New Visitors
                                                </p>
                                                <p class="mb-0 font-13">
                                                    <i class="bi bi-square-fill ms-1 text-primary-3"></i> Returning Visitors
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div id="chart10"></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-lg-4 col-xl-4">
                            <div class="card radius-10">
                                <div class="card-body">
                                    <div id="chart11"></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-lg-4 col-xl-4">
                            <div class="card radius-10">
                                <div class="card-body">
                                    <div id="chart12"></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-lg-4 col-xl-4">
                            <div class="card radius-10">
                                <div class="card-body">
                                    <div id="chart13"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--end row-->
                </div>
            </div>
        </div>
        <!--end row-->


    </main>
@endsection

@push('js')
    <!--plugins-->
    <script src="{{ asset('assets/js/jquery.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/simplebar/js/simplebar.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/metismenu/js/metisMenu.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/perfect-scrollbar/js/perfect-scrollbar.js') }}"></script>
    <script src="{{ asset('assets/js/pace.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/chartjs/js/Chart.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/chartjs/js/Chart.extension.js') }}"></script>
    <script src="{{ asset('assets/plugins/apexcharts-bundle/js/apexcharts.min.js') }}"></script>

    <!--app-->
    <script src="{{ asset('assets/js/app.js') }}"></script>
    <script src="{{ asset('assets/js/index.js') }}"></script>
@endpush
