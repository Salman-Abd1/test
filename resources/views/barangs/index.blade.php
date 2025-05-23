@extends('layout')

@section('content')
    <h2>Daftar Barang</h2>
    <a href="{{ route('barangs.create') }}">Tambah Barang</a>
    <table>
        <tr>
            <th>Nama</th>
            <th>Kode</th>
            <th>Stok</th>
            <th>Harga</th>
            <th>Aksi</th>
        </tr>
        @foreach ($barangs as $barang)
            <tr>
                <td>{{ $barang->nama_barang }}</td>
                <td>{{ $barang->kode_barang }}</td>
                <td>{{ $barang->stok }}</td>
                <td>{{ $barang->harga }}</td>
                <td>
                    <a href="{{ route('barangs.edit', $barang->id) }}">Edit</a>
                    <form action="{{ route('barangs.destroy', $barang->id) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit">Hapus</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </table>
@endsection
