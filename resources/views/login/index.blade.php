@extends('layouts.main')

@section('container')
<div class="row justify-content-center">
    <div class="col-md-4">

    @if(session()->has('success'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
      {{ session('success')}}
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
    @endif

        <main class="form-signin">
            <h1 class="h3 mb-3 fw-normal text-center">Silakan Masuk</h1>
          <form>
            <!-- <img class="mb-4" src="../assets/brand/bootstrap-logo.svg" alt="" width="72" height="57"> -->
        
            <div class="form-floating">
              <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com">
              <label for="floatingInput">Alamat email</label>
            </div>
            <div class="form-floating">
              <input type="password" class="form-control" id="floatingPassword" placeholder="Password">
              <label for="floatingPassword">Kata Sandi</label>
            </div>
        
            <button class="w-100 btn btn-lg btn-primary" type="submit">Masuk</button>
            <!-- <p class="mt-5 mb-3 text-muted">&copy; 2017–2021</p> -->
          </form>
          <small class="d-block text-center mt-3">Belum Daftar? <a href="/register">Daftar Sekarang!</a></small>
        </main>

    </div>
</div>


@endsection