<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <title>Plus Admin</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="../../../assets/vendors/mdi/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="../../../assets/vendors/flag-icon-css/css/flag-icon.min.css">
    <link rel="stylesheet" href="../../../assets/vendors/css/vendor.bundle.base.css">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <link rel="stylesheet" href="../../../assets/vendors/select2/select2.min.css" />
    <link rel="stylesheet" href="../../../assets/vendors/select2-bootstrap-theme/select2-bootstrap.min.css" />
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <!-- endinject -->
    <!-- Layout styles -->
    <link rel="stylesheet" href="../../../assets/css/demo_1/style.css" />
    <!-- End layout styles -->
    <link rel="shortcut icon" href="../../../assets/images/favicon.png" />
    <style>
        .centered-wrapper {
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
        }

        .card {
            border-radius: 15px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        .form-control {
            border-radius: 10px;
        }
    </style>
</head>

<body>
    <div class="main-panel">
        <div class="content-wrapper pb-0 centered-wrapper">
            <div class="col-md-4 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title text-center">Dashboard Kehutanan</h4>
                        <p class="card-description text-center">Register</p>
                        <?php if(session('message')): ?>
                        <div class="alert alert-success">
                            <?php echo e(session('message')); ?>

                        </div>
                        <?php endif; ?>
                        <form class="forms-sample" action="<?php echo e(route('actionregister')); ?>" method="post">
                            <?php echo csrf_field(); ?>
                            <div class="form-group">
                                <label><i class="fa fa-envelope"></i> Email</label>
                                <input type="email" name="email" class="form-control" placeholder="Email" required="">
                            </div>
                            <div class="form-group">
                                <label><i class="fa fa-user"></i> Username</label>
                                <input type="text" name="username" class="form-control" placeholder="Username" required="">
                            </div>
                            <div class="form-group">
                                <label><i class="fa fa-key"></i> Password</label>
                                <input type="password" name="password" class="form-control" placeholder="Password" required="">
                            </div>
                            <div class="text-center">
                                <button type="submit" class="btn btn-rounded btn-primary btn-lg mr-2"> Register </button>
                            </div>
                            <br>
                            <p class="text-center">Sudah punya akun? <a href="/">Login</a></p>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="../../../assets/vendors/js/vendor.bundle.base.js"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <script src="../../../assets/vendors/select2/select2.min.js"></script>
    <script src="../../assets/vendors/typeahead.js/typeahead.bundle.min.js"></script>
    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="../../../assets/js/off-canvas.js"></script>
    <script src="../../../assets/js/hoverable-collapse.js"></script>
    <script src="../../../assets/js/misc.js"></script>
    <script src="../../../assets/js/settings.js"></script>
    <script src="../../../assets/js/todolist.js"></script>
    <!-- endinject -->
    <!-- Custom js for this page -->
    <script src="../../../assets/js/file-upload.js"></script>
    <script src="../../../assets/js/typeahead.js"></script>
    <script src="../../../assets/js/select2.js"></script>
    <!-- End custom js for this page -->
</body>

</html><?php /**PATH Z:\KULIAH\SEMESTER 5\IAK\dashboard\resources\views/register.blade.php ENDPATH**/ ?>