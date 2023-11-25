<div class="align-items-md-stretch mt-5">
    <div class="card">
        <div class="card-header bg-info">
            <h4 class="card-title text-white">Nuevo programa de estudios</h4>
        </div>
        <?= my_validation_errors(validation_errors()); ?>
        <div class="card-body">
            <?= form_open('admincontroller/creaPrograma', array('class' => 'row g-3 needs-validation')); ?>

            <div class="col-md-12">
                <label for="career_title" class="form-label">Nombre del programa (*)</label>
                <input type="text" class="form-control" id="career_title" name="career_title" value="<?= set_value('career_title') ?>" required>
                <div class="valid-feedback">
                    Looks good!
                </div>
            </div>

            <div class="col-12">
                <div class="float-end">
                    <a href="/admin/programas" class="btn btn-danger" type="button">Cancelar</a>
                    <input class="btn btn-primary" type="submit" value="Crear programa"></input>
                </div>
            </div>
            <?= form_close() ?>
        </div>
    </div>
</div>
