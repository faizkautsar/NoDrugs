<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Rehabilitasi;

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
}
