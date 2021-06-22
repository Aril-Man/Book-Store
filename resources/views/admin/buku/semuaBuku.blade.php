@extends('layout.adminlayout')

@section('title', 'Show All Book')
@section('content')


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
