@extends('template/app')
@section('title','Jurusan')

@section('content')
    {{-- flashdata --}}
    {!! session('sukses') !!}
         <!-- Page Heading -->
         <h1 class="h3 mb-4 text-gray-800">Jurusan</h1>

         <a href="/jurusan/create" class="btn btn-primary btn-sm"><i class="fas fa-plus"></i>Jurusan</a>

         <!--Table-->
         <table class="table mt-4 table-hover table-bordered">
            <thead>
              <tr>
                <th scope="col">No</th>
                <th scope="col">Kode Jurusan</th>
                <th scope="col">Jurusan</th>
                <th scope="col">Aksi</th>

              </tr>
            </thead>
            <tbody>
                @foreach ($jurusan as $row )
                <tr>
                    <td>{{$loop->iteration}}</td>
                    <td>{{$row->kdjur}}</td>
                    <td>{{$row->jurusan}}</td>
                    <td width="20%">
                        <div class="btn-group" role="group" aria-label="Basic example">
                            <a href="/jurusan/{{$row->id}}/edit" class="btn btn-primary btn-sm"><i class="fas fa-edit"></i>Edit </a>
                            <form action="/jurusan/{{$row->id}}" method="post">
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

         {{$jurusan->links()}}
@endsection
