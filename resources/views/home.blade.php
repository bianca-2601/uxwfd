@extends('layouts.app')

@section('title', 'Thryft - Home')

@section('content')

<!-- Navbar -->
<nav class="flex items-center justify-between p-6 border-b">
  <div class="text-2xl font-bold text-yellow-500">THRYFT</div>
  <ul class="flex space-x-6">
    <li><a href="{{ route('home') }}" class="hover:text-yellow-500">Home</a></li>
    <li><a href="{{ route('shop') }}" class="hover:text-yellow-500">Shop</a></li>
    <li><a href="{{ route('stories') }}" class="hover:text-yellow-500">Stories</a></li>
    <li><a href="{{ route('contact') }}" class="hover:text-yellow-500">Contact</a></li>
  </ul>
  <div class="flex space-x-4">
    <button>🔍</button>
    <button>🛒</button>
    <button>👤</button>
  </div>
</nav>


<!-- Hero Section -->
<section class="relative bg-cover bg-center h-[500px] flex items-center" style="background-image: url('{{ asset('images/hero hd.jpg') }}');">
  <div class="container mx-auto px-6 flex justify-end">
    <div class="bg-yellow-50 p-8 rounded-lg shadow-lg max-w-md">
      <p class="text-sm uppercase tracking-wider text-gray-600 mb-2">New Arrival</p>
      <h1 class="text-4xl font-bold text-yellow-800 leading-tight mb-4">Find Beauty in the<br>Second Time Around</h1>
      <p class="text-gray-600 mb-6">Belanja barang preloved berkualitas, mendukung gaya hidup ramah lingkungan.</p>
      <button class="px-6 py-3 bg-yellow-500 text-white rounded hover:bg-yellow-600">Shop Now</button>
    </div>
  </div>
</section>


<!-- Categories -->
<section class="p-8">
  <h2 class="text-2xl font-semibold mb-6 text-center">Categories</h2>
  <div class="grid grid-cols-2 md:grid-cols-4 gap-6">
    <div class="bg-white rounded-lg shadow overflow-hidden">
      <div class="h-44 overflow-hidden">
        <img src="https://down-id.img.susercontent.com/file/id-11134207-7ras8-m3w79vsvoglv5f" class="w-full h-full object-cover" alt="">
      </div>
      <div class="p-4 text-center font-semibold text-gray-800">Woman Clothing & Accessories</div>
    </div>

    <div class="bg-white rounded-lg shadow overflow-hidden">
      <div class="h-44 overflow-hidden">
        <img src="https://encrypted-tbn3.gstatic.com/images?q=tbn:ANd9GcSQuayB55R94Pp5CkjXRnypyNaP2u6p_x1DJToaIxNinZ78mx_Q" class="w-full h-full object-cover" alt="">
      </div>
      <div class="p-4 text-center font-semibold text-gray-800">Carpentry</div>
    </div>

    <div class="bg-white rounded-lg shadow overflow-hidden">
      <div class="h-44 overflow-hidden">
        <img src="{{ asset('images/elecs.jpg') }}" class="w-full h-full object-cover" alt="">
      </div>
      <div class="p-4 text-center font-semibold text-gray-800">Electronics</div>
    </div>

    <div class="bg-white rounded-lg shadow overflow-hidden">
      <div class="h-44 overflow-hidden">
        <img src="{{ asset('images/furniture.jpg') }}" class="w-full h-full object-cover" alt="">

      </div>
      <div class="p-4 text-center font-semibold text-gray-800">Furniture</div>
    </div>

    <div class="bg-white rounded-lg shadow overflow-hidden">
      <div class="h-44 overflow-hidden">
        <img src="{{ asset('images/kitchenware.jpg') }}" class="w-full h-full object-cover" alt="">

      </div>
      <div class="p-4 text-center font-semibold text-gray-800">Kitchen Items</div>
    </div>

    <div class="bg-white rounded-lg shadow overflow-hidden">
      <div class="h-44 overflow-hidden">
        <img src="{{ asset('images/sport.jpg') }}" class="w-full h-full object-cover" alt="">

      </div>
      <div class="p-4 text-center font-semibold text-gray-800">Sports Equipment</div>
    </div>

    <div class="bg-white rounded-lg shadow overflow-hidden">
      <div class="h-44 overflow-hidden">
        <img src="{{ asset('images/booka.jpg') }}" class="w-full h-full object-cover" alt="">

      </div>
      <div class="p-4 text-center font-semibold text-gray-800">Books</div>
    </div>

    <div class="bg-white rounded-lg shadow overflow-hidden">
      <div class="h-44 overflow-hidden">
        <img src="{{ asset('images/sparepart.jpg') }}" class="w-full h-full object-cover" alt="">

      </div>
      <div class="p-4 text-center font-semibold text-gray-800">Automotive</div>
    </div>
  </div>
