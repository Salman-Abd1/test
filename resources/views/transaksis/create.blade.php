@extends('layout')

@section('content')
    <h2>Input Transaksi</h2>

    @if (session('error'))
        <div style="color: red;">{{ session('error') }}</div>
    @endif

    <form action="{{ route('transaksis.store') }}" method="POST">
        @csrf

        <label for="barang_id">Pilih Barang:</label><br>
        <select name="barang_id" required>
            <option value="">-- Pilih Barang --</option>
            @foreach($barangs as $barang)
                <option value="{{ $barang->id }}">{{ $barang->nama_barang }} (Stok: {{ $barang->stok }})</option>
            @endforeach
        </select><br><br>

        <label for="jumlah">Jumlah Keluar:</label><br>
        <input type="number" name="jumlah" min="1" required><br><br>

        <button type="submit">Simpan Transaksi</button>
        <a href="{{ route('transaksis.index') }}">Lihat Riwayat</a>
    </form>
@endsection
