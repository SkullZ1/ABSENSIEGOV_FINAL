@extends('layouts.app')

@section('content')
<div class="container">
    <a class="navbar-brand" href="{{ url('/') }}">
        {{ config('app.name', 'Laravel') }}
    </a>

    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        @if (auth()->check() && auth()->user()->is_admin == 1)
        <li class="nav-item">
            <a class="nav-link" aria-current="page" href="{{url('admin')}}">Halaman Admin</a>
        </li>
        @endif
        @if (auth()->check() && auth()->user()->is_admin == 2)
        <li class="nav-item">
            <a class="nav-link" href="{{url('kabid')}}">Halaman KABID</a>
        </li>
        @endif
        <li class="nav-item">
            <a class="nav-link" href="{{url('pns')}}">Halaman PNS</a>
        </li>
    </ul>
</div>
@endsection
