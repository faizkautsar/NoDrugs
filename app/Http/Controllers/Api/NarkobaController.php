<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Rehabilitasi;
use App\Narkotika;

class NarkobaController extends Controller
{
    public function rehabilitasi(){
      $rehabilitasi = Rehabilitasi::all();
      return response()->json([
        'message' => 'Berhasil',
        'status' => true,
        'data' => $rehabilitasi
      ]);
    }

    public function narkotika(){
      $narkotika = Narkotika::all();
      return response()->json([
        'message' => 'Berhasil',
        'status' => true,
        'data' => $narkotika
      ]);
    }
}
