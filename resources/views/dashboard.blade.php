@extends('layouts.app')

@section('content')
<div class="card" style="margin-bottom:20px;">
    <p style="color:#b8a78f; letter-spacing:2px; font-size:12px; margin:0 0 8px;">
        INVENTORY SYSTEM
    </p>

    <h1 style="margin-bottom:10px;">Welcome, {{ $username }}</h1>

    <p style="max-width:650px; line-height:1.7;">
        Kelola data stok pakaian dengan tampilan yang rapi, terstruktur, dan mudah dipantau.
        Dashboard ini menampilkan ringkasan utama sebelum masuk ke halaman pengelolaan.
    </p>

    <a href="{{ route('pengelolaan', ['username' => $username]) }}" class="btn-premium">
        Manage Inventory
    </a>
</div>

<div class="grid">
    @foreach($summary as $item)
        <div class="card">
            <h2>{{ $item['value'] }}</h2>
            <h3>{{ $item['title'] }}</h3>
            <p>{{ $item['description'] }}</p>
        </div>
    @endforeach
</div>
@endsection