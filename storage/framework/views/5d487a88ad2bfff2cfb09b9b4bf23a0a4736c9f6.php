<?php $__env->startSection('content'); ?>
<table class="table table-hover">
    <thead>
        <tr>
            <th scop="col">Name</th>
            <th scop="col">Email</th>
            <th scop="col">Cin</th>
            <th scop="col">Phone</th>
            <th scop="col">Sexe</th>
            <th scop="col">Operations</th>
        </tr>
    </thead>

    <tbody>
        <tr>
            <td><?php echo e($user->name); ?></td>
            <td><?php echo e($user->email); ?></td>
            <td><?php echo e($user->cin); ?></td>
            <td><?php echo e($user->phone); ?></td>
            <td><?php echo e($user->sexe); ?></td>
            <td>
                <a class="btn btn-outline-info" href="">Edit</a>
                <a class="btn btn-outline-danger" href="">delet</a>
            </td>
        </tr>
    </tbody>
</table>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\DSI22\Laravel\project_laravel\Election-System-authentification-model\election-system-auth-relation\resources\views/users/show.blade.php ENDPATH**/ ?>