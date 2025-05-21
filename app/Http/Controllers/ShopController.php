<?php

namespace App\Http\Controllers;
use App\Models\Product;
use App\Models\Category;

use Illuminate\Http\Request;

class ShopController extends Controller
{
    public function index(Request $request)
{

    logger('ShopController@index dipanggil');

    $categories = Category::all();
    $selectedCategory = $request->query('category');

    $products = Product::with('category')
        ->when($selectedCategory, function ($query, $selectedCategory) {
            return $query->where('category_id', $selectedCategory);
        })
        ->get();

        
    // Kirimkan variabel ke view
    return view('shop', compact('products', 'categories', 'selectedCategory'));

    // Filter berdasarkan pencarian
    if ($request->has('search')) {
        $query->where('name', 'like', '%' . $request->search . '%');
    }

    // Filter berdasarkan kategori
    if ($request->has('category')) {
        $query->where('category_id', $request->category);
    }
}



}
