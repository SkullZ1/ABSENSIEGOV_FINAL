<?php $__env->startSection('title','Data Absensi'); ?>
<?php $__env->startSection('content'); ?>
<head>
  <!-- CSS -->
  <link rel="stylesheet" href="//code.jquery.com/ui/1.13.1/themes/base/jquery-ui.css">
  <link rel="stylesheet" href="/resources/demos/style.css">
  <!-- JavaScript -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
  <script src="https://netdna.bootstrapcdn.com/bootstrap/2.3.2/js/bootstrap.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.2.0/js/bootstrap-datepicker.min.js"></script>
</head>
<div class="container">
  <h2>Detail Absensi</h2>
  <h4>Nama  : <?php echo e(Auth::user()->name); ?></h4>
  <h4>Email : <?php echo e(Auth::user()->email); ?></h4>
  <form style="float:right">
    <label for="startDate">Date :</label>
    <select name="month" id="">
      <option value="" selected hidden>Pilih Bulan</option>
      <option value="01">Januari</option>
      <option value="02">Februari</option>
      <option value="03">Maret</option>
      <option value="04">April</option>
      <option value="05">Mei</option>
      <option value="06">Juni</option>
      <option value="07">Juli</option>
      <option value="08">Agustus</option>
      <option value="09">September</option>
      <option value="10">Oktober</option>
      <option value="11">November</option>
      <option value="12">Desember</option>
    </select>

    <select name="year" id="">
      <option value="" selected hidden>Pilih Tahun</option>
      <?php
          $now = date('Y');
          $pass = $now - 2;
      ?>
      <?php for($i = $pass; $i <= $now; $i++): ?>
        <option value="<?php echo e($i); ?>"><?php echo e($i); ?></option>
      <?php endfor; ?>
    </select>
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
  <br>
  <br>
  <?php if(request('month') != NULL && request('year') != NULL): ?>
  <?php
      $date = request('year').'-'.request('month').'-01';
  ?>
  <h6 id="bulan">Absen Bulan : <?php echo e(date('F Y', strtotime($date))); ?></h6>

  <?php else: ?>
  <h6 id="bulan">Absen Bulan : <?php echo e(date('F Y')); ?></h6>

  <?php endif; ?>

  <br>
<table class="table table-bordered">
  <thead>
    <tr class="table-dark">
      <th scope="col">No</th>
      <th scope="col">Tanggal</th>
      <th scope="col">Jam Masuk</th>
      <th scope="col">Jam Keluar</th>
      <th scope="col">Keterangan</th>
    </tr>
  </thead>
  <tbody>
    <?php
        $no = 1;
    ?>
    <?php $__currentLoopData = $absen; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $a): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <tr class="table-active">
      <th scope="row"><?php echo e($no++); ?></th>
      <td><?php echo e(date('l, d F Y', strtotime($a->created_at))); ?></td>
      <?php if($a->waktu == NULL): ?>
      <td>-</td>
      <?php else: ?>
      <td><?php echo e($a->waktu); ?></td>
      <?php endif; ?>
      <?php if($a->keluar == NULL): ?>
      <td>-</td>
      <?php else: ?>
      <td><?php echo e($a->keluar); ?></td>
      <?php endif; ?>
      <?php if($a->waktu == NULL): ?>
      <td>-</td>
      <?php else: ?>
      <td><?php echo e($a->keterangan); ?></td>
      <?php endif; ?>

    </tr>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
  </tbody>
</table>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Magang\ProjekAbsenEgov\ABSENEGOV_FINAL\resources\views/tabel.blade.php ENDPATH**/ ?>