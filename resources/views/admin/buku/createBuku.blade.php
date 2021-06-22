@extends('layout.adminlayout')

@section('title','Input Buku')
@section('content')

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
