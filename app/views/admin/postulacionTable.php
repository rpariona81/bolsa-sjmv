<!-- ============================================================== -->
<!-- Start Page Content -->
<!-- ============================================================== -->
<div class="row">
    <!-- column -->
    <div class="col-lg-12">
        <div class="card border border-white">
            <div class="card-header bg-info bg-opacity">
                <!--https://stackoverflow.com/questions/18842946/refresh-form-page-after-submitting-the-form-->
                <?= form_open('', array('id' => 'FRM_DATOS', 'class' => 'needs-validation', 'onsubmit' => 'window.location.reload()')); ?>
                <!--< ?= form_open('', array('id' => 'FRM_DATOS', 'class' => 'needs-validation')); ?>-->
                <div class="row pt-3">
                    <div class="col-md-5 col-8 align-self-center">
                        <div class="mb-3">
                            <h4 class="text-white"><strong>Postulaciones</strong></h4>
                        </div>
                    </div>
                    <div class="col-md-7 col-4 mx-auto">
                        <div class="mb-3">
                            <div class="input-group mb-3">
                                <?= form_dropdown('career_id', $career, $selectValue, 'class="form-select bg-white border" id="career_id"'); ?>
                                <button class="btn btn-dark pull-right font-weight-medium px-4 mb-0" type="submit">
                                    <!--<i class="ti-search"></i>-->
                                    <i class="fa fa-search"></i>&nbsp;Filtrar por programa
                                    <!--<i class="fa fa-filter"></i>-->
                                </button>
                                <a class="btn btn-danger" href="/admin/postulaciones">Limpiar filtro</a>
                            </div>
                        </div>
                    </div>
                </div>
                <?= form_close() ?>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table id="datatablesSimple" name="datatablesSimple" class="table nowrap table-hover table-bordered" style="width:100%">
                        <thead class="bg-primary text-white">
                            <tr>
                                <th>Cod Postulación</th>
                                <th>Cod Oferta</th>
                                <th>Programa de estudios</th>
                                <th>Convocatoria</th>
                                <th>Tipo</th>
                                <th>F. publicación</th>
                                <th>F. vigencia</th>
                                <th>Postulante</th>
                                <th>Condición</th>
                                <th>F. Postulación</th>
                                <th>Última actualización</th>
                                <th>Acciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($query as $item) : ?>
                                <tr>
                                    <td><?= str_pad($item->id, 7, '0', STR_PAD_LEFT); ?></td>
                                    <td><?= str_pad($item->offer_id, 6, '0', STR_PAD_LEFT); ?></td>
                                    <td><?= $item->career_title ?></td>
                                    <td><?= $item->title ?></td>
                                    <td><?= $item->type_offer ?></td>
                                    <td><?= date_format($item->date_publish, 'd/m/Y') ?></td>
                                    <td><?= date_format($item->date_vigency, 'd/m/Y') ?></td>
                                    <td><?= $item->name . ' ' . $item->paternal_surname . ' ' . $item->maternal_surname ?></td>
                                    <td><?= $item->graduated ?></td>
                                    <td class="text-center"><?= date_format($item->date_postulation, 'd/m/Y') ?></td>
                                    <td><?= $item->updated_at ?></td>
                                    <td>
                                        <?php
                                        if ($item->status) {
                                            echo '<span class="badge bg-info">' . $item->flag . '</span>';
                                        } else {
                                            echo '<span class="badge bg-danger">' . $item->flag . '</span>';
                                        }
                                        ?>
                                        <div class="btn-group" role="group" aria-label="Basic example">
                                            <a class="btn btn-outline-danger btn-sm" data-toggle="tooltip" data-placement="bottom" title="Descargar CV" target="_blank" download="<?= $item->filecv; ?>" href="<?= base_url('/uploads/filescv/' . $item->filecv); ?>">
                                                <i class="fas fa-file-pdf" title="<?= $item->filecv ?>"></i>
                                            </a>
                                            &nbsp;&nbsp;
                                            <?php
                                            if ($item->status) {
                                                //echo 'funciona';
                                                //$attributes = array('name' => 'admincontroller/desactivaPostulacion','id' => 'desactivaPostulacion', 'method' =>'POST');
                                                echo form_open("admincontroller/desactivaPostulacion"); //form open
                                                //echo '<form action="'.$action_form.'" method="POST">';
                                                echo '<input type="hidden" id="id" name="id" value="' . $item->id . '">';
                                                echo '<input type="hidden" id="career_id" name="career_id" value="' . $item->career_id . '">';
                                                //echo '<button type="submit" name="submit" class="btn '.$icon_form.' btn-sm display-inline" data-toggle="tooltip" value="' . $item->status . '" data-placement="bottom" title="Desactivar"><i class="fa fa-eye-slash"></i></button>';
                                                echo '<button type="submit" name="submit" class="btn btn-outline-info btn-sm display-inline" data-toggle="tooltip" data-placement="bottom" title="Desactivar"><i class="fa fa-eye-slash"></i></button>';
                                                echo form_close();
                                            } else {
                                                //echo 'no funciona';
                                                //$attributes = array('name' => 'admincontroller/activaPostulacion','id' => 'activaPostulacion', 'method' =>'POST');
                                                echo form_open("admincontroller/activaPostulacion"); //form open
                                                //echo '<form action="admincontroller/activaPostulacion" method="POST">';
                                                echo '<input type="hidden" id="id" name="id" value="' . $item->id . '">';
                                                echo '<input type="hidden" id="career_id" name="career_id" value="' . $item->career_id . '">';
                                                echo '<button type="submit" name="submit" class="btn btn-outline-primary btn-sm display-inline" data-toggle="tooltip" data-placement="bottom" title="Activar"><i class="fa fa-eye"></i></button>';
                                                //echo '</form>';
                                                echo form_close();
                                            }
                                            ?>
                                            &nbsp;&nbsp;
                                            <a class="btn btn-outline-success btn-sm" data-toggle="tooltip" data-placement="bottom" title="Editar" href="/admin/postulacion/<?= $item->id ?>"><i class="fa fa-edit"></i></a>
                                        </div>
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    /*$(function() {
        $('#FRM_DATOS').on('submit', function(e) {
            e.preventDefault();
            setTimeout(function() {
                window.location.reload();
            }, 0);
            $()
            this.submit();
        });
    });*/
</script>