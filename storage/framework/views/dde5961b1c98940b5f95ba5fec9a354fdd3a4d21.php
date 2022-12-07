

<?php $__env->startSection('title'); ?> Profile <?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

    <?php $__env->startComponent('components.breadcrumb'); ?>
        <?php $__env->slot('li_1'); ?> Submenu <?php $__env->endSlot(); ?>
        <?php $__env->slot('title'); ?> Usuarios <?php $__env->endSlot(); ?>
    <?php echo $__env->renderComponent(); ?>

        <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
              
                <a href="<?php echo e(route('profile.create')); ?>" style="float: right;" type="button" class="btn btn-secondary waves-effect waves-light">Agregar Usario</a>
                    <h4 class="card-title">Tabla de Ususarios</h4>
                    <p class="card-title-desc">En la siguiente tabla se encuentra los usuarios
                    </p>

                    <div class="table-responsive">
                        <table class="table table-editable table-nowrap align-middle table-edits">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Nombre</th>
                                    <th>Apellido</th>
                                    <th>Telefono</th>
                                    <th>Record</th>
                                    <th>fecha de ingreso</th>
                                </tr>
                            </thead>
                            <tbody>
        <?php $__currentLoopData = $profile; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $profiles): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
                <td><?php echo e($profiles->id); ?></td>
                <td><?php echo e($profiles->first_name); ?></td>
                <td><?php echo e($profiles->last_name); ?></td>
                <td><?php echo e($profiles->phone_number); ?></td>
                <td><?php echo e($profiles->buro); ?></td>
                <td><?php echo e($profiles->updated_at); ?></td>
       
            </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </tbody>
                        </table>
                    </div>

                </div>
            </div>
        </div> <!-- end col -->
    </div> <!-- end row -->

<?php $__env->stopSection(); ?>
<?php $__env->startSection('script'); ?>
    <!-- Table Editable plugin -->
    <script src="<?php echo e(URL::asset('/assets/libs/table-edits/table-edits.min.js')); ?>"></script>

    <script src="<?php echo e(URL::asset('/assets/js/pages/table-editable.int.js')); ?>"></script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\obedadmin\source\laravel\Count\resources\views/profile/index.blade.php ENDPATH**/ ?>