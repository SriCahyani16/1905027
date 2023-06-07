@extends('template/app')
@section('title','Jurusan')

@section('content')
         <!-- Page Heading -->
         <h1 class="h3 mb-4 text-gray-800">Jurusan</h1>

         <form action="/jurusan/{{$jurusan->id}}" method="POST">
            @csrf
            @method('PATCH')
            <div class="form-group">
                <label for="nama">Kode Jurusan</label>
                <input type="text" class="form-control" id="id" name='kdjur' value="{{$jurusan->kdjur}}">
                @error('nama')
                <small class="text-danger">{{ $message }}</small>
                @enderror
                </div>
            <div class="form-group">
                <label for="nama">Jurusan</label>
                <input type="text" class="form-control" id="id" name='jurusan' value="{{$jurusan->jurusan}}">
                @error('nama')
                <small class="text-danger">{{ $message }}</small>
                @enderror
            </div>
                <button type="submit" class="btn btn-primary btn-sm">Edit</button>
                <a hef="/jurusan" class="btn btn-secondary btn-sm">Kembali</a>
          </form>

@endsection
