@extends('header')

@section('content')

<div class="container">
    <form action="" method="POST">
        @csrf
        <input type="hidden" name="_method" value="PATCH">
        @foreach ($data as $dt)
        <div class="mb-3">
          <label for="name" class="col-form-label">Name</label>
          <input id="name" type="text" class="form-control" name="edit_name" value="{{$dt->name}}" placeholder=" " autofocus>
        </div>
        <div class="mb-3">
          <label for="email" class="col-form-label">Email</label>
          <input id="email" type="text" class="form-control" name="edit_email" value="{{$dt->email}}"  autofocus>
        </div>
        <div class="mb-3">
          <label for="eemail" class="col-form-label">NIP</label>
          <input id="eemail" type="text" class="form-control" name="edit_eemail" value="{{$dt->eemail}}" autofocus maxlength="18">
        </div>
        @endforeach
        <a href="" type="submit" class="btn btn-primary">Submit</a>
    </form>
</div>


@endsection
