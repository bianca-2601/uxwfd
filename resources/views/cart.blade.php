@extends('layouts.app')

@section('content')

<!-- Hero Section -->
<section class="relative">
  <img src="{{ asset('images/blur.jpg') }}" alt="Banner" class="w-full h-64 object-cover">
  <div class="absolute inset-0 flex flex-col items-center justify-center text-center text-black">
    <h1 class="text-4xl font-bold mb-2">Cart</h1>
    <p class="text-gray-700">
      <a href="{{ route('home') }}" class="hover:text-yellow-500 hover:underline">Detail</a>
      > Cart
  </div>
</section>

<!-- Cart Section -->
<section class="container mx-auto py-12 px-4 max-w-4xl">
  <!-- Cart Table -->
  <div class="bg-white rounded-lg shadow-md overflow-hidden mb-8">
    <!-- Table Header -->
    <div class="hidden md:grid grid-cols-12 bg-gray-100 p-4 font-medium border-b">
      <div class="col-span-5">Product</div>
      <div class="col-span-2 text-center">Price</div>
      <div class="col-span-2 text-center">Quantity</div>
      <div class="col-span-2 text-center">Subtotal</div>
      <div class="col-span-1"></div>
    </div>

    <!-- Cart Item -->
    <div class="grid grid-cols-12 items-center p-4 border-b">
      <div class="col-span-5 flex items-center space-x-4">
        <div class="w-20 h-20 bg-gray-200 rounded"></div>
        <div>
          <h3 class="font-medium">Approxo euro</h3>
        </div>
      </div>
      <div class="col-span-2 text-center">
        <span class="md:hidden font-medium">Price: </span>
        Rs. 250,000.00
      </div>
      <div class="col-span-2 text-center">
        <div class="flex items-center justify-center">
          <button class="px-2 py-1 border rounded-l">-</button>
          <span class="px-4 py-1 border-t border-b">1</span>
          <button class="px-2 py-1 border rounded-r">+</button>
        </div>
      </div>
      <div class="col-span-2 text-center">
        <span class="md:hidden font-medium">Subtotal: </span>
        Rs. 250,000.00
      </div>
      <div class="col-span-1 text-center">
        <button class="text-red-500 hover:text-red-700">
          <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
          </svg>
        </button>
      </div>
    </div>
  </div>

  <!-- Cart Totals -->
  <div class="bg-white rounded-lg shadow-md p-6">
    <h2 class="text-xl font-bold mb-4">Cart Totals</h2>
    
    <div class="space-y-4 mb-6">
      <div class="flex justify-between py-2">
        <span>Approxo euro</span>
        <span>Rs. 250,000.00</span>
      </div>
      
      <div class="flex justify-between border-t pt-4">
        <span>Subtotal</span>
        <span>Rs. 250,000.00</span>
      </div>
      
      <div class="flex justify-between font-bold text-lg border-t pt-4">
        <span>Total</span>
        <span>Rs. 250,000.00</span>
      </div>
    </div>
    
    <!-- Checkout Button -->
    <a href="{{ route('payment') }}" class="w-full bg-black text-white py-3 px-4 rounded font-medium transition duration-300 hover:bg-yellow-500 block text-center">
      Check Out
    </a>
  </div>
</section>

@endsection