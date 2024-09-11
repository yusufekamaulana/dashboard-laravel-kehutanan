<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <title>Dynamic Table</title>
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
        .table-container {
            overflow-x: auto;
            /* Enable horizontal scrolling */
            margin: 20px 0;
        }
        .table {
            width: 100%;
            border-collapse: collapse;
        }
        .table th, .table td {
            padding: 10px;
            text-align: left;
        }
        .table th {
            background-color: #0B2F9F; /* Green background */
            color: white;
        }
        .table tr:nth-child(even) {
            background-color: #f2f2f2; /* Zebra striping */
        }
        .card {
            border-radius: 15px;
            /* Rounded corners */
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            /* Optional: Adds a shadow for a nicer effect */
        }
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
                    <a class="nav-link" href="final_hutan_1">
                        <i class="mdi mdi-database menu-icon"></i>
                        <span class="menu-title">Raw Data 1</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="final_hutan_2">
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
                    <div class="table-container">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    @foreach($columns as $column)
                                    <th>{{ $column }}</th>
                                    @endforeach
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($data as $row)
                                <tr>
                                    @foreach($columns as $column)
                                    <td>{{ $row->$column }}</td>
                                    @endforeach
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
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
