<!-- ============================================================== -->
<!-- Start Page Content -->
<!-- ============================================================== -->
<div class="row">
    <!-- column -->
    <div class="col-lg-12">
        <div class="card border border-white">
            <div class="card-header bg-info bg-opacity">
                <?= form_open('', array('id' => 'FRM_DATOS', 'class' => 'form-horizontal', 'onsubmit' => 'window.location.reload()')); ?>

                <div class="row pt-3">
                    <div class="col-md-4 col-lg-4 align-self-center">
                        <div class="mb-3">
                            <h4 class="text-white"><strong>Estudiantes/Egresados</strong></h4>
                        </div>
                    </div>
                    <div class="col-md-8 col-lg-8 mx-auto">
                        <div class="mb-3">
                            <div class="input-group mb-3">

                                <?= form_dropdown('career_id', $career, $selectValue, 'class="form-select bg-white border" id="career_id"'); ?>
                                <button class="btn btn-dark pull-right font-weight-medium mb-0" type="submit">
                                    <!--<i class="ti-search"></i>-->
                                    <i class="fa fa-search"></i>&nbsp;Filtrar por programa
                                    <!--<i class="fa fa-filter"></i>-->
                                </button>

                                &nbsp;
                                <a class="btn btn-danger" href="/admin/estudiantes">Limpiar filtro</a>

                                &nbsp;
                                <a class="btn waves-effect waves-light btn-info pull-right hidden-sm-down" data-toggle="tooltip" data-placement="bottom" title="Crear nuevo registro" href="/admin/newestudiante">Nuevo usuario&nbsp;&nbsp;<i class="fa fa-plus"></i></a>

                            </div>
                        </div>
                    </div>
                    <?= form_close() ?>
                </div>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table id="datatablesSimple" name="datatablesSimple" class="table nowrap table-hover table-bordered" style="width:100%">
                            <thead class="bg-primary text-white">
                                <tr>
                                    <th>Cod Usuario</th>
                                    <th>Usuario</th>
                                    <th>Programa de estudios</th>
                                    <th>Nombres y apellidos</th>
                                    <th>Documento identidad</th>
                                    <th>Email</th>
                                    <th>Celular</th>
                                    <th>Sexo</th>
                                    <th>F. nacimiento</th>
                                    <th>Condición</th>
                                    <th>Última actualización</th>
                                    <th>Acciones</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($query as $item) : ?>
                                    <tr>
                                        <td class="align-middle"><?= str_pad($item->id, 5, '0', STR_PAD_LEFT); ?></td>
                                        <td><?= $item->username ?></td>
                                        <td><?= $item->career_title ?></td>
                                        <td><?= $item->name . ' ' . $item->paternal_surname . ' ' . $item->maternal_surname ?></td>
                                        <td><?= $item->document_type_label . ' ' . $item->document_number ?></td>
                                        <td class="text-center"><?= $item->email ?></td>
                                        <td class="text-center"><?= $item->mobile ?></td>
                                        <td><?= $item->gender ?></td>
                                        <td><?php
                                            if ($item->birthdate) {
                                                echo date_format($item->birthdate, 'd/m/Y');
                                            } else {
                                            }
                                            ?>
                                        </td>
                                        <td class="text-center"><?= $item->graduated ?></td>
                                        <td><?= $item->updated_at ?></td>
                                        <td>
                                            <?php
                                            if ($item->status) {
                                                echo '<span class="badge bg-info border text-white">' . $item->flag . '</span>';
                                            } else {
                                                echo '<span class="badge bg-danger border text-white">' . $item->flag . '</span>';
                                            }
                                            ?>
                                            <div class="btn-group" role="group" aria-label="Basic example">
                                                <?php
                                                if ($item->status) {
                                                    //echo '<a class="btn btn-outline-danger btn-sm" data-toggle="tooltip" data-placement="bottom" title="Desactivar" href="<?= $item->id ? >"><i class="fa fa-eye-slash"></i></a>';
                                                    echo form_open('admincontroller/enviaPassword');
                                                    echo '<input type="hidden" id="id" name="id" value="' . $item->id . '">';
                                                    echo '<button type="submit" name="submit" class="btn btn-outline-info btn-sm display-inline" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Enviar contraseña"><i class="fa fa-envelope" style="color:red"></i></button>';
                                                    echo form_close();
                                                    echo "&nbsp;";

                                                    echo form_open('admincontroller/desactivaEstudiante');
                                                    echo '<input type="hidden" id="id" name="id" value="' . $item->id . '">';
                                                    echo '<button type="submit" name="submit" class="btn btn-outline-danger btn-sm display-inline" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Desactivar"><i class="fa fa-eye-slash"></i></button>';
                                                    echo form_close();
                                                } else {
                                                    //echo '<a class="btn btn-outline-primary btn-sm" data-toggle="tooltip" data-placement="bottom" title="Activar" href="<?= $item->id>"><i class="fa fa fa-eye"></i></a>';
                                                    echo form_open('admincontroller/activaEstudiante');
                                                    echo '<input type="hidden" id="id" name="id" value="' . $item->id . '">';
                                                    echo '<button type="submit" name="submit" class="btn btn-outline-primary btn-sm display-inline" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Activar"><i class="fa fa-eye"></i></button>';
                                                    echo form_close();
                                                }
                                                ?>
                                                &nbsp;&nbsp;
                                                <a class="btn btn-outline-warning btn-sm" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Editar" href="/admin/estudiante/<?= $item->id ?>"><i class="fa fa-edit"></i></a>
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