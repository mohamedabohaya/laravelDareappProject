@extends('layouts.theme')
@section('content')
    <div class="container-fluid">

        <!-- Page Heading -->
        <h1 class="h2 mb-4 text-gray-800 text-right "></h1>
        <div class="row">

            <div class="col-xl-8 col-lg-7">

                <!-- Area Chart -->
                <div class="card shadow mb-4">
                    <div class="card-header py-3">
                        <h6 class="m-0 font-weight-bold text-primary text-right">المخطط</h6>
                    </div>
                    <div class="card-body text-right text-primary font-weight-bold">
                        <div class="chart-area">
                            <canvas id="myAreaChart"></canvas>
                        </div>
                        <hr>
                        مخطط يوضح عملية معينة
                    </div>
                </div>

            </div>

            <!-- Donut Chart -->
            <div class="col-xl-4 col-lg-5">
                <div class="card shadow mb-4">
                    <!-- Card Header - Dropdown -->
                    <div class="card-header py-3">
                        <h6 class="m-0 font-weight-bold text-primary text-right">المخطط 2</h6>
                    </div>
                    <!-- Card Body -->
                    <div class="card-body text-right text-primary font-weight-bold">
                        <div class="chart-pie pt-4 ">
                            <canvas id="myPieChart"></canvas>
                        </div>
                        <hr>
                        مخطط يوضح عملية معينة
                    </div>
                </div>
            </div>
        </div>




@endsection
