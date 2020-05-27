<?php $__env->startSection('title', 'Edit User'); ?>

<?php $__env->startSection('content'); ?>
    <fieldset>
        <legend>Edit User</legend>
        <form action="<?php echo e(route('user.update', $user->id )); ?>" method="post">
            <?php echo csrf_field(); ?>
            <?php echo method_field('PATCH'); ?>
          
            <div class="row">
                <div class="col">
                    <div class="form-group">
                      <label for="name">Name</label>
                        <input type="text" name="name" value="<?php echo e($user->name); ?>" id="name" class="form-control" placeholder="" >
                    </div>
                </div>

                </div>
                <div class="col">
                    <div class="form-group">
                      <label for="phone">Phone</label>
                      <input type="text" name="phone" value="<?php echo e($user->phone); ?>" id="phone" class="form-control" placeholder="" >
                    </div>
                </div>
            </div>
            <div class="row">
                <button type="submit" class="btn btn-outline-primary btn-block">Confirm update</button>
            </div>
        </form>
    </fieldset>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\DSI22\Laravel\project_laravel\Election-System-authentification-model\election-system-auth-relation\resources\views/users/edit.blade.php ENDPATH**/ ?>