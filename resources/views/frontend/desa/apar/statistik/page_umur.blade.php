@extends('frontend.desa.apar.master')
@section('title')
    Apar
@endsection
@section('content')
    <!-- Page Content -->
    <div class="content">
        <div class="row">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb breadcrumb-alt bg-body-light px-4 py-2 rounded push">
                    <li class="breadcrumb-item">
                        <a href="javascript:void(0)">{{ $kelompok }}</a>
                    </li>
                    <li class="breadcrumb-item active" aria-current="page">{{ $list }}</li>
                </ol>
            </nav>
        </div>


        <div class="row">
            <div class="col-xl-6">
                <!-- Donut Chart -->
                <div class="block block-rounded">
                    <div class="block-header block-header-default">
                        <h3 class="block-title">Kategori Umur Penduduk </h3>
                        <div class="block-options">
                            <button type="button" class="btn-block-option" data-toggle="block-option"
                                data-action="state_toggle" data-action-mode="demo">
                                <i class="si si-refresh"></i>
                            </button>
                        </div>
                    </div>
                    <div class="block-content block-content-full text-center">
                        <div class="py-3">
                            <!-- Donut Chart Container -->
                            <canvas id="js-chartjs-pie-katumur"></canvas>
                        </div>
                    </div>
                </div>
                <!-- END Donut Chart -->
            </div>
            <div class="col-xl-6">
                <!-- Donut Chart -->
                <div class="block block-rounded">
                    <div class="block-header block-header-default">
                        <h3 class="block-title">Kategori Umur Penduduk Laki Laki</h3>
                        <div class="block-options">
                            <button type="button" class="btn-block-option" data-toggle="block-option"
                                data-action="state_toggle" data-action-mode="demo">
                                <i class="si si-refresh"></i>
                            </button>
                        </div>
                    </div>
                    <div class="block-content block-content-full text-center">
                        <div class="py-3">
                            <!-- Donut Chart Container -->
                            <canvas id="js-chartjs-pie-katlakilaki"></canvas>
                        </div>
                    </div>
                </div>
                <!-- END Donut Chart -->
            </div>

            <div class="col-xl-6">
                <!-- Donut Chart -->
                <div class="block block-rounded">
                    <div class="block-header block-header-default">
                        <h3 class="block-title">Kategori Umur Penduduk Perempuan</h3>
                        <div class="block-options">
                            <button type="button" class="btn-block-option" data-toggle="block-option"
                                data-action="state_toggle" data-action-mode="demo">
                                <i class="si si-refresh"></i>
                            </button>
                        </div>
                    </div>
                    <div class="block-content block-content-full text-center">
                        <div class="py-3">
                            <!-- Donut Chart Container -->
                            <canvas id="js-chartjs-pie-katperempuan"></canvas>
                        </div>
                    </div>
                </div>
                <!-- END Donut Chart -->
            </div>



        </div>
    </div>
@endsection
@push('javascript-external')
    <!-- jQuery (required for Easy Pie Chart + jQuery Sparkline plugin) -->
    <script src="{{ asset('assets/js/lib/jquery.min.js') }}"></script>

    <!-- Page JS Plugins -->
    <script src="{{ asset('assets/js/plugins/easy-pie-chart/jquery.easypiechart.min.js') }}"></script>
    <script src="{{ asset('assets/js/plugins/jquery-sparkline/jquery.sparkline.min.js') }}"></script>
    <script src="{{ asset('assets/js/plugins/chart.js/chart.min.js') }}"></script>

    <!-- Page JS Code -->
    {{-- <script src="{{ asset('assets/js/pages/be_comp_charts.min.js') }}"></script> --}}

    <!-- Page JS Helpers (Easy Pie Chart + jQuery Sparkline Plugins) -->
    <script>
        Dashmix.helpersOnLoad(['jq-easy-pie-chart', 'jq-sparkline']);
    </script>
