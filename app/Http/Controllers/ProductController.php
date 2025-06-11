<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Category;
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
    
    public function create()
{
  $categories = Category::all(); // jika kamu pakai kategori
  return view('sell', compact('categories'));
}

public function store(Request $request)
{
  $validated = $request->validate([
    'name' => 'required|string|max:255',
    'description' => 'nullable|string',
    'price' => 'required|numeric|min:0',
    'stock' => 'required|integer|min:1',
    'category_id' => 'required|exists:categories,id',
    'image' => 'nullable|image|max:2048'
  ]);

  if ($request->hasFile('image')) {
    $validated['image_path'] = $request->file('image')->store('products', 'public');
  }

  Product::create($validated);

  return redirect()->route('shop')->with('success', 'Produk berhasil ditambahkan!');
}
}
