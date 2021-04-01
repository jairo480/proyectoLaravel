
body {
	background: linear-gradient(-45deg, #ee7752, #e73c7e, #23a6d5, #23d5ab);
	background-size: 400% 400%;
	animation: gradient 15s ease infinite;
}

@keyframes  gradient {
	0% {
		background-position: 0% 50%;
	}
	50% {
		background-position: 100% 50%;
	}
	100% {
		background-position: 0% 50%;
	}
}
<div class="container nt-5">
  <div class="row justify-content-center">
    
      <div class="col-md-10">
          <h2 class="text-center mb-5">usuarios de administrador</h2>
          <a class="btn btn-success mb-5" href="<?php echo e(url('/form')); ?>">agregar nuevo usuario</a>
          <?php if(session('usuarioEliminado')): ?>
          <div class="alert alert-success">
          <?php echo e(session ('usuarioEliminado')); ?>

          </div>   
          <?php endif; ?>
          <table class="table table-bordered table-striped table-dark text-center">
            <thead>
              <tr>
                <th>id</th>
                <th>nombre</th>
                <th>Equipo</th>
                <th>nacionalidad</th>
                <th>acciones</th>
              </tr>
            </thead>
            <tbody>
              <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
              <tr>
                <td><?php echo e($user->id); ?></td>
                <td><?php echo e($user->nombre); ?></td>
                <td><?php echo e($user->equipo); ?></td>
                <td><?php echo e($user->nacionalidad); ?></td>
                <td>
                  <a href="<?php echo e(route('editform',$user->id)); ?>" class="btn btn-primary">
                    editar
                  <i class="fas fa-pencil-alt"></i>
                  </a>
                  <form action="<?php echo e(route('delete', $user->id)); ?>" method="POST">
                    <?php echo csrf_field(); ?> <?php echo method_field('DELETE'); ?>
                    <button type="submit" class="btn btn-danger">
                      
                      eliminar
                      <i class="fas fa-trash-alt"></i>
                    </button>
                  </form>
                </td>
              </tr>
              <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </tbody>
          </table>
      <?php echo e($users->links()); ?>

      </div>
    </div>
</div>
<?php echo $__env->make('layout.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\jairo\OneDrive\Documentos\test\proyecto-laravel\resources\views/users/index.blade.php ENDPATH**/ ?>