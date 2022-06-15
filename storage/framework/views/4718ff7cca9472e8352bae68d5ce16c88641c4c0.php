<?php $__env->startSection('content'); ?>
<div class="container">
<table class="table">
  <thead>
    <tr>
      <th scope="col">Tanggal</th>
      <th scope="col">Absen Masuk</th>
      <th scope="col">Absen Keluar</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row"><span id="tanggalwaktu"></span></th>
      <td>
        <?php if($today == NULL): ?>
        <form action="/absensi/masuk" method="post">
          <?php echo csrf_field(); ?>
          <button type="submit" class="btn btn-success">Absen Masuk</button>
        </form>
        <?php else: ?>
        <button type="submit" class="btn btn-success" disabled>Absen Masuk</button>
        <?php endif; ?>
      </td>
      <td>
        <?php if($today == NULL): ?>
        <button type="submit" class="btn btn-danger" disabled>Absen Keluar</button>
        <?php else: ?>

        <?php if($today->keluar != NULL): ?>
        <button type="submit" class="btn btn-danger" disabled>Absen Keluar</button>
        <?php else: ?>
        <form action="/absensi/<?php echo e($today->id); ?>/keluar" method="post">
          <?php echo csrf_field(); ?>
          <button type="submit" class="btn btn-danger">Absen Keluar</button>
        </form>
        <?php endif; ?>
        <?php endif; ?>
      </td>

    </tr>
  </tbody>
</table>

<script>
function tanggal() {
var tw = new Date();
if (tw.getTimezoneOffset() == 0) (a=tw.getTime() + ( 7 *60*60*1000))
else (a=tw.getTime());
tw.setTime(a);
var tahun= tw.getFullYear ();
var hari= tw.getDay ();
var bulan= tw.getMonth ();
var tanggal= tw.getDate ();
var hariarray=new Array("Minggu,","Senin,","Selasa,","Rabu,","Kamis,","Jumat,","Sabtu,");
var bulanarray=new Array("Januari","Februari","Maret","April","Mei","Juni","Juli","Agustus","September","Oktober","Nopember","Desember");
document.getElementById("tanggalwaktu").innerHTML = hariarray[hari]+" "+tanggal+" "+bulanarray[bulan]+" "+tahun;
}
setInterval(tanggal,1000);


</script>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Magang\ProjekAbsenEgov\AbsensiEGOV\resources\views/absensi.blade.php ENDPATH**/ ?>