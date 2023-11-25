<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">
    <title><?= getenv('APP_NAME') ?></title>
    <!-- Favicons -->
    <link rel="icon" type="image/png" sizes="16x16" href="<?= base_url('public/app/img/favicon.png') ?>">
    <link href="img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Roboto:100,300,400,500,700|Philosopher:400,400i,700,700i')?>" rel="stylesheet">

    <!-- Bootstrap css -->
    <!-- <link rel="stylesheet" href="css/bootstrap.css"> -->
    <link href="<?= base_url('public/app/lib/bootstrap/css/bootstrap.min.css') ?>" rel="stylesheet">

    <!-- Libraries CSS Files -->
    <link href="<?= base_url('public/app/lib/owlcarousel/assets/owl.carousel.min.css') ?>" rel="stylesheet">
    <link href="<?= base_url('public/app/lib/owlcarousel/assets/owl.theme.default.min.css') ?>" rel="stylesheet">
    <link href="<?= base_url('public/app/lib/font-awesome/css/font-awesome.min.css') ?>" rel="stylesheet">
    <link href="<?= base_url('public/app/lib/animate/animate.min.css') ?>" rel="stylesheet">
    <link href="<?= base_url('public/app/lib/modal-video/css/modal-video.min.css') ?>" rel="stylesheet">

    <link href="<?= base_url('public/app/lib/datatable/css/buttons.bootstrap4.min.css') ?>" rel="stylesheet">
    <link href="<?= base_url('public/app/lib/datatable/css/dataTables.bootstrap4.min.css') ?>" rel="stylesheet">
    <link href="<?= base_url('public/app/font-awesome/4.7.0/css/font-awesome.min.css') ?>" rel="stylesheet">
    <!-- Main Stylesheet File -->
    <!--<link href="< ?= base_url('public/app/css/style.css') ?>" rel="stylesheet">-->
    <link href="<?= base_url('public/app/css/golden.css') ?>" rel="stylesheet">

    <!-- JavaScript Libraries -->
    <script src="<?= base_url('public/app/lib/jquery/jquery.min.js') ?>"></script>
    <script src="<?= base_url('public/app/lib/jquery/jquery-migrate.min.js') ?>"></script>
    <script src="<?= base_url('public/app/lib/bootstrap/js/bootstrap.bundle.min.js') ?>"></script>
    <script src="<?= base_url('public/app/lib/superfish/hoverIntent.js') ?>"></script>
    <script src="<?= base_url('public/app/lib/superfish/superfish.min.js') ?>"></script>
    <script src="<?= base_url('public/app/lib/easing/easing.min.js') ?>"></script>
    <script src="<?= base_url('public/app/lib/modal-video/js/modal-video.js') ?>"></script>
    <script src="<?= base_url('public/app/lib/owlcarousel/owl.carousel.min.js') ?>"></script>
    <script src="<?= base_url('public/app/lib/wow/wow.min.js') ?>"></script>


    <!-- Contact Form JavaScript File -->
    <script src="<?= base_url('public/app/contactform/contactform.js') ?>"></script>

    <!-- Template Main Javascript File -->
    <script src="<?= base_url('public/app/js/main.js') ?>"></script>



    <script src="<?= base_url('public/app/lib/datatable/js/jquery.datatables.min.js') ?>"></script>
    <script src="<?= base_url('public/app/lib/datatable/js/datatables.bootstrap4.min.js') ?>"></script>
    <script src="<?= base_url('public/app/lib/datatable/js/dataTables.buttons.min.js') ?>"></script>
    <script src="<?= base_url('public/app/lib/datatable/js/buttons.bootstrap4.min.js') ?>"></script>
    <script src="<?= base_url('public/app/lib/datatable/js/buttons.flash.min.js') ?>"></script>
    <script src="<?= base_url('public/app/lib/datatable/js/jszip.min.js') ?>"></script>
    <script src="<?= base_url('public/app/lib/datatable/js/pdfmake.min.js') ?>"></script>
    <script src="<?= base_url('public/app/lib/datatable/js/vfs_fonts.js') ?>"></script>
    <script src="<?= base_url('public/app/lib/datatable/js/buttons.html5.min.js') ?>"></script>
    <script src="<?= base_url('public/app/lib/datatable/js/buttons.print.min.js') ?>"></script>
    <script src="<?= base_url('public/app/lib/datatable/js/buttons.colVis.min.js') ?>"></script>
    <!-- =======================================================
    Theme Name: eStartup
    Theme URL: https://bootstrapmade.com/estartup-bootstrap-landing-page-template/
    Author: BootstrapMade.com
    License: https://bootstrapmade.com/license/
  ======================================================= -->
