@extends('layouts.app')

@section('content')


<!-- Hero Shop Section -->
<section class="relative">
  <img src="{{ asset('images/blur.jpg') }}" alt="Shop Banner" class="w-full h-64 object-cover">
  <div class="absolute inset-0 flex flex-col items-center justify-center text-center text-black">
    <h1 class="text-4xl font-bold mb-2">Search Result</h1>
    <p class="text-gray-700">
    <a href="{{ route('home') }}" class="hover:text-yellow-500 hover:underline">Home</a>
    > Search: <strong>{{ $query }}</strong>
    </p>
  </div>
</section>

{{-- <h1 class="text-4xl font-bold mb-2" style="text-align: center">Shop</h1>
<br> --}}

<!-- Filter Kategori (Dropdown) -->
<section class="px-6 py-4 bg-gray-50 border-b relative">
    <div class="flex items-center justify-between">
        <h2 class="text-xl font-semibold">Shop</h2>
        <div class="relative" x-data="{ open: false }">
            <button @click="open = !open"
                class="inline-flex items-center px-4 py-2 bg-white border border-gray-300 rounded shadow-sm hover:bg-gray-100">
                <svg class="w-5 h-5 mr-2 text-gray-700" fill="none" stroke="currentColor" stroke-width="2"
                    viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M3 4a1 1 0 011-1h16a1 1 0 011 1v2a1 1 0 01-.293.707L15 14.414V19a1 1 0 01-.553.894l-4 2A1 1 0 019 21v-6.586L3.293 6.707A1 1 0 013 6V4z" />
                </svg>
                <span class="text-gray-700">
                    {{ request('category') ? $categories->firstWhere('id', request('category'))?->name ?? 'Filter Kategori' : 'Semua Kategori' }}
                </span>

                <svg class="w-4 h-4 ml-2 text-gray-700" fill="none" stroke="currentColor" stroke-width="2"
                    viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M19 9l-7 7-7-7" />
                </svg>
            </button>

            <!-- Dropdown -->
            <!-- <div x-show="open" @click.away="open = false"
                class="absolute right-0 mt-2 w-60 bg-white border border-gray-300 rounded shadow z-10 max-h-64 overflow-auto">
                <a href="{{ route('shop') }}"
                   class="block px-4 py-2 text-sm hover:bg-yellow-100 {{ request('category') ? 'text-gray-700' : 'bg-yellow-500 text-white' }}">
                    Semua Kategori
                </a>
                @foreach($categories as $category)
                    <a href="{{ route('shop', ['category' => $category->id]) }}"
                       class="block px-4 py-2 text-sm hover:bg-yellow-100 {{ request('category') == $category->id ? 'bg-yellow-500 text-white' : 'text-gray-700' }}">
                        {{ $category->name }}
                    </a>
                @endforeach
            </div> -->

            <!-- Dropdown -->
<div x-show="open" @click.away="open = false"
    class="absolute right-0 mt-2 w-60 bg-white border border-gray-300 rounded shadow z-10 max-h-64 overflow-auto">
    
    {{-- Semua Kategori --}}
    <a href="{{ route('search', ['query' => $query]) }}"
       class="block px-4 py-2 text-sm hover:bg-yellow-100 {{ request('category') ? 'text-gray-700' : 'bg-yellow-500 text-white' }}">
        Semua Kategori
    </a>

    {{-- Loop kategori --}}
    @foreach($categories as $category)
        <a href="{{ route('search', ['query' => $query, 'category' => $category->id]) }}"
           class="block px-4 py-2 text-sm hover:bg-yellow-100 {{ request('category') == $category->id ? 'bg-yellow-500 text-white' : 'text-gray-700' }}">
            {{ $category->name }}
        </a>
    @endforeach
</div>

        </div>
    </div>
</section>

<!-- Daftar Produk -->
<section class="p-6 bg-white">
    @if($products->isNotEmpty())
        <div class="grid grid-cols-2 sm:grid-cols-3 lg:grid-cols-4 gap-6">
        @foreach($products as $product)
        <a href="{{ route('detail', ['category' => strtolower($product->category->name), 'id' => $product->id]) }}" class="block group">
        <div class="bg-white rounded-lg shadow overflow-hidden hover:shadow-lg transition group">
          <div class="overflow-hidden transition-all duration-500 ease-in-out">
              <img src="{{ asset('images/' . $product->image) }}"
                  alt="{{ $product->name }}"
                  class="w-full h-64 object-contain group-hover:scale-85 transition-all duration-500 ease-in-out" />
          </div>
          <div class="p-4 text-center">
              <h3 class="font-semibold text-gray-800">{{ $product->name }}</h3>
              <p class="text-sm text-gray-500 mb-1">{{ $product->category->name ?? 'Tanpa Kategori' }}</p>
              <p class="text-sm text-gray-700 mb-1">{{ Str::limit($product->description, 60) }}</p>
              <p class="text-yellow-600 font-bold">Rp {{ number_format($product->price, 0, ',', '.') }}</p>
          </div>
      </div>



          </a>
      @endforeach

        </div>
    @else
        <div class="text-center text-gray-500">
            <p>Tidak ada produk ditemukan untuk: <strong>{{ $query }}</strong>.</p>
        </div>
    @endif
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