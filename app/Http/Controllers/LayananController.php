<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Layanan;
use App\Models\Pesan;
use App\Models\PesananModel;


class LayananController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data_layanan = Layanan::all();
        return view('administrator/layanan', compact('data_layanan'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('administrator/tambah');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'layanan' => 'required|string',
            'harga' => 'required|numeric',
            'keterangan' => 'nullable|string',
        ]);

        // Simpan data ke dalam database
        Layanan::create([
            'layanan' => $request->layanan,
            'harga' => $request->harga,
            'keterangan' => $request->keterangan,
        ]);

        // Redirect ke halaman yang sesuai atau berikan respons sesuai kebutuhan
        return redirect()->route('layanan.index')->with('success', 'Data layanan berhasil ditambahkan.');
    }

    /**
     * Display the specified resource.
     */
    public function show()
    {
        $data_pesan = Pesan::all();
        return view('administrator/pesan', compact('data_pesan'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $data_layanan = Layanan::find($id);
        return view('administrator/editLayanan', compact('data_layanan'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        // Validasi data yang diterima dari formulir edit
        $request->validate([
            'layanan' => 'required|string|max:255',
            'harga' => 'required|numeric',
            'keterangan' => 'nullable|string|max:255',
        ]);

        // Ambil data layanan berdasarkan ID
        $layanan = Layanan::find($id);

        // Update data dengan data baru dari formulir edit
        $layanan->update([
            'layanan' => $request->input('layanan'),
            'harga' => $request->input('harga'),
            'keterangan' => $request->input('keterangan'),
        ]);

        // Redirect ke halaman yang sesuai atau berikan respons sesuai kebutuhan
        return redirect()->route('layanan.index')->with('success', 'Data layanan berhasil diperbarui.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        // Ambil data layanan berdasarkan ID
        $layanan = Layanan::find($id);

        // Pastikan data layanan ditemukan sebelum melakukan penghapusan
        if ($layanan) {
            // Lakukan penghapusan data
            $layanan->delete();

            // Redirect ke halaman yang sesuai atau berikan respons sesuai kebutuhan
            return redirect()->route('layanan.index')->with('success', 'Data layanan berhasil dihapus.');
        }

        // Jika data tidak ditemukan, redirect dengan pesan error
        return redirect()->route('layanan.index')->with('error', 'Data layanan tidak ditemukan.');
    }

    public function hapus($id)
    {
        // Temukan pesan berdasarkan ID
        $pesan = Pesan::find($id);

        if (!$pesan) {
            // Redirect atau berikan respons jika pesan tidak ditemukan
            return redirect()->back()->with('error', 'Pesan tidak ditemukan.');
        }

        // Hapus pesan dari database
        $pesan->delete();

        // Redirect atau berikan respons sesuai kebutuhan
        return redirect()->back()->with('success', 'Pesan berhasil dihapus.');
    }
}
