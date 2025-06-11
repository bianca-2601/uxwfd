<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Category;

class SearchController extends Controller
{
    public function search(Request $request)
{
    $query = $request->input('query');
    $categoryId = $request->input('category');

    $categories = Category::all();

    $productsQuery = Product::where('name', 'like', "%{$query}%");

    if ($categoryId) {
        $productsQuery->where('category_id', $categoryId);
    }

    // Hanya cari berdasarkan kolom 'name'
    // $products = Product::where('name', 'like', "%{$query}%")->get();

    $products = $productsQuery->get();

    return view('search', compact('products', 'query', 'categories', 'categoryId'));
}

}