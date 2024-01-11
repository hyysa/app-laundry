<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Validation\Rule;
use App\Models\Layanan;


class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data_layanan = Layanan::all();

        return view('pages/order', compact('data_layanan'));
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
        // Validasi input
        $request->validate([
            'nama_pelanggan' => 'required|string',
            'telepon' => 'required|string',
            'alamat' => 'required|string',
            'layanan' => 'required|string',
            'jumlah' => 'required|numeric',

        ]);

        // Simpan data ke database
        Order::create([
            'kode' => $request->kode,
            'nama_pelanggan' => $request->nama_pelanggan,
            'telepon' => $request->telepon,
            'alamat' => $request->alamat,
            'layanan' => $request->layanan,
            'jumlah' => $request->jumlah,
            'keterangan' => 'Proses',
        ]);

        // Redirect atau tindakan lain setelah penyimpanan
        return redirect()->back()->with('success', 'Data berhasil ditambahkan.');
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
}
