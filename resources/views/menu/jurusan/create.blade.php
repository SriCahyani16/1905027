@extends('template/app')
@section('title','Jurusan')

@section('content')
         <!-- Page Heading -->
         <h1 class="h3 mb-4 text-gray-800">Jurusan</h1>

         <form action="/jurusan" method="POST">
           <div class="form-group">
                <label for="nama">ID</label>
                <input type="text" class="form-control" id="id" name='id'>
                @error('id')
                <small class="text-danger">{{ $message }}</small>
                @enderror
                </div>
            @csrf
            <div class="form-group">
                <label for="nama">Kode Jurusan</label>
                <input type="text" class="form-control" id="id" name='kdjur'>
                @error('kode')
                <small class="text-danger">{{ $message }}</small>
                @enderror
                </div>
            <div class="form-group">
                <label for="nama">Jurusan</label>
                <input type="text" class="form-control" id="id" name='jurusan'>
                @error('jurusan')
                <small class="text-danger">{{ $message }}</small>
                @enderror
            </div>

                <button type="submit" class="btn btn-primary btn-sm">Tambah</button>
                <a hef="/jurusan" class="btn btn-secondary btn-sm">Kembali</a>
          </form>

@endsection
