@extends('layout/kasirlayout')

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
                    <a class="nav-link active" aria-current="page" href="/kasir/">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/kasir/transaksi">Transaksi</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button"
                        data-bs-toggle="dropdown" aria-expanded="false">
                        Lab
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                        <li><a class="dropdown-item" href="#">Cetak Fitur</a></li>
                        <li><a class="dropdown-item" href="#">Semua penjualan</a></li>
                        <li><a class="dropdown-item" href="#">Pernjualan pertanggal</a></li>
                    </ul>
                </li>
                <li class="nav-item position-absolute top-0 end-0">
                    <a class="nav-link" href="{{ url('logout') }}">Logout</a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<div class="jumbotron jumbotron-fluid mt-5">
    <div class="container">
      <h1 class="display-4">Selamat datang Kasir</h1>
      <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Corporis facere natus reiciendis, veritatis maxime, vitae pariatur vel voluptates repudiandae distinctio, itaque sequi. Ullam molestias ab alias suscipit? Eaque, architecto necessitatibus?</p>
    </div>
  </div>

@endsection
