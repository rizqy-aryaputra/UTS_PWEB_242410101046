<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function login()
    {
        return view('login');
    }

    public function dashboardPage(Request $request)
    {
        $username = $request->query('username');

        $summary = [
            [
                'title' => 'Total Produk',
                'value' => 28,
                'description' => 'Jumlah pakaian yang tersedia'
            ],
            [
                'title' => 'Stok Rendah',
                'value' => 4,
                'description' => 'Produk dengan stok kurang dari 5'
            ],
            [
                'title' => 'Total Nilai Stok',
                'value' => 'Rp 184.500.000',
                'description' => 'Estimasi nilai seluruh produk'
            ],
        ];

        return view('dashboard', compact('username', 'summary'));
    }

    public function dashboard(Request $request)
    {
        $username = $request->input('username');

        $summary = [
            [
                'title' => 'Total Produk',
                'value' => 28,
                'description' => 'Jumlah pakaian yang tersedia'
            ],
            [
                'title' => 'Stok Rendah',
                'value' => 4,
                'description' => 'Produk dengan stok kurang dari 5'
            ],
            [
                'title' => 'Total Nilai Stok',
                'value' => 'Rp 184.500.000',
                'description' => 'Estimasi nilai seluruh produk'
            ],
        ];

        return view('dashboard', compact('username', 'summary'));
    }

    public function pengelolaan(Request $request)
    {
        $username = $request->query('username');

        $products = [
            [
                'kode' => 'BR001',
                'nama' => 'Silk Blazer Ivory',
                'kategori' => 'Blazer',
                'stok' => 8,
                'harga' => 'Rp 7.500.000',
                'tanggal' => '2026-04-01'
            ],
            [
                'kode' => 'BR002',
                'nama' => 'Cashmere Coat Black',
                'kategori' => 'Outerwear',
                'stok' => 3,
                'harga' => 'Rp 12.800.000',
                'tanggal' => '2026-04-05'
            ],
            [
                'kode' => 'BR003',
                'nama' => 'Satin Evening Dress',
                'kategori' => 'Dress',
                'stok' => 6,
                'harga' => 'Rp 9.900.000',
                'tanggal' => '2026-04-10'
            ],
            [
                'kode' => 'BR004',
                'nama' => 'Premium Linen Shirt',
                'kategori' => 'Shirt',
                'stok' => 12,
                'harga' => 'Rp 3.400.000',
                'tanggal' => '2026-04-12'
            ],
        ];

        return view('pengelolaan', compact('username', 'products'));
    }

    public function profile(Request $request)
    {
        $username = $request->query('username');

        $profile = [
            'role' => 'Inventory Admin',
            'brand' => 'The Stockroom',
            'email' => strtolower($username) . '@thestockroom.com',
            'location' => 'Jakarta, Indonesia',
            'access' => 'Full Access',
            'last_login' => '24 April 2026',
            'status' => 'Active'
        ];

        return view('profile', compact('username', 'profile'));
    }

    public function logout()
    {
        return redirect()->route('login');
    }
}