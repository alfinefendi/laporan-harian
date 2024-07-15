<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\KeluhanPelanggan;

class KeluhanPelangganController extends Controller
{
    public function index()
    {
        
        return view('renders.halaman-keluhan.input');  
    }
    public function store(Request $request)
    {
        $dataTervalidasi = $request->validate([    
            'nomor_pelanggan' => 'required|numeric',
            'nama_pelanggan' => 'required|string',
            'nomor_hp' => 'required|numeric',
            'keterangan' => '',
            'status' => ''
        ]);
        KeluhanPelanggan::create($dataTervalidasi);
        return response()->json(['message' => 'ok']);
    }

    public function tabel()
    {
        $keluhanPelanggan = KeluhanPelanggan::all();
        return view('renders.halaman-keluhan.index', compact('keluhanPelanggan'));
    }
}
