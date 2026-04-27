@extends('layouts.app')

@section('content')
<div style="display:flex; justify-content:center; align-items:center; min-height:60vh;">
    
    <div class="card" style="width:100%; max-width:400px;">
        <h2>Login</h2>
        <p>Masukkan username untuk mengakses sistem stok.</p>

        <form action="{{ route('dashboard') }}" method="POST">
            @csrf

            <label>Username</label>
            <input type="text" name="username" required>

            <button type="submit" class="btn">Masuk</button>
        </form>
    </div>

</div>
@endsection