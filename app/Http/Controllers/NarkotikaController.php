<?php

namespace App\Http\Controllers;

use App\Narkotika;
use Illuminate\Http\Request;

class NarkotikaController extends Controller
{
    public function _construct()
    {
      $this->middleware('auth');
    }

    public function index()
    {
      $narkotika = Narkotika::all();
      return view('pages.narkoba.narkotika.narkotika', compact('narkotika'));  //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      return view('pages.narkoba.narkotika.tambah');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
          'nama' => 'required',
          'dampak' => 'required',
          'keterangan' => 'required',
          'gambar' => 'required|image|mimes:jpg,png,jpeg|max:2048',

        ]);

        $gambar = $request->file('gambar');
        $filename = time().'.'. $gambar->getClientOriginalExtension();
        $tempatfile = public_path('uploads/narkoba/narkotika');
        $gambar->move($tempatfile, $filename);

        $narkotika = new Narkotika();
        $narkotika->nama = $request->nama;
        $narkotika->jenis = $request->jenis;
        $narkotika->golongan = $request->golongan;
        $narkotika->dampak = $request->dampak;
        $narkotika->keterangan = $request->keterangan;
        $narkotika->gambar = $filename;
        $narkotika->save();


        return redirect()->route('narkotika.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Narkotika  $narkotika
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $narkotika = Narkotika::find($id);
        return view ('pages.narkoba.narkotika.lihat', compact('narkotika'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Narkotika  $narkotika
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
      $narkotika = Narkotika::findOrFail($id);
        return view('pages.narkoba.narkotika.ubah', compact('narkotika'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Narkotika  $narkotika
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

          $this->validate($request,[
            'nama' => 'required',
            'dampak' => 'required',
            'keterangan' => 'required',
            'gambar' => 'image|mimes:jpg,png,jpeg|max:2048',

          ]);

          $narkotika = Narkotika::findOrFail($id);

          $filename = $narkotika->gambar;

          if($request->gambar){
            $gambar = $request->file('gambar');
            $filename = time().'.'. $gambar->getClientOriginalExtension();
            $tempatfile = public_path('uploads/narkoba/narkotika');
            $gambar->move($tempatfile, $filename);
          }


          $narkotika->nama = $request->nama;
          $narkotika->jenis = $request->jenis;
          $narkotika->golongan = $request->golongan;
          $narkotika->dampak = $request->dampak;
          $narkotika->keterangan = $request->keterangan;
          $narkotika->gambar = $filename ;
          $narkotika->update();


          return redirect()->route('narkotika.index');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Narkotika  $narkotika
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $narkotika = Narkotika::findOrFail($id);
        $narkotika->delete();
        return redirect()->route('narkotika.index');
    }
}
