<?php $__env->startSection('titre', 'Voters List'); ?>

<?php $__env->startSection('content'); ?>
<?php if(session('deleteUser')): ?>
<div class="alert alert-success alert-dismissible fade show" role="alert">
    <?php echo e(session('deleteUser')); ?>

    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
    </button>
</div>
<?php endif; ?>
<h1>Voters List </h1>

    <ul class="list-group">
        <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <a href="<?php echo e(route('user.show' , $user->id )); ?>">
            <li class="list-group-item">
                <?php echo e($user->name); ?>

            </li>
        </a>
            
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </ul>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\DSI22\Laravel\project_laravel\Election-System-authentification-model\election-system-auth-relation\resources\views/users/index.blade.php ENDPATH**/ ?>