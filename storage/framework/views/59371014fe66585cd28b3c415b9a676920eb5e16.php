<?php $__env->startSection('title', 'Dashboard'); ?>
<?php $__env->startSection('content'); ?>
<head></head>
<div class="container">
  <center>
    <h1>Hallo Selamat Datang, <?php echo e(Auth::user()->name); ?></h1>
  <br>
  <h2><span id="tanggalwaktu"></span></h2>
      <!-- <div class="jam-digital">
        <div id="jam"></div>
        <div id="unit">
          <span>Jam</span>
          <span>Menit</span>
          <span>Detik</span>
        </div>
      </div> -->
      <br>
      <h2>Halo Selamat Datang Di Aplikasi Absensi Online EGoverment Provinsi Jawa Tengah</h2>
      <br>
      </center>

    </div>
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
<script>
  var myModal = document.getElementById('myModal')
  var myInput = document.getElementById('myInput')

  myModal.addEventListener('shown.bs.modal', function () {
    myInput.focus()
})

</script>


<?php $__env->stopSection(); ?>

<?php echo $__env->make('header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Magang\ProjekAbsenEgov\ABSENEGOV_FINAL\resources\views/pns.blade.php ENDPATH**/ ?>