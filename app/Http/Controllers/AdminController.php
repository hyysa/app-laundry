<?php

namespace App\Http\Controllers;

use App\Models\Pesan;
use App\Models\PesananModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\User;
use App\Models\Layanan;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data_user = User::all();
        $data_pesan = Pesan::all();
        $data_pesanan = PesananModel::all();
        $data_layanan = Layanan::all();

        //menghitung total data yang ada setiap tabel
        $totalPesan = Pesan::count();
        $totalPesanan = PesananModel::count();
        $totalLayanan = Layanan::count();

        return view('administrator/dashboard', compact('data_user', 'data_pesanan', 'data_layanan', 'data_pesan', 'totalPesan', 'totalLayanan', 'totalPesanan'));
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
}