@endpush
@push('javascript-internal')
    <script>
        Dashmix.onLoad(class {
            static initChartsChartJS() {
                Chart.defaults.color = "#818d96", Chart.defaults.scale.grid.color = "rgba(0,0,0,.04)", Chart
                    .defaults.scale.grid.zeroLineColor = "rgba(0,0,0,.1)", Chart.defaults.scale.beginAtZero = !
                    0, Chart.defaults.elements.line.borderWidth = 2, Chart.defaults.elements.point.radius = 5,
                    Chart.defaults.elements.point.hoverRadius = 7, Chart.defaults.plugins.tooltip.radius = 3,
                    Chart.defaults.plugins.legend.labels.boxWidth = 12;
                let data_katumur,
                    data_katlakilaki,
                    data_katperempuan = document.getElementById(
                        "js-chartjs-lines"),


                    katumur = document.getElementById("js-chartjs-pie-katumur"),
                    katlakilaki = document.getElementById("js-chartjs-pie-katlakilaki"),
                    katperempuan = document.getElementById("js-chartjs-pie-katperempuan");


                data_katumur = {
                        labels: [
                            'Total Penduduk umur 0 - 4 (30%)',
                            'Total Penduduk umur 5 - 14 (30%)',
                            'Total Penduduk umur 15 - 64 (30%)',
                            'Total Penduduk umur 65 + (30%)',
                        ],
                        datasets: [{
                            data: [
                                30,
                                5,
                                2,
                                2,
                                // 2,
                                // 2,
                                // 2,
                                // 12,
                                // 2,
                                // 9,
                                // 2,
                                // 10,
                                // 2,
                                // 2,
                                // 2,
                                // 2,
                                // 2,
                                // 2,
                                // 2,
                            ],
                            backgroundColor: [
                                "rgba(141, 196, 81, 1)",
                                "rgba(255, 177, 25, 1)",
                                "rgba(224, 79, 26, 1)",
                                "rgba(155, 89, 182, 1)",
                                // "rgba(84, 153, 199, 1)",
                                // "rgba(69, 179, 157, 1)",
                                // "rgba(220, 118, 51, 1)",
                                // "rgba(241, 148, 138, 1)",
                                // "rgba(110, 44, 0, 1)",

                                // "rgba(100, 30, 22, 1)",
                                // "rgba(120, 40, 31, 1)",
                                // "rgba(81, 46, 95, 1)",
                                // "rgba(74, 35, 90, 1)",
                                // "rgba(21, 67, 96, 1)",
                                // "rgba(27, 79, 114, 1)",
                                // "rgba(11, 83, 69, 1)",
                                // "rgba(20, 90, 50 , 1)",
                                // "rgba(125, 102, 8 , 1)",
                                // "rgba(125, 102, 8 , 1)",
                            ],
                            hoverBackgroundColor: [
                                "rgba(141, 196, 81, 5)",
                                "rgba(255, 177, 25, 5)",
                                "rgba(224, 79, 26, 5)",
                                "rgba(155, 89, 182, 5)",
                                // "rgba(84, 153, 199, 5)",
                                // "rgba(69, 179, 157, 5)",
                                // "rgba(220, 118, 51, 5)",
                                // "rgba(241, 148, 138, 5)",
                                // "rgba(110, 44, 0, 5)",

                                // "rgba(100, 30, 22, 5)",
                                // "rgba(120, 40, 31, 5)",
                                // "rgba(81, 46, 95, 5)",
                                // "rgba(74, 35, 90, 5)",
                                // "rgba(21, 67, 96, 5)",
                                // "rgba(27, 79, 114, 5)",
                                // "rgba(11, 83, 69, 5)",
                                // "rgba(20, 90, 50 , 5)",
                                // "rgba(125, 102, 8 , 5)",
                                // "rgba(125, 102, 8 , 5)",

                            ]
                        }]
                    },

                    data_katlakilaki = {
                        labels: [
                            'Total Penduduk umur 0 - 4 (30%)',
                            'Total Penduduk umur 5 - 14 (30%)',
                            'Total Penduduk umur 15 - 64 (30%)',
                            'Total Penduduk umur 65 + (30%)',
                        ],
                        datasets: [{
                            data: [
                                30,
                                5,
                                2,
                                2,
                                // 2,
                                // 2,
                                // 2,
                                // 12,
                                // 2,
                                // 9,
                                // 2,
                                // 10,
                                // 2,
                                // 2,
                                // 2,
                                // 2,
                                // 2,
                                // 2,
                                // 2,
                            ],
                            backgroundColor: [
                                "rgba(141, 196, 81, 1)",
                                "rgba(255, 177, 25, 1)",
                                "rgba(224, 79, 26, 1)",
                                "rgba(155, 89, 182, 1)",
                                // "rgba(84, 153, 199, 1)",
                                // "rgba(69, 179, 157, 1)",
                                // "rgba(220, 118, 51, 1)",
                                // "rgba(241, 148, 138, 1)",
                                // "rgba(110, 44, 0, 1)",

                                // "rgba(100, 30, 22, 1)",
                                // "rgba(120, 40, 31, 1)",
                                // "rgba(81, 46, 95, 1)",
                                // "rgba(74, 35, 90, 1)",
                                // "rgba(21, 67, 96, 1)",
                                // "rgba(27, 79, 114, 1)",
                                // "rgba(11, 83, 69, 1)",
                                // "rgba(20, 90, 50 , 1)",
                                // "rgba(125, 102, 8 , 1)",
                                // "rgba(125, 102, 8 , 1)",
                            ],
                            hoverBackgroundColor: [
                                "rgba(141, 196, 81, 5)",
                                "rgba(255, 177, 25, 5)",
                                "rgba(224, 79, 26, 5)",
                                "rgba(155, 89, 182, 5)",
                                // "rgba(84, 153, 199, 5)",
                                // "rgba(69, 179, 157, 5)",
                                // "rgba(220, 118, 51, 5)",
                                // "rgba(241, 148, 138, 5)",
                                // "rgba(110, 44, 0, 5)",

                                // "rgba(100, 30, 22, 5)",
                                // "rgba(120, 40, 31, 5)",
                                // "rgba(81, 46, 95, 5)",
                                // "rgba(74, 35, 90, 5)",
                                // "rgba(21, 67, 96, 5)",
                                // "rgba(27, 79, 114, 5)",
                                // "rgba(11, 83, 69, 5)",
                                // "rgba(20, 90, 50 , 5)",
                                // "rgba(125, 102, 8 , 5)",
                                // "rgba(125, 102, 8 , 5)",

                            ]
                        }]
                    },

                    data_katperempuan = {
                        labels: [
                            'Total Penduduk umur 0 - 4 (30%)',
                            'Total Penduduk umur 5 - 14 (30%)',
                            'Total Penduduk umur 15 - 64 (30%)',
                            'Total Penduduk umur 65 + (30%)',
                        ],
                        datasets: [{
                            data: [
                                30,
                                5,
                                2,
                                2,
                                // 2,
                                // 2,
                                // 2,
                                // 12,
                                // 2,
                                // 9,
                                // 2,
                                // 10,
                                // 2,
                                // 2,
                                // 2,
                                // 2,
                                // 2,
                                // 2,
                                // 2,
                            ],
                            backgroundColor: [
                                "rgba(141, 196, 81, 1)",
                                "rgba(255, 177, 25, 1)",
                                "rgba(224, 79, 26, 1)",
                                "rgba(155, 89, 182, 1)",
                                // "rgba(84, 153, 199, 1)",
                                // "rgba(69, 179, 157, 1)",
                                // "rgba(220, 118, 51, 1)",
                                // "rgba(241, 148, 138, 1)",
                                // "rgba(110, 44, 0, 1)",

                                // "rgba(100, 30, 22, 1)",
                                // "rgba(120, 40, 31, 1)",
                                // "rgba(81, 46, 95, 1)",
                                // "rgba(74, 35, 90, 1)",
                                // "rgba(21, 67, 96, 1)",
                                // "rgba(27, 79, 114, 1)",
                                // "rgba(11, 83, 69, 1)",
                                // "rgba(20, 90, 50 , 1)",
                                // "rgba(125, 102, 8 , 1)",
                                // "rgba(125, 102, 8 , 1)",
                            ],
                            hoverBackgroundColor: [
                                "rgba(141, 196, 81, 5)",
                                "rgba(255, 177, 25, 5)",
                                "rgba(224, 79, 26, 5)",
                                "rgba(155, 89, 182, 5)",
                                // "rgba(84, 153, 199, 5)",
                                // "rgba(69, 179, 157, 5)",
                                // "rgba(220, 118, 51, 5)",
                                // "rgba(241, 148, 138, 5)",
                                // "rgba(110, 44, 0, 5)",

                                // "rgba(100, 30, 22, 5)",
                                // "rgba(120, 40, 31, 5)",
                                // "rgba(81, 46, 95, 5)",
                                // "rgba(74, 35, 90, 5)",
                                // "rgba(21, 67, 96, 5)",
                                // "rgba(27, 79, 114, 5)",
                                // "rgba(11, 83, 69, 5)",
                                // "rgba(20, 90, 50 , 5)",
                                // "rgba(125, 102, 8 , 5)",
                                // "rgba(125, 102, 8 , 5)",

                            ]
                        }]
                    },
                    null !== katlakilaki && (katlakilaki = new Chart(katlakilaki, {
                        type: "pie",
                        data: data_katlakilaki
                    })),
                    null !== katperempuan && (katperempuan = new Chart(katperempuan, {
                        type: "pie",
                        data: data_katperempuan
                    })),
                    null !== katumur && (katumur = new Chart(katumur, {
                        type: "pie",
                        data: data_katumur
                    }))

            }
            static initRandomEasyPieChart() {
                document.querySelectorAll(".js-pie-randomize").forEach((a => {
                    a.addEventListener("click", (t => {
                        a.closest(".block").querySelectorAll(".pie-chart").forEach((
                            a => {
                                jQuery(a).data("easyPieChart").update(Math
                                    .floor(100 * Math.random() + 1))
                            }))
                    }))
                }))
            }
            static init() {
                this.initChartsChartJS(), this.initRandomEasyPieChart()
            }
        }.init());
    </script>
@endpush
