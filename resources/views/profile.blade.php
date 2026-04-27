@extends('layouts.app')

@section('content')
<div class="card" style="max-width:650px; margin:auto;">
    <p style="color:#b8a78f; letter-spacing:2px; font-size:12px; margin:0 0 8px;">
        ACCOUNT PROFILE
    </p>

    <h1>{{ $username }}</h1>
    <p style="line-height:1.7;">
        Halaman ini menampilkan informasi admin yang sedang mengakses sistem.
    </p>

    <hr style="border:none; border-top:1px solid #e6dfd6; margin:20px 0;">

    <p><strong>Role:</strong> {{ $profile['role'] }}</p>
    <p><strong>Email:</strong> {{ $profile['email'] }}</p>
    <p><strong>Access:</strong> {{ $profile['access'] }}</p>
    <p><strong>Last Login:</strong> {{ $profile['last_login'] }}</p>
    <p><strong>Status:</strong> {{ $profile['status'] }}</p>

    <br>

    <a href="{{ route('pengelolaan', ['username' => $username]) }}" class="btn">
        Back to Inventory
    </a>
</div>
@endsection