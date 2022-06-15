<?php $__env->startSection('title','Data Karyawan'); ?>
<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="card text-dark bg-light mb-3 p-3" style="max-width: 18rem;">
        <span>Jumlah Karyawan</span>
    <div class="card-body">
        <h4 class="card-title"><?php echo e($count); ?>Karyawan</h4>
    </div>
</div>
<div class="container">
    <table class="table table-bordered">
        <thead>
            <tr class="table-dark">
                <th scope="col">id</th>
                <th scope="col">Name</th>
                <th scope="col">Email</th>
                <th scope="col">NIP</th>
                <th scope="col">Jabatan</th>
                <th scope="col">is_admin</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $dt): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr class="table-active">
                <th scope="row" value='id' name='id'><?php echo e($dt->id); ?></th>
                <td><?php echo e($dt->name); ?></td>
                <td><?php echo e($dt->email); ?></td>
                <td><?php echo e($dt->eemail); ?></td>
                <td><?php echo e($dt->role); ?></td>
                <td><?php echo e($dt->is_admin); ?></td>
                <td>
                    <a href="/action/edit/<?php echo e($dt->id); ?>" type="submit" class="btn btn-warning">
                        <i class='bx bxs-edit'></i>Edit
                    </a>
                    <a href="/action/delete/<?php echo e($dt->id); ?>" type="button" class="btn btn-danger" action>
                        <i class='bx bxs-trash' ></i>Hapus
                    </a>
                </td>
            </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>
    </table>
</div>
<div class="modal fade" id="edit" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Form Edit</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form action="/action/edit/<?php echo e($dt->id); ?>" method="POST">
          <?php echo csrf_field(); ?>
          <?php $__currentLoopData = $karyawan; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $kar): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
          <div class="mb-3">
            <label for="name" class="col-form-label">Name</label>
            <input id="name" type="text" class="form-control" name="edit_name" value="<?php echo e($kar->name); ?>" placeholder=" " autofocus>
          </div>
          <div class="mb-3">
            <label for="email" class="col-form-label">Email</label>
            <input id="email" type="text" class="form-control" name="edit_email" value="<?php echo e($kar->email); ?>"  autofocus>
          </div>
          <div class="mb-3">
            <label for="eemail" class="col-form-label">NIP</label>
            <input id="eemail" type="text" class="form-control" name="edit_eemail" value="<?php echo e($kar->eemail); ?>" autofocus maxlength="18">
          </div>
          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <a href="/action/edit/<?php echo e($dt->id); ?>" type="submit" class="btn btn-primary">Submit</a>
        </form>
      </div>
    </div>
  </div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Magang\ProjekAbsenEgov\ABSENEGOV_FINAL\resources\views//datakaryawan.blade.php ENDPATH**/ ?>