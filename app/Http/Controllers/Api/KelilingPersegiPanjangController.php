<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Http\Resources\PostResource;

class KelilingPersegiPanjangController extends Controller
{
    public function hitungkelilingPersegiPanjang (Request $request)
    {
        $panjang = $request->panjang;
        $lebar = $request->lebar;
        $hitung = 2 * ($panjang + $lebar);
        return new PostResource(true, 'Berhasil Hitung Keliling Persegi Panjang', ['hasil' => $hitung]);
    }
}