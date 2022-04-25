<?php

namespace App\Http\Controllers;

use App\Models\Siswas;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class SiswasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $siswa = Siswas::get();
        return view('dashboard.siswa.index', ['siswa' => $siswa])->with('active', 'active');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('dashboard.siswa.create');
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
            'no_induk_siswa' => $request->no_induk_siswa,
            'nama_siswa' => $request->nama_siswa,
            'alamat_siswa' => $request->alamat_siswa,
            'tlp_siswa' => $request->tlp_siswa,
            'ttl_siswa' => $request->ttl_siswa,
            'no_ktp_siswa' => $request->no_ktp_siswa,
            'no_kk_siswa' => $request->no_kk_siswa,
            'nama_ayah_siswa' => $request->nama_ayah_siswa,
            'pekerjaan_ayah' => $request->pekerjaan_ayah,
            'nama_ibu_siswa' => $request->nama_ibu_siswa,
            'pekerjaan_ibu' => $request->pekerjaan_ibu,
            'golongan_siswa' => $request->golongan_siswa,
            'status_aktif_siswa' => 1,
        ];

        if ($request->file('foto_siswa')) {
            $image = $request->file('foto_siswa');
            $imageName = $image->getClientOriginalName();
            $image->move(public_path('/foto-siswa'), $imageName);
            $data['foto_siswa'] = $imageName;
        }

        Siswas::create($data);
        return redirect('/siswa')->with('insert', 'Data Berhasil Ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($nama_siswa)
    {
        //
        $siswa = Siswas::where('nama_siswa', $nama_siswa)->firstOrFail();
        return view('dashboard.siswa.show', compact('siswa'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($nama_siswa)
    {
        //
        $siswa = Siswas::where('nama_siswa', $nama_siswa)->firstOrFail();
        return view('dashboard.siswa.edit', compact('siswa'));
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

        if ($request->hasFile('foto_siswa')) {
            $image = $request->file('foto_siswa');
            $imageName = $image->getClientOriginalName();
            $image->move(public_path('/foto-siswa'), $imageName);
            $data['foto_siswa'] = "$imageName";
        }

        Siswas::where('id_siswa', $id)->update($data);
        return redirect('/siswa')->with('update', 'Data Berhasil Dirubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Siswas $siswa)
    {
        //
        if ($siswa->foto_siswa) {
            File::delete(public_path('/foto-siswa/' . $siswa->foto_siswa));
        }
        Siswas::destroy($siswa->id_siswa);
        return redirect('/siswa')->with('delete', 'Data Berhasil Dihapus');
    }
}
