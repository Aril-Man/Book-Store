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
                    <a class="nav-link" href="{{ url('logout') }}" onclick="return confirm('Anda ingin Logout?')">Logout</a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<div class="jumbotron jumbotron-fluid mt-5">
    <div class="container">
      <h1 class="display-4">Selamat datang Admin</h1>
      <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Corporis facere natus reiciendis, veritatis maxime, vitae pariatur vel voluptates repudiandae distinctio, itaque sequi. Ullam molestias ab alias suscipit? Eaque, architecto necessitatibus?</p>
    </div>
  </div>

@endsection
