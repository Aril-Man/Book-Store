@extends('layout.adminlayout')

@section('title','edit Buku')
@section('content')


@if (session('alert'))
<div class="alert alert-success">
    {{ session('alert') }}
</div>
@endif

<div class="row">
    <div class="col-8">
        <h1 class="mt-3">Form Ubah Buku</h1>
        <form method="POST" action="/admin/buku/createBuku/{{ $buku->id_buku }}">
            @method('patch')
            @csrf
            <div class="mb-3">
                <label for="id_buku" class="form-label">Id Buku</label>
                <input type="text" name="id_buku" class="form-control @error('id_buku') is-invalid @enderror" id="id_buku"
                     value="{{ $buku->id_buku }}">
            </div>
            <div class="mb-3">
                <label for="judul" class="form-label">Judul</label>
                <input type="text" name="judul" class="form-control @error('judul') is-invalid @enderror" id="judul"
                     value="{{ $buku->judul }}">
            </div>
            <div class="mb-3">
                <label for="noisbn" class="form-label">No ISBN</label>
                <input type="text" name="noisbn" class="form-control @error('noisbn') is-invalid @enderror" id="noisbn"
                     value="{{ $buku->noisbn }}">
            </div>
            <div class="mb-3">
                <label for="penulis" class="form-label">Penulis</label>
                <input type="text" name="penulis" class="form-control @error('penulis') is-invalid @enderror" id="penulis"
                     value="{{ $buku->penulis }}">
            </div>
            <div class="mb-3">
                <label for="penerbit" class="form-label">Penerbit</label>
                <input type="text" name="penerbit" class="form-control @error('penerbit') is-invalid @enderror" id="penerbit"
                     value="{{ $buku->penerbit }}">
            </div>
            <div class="mb-3">
                <label for="tahun" class="form-label">Tahun</label>
                <input type="text" name="tahun" class="form-control @error('tahun') is-invalid @enderror" id="tahun"
                     value="{{ $buku->tahun }}">
            </div>
            <div class="mb-3">
                <label for="stok" class="form-label">Stok</label>
                <input type="text" name="stok" class="form-control @error('stok') is-invalid @enderror" id="stok"
                     value="{{ $buku->stok }}">
            </div>
            <div class="mb-3">
                <label for="harga_pokok" class="form-label">Harga Pokok</label>
                <input type="text" name="harga_pokok" class="form-control @error('harga_pokok') is-invalid @enderror" id="harga_pokok"
                     value="{{ $buku->harga_pokok }}">
            </div>
            <div class="mb-3">
                <label for="harga_jual" class="form-label">Harga Jual</label>
                <input type="text" name="harga_jual" class="form-control @error('harga_jual') is-invalid @enderror" id="harga_jual"
                     value="{{ $buku->harga_jual }}">
            </div>
            <div class="mb-3">
                <label for="ppn" class="form-label">PPN</label>
                <input type="text" name="ppn" class="form-control @error('ppn') is-invalid @enderror" id="ppn"
                     value="{{ $buku->ppn }}">
            </div>
            <div class="mb-3">
                <label for="diskon" class="form-label">Diskon</label>
                <input type="text" name="diskon" class="form-control @error('diskon') is-invalid @enderror" id="diskon"
                     value="{{ $buku->diskon }}">
            </div>

            <button type="submit" class="btn btn-primary">Update</button>
        </form>
    </div>
</div>

@endsection
