@extends('header')

@section('content')

<div class="container">
    <table class="table table-bordered">
        <thead>
            <tr class="table-dark">
                <th scope="col">No</th>
                <th scope="col">Keterangan</th>
                <th scope="col">Jam Masuk</th>
                <th scope="col">Jam Selesai</th>
            </tr>
        </thead>
        <tbody>
            <tr class="table-active">
                @foreach($jam as $jm)
                <th scope="row">{{$no++}}</th>
                <td>{{$jm->Keterangan}}</td>
                <td>{{$jm->Jam_Mulai}}</td>
                <td>{{$jm->Jam_Selesai}}</td>
                <td><a href="" class="btn-primary">Edit</a></td>
                @endforeach
            </tr>
        </tbody>
    </table>
</div>
@endsection
