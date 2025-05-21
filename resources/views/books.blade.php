@extends('layouts.app')

@section('content')

<!-- Hero Shop Section -->
<section class="relative">
  <img src="{{ asset('images/blur.jpg') }}" alt="Shop Banner" class="w-full h-64 object-cover">
  <div class="absolute inset-0 flex flex-col items-center justify-center text-center text-black">
    <h1 class="text-4xl font-bold mb-2">Product</h1>
    <p class="text-gray-700">
      <a href="{{ route('categories') }}" class="hover:text-yellow-500 hover:underline">Categories</a>
      > Books
    </p>
  </div>
</section>

<!-- Filter & Sorting -->
<section class="flex flex-wrap items-center justify-between p-6 bg-gray-50 border-b">
  <div class="flex items-center space-x-4">

<!-- Filter by Tag -->
  <div class="flex items-center mb-4">
  </div>
  <div class="flex items-center space-x-2">
    <span class="text-sm">Sort by</span>
    <select class="border rounded px-2 py-1 text-sm">
      <option>Default</option>
      <option>Price: Low to High</option>
      <option>Price: High to Low</option>
    </select>
  </div>
</section>

<!-- Product Grid -->
<section class="p-6 bg-white">
  <div class="grid grid-cols-2 sm:grid-cols-4 gap-6">

    <!-- Product Cards -->
    <!-- @php
      $products = [
        ['image' => 'seni.jpg', 'name' => 'Seni Hidup Minimalis', 'price' => '15.000,00'],
        ['image' => 'atomic.jpg', 'name' => 'Atomic Habits', 'price' => '25.000,00'],
        ['image' => 'alone.jpg', 'name' => 'The Art of Being Alone', 'price' => '35.000,00'],
        ['image' => 'depresi.jpg', 'name' => 'Seni Mengatasi Depresi', 'price' => '15.000,00'],
        ['image' => 'alpha.jpg', 'name' => 'The Alpha Girls', 'price' => '25.000,00'],
        ['image' => 'plan.jpg', 'name' => 'I Used To Have A Plan', 'price' => '20.000,00'],
        ['image' => 'introvert.jpg', 'name' => 'The Introverts Way', 'price' => '15.000,00'],
        ['image' => 'sensi.jpg', 'name' => 'The Highly Sensitive Person', 'price' => '20.000,00'],
        ['image' => 'think.jpg', 'name' => 'Women Who Think Too Much', 'price' => '15.000,00'],
        ['image' => 'speak.jpg', 'name' => 'Nice Girls Dont Speak Up', 'price' => '35.000,00'],
        ['image' => 'single.jpg', 'name' => 'Single on Purpose', 'price' => '20.000,00'],
        ['image' => 'types.jpg', 'name' => 'The Ten Types of Human', 'price' => '20.000,00']

      ];
    @endphp -->


    @php
  $products = App\Models\Product::whereHas('category', function($query) {
    $query->where('name', 'books');
  })->get();
@endphp


@foreach($products as $product)
<a href="{{ route('detail', ['category' => strtolower($product->category->name), 'id' => $product->id]) }}" class="block bg-white rounded-lg shadow overflow-hidden hover:shadow-lg transition group">
  <div class="overflow-hidden transition-all duration-500 ease-in-out">
      <img src="{{ asset('images/' . $product->image) }}"
          alt="{{ $product->name }}"
          class="w-full h-64 object-contain group-hover:scale-95 transition-all duration-500 ease-in-out" />
  </div>
  <div class="p-4 text-center">
      <h3 class="font-semibold text-gray-800">{{ $product->name }}</h3>
      <p class="text-sm text-gray-500 mb-1">{{ $product->category->name ?? 'Tanpa Kategori' }}</p>
      <p class="text-sm text-gray-700 mb-1">{{ Str::limit($product->description, 60) }}</p>
      <p class="text-yellow-600 font-bold">Rp {{ number_format($product->price, 0, ',', '.') }}</p>
  </div>
</a>
@endforeach

  </div>
</section>

<!-- Service Info -->
<div style="font-family: Arial, sans-serif; max-width: 800px; margin: 0 auto; display: flex; justify-content: space-between; align-items: flex-start; gap: 30px; padding: 20px; border: 1px solid #eee; border-radius: 8px;">
  <div style="flex: 1;">
    <h3 style="font-size: 18px; margin: 0 0 8px 0; color: #333;">Guaranteed Quality</h3>
    <p style="margin: 0; font-size: 14px; color: #666;">Thoroughly inspected for your satisfaction</p>
  </div>
  <div style="width: 1px; background-color: #eee; height: 50px;"></div>
  <div style="flex: 1;">
    <h3 style="font-size: 18px; margin: 0 0 8px 0; color: #333;">Free Shipping</h3>
    <p style="margin: 0; font-size: 14px; color: #666;">Order over Rp. 100.000,00</p>
  </div>
  <div style="width: 1px; background-color: #eee; height: 50px;"></div>
  <div style="flex: 1;">
    <h3 style="font-size: 18px; margin: 0 0 8px 0; color: #333;">24 / 7 Support</h3>
    <p style="margin: 0; font-size: 14px; color: #666;">Dedicated support</p>
  </div>
</div>
@endsection
