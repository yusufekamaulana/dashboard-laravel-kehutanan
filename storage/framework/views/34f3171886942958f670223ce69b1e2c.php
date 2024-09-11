<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <title>Plus Admin</title>
    <!-- Vendor CSS Files -->
    <link rel="stylesheet" href="<?php echo e(asset('assets/vendors/mdi/css/materialdesignicons.min.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('assets/vendors/flag-icon-css/css/flag-icon.min.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('assets/vendors/css/vendor.bundle.base.css')); ?>">
    <!-- Plugin CSS Files -->
    <link rel="stylesheet" href="<?php echo e(asset('assets/vendors/jquery-bar-rating/css-stars.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('assets/vendors/font-awesome/css/font-awesome.min.css')); ?>">
    <!-- Layout Styles -->
    <link rel="stylesheet" href="<?php echo e(asset('assets/css/demo_2/style.css')); ?>">
    <!-- Favicon -->
    <link rel="shortcut icon" href="<?php echo e(asset('assets/images/favicon.png')); ?>">

    <link rel="stylesheet" href="<?php echo e(asset('tailwindcharts/css/flowbite.min.css')); ?>">
    <style>
        /* Additional styles for two-column layout */
        .pie-chart-container {
            display: flex;
            flex-wrap: wrap;
            gap: 20px;
            justify-content: center;
            /* Center items horizontally */
        }

        .pie-chart-item {
            flex: 1 1 calc(50% - 20px);
            box-sizing: border-box;
            min-width: 300px;
            height: 400px;
            text-align: center;
            align-items: center;
            display: flex;
            flex-direction: column;
            justify-content: center;
        }

        .pie-chart-title {
            font-weight: bold;
            text-align: center;
            margin-bottom: 10px;
        }
    </style>
</head>

