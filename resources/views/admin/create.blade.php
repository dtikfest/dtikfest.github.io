@extends('layout.app',['title'=>'Produk DTIK Fest 2021'])

@section('content')

<div class="container vh-100 d-flex card flex-row main mt-5 p-4 justify-content-center lg-margin">
    <div class="card-main mt-5">
        <h1 class="mb-4">Halaman Admin</h1>
        <form action="/admin/login" method="POST">
            @csrf
            <div class="form-group mb-2">
                <input name="username" class="form-control" placeholder="Username">
            </div>
            <div class="form-group mb-2">
                <input name="password" type="password" class="form-control" placeholder="Password">
            </div>
            <button type="submit" class="btn btn-primary w-100 mb-2">Login</button>
        </form>
    </div>
</div>

@endsection
