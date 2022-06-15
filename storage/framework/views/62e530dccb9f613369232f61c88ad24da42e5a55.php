<?php $__env->startSection('content'); ?>

<div class="container">
    <table class="table table-bordered">
        <thead>
            <tr class="table-dark">
                <th scope="col">Keterangan</th>
                <th scope="col">Jam Masuk</th>
                <th scope="col">Jam Selesai</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            <?php $__currentLoopData = $jam; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $jm): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <form action="/action/updatejam/<?php echo e($jm->id); ?>" method="post">
            <?php echo csrf_field(); ?>
            <?php echo method_field('PATCH'); ?>
                <tr class="table-active">
                    <td><?php echo e($jm->Keterangan); ?></td>
                    <td>
                        <input type="time" id="time" name="time_mulai" value="<?php echo e($jm->jam_mulai); ?>">
                    </td>
                    <td>
                        <input type="time" id="time" name="time_selesai" value="<?php echo e($jm->jam_selesai); ?>">
                    </td>
                    <td><button class="btn btn-success">Submit</button></td>
                </tr>
            </form>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>
    </table>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Magang\ProjekAbsenEgov\ABSENEGOV_FINAL\resources\views/admin.blade.php ENDPATH**/ ?>