<body>
    <div class="container-scroller">
        <!-- partial:partials/_horizontal-navbar.html -->
        <div class="horizontal-menu">
            <nav class="navbar top-navbar col-lg-12 col-12 p-0">
                <div class="container">
                    <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-center">
                        <a class="navbar-brand brand-logo" href="index.html">
                            <img src="../assets/images/logo.svg" alt="logo" />
                            <span class="font-12 d-block font-weight-light">Responsive Dashboard </span>
                        </a>
                        <a class="navbar-brand brand-logo-mini" href="index.html"><img src="../assets/images/logo-mini.svg" alt="logo" /></a>
                    </div>
                    <div class="navbar-menu-wrapper d-flex align-items-center justify-content-end">
                        <ul class="navbar-nav mr-lg-2">
                            <li class="nav-item nav-search d-none d-lg-block">
                                <div class="input-group">
                                    <div class="input-group-prepend hover-cursor" id="navbar-search-icon">
                                        <span class="input-group-text" id="search">
                                            <i class="mdi mdi-magnify"></i>
                                        </span>
                                    </div>
                                    <input type="text" class="form-control" id="navbar-search-input" placeholder="Search" aria-label="search" aria-describedby="search" />
                                </div>
                            </li>
                        </ul>
                        <ul class="navbar-nav navbar-nav-right">
                            <li class="nav-item nav-profile dropdown">
                                <a class="nav-link" id="profileDropdown" href="#" data-toggle="dropdown" aria-expanded="false">
                                    <div class="nav-profile-img">
                                        <img src="../assets/images/faces/face1.jpg" alt="image" />
                                    </div>
                                    <div class="nav-profile-text">
                                        <p class="text-black font-weight-semibold m-0"> Olson jass </p>
                                        <span class="font-13 online-color">online <i class="mdi mdi-chevron-down"></i></span>
                                    </div>
                                </a>
                                <div class="dropdown-menu navbar-dropdown" aria-labelledby="profileDropdown">
                                    <a class="dropdown-item" href="#">
                                        <i class="mdi mdi-cached mr-2 text-success"></i> Activity Log </a>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item" href="#">
                                        <i class="mdi mdi-logout mr-2 text-primary"></i> Signout </a>
                                </div>
                            </li>
                        </ul>
                        <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="horizontal-menu-toggle">
                            <span class="mdi mdi-menu"></span>
                        </button>
                    </div>
                </div>
            </nav>
            <nav class="bottom-navbar">
                <div class="container">
                    <ul class="nav page-navigation">
                        <li class="nav-item">
                            <a class="nav-link" href="index.html">
                                <i class="mdi mdi-compass-outline menu-icon"></i>
                                <span class="menu-title">Dashboard</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="pages/charts/chartjs.html">
                                <i class="mdi mdi-chart-bar menu-icon"></i>
                                <span class="menu-title">Charts</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="pages/tables/basic-table.html">
                                <i class="mdi mdi-table-large menu-icon"></i>
                                <span class="menu-title">Tables</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="https://www.bootstrapdash.com/demo/plus-free/documentation/documentation.html" class="nav-link" target="_blank">
                                <i class="mdi mdi-file-document-box menu-icon"></i>
                                <span class="menu-title">Docs</span></a>
                        </li>
                        <li class="nav-item">
                            <div class="nav-link d-flex">
                                <button class="btn btn-sm bg-danger text-white"> Trailing </button>
                                <div class="nav-item dropdown">
                                    <a class="nav-link count-indicator dropdown-toggle text-white font-weight-semibold" id="notificationDropdown" href="#" data-toggle="dropdown"> English </a>
                                    <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list" aria-labelledby="notificationDropdown">
                                        <a class="dropdown-item" href="#">
                                            <i class="flag-icon flag-icon-bl mr-3"></i> French </a>
                                        <div class="dropdown-divider"></div>
                                        <a class="dropdown-item" href="#">
                                            <i class="flag-icon flag-icon-cn mr-3"></i> Chinese </a>
                                        <div class="dropdown-divider"></div>
                                        <a class="dropdown-item" href="#">
                                            <i class="flag-icon flag-icon-de mr-3"></i> German </a>
                                        <div class="dropdown-divider"></div>
                                        <a class="dropdown-item" href="#">
                                            <i class="flag-icon flag-icon-ru mr-3"></i>Russian </a>
                                    </div>
                                </div>
                                <a class="text-white" href="index.html"><i class="mdi mdi-home-circle"></i></a>
                            </div>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
        <!-- partial -->
        <div class="container-fluid page-body-wrapper">
            <div class="main-panel">
                <div class="card content-wrapper pb-0" style="margin-top: 20px;">
                    <div class="card-body mb-0">
                        <div class="p-0" style="max-width: 100%; height: auto;">
                            <h5 class="font-weight-bold mb-0 text-center">Luas Hutan Berdasarkan Pulau dan Jenis Hutan</h5>
                            <div id="forest-area-chart" style="width: 100%; height: 400px;"></div> <!-- Placeholder for bar chart -->

                            <!-- Pie charts will go directly below this bar chart -->
                            <div id="pie-charts-container" class="pie-chart-container"></div> <!-- Placeholder for pie charts -->
                        </div>
                    </div>
                </div>
            </div>
            <!-- page-body-wrapper ends -->
        </div>

        <script src="<?php echo e(asset('tailwindcharts/js/apexcharts.js')); ?>"></script>
        <script src="<?php echo e(asset('tailwindcharts/js/flowbite.min.js')); ?>"></script>

        <script>
            // Data for Forest Area Chart
            const forestData = <?php echo json_encode($forestData, 15, 512) ?>;

            // Define color scheme for forest types
            const colors = {
                'Hutan Lindung': '#FF6384',
                'Suaka Alam': '#36A2EB',
                'Hutan Produksi Terbatas': '#FFCE56',
                'Hutan Produksi Tetap': '#4BC0C0',
                'Hutan Konservasi': '#9966FF'
            };

            // Prepare series data for grouped column chart
            const seriesData = [{
                    name: 'Hutan Lindung',
                    data: [],
                    color: colors['Hutan Lindung']
                },
                {
                    name: 'Suaka Alam',
                    data: [],
                    color: colors['Suaka Alam']
                },
                {
                    name: 'Hutan Produksi Terbatas',
                    data: [],
                    color: colors['Hutan Produksi Terbatas']
                },
                {
                    name: 'Hutan Produksi Tetap',
                    data: [],
                    color: colors['Hutan Produksi Tetap']
                },
                {
                    name: 'Hutan Konservasi',
                    data: [],
                    color: colors['Hutan Konservasi']
                },
                {
                    name: 'Luas Hutan dan Perairan',
                    data: [],
                    color: '#9966CC'
                } // Default color for this category
            ];

            // Prepare pie chart data by island (pulau)
            const pieData = {};

            // Populate series data and prepare pie chart data
            forestData.forEach(row => {
                seriesData[0].data.push(row.hutan_lindung);
                seriesData[1].data.push(row.suaka_alam);
                seriesData[2].data.push(row.hutan_produksi_terbatas);
                seriesData[3].data.push(row.hutan_produksi_tetap);
                seriesData[4].data.push(row.hutan_konservasi);
                seriesData[5].data.push(row.luas_hutan_dan_perairan);

                pieData[row.kode_pulau] = [
                    row.hutan_lindung,
                    row.suaka_alam,
                    row.hutan_produksi_terbatas,
                    row.hutan_produksi_tetap,
                    row.hutan_konservasi
                ];
            });

            // Render grouped bar chart
            const forestChartOptions = {
                chart: {
                    type: 'bar',
                    height: 350
                },
                series: seriesData,
                xaxis: {
                    categories: forestData.map(row => row.kode_pulau),
                    title: {
                        text: 'Pulau'
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
                        endingShape: 'rounded'
                    }
                },
                dataLabels: {
                    enabled: false
                },
                legend: {
                    position: 'bottom',
                    horizontalAlign: 'center'
                },
                colors: seriesData.map(type => type.color) // Set colors for bars
            };
            new ApexCharts(document.querySelector("#forest-area-chart"), forestChartOptions).render();

            // Render pie charts for each island (pulau)
            const pieChartContainer = document.querySelector('#pie-charts-container');
            Object.keys(pieData).forEach(island => {
                // Create container for each pie chart
                const pieChartDiv = document.createElement('div');
                pieChartDiv.classList.add('pie-chart-item');

                const title = document.createElement('div');
                title.classList.add('pie-chart-title');
                title.textContent = `Distribusi Hutan di Pulau ${island}`;
                pieChartDiv.appendChild(title);

                const chartDiv = document.createElement('div');
                chartDiv.id = `pie-chart-${island}`;
                pieChartDiv.appendChild(chartDiv);
                pieChartContainer.appendChild(pieChartDiv);

                // Prepare pie chart options
                const pieChartOptions = {
                    chart: {
                        type: 'pie',
                        height: 350
                    },
                    series: pieData[island],
                    labels: ['Hutan Lindung', 'Suaka Alam', 'Hutan Produksi Terbatas', 'Hutan Produksi Tetap', 'Hutan Konservasi'],
                    colors: Object.values(colors),
                    legend: {
                        position: 'bottom',
                        horizontalAlign: 'center'
                    }
                };
                new ApexCharts(chartDiv, pieChartOptions).render();
            });
        </script>

        <!-- Plugin JS Files -->
        <script src="<?php echo e(asset('assets/vendors/js/vendor.bundle.base.js')); ?>"></script>
        <script src="<?php echo e(asset('assets/vendors/jquery-bar-rating/jquery.barrating.min.js')); ?>"></script>
        <script src="<?php echo e(asset('assets/vendors/chart.js/Chart.min.js')); ?>"></script>
        <script src="<?php echo e(asset('assets/vendors/flot/jquery.flot.js')); ?>"></script>
        <script src="<?php echo e(asset('assets/vendors/flot/jquery.flot.resize.js')); ?>"></script>
        <script src="<?php echo e(asset('assets/vendors/flot/jquery.flot.categories.js')); ?>"></script>
        <script src="<?php echo e(asset('assets/vendors/flot/jquery.flot.fillbetween.js')); ?>"></script>
        <script src="<?php echo e(asset('assets/vendors/flot/jquery.flot.stack.js')); ?>"></script>

        <!-- Injected JS Files -->
        <script src="<?php echo e(asset('assets/js/off-canvas.js')); ?>"></script>
        <script src="<?php echo e(asset('assets/js/hoverable-collapse.js')); ?>"></script>
        <script src="<?php echo e(asset('assets/js/misc.js')); ?>"></script>
        <script src="<?php echo e(asset('assets/js/settings.js')); ?>"></script>
        <script src="<?php echo e(asset('assets/js/todolist.js')); ?>"></script>
        <!-- page-body-wrapper ends -->
    </div>
</body>

</html><?php /**PATH Z:\KULIAH\SEMESTER 5\IAK\dashboard\resources\views/welcome.blade.php ENDPATH**/ ?>