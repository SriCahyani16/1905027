<?php

namespace App\Http\Controllers;

use App\Models\Jurusan;
use Illuminate\Http\Request;

class JurusanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $jurusan = Jurusan::select('id','kdjur','jurusan')->simplepaginate(10);
        return view('menu/jurusan/index', compact('jurusan'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('menu/jurusan/create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'kdjur'=>'required',
            'jurusan' => 'required'
        ]);

        Jurusan::create([
            'kdjur' => $request->kdjur,
            'jurusan' =>$request->jurusan

        ]);

        $request->session()->flash('sukses','
        <div class="alert alert-succes" role="alert">
            Data berhasil ditambahkan
        </div>
        ');
        return redirect('jurusan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $jurusan = Jurusan::select('id','kdjur','jurusan')->whereId($id)->first();
        return view('menu/jurusan/edit', compact('jurusan'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'kdjur'=>'required',
            'jurusan' => 'required'
        ]);
        Jurusan::whereId($id)->update([
            'kdjur' => $request->kdjur,
            'jurusan' =>$request->jurusan
        ]);

        $request->session()->flash('sukses','
        <div class="alert alert-succes" role="alert">
            Data berhasil di ubah
        </div>
        ');
        return redirect('/jurusan');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, $id)
    {
        Jurusan::whereId($id)->delete();

        $request->session()->flash('sukses','
        <div class="alert alert-succes" role="alert">
            Data berhasil di hapus
        </div>
        ');
        return redirect('/jurusan');
    }
}
