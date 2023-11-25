<div class="jumbotron jumbotron-fluid mt-3 mb-3">
    <div class="container-fluid">
        <br />
        <h1 class="display-4">Panel de administración</h1>
        <p class="lead">Bienvenido Administrador.</p>
    </div>
    <div class="container-fluid">
        <!---- CONTADOR DE REGISTROS --->
        <div class="row">
            <div class="col-xl-3 col-sm-6 mb-xl-0">
                <div class="card mb-4">
                    <div class="card-header"><strong>Estudiantes y egresados</strong></div>
                    <div class="card-body">
                        <div class="d-flex align-items-center justify-content-between">
                            <div class="float-left text-danger">
                                <i class="fa fa-users fa-4x"></i>
                            </div>
                            <div class="float-right">
                                <p class="mb-0 text-right">Usuarios activos</p>
                                <div class="fluid-container">
                                    <h3 class="font-weight-medium text-right mb-0"><?= $cantEstudEgres ?></h3>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-sm-6 mb-xl-0">
                <div class="card mb-4">
                    <div class="card-header"><strong>Ofertas laborales</strong></div>
                    <div class="card-body">
                        <div class="d-flex align-items-center justify-content-between">
                            <div class="float-left text-warning">
                                <i class="fa fa-users fa-4x"></i>
                            </div>
                            <div class="float-right">
                                <p class="mb-0 text-right">Convocatorias vigentes</p>
                                <div class="fluid-container">
                                    <h3 class="font-weight-medium text-right mb-0"><?= $cantOffersjobs ?></h3>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-sm-6 mb-xl-0">
                <div class="card mb-4">
                    <div class="card-header"><strong>Programas de estudios</strong></div>
                    <div class="card-body">
                        <div class="d-flex align-items-center justify-content-between">
                            <div class="float-left text-success">
                                <i class="fa fa-users fa-4x"></i>
                            </div>
                            <div class="float-right">
                                <p class="mb-0 text-right">Oferta educativa</p>
                                <div class="fluid-container">
                                    <h3 class="font-weight-medium text-right mb-0"><?= $cantCareers ?></h3>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-sm-6 mb-xl-0">
                <div class="card mb-4">
                    <div class="card-header"><strong>Postulaciones registradas</strong></div>
                    <div class="card-body">
                        <div class="d-flex align-items-center justify-content-between">
                            <div class="float-left text-primary">
                                <i class="fa fa-users fa-4x"></i>
                            </div>
                            <div class="float-right">
                                <p class="mb-0 text-right">Número de postulaciones</p>
                                <div class="fluid-container">
                                    <h3 class="font-weight-medium text-right mb-0"><?= $cantPostulations ?></h3>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!---- RESUMEN DE ESTUDIANTES POR PROGRAMA DE ESTUDIOS --->
        <div class="row">
            <div class="col-12 grid-margin">
                <div class="card mb-4">
                    <div class="card-body">
                        <h4 class="card-title text-primary mb-5">Estudiantes/Egresados por programas de estudios</h4>
                        <?php foreach ($cantUsersByCareer as $item) : ?>
                            <div class="wrapper container">
                                <div class="d-flex justify-content-between">
                                    <h5 class="mb-2"><?= $item->career_title ?></h5>
                                    <p class="mb-2 text-primary display-6"><?= $item->cant_Users ?></p>
                                </div>
                                <div class="progress">
                                    <div class="progress-bar bg-primary progress-bar-striped progress-bar-animated" role="progressbar" style="height:50px; width:<?= ($item->cant_Users / $cantEstudEgres) * 100 + 25?>%" aria-valuenow="<?= ($item->cant_Users / $cantEstudEgres) ?>" aria-valuemin="0" aria-valuemax="<?= $cantEstudEgres ?>"></div>
                                </div>
                            </div><br>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>
        </div>
        <!---- ULTIMAS PUBLICACIONES --->
        <div class="row">
            <div class="col-12 grid-margin">
                <div class="card mb-4">
                    <div class="card-body">
                        <h5 class="card-title mb-4">Últimas convocatorias publicadas</h5>
                        <div class="container-fluid">
                            <?php foreach ($offersjobsLast as $itemjob) : ?>
                                <div class="row ticket-card mt-3 pb-2 border-top pb-3 mb-3">
                                    <div class="ticket-details col-md-10">
                                        <p class="text-dark font-weight-semibold mr-2 mt-4 mb-0 "><i class="fa fa-graduation-cap" style="height: 20px; width: 20px; text-align: center;"></i>
                                            <span>&nbsp;<?= $itemjob->career_title ?></span>
                                        </p>
                                        <p class="text-primary mr-1 mb-0"><i class="fa fa-book" style="height: 20px; width: 20px; text-align: center;"></i>&nbsp; [Cód. <?= str_pad($itemjob->id, 6, '0', STR_PAD_LEFT) ?> ]</span>&nbsp;<?= $itemjob->title.' <br>'.substr(htmlspecialchars_decode($itemjob->detail),0,100)  ?></p>
                                        <p class="text-primary mr-1 mb-0"><i class="fa fa-industry fa-fw" style="height: 20px; width: 20px; text-align: center;"></i>&nbsp; <?= $itemjob->employer ?></p>
                                        <p class="text-default mr-1 mb-0">
                                            <i class="fa fa-money" style="height: 20px; width: 20px; text-align: center;"></i>
                                            <span>&nbsp;S/&nbsp;<?= $itemjob->salary ?></span>
                                        </p>
                                        <p>
                                            <i class="fa fa-map-marker" style="height: 20px; width: 20px; text-align: center;"></i>
                                            <span>&nbsp;Ubicación:&nbsp;<?= $itemjob->ubicacion ?>
                                        </p>
                                        <div class="row text-gray d-md-flex d-none">
                                            <div class="col-6 d-flex">
                                                <small class="mb-0 mr-2 text-muted text-muted"><?= $itemjob->vacancy_numbers ?>&nbsp;vacantes - &nbsp;<?= $itemjob->type_offer ?></small>
                                            </div>
                                            <div class="col-6 d-flex">
                                                <i class="fa fa-calendar" style="height: 20px; width: 20px; text-align: center;"></i><small class="Last-responded mr-2 mb-0 text-muted text-muted">Finaliza el <?= date("d/m/Y", strtotime($itemjob->date_vigency)); ?></small>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            <?php endforeach; ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>