<?php

namespace App\Http\Controllers;

use App\Projek;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class Projekkontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $projek = DB::table('projek')->get();
        return view('admin.projek.index',  ['projek' => $projek]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Projek $projek)
    {


        $request->validate([
            'isi' => 'required',

        ]);
        // dd($request->isi);

        $path = public_path() . '/img/';
        if ($request->file == '') {
            //jika gambar kosong
            $gambar_old = $projek->gambar;
            $filename = $gambar_old;
        } else {
            //jika gambar isi
            // cHapus file lama
            if ($projek->gambar != ''  && $projek->gambar != null) {
                $gambar_old = $path . $projek->gambar;
                unlink($gambar_old);
            }
            $file = $request->file;
            $filename = $file->getClientOriginalName();
            $file->move($path, $filename);
        }

        $projek->deskripsi = $request->isi;
        $projek->gambar = $filename;
        $projek->save();
        return redirect('/admin/projek')->with('status', 'Data, Berhasil Diubah!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
