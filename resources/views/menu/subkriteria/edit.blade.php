@extends('template/app')
@section('title','SubKriteria')

@section('content')
         <!-- Page Heading -->
         <h1 class="h3 mb-4 text-gray-800">Sub Kriteria</h1>

         <form action="/subkriteria/{{$subkriteria->id}}" method="POST">
            @csrf
            @method('PATCH')
            <div class="form-group">
                <label for="nama">Id Kriteria</label>
                <input type="text" class="form-control" id="id" name='id_kriteria' value="{{$subkriteria->id_kriteria}}">
                @error('id_kriteria')
                <small class="text-danger">{{ $message }}</small>
                @enderror
            </div>
            <div class="form-group">
                <label for="nama">Jenis</label>
                <input type="text" class="form-control" id="id" name='jenis' value="{{$subkriteria->jenis}}">
                @error('jenis')
                <small class="text-danger">{{ $message }}</small>
                @enderror
            </div>


                <button type="submit" class="btn btn-primary btn-sm">Edit</button>
                <a hef="/subkriteria" class="btn btn-secondary btn-sm">Kembali</a>
          </form>

@endsection
