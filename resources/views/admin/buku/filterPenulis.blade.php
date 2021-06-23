@extends('layout.adminlayout')

@section('title','Filter Penulis')
@section('content')

    <select class="form-select mt-2" aria-label="Default select example">
        <option selected>Pilih Penulis</option>
        @foreach ($buku->unique(['penulis']) as $bk)
        <option value="{{ $bk->penulis }}">{{ $bk->penulis }}</option>
        @endforeach
      </select>

@endsection
