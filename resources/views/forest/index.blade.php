<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <title>Kehutanan</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="../assets/vendors/mdi/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="../assets/vendors/flag-icon-css/css/flag-icon.min.css">
    <link rel="stylesheet" href="../assets/vendors/css/vendor.bundle.base.css">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <link rel="stylesheet" href="../assets/vendors/jquery-bar-rating/css-stars.css" />
    <link rel="stylesheet" href="../assets/vendors/font-awesome/css/font-awesome.min.css" />
    <link rel="stylesheet" href="../assets/css/demo_1/style.css" />
    <!-- End layout styles -->
    <link rel="shortcut icon" href="../assets/images/logo.svg"/>
    <style>
        .card {
            border-radius: 15px;
            /* Rounded corners */
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            /* Optional: Adds a shadow for a nicer effect */
        }
    </style>
    <style>
        .datatext-card {
            border-radius: 10px;
            text-align: center;
            color: white;
            font-size: 30px;
            font-weight: bold;
        }

        .datatext-card.red {
            background-color: #161D6F;
        }

        .datatext-card.blue {
            background-color: #0B2F9F;
        }

        .datatext-card.yellow {
            background-color: #4F75FF;
        }

        .datatext-card.purp {
            background-color: #6C48C5;
        }
        .datatext-card.green {
            background-color: #C68FE6;
        }
        .datatext-card.gren {
            background-color: #2E073F;
        }
        

        .datatext-card p {
            margin: 0;
        }

        .datatext-card small {
            display: block;
            font-size: 12px;
            font-weight: normal;
        }
    </style>


</head>

