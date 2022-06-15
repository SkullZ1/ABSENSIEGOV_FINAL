@extends('header')

@section('content')
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
        @if(date('G:i') > $jam->jam_mulai && date('G:i') < $jam->jam_selesai)
            @if ($today == NULL)
            <form action="/absensi/masuk" method="post">
            @csrf
            <button type="submit" class="btn btn-success">Absen Masuk</button>
            </form>
            @else
            <button type="submit" class="btn btn-success" disabled>Absen Masuk</button>
            @endif
            </td>
        @else
            <button type="submit" class="btn btn-success" disabled>Absen Masuk</button>
        @endif
        @if(date('G:i') > $jam->jam_mulai && date('G:i') < $jam->jam_selesai)
        <td>
          @if ($today == NULL)
          <button type="submit" class="btn btn-danger" disabled>Absen Keluar</button>
          @else

          @if ($today->keluar != NULL)
          <button type="submit" class="btn btn-danger" disabled>Absen Keluar</button>
          @else
          <form action="/absensi/{{$today->id}}/keluar" method="post">
            @csrf
            <button type="submit" class="btn btn-danger">Absen Keluar</button>
          </form>
          @endif
          @endif
        </td>
        @else
        <td>
            <button type="submit" class="btn btn-danger" disabled>Absen Keluar</button>
        </td>
        @endif

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

@endsection
