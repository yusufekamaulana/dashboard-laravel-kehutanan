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
    <link rel="shortcut icon" href="../assets/images/logo.svg" />
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

                <li class="pt-2 pb-1">
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
                        <div class="row">
                            <!-- Akasia Chart -->
                            <div class="col-sm-6 stretch-card grid-margin">
                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="card-title text-center">Produksi Akasia</h4>
                                        <div id="line-chart-akasia"></div>
                                    </div>
                                </div>
                            </div>
                            <!-- Kayu Indah Chart -->
                            <div class="col-sm-6 stretch-card grid-margin">
                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="card-title text-center">Produksi Kelompok Kayu Indah</h4>
                                        <div id="line-chart-kayu-indah"></div>
                                    </div>
                                </div>
                            </div>
                            <!-- Meranti Chart -->
                            <div class="col-sm-6 stretch-card grid-margin">
                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="card-title text-center">Produksi Kelompok Meranti</h4>
                                        <div id="line-chart-meranti"></div>
                                    </div>
                                </div>
                            </div>
                            <!-- Rimba Campuran Chart -->
                            <div class="col-sm-6 stretch-card grid-margin">
                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="card-title text-center">Produksi Kelompok Rimba Campuran</h4>
                                        <div id="line-chart-rimba-campuran"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- first row starts here -->
                        <div class="row">
                            <div class="col-xl-12 stretch-card grid-margin">
                                <div class="card">
                                    <div class="card-body">                                    
                                    <h3 class="text-black font-weight-bold text-center m-0">Pelaku Industri Kehutanan</h3>
                                    <div id="pelaku-area-chart" style="width: 100%; height: 400px;"></div>
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
    <!-- container-scroller -->
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Data for Forest Area Chart
            const forestData = @json($pelakuindustri2022);

            // Define color scheme for forest types
            const colors = {
                'jumlah_HPH': '#161D6F',
                'jumlah_pembudidaya': '#0B2F9F'
            };

            // Prepare series data for grouped bar chart
            const seriesData = [{
                    name: 'Perusahaan Hak Pengusahaan Hutan',
                    data: [],
                    color: colors['jumlah_HPH']
                },
                {
                    name: 'Pembudidaya',
                    data: [],
                    color: colors['jumlah_pembudidaya']
                }
            ];
            forestData.forEach(row => {
                seriesData[0].data.push(row.jumlah_hph);
                seriesData[1].data.push(row.jumlah_pembudidaya);
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
                        text: 'Jumlah'
                    },
                    labels: {
                        style: {
                            fontSize: '10px'
                        }
                    }
                },
                yaxis: {
                    title: {
                        text: 'Pulau'
                    }
                },
                plotOptions: {
                    bar: {
                        horizontal: true,
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
            new ApexCharts(document.querySelector("#pelaku-area-chart"), forestChartOptions).render();

        });
    </script>
    <script>
        const dataAkasia = @json($produksiAkasia);
        const dataKayuIndah = @json($produksiIndah);
        const dataMeranti = @json($produksiMeranti);
        const dataRimbaCampuran = @json($produksiCampuran);

        const years = [2019, 2020, 2021, 2022];

        // Fungsi untuk membuat chart
        function createLineChart(elementId, seriesName, data, color) {
            const options = {
                chart: {
                    type: "area",
                    height: "100%",
                    maxWidth: "100%",
                    toolbar: {
                        show: false
                    },
                    fontFamily: "Inter, sans-serif",
                    dropShadow: {
                        enabled: false,
                    }
                },
                dataLabels: {
                    enabled: false,
                },
                stroke: {
                    width: 5
                },
                fill: {
                    type: "gradient",
                    gradient: {
                        opacityFrom: 0.55,
                        opacityTo: 0,
                        shade: color,
                        gradientToColors: [color]
                    },
                },
                series: [{
                    name: seriesName,
                    data: data,
                    color: color
                }],
                xaxis: {
                    categories: years,
                    title: {
                        text: "Tahun"
                    }
                },
                yaxis: {
                    title: {
                        text: "Produksi Kayu Bulat (M3)"
                    }
                },
                grid: {
                    strokeDashArray: 4
                }
            };

            const chart = new ApexCharts(document.getElementById(elementId), options);
            chart.render();
        }

        // Membuat chart untuk setiap jenis kayu
        createLineChart("line-chart-akasia", "Akasia", dataAkasia, "#1A56DB");
        createLineChart("line-chart-kayu-indah", "Kelompok Kayu Indah", dataKayuIndah, "#FF7F0E");
        createLineChart("line-chart-meranti", "Kelompok Meranti", dataMeranti, "#2CA02C");
        createLineChart("line-chart-rimba-campuran", "Kelompok Rimba Campuran", dataRimbaCampuran, "#D62728");
    </script>

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