@extends('template/app')
@section('title','Kriteria')

@section('content')
         <!-- Page Heading -->
         <h1 class="h3 mb-4 text-gray-800">Kriteria</h1>

         <form action="/kriteria" method="POST">
           <div class="form-group">
                <label for="nama">ID</label>
                <input type="text" class="form-control" id="id" name='id'>
                @error('id')
                <small class="text-danger">{{ $message }}</small>
                @enderror
                </div>
            @csrf
            <div class="form-group">
                <label for="nama">kode kriteria</label>
                <input type="text" class="form-control" id="id" name='kode_kriteria'>
                @error('kode')
                <small class="text-danger">{{ $message }}</small>
                @enderror
                </div>
            <div class="form-group">
                <label for="nama">Nama</label>
                <input type="text" class="form-control" id="id" name='nama'>
                @error('nama')
                <small class="text-danger">{{ $message }}</small>
                @enderror
            </div>
                <div class="form-group">
                <label for="nama">Bobot</label>
                <input type="text" class="form-control" id="id" name='bobot'>
                 @error('bobot')
                <small class="text-danger">{{ $message }}</small>
                @enderror
                </div>

                <button type="submit" class="btn btn-primary btn-sm">Tambah</button>
                <a hef="/kriteria" class="btn btn-secondary btn-sm">Kembali</a>
          </form>

@endsection
