<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Order;
use App\Models\PesananModel;

class TransaksiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data_pelanggan = PesananModel::join('tb_layanan', 'tb_pesanan.layanan', '=', 'tb_layanan.id')
            ->select('tb_pesanan.*', 'tb_layanan.layanan as nama_layanan', 'tb_layanan.harga', 'tb_layanan.keterangan as layanan_keterangan')
            ->get();

        return view('administrator/transaksi', compact('data_pelanggan'));
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
        $request->validate([
            // Sesuaikan dengan kebutuhan validasi Anda
            'keterangan' => 'required|string',
        ]);

        // Ambil data pelanggan berdasarkan $id
        $data_pelanggan = PesananModel::find($id);

        if (!$data_pelanggan) {
            // Redirect atau berikan respons jika data tidak ditemukan
            return redirect()->route('transaksi.index')->with('error', 'Data pelanggan tidak ditemukan.');
        }

        // Update data dengan data baru dari formulir update
        $data_pelanggan->update([
            'keterangan' => $request->keterangan,
            // Sesuaikan dengan kolom lain yang ingin diupdate
        ]);

        // Redirect ke halaman yang sesuai atau berikan respons sesuai kebutuhan
        return redirect()->route('transaksi.index')->with('success', 'Data pelanggan berhasil diperbarui.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
    public function tanggapi($id)
    {
        $data_pelanggan = PesananModel::join('tb_layanan', 'tb_pesanan.layanan', '=', 'tb_layanan.id')
            ->select('tb_pesanan.*', 'tb_layanan.layanan as nama_layanan', 'tb_layanan.harga', 'tb_layanan.keterangan as layanan_keterangan')
            ->where('tb_pesanan.id', $id)
            ->first();

        if (!$data_pelanggan) {
            // Redirect atau berikan respons jika data tidak ditemukan
            return redirect()->route('halaman.yang.diinginkan')->with('error', 'Data pelanggan tidak ditemukan.');
        }

        return view('administrator.tanggapi', compact('data_pelanggan'));
    }

    public function cetakLaporan()
    {
        $data_pelanggan = PesananModel::join('tb_layanan', 'tb_pesanan.layanan', '=', 'tb_layanan.id')
            ->select('tb_pesanan.*', 'tb_layanan.layanan as nama_layanan', 'tb_layanan.harga', 'tb_layanan.keterangan as layanan_keterangan')
            ->get();

        $pendapatan = DB::table('tb_pesanan')
            ->join('tb_layanan', 'tb_pesanan.layanan', '=', 'tb_layanan.id')
            ->selectRaw('SUM(tb_layanan.harga * tb_pesanan.jumlah) AS total_pendapatan')
            ->first();

        // Total pendapatan dari semua transaksi
        $total_pendapatan = $pendapatan->total_pendapatan;

        return view('administrator/cetakLaporan', compact('data_pelanggan', 'total_pendapatan'));
    }
}
