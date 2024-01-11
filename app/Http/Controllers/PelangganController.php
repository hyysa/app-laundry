<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Validation\Rule;
use App\Models\PesananModel;

class PelangganController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        $data_pelanggan = PesananModel::join('tb_layanan', 'tb_pesanan.layanan', '=', 'tb_layanan.id')
            ->select('tb_pesanan.*', 'tb_layanan.layanan as nama_layanan', 'tb_layanan.harga', 'tb_layanan.keterangan as layanan_keterangan')
            ->get();

        return view('pages/pelanggan', compact('data_pelanggan'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }

    public function cetak($id)
    {
        $data_pelanggan = PesananModel::join('tb_layanan', 'tb_pesanan.layanan', '=', 'tb_layanan.id')
            ->select('tb_pesanan.*', 'tb_layanan.layanan As nama_layanan', 'tb_layanan.harga', 'tb_layanan.keterangan as layanan_keterangan')
            ->where('tb_pesanan.id', $id)
            ->first();

        if (!$data_pelanggan) {
            // Redirect atau berikan respons jika data tidak ditemukan
            return redirect()->back()->with('error', 'Data pelanggan tidak ditemukan.');
        }

        return view('pages/cetak', compact('data_pelanggan'));
    }
}
