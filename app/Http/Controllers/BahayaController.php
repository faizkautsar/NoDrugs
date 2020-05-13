<?php

namespace App\Http\Controllers;

use App\Bahaya;
use Illuminate\Http\Request;

class BahayaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $bahaya = Bahaya::all();
        return view('pages.dampak.dampak', compact('bahaya'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.dampak.tambahkan');

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
          'tubuh'=>'required',
          'keterangan'=>'required',
          'bahaya'=>'required',
          'gambar'=>'required|image|mimes:jpg,png,jpeg|max:2048',
        ]);

        $gambar = $request->file('gambar');
        $filenama = time().'.'. $gambar->getClientOriginalExtension();
        $tempatfile = public_path('uploads/narkoba/dampak');
        $gambar->move($tempatfile, $filenama);

        $bahaya = new Bahaya();
        $bahaya->tubuh = $request->tubuh;
        $bahaya->keterangan = $request->keterangan;
        $bahaya->bahaya = $request->bahaya;
        $bahaya->gambar = $filenama;
        $bahaya->save();

        return redirect()->route('dampak.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Bahaya  $bahaya
     * @return \Illuminate\Http\Response
     */
    public function show(Bahaya $bahaya)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Bahaya  $bahaya
     * @return \Illuminate\Http\Response
     */
    public function edit(Bahaya $bahaya)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Bahaya  $bahaya
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Bahaya $bahaya)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Bahaya  $bahaya
     * @return \Illuminate\Http\Response
     */
    public function destroy(Bahaya $bahaya)
    {
        //
    }
}
