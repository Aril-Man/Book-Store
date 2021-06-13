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
                        <li><a class="dropdown-item" href="{{ url('/admin/distributor/createDistri') }}">Input Distributor</a></li>
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

<div class="row">
    <div class="col-8">
        <h1 class="mt-3">Form Tambah Buku</h1>
        <form method="POST" action="/admin/buku/semuaBuku">
            @csrf
            <div class="mb-3">
                <label for="id_buku" class="form-label">ID Buku</label>
                <input type="text" name="id_buku" class="form-control" id="id_buku" placeholder="Id Buku">

            </div>
            <div class="mb-3">
                <label for="" class="form-label">Judul</label>
                <input type="text" name="judul" class="form-control" id="judul" placeholder="Judul">
            </div>
            <div class="mb-3">
                <label for="" class="form-label">No ISBN</label>
                <input type="text" name="noisbn" class="form-control" id="noisbn" placeholder="Masukan No ISBN">
            </div>
            <div class="mb-3">
                <label for="" class="form-label">Penulis</label>
                <input type="text" name="penulis" class="form-control" id="penulis" placeholder="Masukan nama penulis">
            </div>
            <div class="mb-3">
                <label for="" class="form-label">Penerbit</label>
                <input type="text" name="penerbit" class="form-control" id="penerbit" placeholder="Masukan penerbit">
            </div>
            <div class="mb-3">
                <label for="" class="form-label">tahun</label>
                <input type="text" name="tahun" class="form-control" id="tahun" placeholder="Masukan Tahun terbit">
            </div>
            <div class="mb-3">
                <label for="" class="form-label">Stok</label>
                <input type="text" name="stok" class="form-control" id="stok" placeholder="Masukan stok yang tersedia">
            </div>
            <div class="mb-3">
                <label for="" class="form-label">Harga Pokok</label>
                <input type="text" name="harga_pokok" class="form-control" id="harga_pokok" placeholder="Masukan harga pokoknya">
            </div>
            <div class="mb-3">
                <label for="" class="form-label">Harga Jual</label>
                <input type="text" name="harga_jual" class="form-control" id="harga_jual" placeholder="Masukan harga jualnya">
            </div>
            <div class="mb-3">
                <label for="" class="form-label">PPN</label>
                <input type="text" name="ppn" class="form-control" id="ppn" placeholder="Masukan PPN">
            </div>
            <div class="mb-3">
                <label for="" class="form-label">Diskon</label>
                <input type="text" name="diskon" class="form-control" id="diskon" placeholder="Masukan Diskon">
            </div>
            <button type="submit" class="btn btn-primary">Simpan</button>
        </form>
    </div>
</div>

@endsection
