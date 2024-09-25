<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Http\Resources\PostResource;

class LuasSegitigaController extends Controller
{
    public function hitungLuasSegitiga (Request $request)
    {
        $alas = $request->alas;
        $tinggi = $request->tinggi;
        $hitung = 0.5 * $alas * $tinggi;
        return new PostResource(true, 'Berhasil Hitung Luas Segitiga', ['hasil' => $hitung]);
    }
}