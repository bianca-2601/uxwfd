<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Category;


class ShopController extends Controller
{

    public function __construct()
    {
        // Middleware auth hanya di method addToCart dan buyNow
        $this->middleware('auth')->only(['addToCart', 'buyNow']);
    }

    public function index(Request $request)
    {
        $categories = Category::all();
        $products = Product::with('category')
    ->when($request->category, function ($query) use ($request) {
        $query->where('category_id', $request->category);
    })
    ->paginate(16); // 4 row × 4 col


        return view('shop', compact('products', 'categories'));
    }

    public function addToCart($id)
    {
        $product = Product::findOrFail($id);
        $cart = session()->get('cart', []);
    
        if (isset($cart[$id])) {
            $cart[$id]['quantity']++;
        } else {
            $cart[$id] = [
                'id' => $product->id,
                'name' => $product->name,
                'price' => $product->price,
                'image' => $product->image ?? 'default.png',
                'quantity' => 1,
            ];
        }
    
        session()->put('cart', $cart);
    
        return redirect()->back()->with('success', 'Product added to cart!');
    }

    public function buyNow($id)
    {
        $product = Product::findOrFail($id);
        $cart = session()->get('cart', []);
    
        if (isset($cart[$id])) {
            $cart[$id]['quantity']++;
        } else {
            $cart[$id] = [
                'id' => $product->id,
                'name' => $product->name,
                'price' => $product->price,
                'image' => $product->image ?? 'default.png',
                'quantity' => 1,
            ];
        }
    
        session()->put('cart', $cart);
    
        return redirect()->route('cart')->with('success', 'Product added to cart!');
    }

    public function removeFromCart(Request $request, $id)
    {
        $cart = session()->get('cart', []);

        if (isset($cart[$id])) {
            unset($cart[$id]);
            session()->put('cart', $cart);
            return redirect()->back()->with('success', 'Product removed from cart.');
        }

        return redirect()->route('cart')->with('success', 'Item removed successfully!');
    }

    public function cart()
    {
        $cart = session()->get('cart', []);

        // Pastikan setiap item di cart punya key 'id', kalau belum tambahkan dari key array-nya
        foreach ($cart as $key => &$item) {
            if (!isset($item['id'])) {
                $item['id'] = $key;
            }
        }

        return view('cart', compact('cart'));
    }

}
