<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title><?= $title ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="<?= base_url('assets') ?> /img/BPBDclp.png" type="image/x-icon" />
    <link rel="stylesheet" href="<?= base_url('assets') ?> /css/bootstrap.min.css">
    <link rel="stylesheet" href="<?= base_url('assets') ?> /css/font-awesome.min.css">
    <link rel="stylesheet" href="<?= base_url('assets') ?> /css/themify-icons.css">
    <link rel="stylesheet" href="<?= base_url('assets') ?> /css/metisMenu.css">
    <link rel="stylesheet" href="<?= base_url('assets') ?> /css/owl.carousel.min.css">
    <link rel="stylesheet" href="<?= base_url('assets') ?> /css/slicknav.min.css">
    <!-- amchart css -->
    <link rel="stylesheet" href="https://www.amcharts.com/lib/3/plugins/export/export.css" type="text/css" media="all" />
    <!-- others css -->
    <link rel="stylesheet" href="<?= base_url('assets') ?> /css/typography.css">
    <link rel="stylesheet" href="<?= base_url('assets') ?> /css/default-css.css">
    <link rel="stylesheet" href="<?= base_url('assets') ?> /css/styles.css">
    <link rel="stylesheet" href="<?= base_url('assets') ?> /css/responsive.css">
    <!-- modernizr css -->
    <script src="<?= base_url('assets') ?> /js/vendor/modernizr-2.8.3.min.js"></script>
</head>

<body>
    <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
    <!-- preloader area start -->
    <div id="preloader">
        <div class="loader"></div>
    </div>
    <!-- preloader area end -->
    <!-- login area start -->
    <div class="login-area">
        <div class="container">
            <div class="login-box ptb--100">
                <form action="<?= base_url('auth/change') ?>" method="post">
                    <div class="login-form-head" style="background-color: darkorange;">
                        <h4>Reset Password</h4>
                        <p>Hello <?= $this->session->userdata('reset_email'); ?>, enter new password to reset your account</p>
                    </div>
                    <div class="login-form-body">
                        <div class="form-gp">
                            <label for="exampleInputEmail1">New Password</label>
                            <input type="password" name="password1">
                            <i class="ti-lock"></i>
                            <?= form_error('password1', '<small class="text-danger pl-3">', '</small>'); ?>
                        </div>
                        <div class="form-gp">
                            <label for="exampleInputPassword1">Confirm Password</label>
                            <input type="password" name="password2">
                            <i class="ti-lock"></i>
                            <?= form_error('password2', '<small class="text-danger pl-3">', '</small>'); ?>
                        </div>
                        <div class="submit-btn-area">
                            <button id="form_submit" type="submit">Submit <i class="ti-arrow-right"></i></button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- login area end -->

    <!-- jquery latest version -->
    <script src="<?= base_url('assets') ?> /js/vendor/jquery-2.2.4.min.js"></script>
    <!-- bootstrap 4 js -->
    <script src="<?= base_url('assets') ?> /js/popper.min.js"></script>
    <script src="<?= base_url('assets') ?> /js/bootstrap.min.js"></script>
    <script src="<?= base_url('assets') ?> /js/owl.carousel.min.js"></script>
    <script src="<?= base_url('assets') ?> /js/metisMenu.min.js"></script>
    <script src="<?= base_url('assets') ?> /js/jquery.slimscroll.min.js"></script>
    <script src="<?= base_url('assets') ?> /js/jquery.slicknav.min.js"></script>

    <!-- others plugins -->
    <script src="<?= base_url('assets') ?> /js/plugins.js"></script>
    <script src="<?= base_url('assets') ?> /js/scripts.js"></script>
</body>

</html>