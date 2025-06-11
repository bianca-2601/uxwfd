<?php

namespace App\Http\Controllers;
use App\Models\Product;


class HomeController extends Controller
{
    public function index()
    {
        // Ambil produk unggulan (ganti ID sesuai data asli)
        $featuredProducts = Product::whereIn('id', [1, 2])->with('category')->get();

        return view('home', compact('featuredProducts'));
    }
}
