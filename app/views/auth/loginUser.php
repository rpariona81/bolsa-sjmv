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
    <title>Material Pro Template by WrapPixel</title>
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

    <link href="<?= base_url('public/app/lib/datatable/css/buttons.bootstrap4.min.css') ?>" rel="stylesheet">
    <link href="<?= base_url('public/app/lib/datatable/css/dataTables.bootstrap4.min.css') ?>" rel="stylesheet">
    <link href="<?= base_url('public/app/font-awesome/4.7.0/css/font-awesome.min.css') ?>" rel="stylesheet">
    <!-- Main Stylesheet File -->
    <!--<link href="<?= base_url('public/app/css/style.css') ?>" rel="stylesheet">-->
    <link href="<?= base_url('public/app/css/golden.css') ?>" rel="stylesheet">

    <link href="<?= base_url('public/app/css/signin.css') ?>" rel="stylesheet">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body class="text-center">
    <div class="container col-md-4 col-lg-4">
        <div>
            <img class="mb-4" src="<?= base_url('public/app/img/logo-mini.png') ?>" width="200" height="230" id="logo">
        </div>
        <div class="card">

            <div class="card-header" style="background-color: darkgoldenrod;">
                <p class="font-weight-light text-white my-1">INICIAR SESIÓN</p>
            </div>
            <div class="card-body">
                <?php if ($this->session->flashdata('flashSuccess')) : ?>
                    <div class="d-grid gap-2 px-3">
                        <p class='mt-1 alert alert-success'> <?= $this->session->flashdata('flashSuccess') ?> </p>
                    </div>
                <?php endif ?>

                <?php if ($this->session->flashdata('flashError')) : ?>
                    <div class="d-grid gap-2 px-3">
                        <p class='mt-1 alert alert-danger'> <?= $this->session->flashdata('flashError') ?> </p>
                    </div>
                <?php endif ?>

                <?php if ($this->session->flashdata('flashInfo')) : ?>
                    <div class="d-grid gap-2 px-3">
                        <p class='mt-1 alert alert-info'> <?= $this->session->flashdata('flashInfo') ?> </p>
                    </div>
                <?php endif ?>

                <?php if ($this->session->flashdata('flashWarning')) : ?>
                    <div class="d-grid gap-2 px-3">
                        <p class='mt-1 alert alert-warning'> <?= $this->session->flashdata('flashWarning') ?> </p>

                    <?php endif ?>

                    <?= form_open('authcontroller/loginUser', ['class' => 'form-signin']) ?>
                    <div class="form-row">
                        <label for="inputEmail" class="sr-only">Usuario</label>
                        <input class="form-control" id="username" name="username" type="text" placeholder="Usuario" value="<?= set_value('username') ?>" size="50" required />
                    </div><br>
                    <div class="form-row">
                        <label for="inputPassword" class="sr-only">Contraseña</label>
                        <input class="form-control" id="password" name="password" type="password" placeholder="Contraseña" value="<?= set_value('password') ?>" size="50" required />
                    </div>
                    <div class="form-row">
                        <div class="col-6 pull-left">
                            <a class="btn btn-warning px-3 btn-block" href="/">Regresar</a>&nbsp;&nbsp;
                        </div>
                        <div class="col-6 pull-right">
                            <input class="btn bg-primary text-white px-3 btn-block" id="btnLogin" type="submit" value="Ingresar"></input>
                        </div>
                    </div>
                    <?= form_close() ?>
                    </div>
            </div>
            <!-- -------------------------------------------------------------- -->
            <!-- Login box.scss -->
            <!-- -------------------------------------------------------------- -->
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