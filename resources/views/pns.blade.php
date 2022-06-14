@extends('header')

@section('title', 'Dashboard')
@section('content')
<head></head>
<div class="container">
  <center>
    <h1>Hallo Selamat Datang, {{ Auth::user()->name}}</h1>
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


@endsection
