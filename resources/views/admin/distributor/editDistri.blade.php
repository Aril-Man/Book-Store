@extends('layout.adminlayout')

@section('content')
<nav class="navbar navbar-expand-lg navbar-light">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">Administrator</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown"
            aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="/admin/">Home</a>
                </li>

                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button"
                        data-bs-toggle="dropdown" aria-expanded="false">
                        Inputan
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                        <li><a class="dropdown-item" href="{{ url('/admin/distributor/createDistri') }}">Input
                                Distributor</a></li>
                        <li><a class="dropdown-item" href="{{ url('/admin/buku/createBuku') }}">Input Buku</a></li>
                        <li><a class="dropdown-item" href="#">Input Pasok</a></li>
                    </ul>
                </li>

                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button"
                        data-bs-toggle="dropdown" aria-expanded="false">
                        Lab
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                        <li><a class="dropdown-item" href="{{ url('/admin/buku/semuaBuku') }}">Semua Data Buku</a></li>
                        <li><a class="dropdown-item" href="#">Filter Penulis Buku</a></li>
                        <li><a class="dropdown-item" href="#">Buku Yang Sering Terjual</a></li>
                        <li><a class="dropdown-item" href="#">Buku Yang Tidak Pernah Terjual</a></li>
                        <li><a class="dropdown-item" href="#">Pasok Buku</a></li>
                        <li><a class="dropdown-item" href="#">Filter Pasok Buku</a></li>
                    </ul>
                </li>
                <li class="nav-item position-absolute top-0 end-0">
                    <a class="nav-link" href="{{ url('logout') }}" >Logout</a>
                </li>
            </ul>
        </div>
    </div>
</nav>

@if (session('alert'))
<div class="alert alert-success">
    {{ session('alert') }}
</div>
@endif

<div class="row">
    <div class="col-8">
        <h1 class="mt-3">Form Ubah Distributor</h1>
        <form method="POST" action="/admin/distributor/createDistri/{{ $distributor->id_distributor }}">
            @method('patch')
            @csrf
            <div class="mb-3">
                <label for="nama_distributor" class="form-label">Nama Distributor</label>
                <input type="text" name="nama_distributor" class="form-control @error('nama_distributor') is-invalid @enderror" id="nama_distributor"
                    placeholder="Masukan nama distributor" value="{{ $distributor->nama_distributor }}">

            </div>
            <div class="mb-3">
                <label for="nama_distributor" class="form-label @error('alamat') is-invalid @enderror">Alamat</label>
                <textarea class="form-control" aria-valuemax="{{ $distributor->alamat }}" id="alamat" name="alamat" rows="3"></textarea>
            </div>
            <div class="mb-3">
                <label for="nama_distributor" class="form-label">No Telpon</label>
                <input type="text" name="telpon" class="form-control @error('telpon') is-invalid @enderror" id="telpon" placeholder="Masukan No telpon" value="{{ $distributor->telpon }}">
            </div>
            <button type="submit" class="btn btn-primary">Update</button>
        </form>
    </div>
</div>
@endsection
