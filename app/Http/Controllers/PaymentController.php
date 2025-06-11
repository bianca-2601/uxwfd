<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class PaymentController extends Controller
{
    public function show(Request $request)
    {
        $selectedIds = $request->input('selected_products', []);
        $cartItems = session('cart', []);
    
        // Kalau selectedIds kosong, redirect ke cart
        if (empty($selectedIds)) {
            return redirect()->route('cart')->with('error', 'Pilih produk yang ingin dibayar.');
        }
    
        // Ambil hanya item yang dipilih
        $selectedItems = [];
        $total = 0;
    
        foreach ($selectedIds as $id) {
            if (isset($cartItems[$id])) {
                $selectedItems[$id] = $cartItems[$id];
                $total += $cartItems[$id]['price'] * $cartItems[$id]['quantity'];
            }
        }
    
        if (empty($selectedItems)) {
            return redirect()->route('cart')->with('error', 'Produk tidak ditemukan dalam keranjang.');
        }
    
        return view('payment.show', compact('selectedItems', 'total'));
    }
    

    public function process(Request $request)
    {
        // Validasi form pembayaran
        $validated = $request->validate([
            'card_name'   => 'required|string|max:255',
            'card_number' => 'required|digits_between:13,19',
            'expiry'      => ['required', 'regex:/^(0[1-9]|1[0-2])\/\d{2}$/'],
            'cvv'         => 'required|digits:3',
            'shipping_option' => 'required|in:hemat,reguler',
            'selected_products' => 'required|array',
        ]);

        $cartItems = session('cart', []);
        $selectedIds = $request->input('selected_products', []);
        $selectedItems = [];
        $total = 0;

        foreach ($selectedIds as $id) {
            if (isset($cartItems[$id])) {
                $selectedItems[$id] = $cartItems[$id];
                $total += $cartItems[$id]['price'] * $cartItems[$id]['quantity'];
            }
        }

        if (empty($selectedItems)) {
            return redirect()->back()->withErrors(['selected_products' => 'No selected products found in cart.']);
        }

        // Tentukan biaya pengiriman
        $shippingOption = $request->input('shipping_option', 'hemat');
        $shippingCost = $shippingOption === 'reguler' ? 10000 : 5000;
        session(['shipping_cost' => $shippingCost]);

        // Simulasi proses pembayaran (misalnya tulis log)
        Log::info('Payment processed', [
            'card_name' => $validated['card_name'],
            'total_paid' => $total + $shippingCost,
            'items' => $selectedItems,
            'shipping_option' => $shippingOption,
        ]);

        // Hapus produk yang dipilih dari session cart
        foreach ($selectedIds as $id) {
            unset($cartItems[$id]);
        }
        session(['cart' => $cartItems]);

        return redirect()->route('home')->with('success', 'Payment processed successfully.');

    }
}
