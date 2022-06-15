@extends('header')

@section('content')

<div class="container">
    <form action="/action/update/{{$user->id}}" method="POST">
        @csrf
        @method('PATCH')

        <div class="mb-3">
          <label for="name" class="col-form-label">Name</label>
          <input id="name" type="text" class="form-control" name="edit_name" value="{{$user->name}}" placeholder=" " autofocus>
        </div>
        <div class="mb-3">
          <label for="email" class="col-form-label">Email</label>
          <input id="email" type="text" class="form-control" name="edit_email" value="{{$user->email}}"  autofocus>
        </div>
        <div class="mb-3">
          <label for="eemail" class="col-form-label">NIP</label>
          <input id="eemail" type="text" class="form-control" name="edit_eemail" value="{{$user->eemail}}" autofocus maxlength="18">
        </div>
        <button type="submit" class="btn btn-success">Submit</button>
    </form>
</div>


@endsection

