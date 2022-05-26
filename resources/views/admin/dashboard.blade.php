@extends('layouts.admin.main', ['title' => 'Dashboard'])
@section('main')
    <main class="page-content">
        <div class="card">
            <div class="card-body">
                <h1>Dashboard contents will goes here</h1>
            </div>
        </div>
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
