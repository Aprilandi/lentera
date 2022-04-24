<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Gurus;
use Illuminate\Support\Facades\File;

class GurusesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $guru = Gurus::get();
        return view('dashboard.guru.index', ['guru' => $guru])->with('active', 'active');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('dashboard.guru.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = [
            'nutpk' => $request->nutpk,
            'nama_guru' => $request->nama_guru,
            'alamat_guru' => $request->alamat_guru,
            'tlp_guru' => $request->tlp_guru,
            'ttl_guru' => $request->ttl_guru,
            'no_ktp_guru' => $request->no_ktp_guru,
            'no_kk_guru' => $request->no_kk_guru,
            'nama_ibu_guru' => $request->nama_ibu_guru,
            'pen_akhir_guru' => $request->pen_akhir_guru,
            'jabatan_guru' => $request->jabatan_guru,
            'email_guru' => $request->email_guru,
            'status_aktif_guru' => 1,
        ];

        if ($request->file('foto_guru')) {
            $image = $request->file('foto_guru');
            $imageName = $image->getClientOriginalName();
            $image->move(public_path('/foto-guru'), $imageName);
            $data['foto_guru'] = $imageName;
        }

        Gurus::create($data);
        return redirect('/guru')->with('insert', 'Data Berhasil Ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($nama_guru)
    {
        //
        $guru = Gurus::where('nama_guru', $nama_guru)->firstOrFail();
        return view('dashboard.guru.show', compact('guru'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($nama_guru)
    {
        //
        $guru = Gurus::where('nama_guru', $nama_guru)->firstOrFail();
        return view('dashboard.guru.edit', compact('guru'));
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
        //
        $data = $request->except(['_method', '_token']);

        if ($request->hasFile('foto_guru')) {
            $image = $request->file('foto_guru');
            $imageName = $image->getClientOriginalName();
            $image->move(public_path('/foto-guru'), $imageName);
            $data['foto_guru'] = "$imageName";
        }

        Gurus::where('id_guru', $id)->update($data);
        return redirect('/guru')->with('update', 'Data Berhasil Dirubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Gurus $guru)
    {
        //
        if ($guru->foto_guru) {
            File::delete(public_path('/foto-guru/' . $guru->foto_guru));
        }
        Gurus::destroy($guru->id_guru);
        return redirect('/guru')->with('delete', 'Data Berhasil Dihapus');
    }
}
