@extends('layouts.app')

@section('content')
<div class="card">
    <h1>Pengelolaan Stok Pakaian</h1>

    @if($username)
        <p>Dikelola oleh: <strong>{{ $username }}</strong></p>
    @endif

    <p>Halaman ini menampilkan data stok produk</p>
</div>

<br>

<table class="inventory-table">
    <thead>
        <tr>
            <th>Kode</th>
            <th>Nama Produk</th>
            <th>Kategori</th>
            <th>Stok</th>
            <th>Harga</th>
            <th>Tanggal Masuk</th>
            <th>Status</th>
        </tr>
    </thead>

    <tbody>
        @forelse($products as $product)
            <tr>
                <td>{{ $product['kode'] }}</td>
                <td>{{ $product['nama'] }}</td>
                <td>{{ $product['kategori'] }}</td>
                <td>{{ $product['stok'] }}</td>
                <td>{{ $product['harga'] }}</td>
                <td>{{ $product['tanggal'] }}</td>
                <td>
                    @if($product['stok'] < 5)
                        <span class="badge low-stock">Low Stock</span>
                    @else
                        <span class="badge">Available</span>
                    @endif
                </td>
            </tr>
        @empty
            <tr>
                <td colspan="7" style="text-align:center; padding:30px;">
                    Belum ada data stok yang tersedia.
                </td>
            </tr>
        @endforelse
    </tbody>
</table>

<div class="back-button-wrapper">
    <a href="{{ route('dashboard.page', ['username' => $username]) }}" class="btn">
        Kembali ke Home
    </a>
</div>
@endsection