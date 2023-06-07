@extends('template/app')
@section('title','Alternatif')

@section('content')
    {{-- flashdata --}}
    {!! session('sukses') !!}
         <!-- Page Heading -->
         <h1 class="h3 mb-4 text-gray-800">Alternatif</h1>

         <a href="/alternatif/create" class="btn btn-primary btn-sm"><i class="fas fa-plus"></i> Alternatif</a>

         <!--Table-->
         <table class="table mt-4 table-hover table-bordered">
            <thead>
              <tr>
                <th scope="col">ID Test</th>
                <th scope="col">No Test</th>
                <th scope="col">Nama</th>
                <th scope="col">Jenis Kelamin</th>
                <th scope="col">Asal Sekolah</th>
                <th scope="col">Jurusan</th>
                <th scope="col">Aksi</th>

              </tr>
            </thead>
            <tbody>
                @foreach ($alternatif as $row )
                <tr>
                    <td>{{$loop->iteration}}</td>
                    <td>{{$row->no_test}}</td>
                    <td>{{$row->nama}}</td>
                    <td>{{$row->jk}}</td>
                    <td>{{$row->asal_sekolah}}</td>
                    <td width="20%">
                        <div class="btn-group" role="group" aria-label="Basic example">
                            <a href="/alternatif/{{$row->id_test}}/edit" class="btn btn-primary btn-sm"><i class="fas fa-edit"></i>Edit </a>
                            <form action="/alternatif/{{$row->id_test}}" method="post">
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

         {{$alternatif->links()}}
@endsection
