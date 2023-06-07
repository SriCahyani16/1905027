@extends('template/app')
@section('title','Alternatif')

@section('content')
         <!-- Page Heading -->
         <h1 class="h3 mb-4 text-gray-800">Alternatif</h1>

         <form action="/alternatif" method="POST">
            @csrf
            <div class="form-group">
                <label for="nama">ID Test</label>
                <input type="text" class="form-control" id="id_test" name='id_test'>
                @error('nama')
                <small class="text-danger">{{ $message }}</small>
                @enderror
                </div>
            <div class="form-group">
                <label for="nama">no_test</label>
                <input type="text" class="form-control" id="id_test" name='no_test'>
                @error('nama')
                <small class="text-danger">{{ $message }}</small>
                @enderror
                </div>
            <div class="form-group">
                <label for="nama">Nama</label>
                <input type="text" class="form-control" id="id_test" name='nama'>
                @error('nama')
                <small class="text-danger">{{ $message }}</small>
                @enderror
            </div>
            <div class="form-group">
                <label for="nama">Jenis Kelamin</label>
                <input type="text" class="form-control" id="id_test" name='jk'>
                @error('nama')
                <small class="text-danger">{{ $message }}</small>
                @enderror
                </div>
                <div class="form-group">
                <label for="nama">Asal Sekolah</label>
                <input type="text" class="form-control" id="id_test" name='asal_sekolah'>
                 @error('nama')
                <small class="text-danger">{{ $message }}</small>
                @enderror
                </div>

                <button type="submit" class="btn btn-primary btn-sm">Tambah</button>
                <a hef="/alternatif" class="btn btn-secondary btn-sm">Kembali</a>
          </form>

@endsection
