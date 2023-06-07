@extends('template/app')
@section('title','Subkriteria')

@section('content')
    {{-- flashdata --}}
    {!! session('sukses') !!}
         <!-- Page Heading -->
         <h1 class="h3 mb-4 text-gray-800">Subkriteria</h1>

         <a href="/subkriteria/create" class="btn btn-primary btn-sm"><i class="fas fa-plus"></i>SubKriteria</a>

         <!--Table-->
         <table class="table mt-4 table-hover table-bordered">
            <thead>
              <tr>
                <th scope="col">No</th>
                <th scope="col">Id Kriteria</th>
                <th scope="col">Jenis</th>

                <th scope="col">Aksi</th>

              </tr>
            </thead>
            <tbody>
                @foreach ($subkriteria as $row )
                <tr>
                    <td>{{$loop->iteration}}</td>
                    <td>{{$row->id_kriteria}}</td>
                    <td>{{$row->jenis}}</td>

                    <td width="20%">
                        <div class="btn-group" role="group" aria-label="Basic example">
                            <a href="/subkriteria/{{$row->id}}/show" class="btn btn-primary btn-sm"><i class="fas fa-edit"></i>Lihat </a>
                            <form action="/subkriteria/{{$row->id}}" method="post">
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

         {{$subkriteria->links()}}
@endsection
