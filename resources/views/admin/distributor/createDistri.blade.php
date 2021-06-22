@extends('layout.adminlayout')

@section('title','Input Dirsri')
@section('content')

@if (session('alert'))
<div class="alert alert-success">
    {{ session('alert') }}
</div>
@endif

<div class="row">
    <div class="col-8">
        <h1 class="mt-3">Form Tambah Distributor</h1>
        <form method="POST" action="/admin/distributor/createDistri">
            @csrf
            <div class="mb-3">
                <label for="nama_distributor" class="form-label">Nama Distributor</label>
                <input type="text" name="nama_distributor" class="form-control" id="nama_distributor"
                    placeholder="Masukan nama distributor">

            </div>
            <div class="mb-3">
                <label for="nama_distributor" class="form-label">Alamat</label>
                <textarea class="form-control" id="alamat" name="alamat" rows="3"></textarea>
            </div>
            <div class="mb-3">
                <label for="nama_distributor" class="form-label">No Telpon</label>
                <input type="text" name="telpon" class="form-control" id="telpon" placeholder="Masukan No telpon">
            </div>
            <button type="submit" class="btn btn-primary">Simpan</button>
        </form>
    </div>
</div>

<table class="table">
    <thead>
        <tr>
            <th scope="col">NO</th>
            <th scope="col">Nama Distributor</th>
            <th scope="col">Alamat</th>
            <th scope="col">No Telpon</th>
            <th scope="col">Aksi</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($admin as $adm)
        <tr>
            <th scope="row">{{$loop->iteration}}</th>
            <td>{{ $adm->nama_distributor }}</td>
            <td>{{ $adm->alamat }}</td>
            <td>{{ $adm->telpon }}</td>
            <td>
                <a href="/admin/distributor/{{ $adm->id_distributor }}/editDistri" class="btn btn-warning">Edit</a>
                <form action="/admin/distributor/createDistri/{{ $adm->id_distributor }}" method="POST"
                    class="d-inline">
                    @method('delete')
                    @csrf
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection
