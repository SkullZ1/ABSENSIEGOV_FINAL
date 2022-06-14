@extends('header')

@section('title','Data Karyawan')
@section('content')
<div class="container">
    <div class="card text-dark bg-light mb-3 p-3" style="max-width: 18rem;">
        <span>Jumlah Karyawan</span>
    <div class="card-body">
        <h4 class="card-title">{{$count}} Karyawan</h4>
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
            @foreach($data as $dt)
            <tr class="table-active">
                <th scope="row" value='id' name='id'>{{ $dt->id}}</th>
                <td>{{ $dt->name }}</td>
                <td>{{ $dt->email }}</td>
                <td>{{ $dt->eemail }}</td>
                <td>{{ $dt->role}}</td>
                <td>{{ $dt->is_admin }}</td>
                <td>
                    <a href="/action/data/{id}" type="button" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#edit">
                        <i class='bx bxs-edit'></i>Edit
                    </a>
                    <a href="/action/delete/{{$dt->id}}" type="button" class="btn btn-danger" action>
                        <i class='bx bxs-trash' ></i>Hapus
                    </a>
                </td>
            </tr>
        @endforeach
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
        <form action="/action/edit/{{$dt->id}}" method="POST">
          @csrf
          <div class="mb-3">
            <label for="name" class="col-form-label">Name</label>
            <input id="name" type="text" class="form-control" name="edit_name" value="{{ $dt->name }}" placeholder=" " autofocus>
          </div>
          <div class="mb-3">
            <label for="email" class="col-form-label">Email</label>
            <input id="email" type="text" class="form-control" name="edit_email" value="{{ $dt->email }}"  autofocus>
          </div>
          <div class="mb-3">
            <label for="eemail" class="col-form-label">NIP</label>
            <input id="eemail" type="text" class="form-control" name="edit_eemail" value="{{ $dt->eemail }}" autofocus maxlength="18">
          </div>
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <a href="/action/edit/{{$dt->id}}" type="submit" class="btn btn-primary">Submit</a>
        </form>
      </div>
    </div>
  </div>

@endsection
