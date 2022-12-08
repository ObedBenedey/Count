

<?php $__env->startSection('title'); ?> editar Usuario <?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

    <?php $__env->startComponent('components.breadcrumb'); ?>
        <?php $__env->slot('li_1'); ?> Submenu <?php $__env->endSlot(); ?>
        <?php $__env->slot('title'); ?> Usuarios <?php $__env->endSlot(); ?>
    <?php echo $__env->renderComponent(); ?>
    <div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <?php echo $__env->make('profile.form', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            </div>
        </div>
    </div> <!-- end col -->
</div>
    
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\obedadmin\source\laravel\Count\resources\views/profile/edit.blade.php ENDPATH**/ ?>