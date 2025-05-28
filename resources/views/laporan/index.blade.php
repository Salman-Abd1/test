@extends('layout')

@section('content')
<div class="container">
    <h2 class="mb-4">Laporan Penjualan</h2>

    <table class="table table-bordered table-dark table-striped">
        <thead>
            <tr>
                <th>No</th>
                <th>Barang</th>
                <th>Jumlah</th>
                <th>Total Harga</th>
                <th>Tanggal</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($transaksis as $index => $transaksi)
                <tr>
                    <td>{{ $index + 1 }}</td>
                    <td>{{ $transaksi->barang->nama_barang ?? '-' }}</td>
                    <td>{{ $transaksi->jumlah }}</td>
                    <td>Rp {{ number_format($transaksi->total_harga, 0, ',', '.') }}</td>
                    <td>{{ $transaksi->created_at->format('d-m-Y H:i') }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>

    <div class="mt-4 alert alert-success text-white">
        <strong>Total Penjualan:</strong> Rp {{ number_format($total, 0, ',', '.') }}
    </div>
</div>
@endsection
