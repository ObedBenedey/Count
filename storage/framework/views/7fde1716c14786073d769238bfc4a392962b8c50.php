

<?php $__env->startSection('title'); ?> Crear Usuario <?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

    <?php $__env->startComponent('components.breadcrumb'); ?>
        <?php $__env->slot('li_1'); ?> Submenu <?php $__env->endSlot(); ?>
        <?php $__env->slot('title'); ?> Usuarios <?php $__env->endSlot(); ?>
    <?php echo $__env->renderComponent(); ?>
    <div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
            <form class="form-horizontal" method="POST" action="<?php echo e(route('profile.data')); ?>">
                <h4 class="card-title">Datos Generales del prestamista</h4>
                <p class="card-title-desc">Ingresa tus datos para continuar</p>
                <div class="mb-3 row">
                    <label for="user_id" class="col-md-2 col-form-label">usuario</label>
                    <div class="col-md-10">
                        <input class="form-control" name="user_id" type="number" value="" placeholder="Ingresa el usuario" id="example-number-input">
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="first_name" class="col-md-2 col-form-label">Nombre</label>
                    <div class="col-md-10">
                        <input class="form-control" name="first_name" type="text" value="" id="example-text-input">
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="last_name" class="col-md-2 col-form-label">Apellido</label>
                    <div class="col-md-10">
                        <input class="form-control"  name="last_name" type="search" value="" id="example-search-input">
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="phone_number" class="col-md-2 col-form-label">Telephone</label>
                    <div class="col-md-10">
                        <input class="form-control" name="phone_number" type="tel" value="" placeholder="(614) 123-25-25" id="example-tel-input">
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="age" class="col-md-2 col-form-label">Edad</label>
                    <div class="col-md-10">
                        <input class="form-control" name="age" type="number" value="" placeholder="Ingresa la edad" id="example-number-input">
                    </div>
                </div>
                
                <div class="mb-3 row">
                    <label for="address" class="col-md-2 col-form-label">Direccion</label>
                    <div class="col-md-10">
                        <input class="form-control" name="address" type="text" value="" id="example-text-input">
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="buro" class="col-md-2 col-form-label">Record Buro</label>
                    <div class="col-md-10">
                        <input class="form-control" name="buro" type="number" value="" placeholder="Ingresa el record" id="example-number-input">
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="rfc" class="col-md-2 col-form-label">RFC</label>
                    <div class="col-md-10">
                        <input class="form-control" name="rfc" type="search" value="" id="example-search-input">
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="occupation" class="col-md-2 col-form-label">Ocupacion</label>
                    <div class="col-md-10">
                        <input name="occupation" class="form-control" type="search" value="" id="example-search-input">
                    </div>
                </div>
                <div class="mb-3 row">
                    <label class="col-md-2 col-form-label">¿factura?</label>
                    <div class="col-md-10">
                        <select for="does_invoice" name="does_invoice" class="form-select">
                            <option>factura?</option>
                            <option value="1">si</option>
                            <option value="2">no</option>
                        </select>
                    </div>
                </div>
                <div class="mb-3 row">
                    <label class="col-md-2 col-form-label">Genero</label>
                    <div class="col-md-10">
                        <select for="gender" name="gender" class="form-select">
                            <option>Seleccionar</option>
                            <option value="1">Femenino</option>
                            <option value="2">Masculino</option>
                        </select>
                    </div>
                </div>
                <button type="submit"style="float: right;" class="btn btn-primary">Crear</button>
            </form>
            </div>
        </div>
    </div> <!-- end col -->
</div>
    
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\obedadmin\source\laravel\Count\resources\views/profile/create.blade.php ENDPATH**/ ?>