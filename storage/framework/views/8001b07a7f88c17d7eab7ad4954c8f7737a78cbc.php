
<div class="container mt-5">
    <div class=" row justify-content-center">
        <div class="col-md-7 mt-5">
            <?php if(session('usuarioguardado')): ?>
                <div class="alert alert-succes"></div>
                    <?php echo e(session('usuarioguardado')); ?>

            <?php endif; ?>

            <?php if($errors->any()): ?>
            <div class="alert alert-danger">
                <ul>
                    <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <li><?php echo e($error); ?></li>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>

                
            <?php endif; ?>

            
            <div class="card">
                <form action="<?php echo e(route('save')); ?>" method="post">
                <?php echo csrf_field(); ?>
                    <div class="card-header text-center">Agregar usuario</div>
                    <div class="card-body">
                        <div class="card-body">
                            <div class="row form-group">
                                <label for="" class="col-2  mb-2">Nombre</label>
                                <input  type="text" name="nombre" class="form-control col-md-9">
                            </div>
                            <div class="row form-group">
                                <label for="" class="col-2  mb-2">Equipo</label>
                                <input type="text" name="equipo" class="form-control col-md-9">
                            </div>
                            <div class="row form-group">
                                <label for="" class="col-2  mb-2">nacionalidad</label>
                                <input type="text" name="nacionalidad" class="form-control col-md-9">
                            </div>
                            <div class="row form-group mt-5">
<button type="submit" class="btn btn-success col-md-9 offset-2 btn-block" >
                                    Guardar
                                </button>
                                <a class="btn btn-success mb-5" href="<?php echo e(url('/index')); ?>"></a>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<?php echo $__env->make('layout.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\jairo\OneDrive\Documentos\test\proyecto-laravel\resources\views/users/usersform.blade.php ENDPATH**/ ?>