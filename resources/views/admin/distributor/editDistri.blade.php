@extends('layout.adminlayout')

@section('title','Edit Distri')
@section('content')

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
