@extends('template/app')
@section('title','Kriteria')

@section('content')
    {{-- flashdata --}}
    {!! session('sukses') !!}
         <!-- Page Heading -->
         <h1 class="h3 mb-4 text-gray-800">Kriteria</h1>

         <a href="/kriteria/create" class="btn btn-primary btn-sm"><i class="fas fa-plus"></i>Kriteria</a>

         <!--Table-->
         <table class="table mt-4 table-hover table-bordered">
            <thead>
              <tr>
                <th scope="col">No</th>
                <th scope="col">Kode Kriteria</th>
                <th scope="col">Nama</th>
                <th scope="col">Bobot</th>
                <th scope="col">Aksi</th>

              </tr>
            </thead>
            <tbody>
                @foreach ($kriteria as $row )
                <tr>
                    <td>{{$loop->iteration}}</td>
                    <td>{{$row->kode_kriteria}}</td>
                    <td>{{$row->nama}}</td>
                    <td>{{$row->bobot}}</td>
                    <td width="20%">
                        <div class="btn-group" role="group" aria-label="Basic example">
                            <a href="/kriteria/{{$row->id}}/edit" class="btn btn-primary btn-sm"><i class="fas fa-edit"></i>Edit </a>
                            <form action="/kriteria/{{$row->id}}" method="post">
                                @method('DELETE')
                                @csrf
                                <button type="submit" class="btn btn-danger btn-sm"><i class="fas fa-trash"></i>Hapus</button>
                            </form>
                        </div>
                    </td>
                </tr>
                @endforeach

            </tbody>
          </table>

         {{$kriteria->links()}}
@endsection
