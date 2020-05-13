<?php

namespace App\Http\Controllers;

use App\Pencegahan;
use Illuminate\Http\Request;

class PencegahanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pencegahan = Pencegahan::all();
        return view ('pages.Pencegahan.pencegahan', compact('pencegahan'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.pencegahan.tambahkan');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $pencegahan = new Pencegahan();
        $pencegahan->aspek = $request->aspek;
        $pencegahan->keterangan = $request->keterangan;
        $pencegahan->save();

        return redirect()->route('pencegahan.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Pencegahan  $pencegahan
     * @return \Illuminate\Http\Response
     */
    public function show(Pencegahan $pencegahan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Pencegahan  $pencegahan
     * @return \Illuminate\Http\Response
     */
    public function edit(Pencegahan $pencegahan)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Pencegahan  $pencegahan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Pencegahan $pencegahan)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Pencegahan  $pencegahan
     * @return \Illuminate\Http\Response
     */
    public function destroy(Pencegahan $pencegahan)
    {
        //
    }
}
