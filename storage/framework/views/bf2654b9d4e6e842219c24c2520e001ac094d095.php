<?php $__env->startSection('content'); ?>

<div class="container">
    <form action="/action/update/<?php echo e($user->id); ?>" method="POST">
        <?php echo csrf_field(); ?>
        <?php echo method_field('PATCH'); ?>

        <div class="mb-3">
          <label for="name" class="col-form-label">Name</label>
          <input id="name" type="text" class="form-control" name="edit_name" value="<?php echo e($user->name); ?>" placeholder=" " autofocus>
        </div>
        <div class="mb-3">
          <label for="email" class="col-form-label">Email</label>
          <input id="email" type="text" class="form-control" name="edit_email" value="<?php echo e($user->email); ?>"  autofocus>
        </div>
        <div class="mb-3">
          <label for="eemail" class="col-form-label">NIP</label>
          <input id="eemail" type="text" class="form-control" name="edit_eemail" value="<?php echo e($user->eemail); ?>" autofocus maxlength="18">
        </div>
        <button type="submit" class="btn btn-success">Submit</button>
    </form>
</div>


<?php $__env->stopSection(); ?>


<?php echo $__env->make('header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Magang\ProjekAbsenEgov\ABSENEGOV_FINAL\resources\views/edit.blade.php ENDPATH**/ ?>