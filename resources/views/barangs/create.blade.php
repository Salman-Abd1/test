@extends('layout')

@section('content')
    <h2>Tambah Barang Baru</h2>

    @if ($errors->any())
        <div>
            <strong>Oops!</strong> Ada kesalahan saat input:<br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('barangs.store') }}" method="POST">
        @csrf
        <label>Nama Barang:</label><br>
        <input type="text" name="nama_barang" value="{{ old('nama_barang') }}"><br>

        <label>Kode Barang:</label><br>
        <input type="text" name="kode_barang" value="{{ old('kode_barang') }}"><br>

        <label>Stok:</label><br>
        <input type="number" name="stok" value="{{ old('stok') }}"><br>

        <label>Harga:</label><br>
        <input type="number" step="0.01" name="harga" value="{{ old('harga') }}"><br><br>

        <button type="submit">Simpan</button>
        <a href="{{ route('barangs.index') }}">Kembali</a>
    </form>
@endsection
