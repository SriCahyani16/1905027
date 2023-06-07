@extends('template/app')
@section('title','Subkriteria')

@section('content')
         <!-- Page Heading -->
         <h1 class="h3 mb-4 text-gray-800">SubKriteria</h1>

         <form action="/subkriteria" method="POST">
           <div class="form-group">
                <label for="nama">ID</label>
                <input type="text" class="form-control" id="id" name='id'>
                @error('id')
                <small class="text-danger">{{ $message }}</small>
                @enderror
                </div>
            <div class="form-group">
                <label for="nama">ID Kriteria</label>
                <input type="text" class="form-control" id="id" name='id_kriteria'>
                @error('id_kriteria')
                <small class="text-danger">{{ $message }}</small>
                @enderror
                </div>
            @csrf
            <div class="form-group">
                <label for="nama">Jenis</label>
                <input type="text" class="form-control" id="id" name='jenis'>
                @error('jenis')
                <small class="text-danger">{{ $message }}</small>
                @enderror
                </div>

                <button type="submit" class="btn btn-primary btn-sm">Tambah</button>
                <a hef="/subkriteria" class="btn btn-secondary btn-sm">Kembali</a>
          </form>

@endsection
