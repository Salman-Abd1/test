<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Transaksi;

class LaporanController extends Controller
{
    public function index()
    {
        $transaksis = Transaksi::with('barang')->latest()->get();

        $total = $transaksis->sum('total_harga');

        return view('laporan.index', compact('transaksis', 'total'));
    }
}