</section>



<!-- Top Picks -->
<section class="p-8 bg-gray-50">
  <div class="flex flex-col md:flex-row items-center gap-8">
    
    <!-- Left Text -->
    <div class="md:w-1/3">
      <h2 class="text-3xl font-bold mb-4">Our Top Picks</h2>
      <p class="text-gray-600 mb-6">See what our top products are!</p>
      <button class="px-5 py-3 bg-yellow-500 text-white rounded hover:bg-yellow-600">Explore More</button>
    </div>

    <!-- Right Images -->
    <div class="md:w-2/3 grid grid-cols-2 gap-4">
      <!-- Item 1 -->
      <div class="relative group overflow-hidden rounded-lg">
        <img src="{{ asset('images/dress.jpg') }}" alt="Flower Dress" class="object-cover w-full h-[350px]">
        <div class="absolute bottom-0 left-0 right-0 bg-white bg-opacity-90 p-4">
          <p class="text-xs text-gray-500">01 — Woman</p>
          <h3 class="text-lg font-semibold">Flower Dress</h3>
        </div>
      </div>

      <!-- Item 2 -->
      <div class="relative group overflow-hidden rounded-lg">
        <img src="{{ asset('images/linen.jpg') }}" alt="Linen Pants" class="object-cover w-full h-[350px]">
        <div class="absolute bottom-0 left-0 right-0 bg-white bg-opacity-90 p-4">
          <p class="text-xs text-gray-500">02 — Man</p>
          <h3 class="text-lg font-semibold">Linen Pants</h3>
        </div>
      </div>
    </div>

  </div>
</section>


<!-- Gallery -->
<section class="p-8 text-center">
  <h2 class="text-2xl font-semibold mb-6">Share your preloved with us!<br>
    <span class="text-3xl font-bold text-yellow-500">#FunTHRYFT</span>
  </h2>

  <div class="grid grid-cols-2 md:grid-cols-6 gap-4 auto-rows-[150px] grid-flow-dense">

    <!-- Gambar 1 -->
    <div class="col-span-1 md:col-span-2 row-span-2 overflow-hidden rounded-lg">
      <img src="{{ asset('images/sport.jpg') }}" class="object-cover w-full h-full">
    </div>

    <!-- Gambar 2 -->
    <div class="col-span-1 overflow-hidden rounded-lg">
      <img src="{{ asset('images/capman.jpg') }}" class="object-cover w-full h-full">
    </div>

    <!-- Gambar 3 -->
    <div class="col-span-1 md:col-span-2 overflow-hidden rounded-lg">
      <img src="{{ asset('images/canon.jpg') }}" class="object-cover w-full h-full">
    </div>

    <!-- Gambar 4 -->
    <div class="col-span-1 overflow-hidden rounded-lg">
      <img src="{{ asset('images/belt.jpg') }}" class="object-cover w-full h-full">
    </div>

    <!-- Gambar 5 -->
    <div class="col-span-1 md:col-span-2 overflow-hidden rounded-lg">
      <img src="{{ asset('images/furniture.jpg') }}" class="object-cover w-full h-full">
    </div>

    <!-- Gambar 6 -->
    <div class="col-span-1 overflow-hidden rounded-lg">
      <img src="{{ asset('images/gadget.jpg') }}" class="object-cover w-full h-full">
    </div>

  </div>
</section>


<!-- Footer -->
<footer class="p-8 border-t mt-8">
  <div class="flex flex-col md:flex-row justify-between">
    <div class="mb-4 md:mb-0">
      <div class="text-xl font-bold mb-2">THRYFT</div>
      <p class="text-gray-500">© 2025 All rights reserved</p>
    </div>
    <div class="flex flex-col md:flex-row space-y-2 md:space-y-0 md:space-x-6">
      <a href="#" class="text-gray-500 hover:text-yellow-500">Home</a>
      <a href="#" class="text-gray-500 hover:text-yellow-500">Shop</a>
      <a href="#" class="text-gray-500 hover:text-yellow-500">Stories</a>
      <a href="#" class="text-gray-500 hover:text-yellow-500">Contact</a>
    </div>
  </div>
</footer>

@endsection
