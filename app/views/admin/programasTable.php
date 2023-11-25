<!-- ============================================================== -->
<!-- Start Page Content -->
<!-- ============================================================== -->
<div class="row">
    <!-- column -->
    <div class="col-lg-12">
        <div class="card">
            <div class="card-header bg-info bg-opacity">
                <div class="row pt-3">
                    <div class="col-md-5 col-8 align-self-center">
                        <div class="mb-3">
                            <h4 class="text-white">Programas de estudios</h4>
                        </div>
                    </div>
                    <div class="col-md-7 col-4 mx-auto">
                        <div class="mb-3">
                            <div class="d-md-flex align-items-center">
                                <a class="btn waves-effect waves-light btn-light pull-right hidden-sm-down" data-toggle="tooltip" data-placement="bottom" title="Crear nuevo programa" href="<?=base_url('/admin/newprograma')?>">Nuevo programa&nbsp;&nbsp;<i class="fa fa-plus"></i></a>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <?= my_validation_errors(validation_errors()); ?>
            <p class='mt-1 alert' style='color:red'> <?= $this->session->flashdata('flashError') ?> </p>
            <div class="card-body">
                <div class="table-responsive">
                    <table id="datatablesSimple" name="datatablesSimple" class="table nowrap table-hover table-bordered" style="width:100%">
                        <thead class="bg-primary text-white">
                            <tr>
                                <th>Cod Programa</th>
                                <th>Programa de estudios</th>
                                <th>Acciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($query as $item) : ?>
                                <tr>
                                    <td><?= str_pad($item->id, 5, '0', STR_PAD_LEFT); ?></td>
                                    <td><?= $item->career_title ?></td>
                                    <td>
                                        <div class="btn-group" role="group" aria-label="Basic example">
                                            <a class="btn btn-outline-warning btn-sm display-inline" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Editar" href="<?=base_url('/admin/programa/'. $item->id) ?>"><i class="fa fa-edit"></i></a>
                                            &nbsp;&nbsp;<?= form_open('admincontroller/eliminaPrograma', array('class' => 'form-horizontal')); ?>
                                            <input type="hidden" id="id_career" name="id_career" value="<?= $item->id ?>">
                                            <button type="submit" name="submit" class="btn btn-outline-danger btn-sm display-inline" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Eliminar"><i class="fa fa-trash"></i></button>
                                            <?= form_close(); ?>
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