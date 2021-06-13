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
                    <a class="nav-link" href="{{ url('logout') }}">Logout</a>
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

<table class="table">
    <thead>
      <tr>
        <th scope="col">ID Buku</th>
        <th scope="col">Judul</th>
        <th scope="col">No ISBN</th>
        <th scope="col">Penulis</th>
        <th scope="col">Penerbit</th>
        <th scope="col">Tahun</th>
        <th scope="col">Stok</th>
        <th scope="col">Harga Pokok</th>
        <th scope="col">Harga Jual</th>
        <th scope="col">PPN</th>
        <th scope="col">Diskon</th>
      </tr>
    </thead>
    <tbody>
        @foreach ($buku as $bk)
        <tr>
          <th scope="row">{{$bk->id_buku}}</th>
          <td>{{ $bk->judul }}</td>
          <td>{{ $bk->noisbn }}</td>
          <td>{{ $bk->penulis }}</td>
          <td>{{ $bk->penerbit }}</td>
          <td>{{ $bk->tahun }}</td>
          <td>{{ $bk->stok }}</td>
          <td>{{ $bk->harga_pokok }}</td>
          <td>{{ $bk->harga_jual }}</td>
          <td>{{ $bk->ppn }}%</td>
          <td>{{ $bk->diskon }}%</td>
        </tr>
        @endforeach
    </tbody>
  </table>
@endsection