</head>

<body>

    <header id="header" class="header" style="height: 100px; background-color: #d1a52d;">
        <div class="container">

            <div id="logo" class="pull-left mt-0">
                <!--<h1><a href="#body" class="scrollto"><span>e</span>Startup</a></h1>-->
                <!-- Uncomment below if you prefer to use an image logo -->
                <!-- <a href="#body"><img src="img/logo.png" alt="" title="" /></a>-->
                <a href="/users"><img src="<?= base_url('public/app/img/logo-mini.png') ?>" alt="homepage" width="70" height="82" class="light-logo" /></a>
                <strong><?= getenv('APP_NAME') ?></strong>
            </div>

            <nav id="nav-menu-container" style="margin-top: 1.1rem; font-size: 2em;">
                <ul class="nav-menu">
                    <li class="menu-active"><a href="/users"><i class="fa fa-area-chart"></i>
                            Convocatorias</a></li>
                    <?php
                    if ($this->session->userdata('user_rol') == 'estudiante') {
                        echo '<li class="nav-item">';
                        echo '<a class="nav-link" href="/users/postulaciones">';
                        echo '   <i class="fa fa-id-badge"></i>';
                        echo '    Mis postulaciones';
                        echo '</a>';
                        echo '</li>';

                        echo '<li class="nav-item">';
                        echo '<a class="nav-link" href="/users/perfil">';
                        echo '    <i class="fa fa-id-card-o"></i>';
                        echo '    Mi perfil</a>';
                        echo '</li>';

                        echo '<li class="nav-item">';
                        echo '<a class="nav-link" href="/users/descarga_cv">';
                        echo '    <i class="fa fa-file-word-o"></i>';
                        echo '    Modelo CV</a>';
                        echo '</li>';
                    } else {
                    }
                    ?>
                    <li class="menu-has-children">
                        <a href="#">
                        <!--<a class="nav-link dropdown-toggle text-white" id="navbarDropdownMenuLink" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">-->
                            <!--<i class="fa fa-user fa-fw"></i>-->
                            <strong><?= $this->session->userdata('user_condicion') . ' ' . $this->session->userdata('user_name') . ' ' . $this->session->userdata('user_paterno') ?></strong>
                        </a>
                        <ul>
                        <!--<ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdownMenuLink">-->
                            <li><a href="/users/credenciales"><i class="fa fa-key" aria-hidden="true"></i>&nbsp;Cambiar clave</a></li>
                            <li><a href="/logout"><i class="fa fa-sign-out" aria-hidden="true"></i>&nbsp;Cerrar sesión</a></li>
                        </ul>
                    </li>
                </ul>
            </nav><!-- #nav-menu-container -->
        </div>
    </header><!-- #header -->



    <!--==========================
    Datatables Section
  ============================-->
    <main id="content_app" class="padd-section mt-5">

        <div class="container">

            <?php $this->load->view($pagina); ?>
        </div>
    </main>


    <!--==========================
    Footer
  ============================-->
    <!--<footer class="footer align-bottom">-->
    <div class="footer fixed-bottom">
        <div class="container p-2 mt-0">
            <p class="text-white">&copy; Copyrights <?= getenv('APP_NAME') ?>. All rights reserved.</p>
        </div>

    </div>



</body>

</html>