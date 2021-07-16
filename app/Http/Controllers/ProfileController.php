<?php

namespace App\Http\Controllers;

use App\Profile;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $profile = Profile::find(1);
        return view('admin.profile.index', ['profile' => $profile]);
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
    public function update(Request $request, Profile $profile)
    {

        // dd($profile->gambar);
        $request->validate([
            'nama' => 'required',
            'slogan' => 'required',
        ]);

        $path = public_path() . '/img/';

        if ($request->file == '') {
            //jika gambar kosong
            $gambar_old = $profile->gambar;
            $filename = $gambar_old;
        } else {
            //jika gambar isi
            // cHapus file lama
            if ($profile->gambar != ''  && $profile->gambar != null) {
                $gambar_old = $path . $profile->gambar;
                unlink($gambar_old);
            }
            $file = $request->file;
            $filename = $file->getClientOriginalName();
            $file->move($path, $filename);
        }
        
        //masukkan ke database
        $profile->nama = $request->nama;
        $profile->slogan = $request->slogan;
        $profile->gambar = $filename;
        $profile->save();
        return redirect('/admin/profile')->with('status', 'Data, Berhasil Diubah!');
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
