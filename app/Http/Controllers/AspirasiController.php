<?php

namespace App\Http\Controllers;

use App\Models\Aspirasi;
use App\Models\Penduduk;
use Illuminate\Http\Request;

class AspirasiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
        $validatedDataAspirasi = $request->validate([
            'id_kategori' => ['required'],
            'lokasi' => ['required'],
            'keterangan_singkat' => ['required', 'max:20'],
            'image' => ['required', 'file', 'max:3024'],
            'keterangan' => ['required'],
        ]);
        $validatedDataPenduduk = $request->validate([
            'nik' => ['required', 'integer'],
            'alamat' => ['required', 'max:30']
        ]);

        if ($request->file('image')) {
            $validatedDataAspirasi['image'] = $request->file('image')->store('bukti-gambar');
        }

        $validatedDataAspirasi['nik'] = $validatedDataPenduduk['nik'];
        $validatedDataAspirasi['status'] = "menunggu";
        $validatedDataAspirasi['feedback'] = "-";

        Penduduk::create($validatedDataPenduduk);
        Aspirasi::create($validatedDataAspirasi);
        return back()->with('success', 'Berhasil menginput Data');
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
    public function update(Aspirasi $aspirasi, Request $request)
    {
        if ($request['proses'] == "true") {
            if ($aspirasi->status == "menunggu") {
                Aspirasi::where('id', $aspirasi->id)->update(['status' => 'Proses']);
            } else {
                Aspirasi::where('id', $aspirasi->id)->update(['status' => 'Menunggu']);
            }
        }
        if ($request['selesai'] == "true") {
            if ($aspirasi->status == "menunggu") {
                Aspirasi::where('id', $aspirasi->id)->update(['status' => 'Selesai']);
            } else {
                Aspirasi::where('id', $aspirasi->id)->update(['status' => 'Menunggu']);
            }
        }
        
        return back()->with('status', 'Berhasil mengubah status aspirasi');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Aspirasi::destroy($id);
        return back()->with('success', 'Berhasil menghapus data');
    }

    public function view(Request $request)
    {
        return view('admin.aspirasi.view', [
            "aspirasi" => Aspirasi::find($request->id)
        ]);
    }

}
