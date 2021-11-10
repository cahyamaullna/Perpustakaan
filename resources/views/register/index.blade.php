@extends('layout.main')
@section('container')
<div class="row justify-content-center">
    <div class="col-lg-5">
        {{-- Jika kita berhasil melakukan registrasi alert ini akan muncul , alert ini diatur didalam RegisterController --}}
        @if (session('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ session ('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
        @endif
        <div class="container-style">
        <div class="container">
          <h1>Register</h1>
            <form action="register" method="POST">
                <label>Username</label>\
                <br>
                <input type="text" name="nama" class="form-control" id="nama">
                <br>
                <label>Email</label>
                <br>
                <input type="text" name="email" class="form-control" id="email">
                <br>
                <label>Password</label>
                <br>
                <input type="text" name="password" class="form-control" id="password" >
                <br>
                <button type="submit">Register</button>
                <p> Sudah punya akun?
                  <a href="/dashboard">Login di sini</a>
                </p>
            </form>
        </div>
        </div>
    </div>
</div>
@endsection