<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function show($category, $id)
    {
        // Mengambil produk berdasarkan ID
        $product = Product::findOrFail($id);
        
        // Mengambil produk terkait berdasarkan kategori (misalnya berdasarkan kategori yang sama)
        $relatedProducts = Product::where('category_id', $product->category_id)
                                  ->where('id', '!=', $id) // Menjaga produk yang sedang dilihat agar tidak tampil di related
                                  ->take(4) // Ambil 4 produk terkait
                                  ->get();

        return view('detail', compact('product', 'relatedProducts'));
    }
}
