@extends('header')

@section('content')

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
            @foreach($jam as $jm)
            <form action="/action/updatejam/{{$jm->id}}" method="post">
            @csrf
            @method('PATCH')
                <tr class="table-active">
                    <td>{{$jm->Keterangan}}</td>
                    <td>
                        <input type="time" id="time" name="time_mulai" value="{{$jm->jam_mulai}}">
                    </td>
                    <td>
                        <input type="time" id="time" name="time_selesai" value="{{$jm->jam_selesai}}">
                    </td>
                    <td><button class="btn btn-success">Submit</button></td>
                </tr>
            </form>
                @endforeach
        </tbody>
    </table>
</div>
@endsection
