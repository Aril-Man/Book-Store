@extends('layout.adminlayout')

@section('title','Filter Penulis')
@section('content')

    <select class="form-select" aria-label="Default select example">
        <option selected>Pilih Penulis</option>
        @foreach ($buku as $bk)
        <option value="{{ $bk->penulis }}">{{ $bk->penulis }}</option>
        @endforeach
      </select>

@endsection
