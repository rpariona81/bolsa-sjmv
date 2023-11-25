<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title><?= getenv('APP_NAME') ?></title>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="keywords" content="wrappixel, admin dashboard, html css dashboard, web dashboard, bootstrap 5 admin, bootstrap 5, css3 dashboard, bootstrap 5 dashboard, material pro admin bootstrap 5 dashboard, frontend, responsive bootstrap 5 admin template, material design, material dashboard bootstrap 5 dashboard template">
    <meta name="description" content="Material Pro is powerful and clean admin dashboard template">
    <meta name="robots" content="noindex,nofollow">
    <title><?= getenv('APP_NAME') ?></title>
    <link rel="canonical" href="https://www.wrappixel.com/templates/materialpro/">
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="<?= base_url('public/app/img/favicon.png') ?>">

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

    <link href="<?= base_url('public/app/font-awesome/4.7.0/css/font-awesome.min.css') ?>" rel="stylesheet">
    <!-- Main Stylesheet File -->
    <!--<link href="<?= base_url('public/app/css/style.css') ?>" rel="stylesheet">-->
    <link href="<?= base_url('public/app/css/golden.css') ?>" rel="stylesheet">

</head>

<body>
    <div class="container-fluid" style="background-image: url('public/app/img/home/2019-11-26.jpg');">
        <div class="container">
            <div class="col-md-4 col-lg-4 mx-auto pt-5">
                <img class="mb-4" src="<?= base_url('public/app/img/logo-mini.png') ?>" width="200" height="230" id="logo">
            </div>
        </div>
    </div>
    <section id="team" class="padd-section text-center wow fadeInUp" style="visibility: visible; animation-name: fadeInUp;">

        <div class="container mb-0">
            <div class="section-title text-center">

                <h2>Bolsa laboral institucional</h2>
                <h4>¡Bienvenidos al sitio de empleabilidad para Alumnos y Egresados!</h4>
                <h6>Haz clic sobre la imagen para acceder al sistema según tu tipo de usuario.</h6>
            </div>
        </div>

        <div class="container">
            <div class="row">

                <div class="col-md-6 col-md-4 col-lg-4">
                    <div class="team-block bottom">
                        <img src="<?= base_url('public/app/img/home/Especializacion_laboral.jpg') ?>" class="img-responsive" alt="img">
                        <div class="team-content">
                            <a class="btn btn-large btn-primary px-5" href="/wp-login"><strong>Estudiantes y egresados</strong></a>
                        </div>
                    </div>
                    <h4><i class="fa fa-mouse-pointer" aria-hidden="true"></i>&nbsp;&nbsp; Acceso para estudiantes y egresados</h4>
                </div>

                <div class="col-md-6 col-md-4 col-lg-4">
                    <div class="team-block bottom">
                        <img src="<?= base_url('public/app/img/home/estudiar-ingenieria-comercial.jpg') ?>" class="img-responsive" alt="img">
                        <div class="team-content">
                            <a class="btn btn-large btn-info px-5" href="/wp-login"><strong>Docentes</strong></a>
                        </div>
                    </div>
                    <h4><i class="fa fa-mouse-pointer" aria-hidden="true"></i>&nbsp;&nbsp; Acceso para docentes</h4>
                </div>

                <div class="col-md-6 col-md-4 col-lg-4">
                    <div class="team-block bottom">
                        <img src="<?= base_url('public/app/img/home/systemadmin_2.jpg') ?>" class="img-responsive" alt="img">
                        <div class="team-content">
                            <a class="btn btn-large btn-danger px-5" href="/wp-admin"><strong>Administrador</strong></a>
                        </div>
                    </div>
                    <h4><i class="fa fa-mouse-pointer" aria-hidden="true"></i>&nbsp;&nbsp; Acceso al Administrador</h4>
                </div>

            </div>

    </section>
    </div>

    <!-- -------------------------------------------------------------- -->
    <!-- All Required js -->
    <!-- -------------------------------------------------------------- -->
    <!-- JavaScript Libraries -->
    <script src="<?= base_url('public/app/lib/jquery/jquery.min.js') ?>"></script>
    <script src="<?= base_url('public/app/lib/jquery/jquery-migrate.min.js') ?>"></script>
    <script src="<?= base_url('public/app/lib/bootstrap/js/bootstrap.bundle.min.js') ?>"></script>
    <!-- -------------------------------------------------------------- -->
    <!-- This page plugin js -->
    <!-- -------------------------------------------------------------- -->
    <!-- Template Main Javascript File -->
    <script src="<?= base_url('public/app/js/main.js') ?>"></script>
</body>

</html>