<body>
    <div class="container-scroller">
        <!-- partial:partials/_sidebar.html -->
        <nav class="sidebar sidebar-offcanvas" id="sidebar">
            <ul class="nav">
                <li class="nav-item nav-profile border-bottom">
                    <a href="#" class="nav-link flex-column">
                        <div class="nav-profile-image">
                            <img src="../assets/images/logo.svg" alt="profile" />
                            <!--change to offline or busy as needed-->
                        </div>
                        <div class="nav-profile-text d-flex ml-0 mb-3 flex-column">
                            <span class="font-weight-semibold mb-1 mt-2 text-center">Team C</span>
                        </div>
                    </a>
                </li>

                <li class="pt-2 pb-0">
                    <span class="nav-item-head">Dashboard Menu</span>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/home">
                        <i class="mdi mdi-pine-tree menu-icon"></i>
                        <span class="menu-title">Hutan</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/produksi">
                        <i class="mdi mdi-houzz menu-icon"></i>
                        <span class="menu-title">Industri</span>
                    </a>
                </li>                
                <li class="nav-item">
                    <a class="nav-link" href="table/final_hutan_1">
                        <i class="mdi mdi-database menu-icon"></i>
                        <span class="menu-title">Raw Data 1</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="table/final_hutan_2">
                        <i class="mdi mdi-database menu-icon"></i>
                        <span class="menu-title">Raw Data 2</span>
                    </a>
                </li>
            </ul>
        </nav>
        <!-- partial -->
        <div class="container-fluid page-body-wrapper">
            <!-- partial:partials/_navbar.html -->
            <nav class="navbar default-layout-navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
                <div class="navbar-menu-wrapper d-flex align-items-stretch">
                    <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
                        <span class="mdi mdi-chevron-double-left"></span>
                    </button>
                    <div class="d-flex align-items-center">
                        <h3 class="text-white font-weight-bold m-0">Dashboard Kehutanan</h3>
                    </div>
                    <ul class="navbar-nav navbar-nav-right">
                        <li class="nav-item nav-profile dropdown">
                            <a class="nav-link" id="profileDropdown" href="#" data-toggle="dropdown" aria-expanded="false">
                                <div class="nav-profile-img">
                                    <img src="../assets/images/faces/face-1.jpg" alt="image" />
                                </div>
                                <div class="nav-profile-text">
                                    <p class="text-white font-weight-semibold m-0"> Loged In </p>
                                </div>
                            </a>
                            <div class="dropdown-menu navbar-dropdown" aria-labelledby="profileDropdown">
                                <a class="dropdown-item" href="/actionlogout">
                                    <i class="mdi mdi-logout mr-2 text-primary"></i> Signout </a>
                            </div>
                        </li>
                    </ul>
                </div>
            </nav>
            <!-- partial -->
            <div class="main-panel">
                <div class="content-wrapper pb-0 pt-0">
                    <div class="main-panel">
                            <!-- chart row starts here -->
                            <H1 class="font-weight-bold mb-4 mt-0 text-center">Total Luas Lahan Perhutanan</H1>
                            <div class="row">
                                <div class="col-sm-4 stretch-card grid-margin">
                                    <div class="card datatext-card red">
                                        <div class="card-body">
                                            <p>{{ number_format($totalForestData2022->Total_Hutan_Lindung) }} Ha</p>
                                            <small>Hutan Lindung</small>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-4 stretch-card grid-margin">
                                    <div class="card datatext-card blue">
                                        <div class="card-body">
                                            <p>{{ number_format($totalForestData2022->Total_Suaka_Alam_dan_Pelestarian_Alam) }} Ha</p>
                                            <small>Suaka Alam dan Pelestarian Alam</small>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-4 stretch-card grid-margin">
                                    <div class="card datatext-card yellow">
                                        <div class="card-body">
                                            <p>{{ number_format($totalForestData2022->Total_Hutan_Produksi_Terbatas) }} Ha</p>
                                            <small>Hutan Produksi Terbatas</small>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-4 stretch-card grid-margin">
                                    <div class="card datatext-card gren">
                                        <div class="card-body">
                                            <p>{{ number_format($totalForestData2022->Total_Hutan_Produksi_Tetap) }} Ha</p>
                                            <small>Hutan Produksi Tetap</small>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-4 stretch-card grid-margin">
                                    <div class="card datatext-card purp">
                                        <div class="card-body">
                                            <p>{{ number_format($totalForestData2022->Total_Hutan_Produksi_yang_dapat_Dikonversi) }} Ha</p>
                                            <small>Hutan Produksi yang dapat Dikonversi</small>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-4 stretch-card grid-margin">
                                    <div class="card datatext-card green">
                                        <div class="card-body">
                                            <p>{{ number_format($totalForestData2022->Total_Jumlah_Luas_Hutan_dan_Perairan) }} Ha</p>
                                            <small>Total Luas Hutan dan Perairan</small>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- first row starts here -->
                            <div class="row">
                                <div class="col-xl-12 stretch-card grid-margin">
                                    <div class="card">
                                        <div class="card-body">
                                            <h5 class="font-weight-bold mb-0 text-center">Luas Hutan Berdasarkan Pulau dan Jenis Hutan</h5>
                                            <div id="forest-area-chart" style="width: 100%; height: 400px;"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        
                    </div>
                </div>
            </div>
            <!-- main-panel ends -->
        </div>
        <!-- page-body-wrapper ends -->
    </div>
    <script src="{{ asset('tailwindcharts/js/apexcharts.js') }}"></script>
    <script src="{{ asset('tailwindcharts/js/flowbite.min.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Data for Forest Area Chart
            const forestData = @json($forestData2022);

            // Define color scheme for forest types
            const colors = {
                'Hutan_Lindung': '#161D6F',
                'Suaka_Alam_dan_Pelestarian_Alam': '#0B2F9F',
                'Hutan_Produksi_Terbatas': '#1230AE',
                'Hutan_Produksi_Tetap': '#6C48C5',
                'Hutan_Produksi_yang_dapat_Dikonversi': '#C68FE6'
            };

            // Prepare series data for grouped bar chart
            const seriesData = [{
                    name: 'Hutan Lindung',
                    data: [],
                    color: colors['Hutan_Lindung']
                },
                {
                    name: 'Suaka Alam dan Pelestarian Alam',
                    data: [],
                    color: colors['Suaka_Alam_dan_Pelestarian_Alam']
                },
                {
                    name: 'Hutan Produksi Terbatas',
                    data: [],
                    color: colors['Hutan_Produksi_Terbatas']
                },
                {
                    name: 'Hutan Produksi Tetap',
                    data: [],
                    color: colors['Hutan_Produksi_Tetap']
                },
                {
                    name: 'Hutan Produksi yang dapat Dikonversi',
                    data: [],
                    color: colors['Hutan_Produksi_yang_dapat_Dikonversi']
                }
            ];

            // Prepare pie chart data by island (pulau)
            const pieData = {};
            forestData.forEach(row => {
                seriesData[0].data.push(row.Hutan_Lindung);
                seriesData[1].data.push(row.Suaka_Alam_dan_Pelestarian_Alam);
                seriesData[2].data.push(row.Hutan_Produksi_Terbatas);
                seriesData[3].data.push(row.Hutan_Produksi_Tetap);
                seriesData[4].data.push(row.Hutan_Produksi_yang_dapat_Dikonversi);
            });

            // Render grouped bar chart
            const forestChartOptions = {
                chart: {
                    type: 'bar',
                    height: 400
                },
                series: seriesData,
                xaxis: {
                    categories: forestData.map(row => row.kode_pulau),
                    title: {
                        text: 'Pulau'
                    },
                    labels: {
                        style: {
                            fontSize: '10px'
                        }
                    }
                },
                yaxis: {
                    title: {
                        text: 'Total Area (in Ha)'
                    }
                },
                plotOptions: {
                    bar: {
                        horizontal: false,
                        columnWidth: '80%',
                        endingShape: 'rounded',
                        borderRadius: 3
                    }
                },
                dataLabels: {
                    enabled: false
                },
                legend: {
                    position: 'bottom',
                    horizontalAlign: 'center'
                },
                colors: seriesData.map(type => type.color)
            };
            new ApexCharts(document.querySelector("#forest-area-chart"), forestChartOptions).render();

        });
    </script>
    <!-- container-scroller -->
    <!-- plugins:js -->
    <script src="../assets/vendors/js/vendor.bundle.base.js"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <script src="../assets/vendors/jquery-bar-rating/jquery.barrating.min.js"></script>
    <script src="../assets/vendors/chart.js/Chart.min.js"></script>
    <script src="../assets/vendors/flot/jquery.flot.js"></script>
    <script src="../assets/vendors/flot/jquery.flot.resize.js"></script>
    <script src="../assets/vendors/flot/jquery.flot.categories.js"></script>
    <script src="../assets/vendors/flot/jquery.flot.fillbetween.js"></script>
    <script src="../assets/vendors/flot/jquery.flot.stack.js"></script>
    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="../assets/js/off-canvas.js"></script>
    <script src="../assets/js/hoverable-collapse.js"></script>
    <script src="../assets/js/misc.js"></script>
    <script src="../assets/js/settings.js"></script>
    <script src="../assets/js/todolist.js"></script>
    <!-- endinject -->
    <!-- Custom js for this page -->
    <script src="../assets/js/dashboard.js"></script>
    <!-- End custom js for this page -->
</body>

</html>