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

    public function edit(KeluhanPelanggan $keluhan)
    {
        return view('renders.halaman-keluhan.edit', compact('keluhan'));
    }
    public function update(Request $request, KeluhanPelanggan $keluhan)
    {
        $dataTervalidasi = $request->validate([    
            'penanganan' => 'required'
        ]);
        $keluhan->penanganan = $dataTervalidasi['penanganan'];
        $keluhan->save();
        return redirect('tabel');
    }

    public function tabel()
    {
        $keluhanPelanggan = KeluhanPelanggan::all();
        return view('renders.halaman-keluhan.index', compact('keluhanPelanggan'));
    }

    public function delete(KeluhanPelanggan $keluhan_pelanggan)
    {
        $keluhan_pelanggan->delete();
        return back();
    }
}
