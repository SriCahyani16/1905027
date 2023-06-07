@extends('template/app')
@section('title','Kriteria')

@section('content')
         <!-- Page Heading -->
         <h1 class="h3 mb-4 text-gray-800">Kriteria</h1>

         <form action="/kriteria/{{$kriteria->id}}" method="POST">
            @csrf
            @method('PATCH')
            <div class="form-group">
                <label for="nama">Kode Kriteria</label>
                <input type="text" class="form-control" id="id" name='kode_kriteria' value="{{$kriteria->kode_kriteria}}">
                @error('nama')
                <small class="text-danger">{{ $message }}</small>
                @enderror
                </div>
            <div class="form-group">
                <label for="nama">Nama</label>
                <input type="text" class="form-control" id="id" name='nama' value="{{$kriteria->nama}}">
                @error('nama')
                <small class="text-danger">{{ $message }}</small>
                @enderror
            </div>
                <div class="form-group">
                <label for="nama">Bobot</label>
                <input type="text" class="form-control" id="id" name='bobot' value="{{$kriteria->bobot}}">
                 @error('nama')
                <small class="text-danger">{{ $message }}</small>
                @enderror
                </div>

                <button type="submit" class="btn btn-primary btn-sm">Edit</button>
                <a hef="/kriteria" class="btn btn-secondary btn-sm">Kembali</a>
          </form>

@endsection
