@extends('layouts.app')

@section('content')

<!-- Navbar -->
<nav class="flex items-center justify-between p-6 border-b">
    <div class="text-2xl font-bold text-yellow-500">THRYFT</div>
    <ul class="flex space-x-6">
      <li><a href="{{ route('home') }}" class="hover:text-yellow-500">Home</a></li>
      <li><a href="{{ route('shop') }}" class="hover:text-yellow-500">Shop</a></li>
    </ul>
    <div class="flex space-x-4">
      <button>🔍</button>
      <button>🛒</button>
      <button>👤</button>
    </div>
</nav>

<!-- Hero Shop Section -->
<section class="relative">
  <img src="{{ asset('images/blur.jpg') }}" alt="Shop Banner" class="w-full h-64 object-cover">
  <div class="absolute inset-0 flex flex-col items-center justify-center text-center text-black">
    <h1 class="text-4xl font-bold mb-2">Shop</h1>
    <p class="text-gray-700">Home > Shop</p>
  </div>
</section>

<!-- Filter & Sorting -->
<section class="flex flex-wrap items-center justify-between p-6 bg-gray-50 border-b">
  <div class="flex items-center space-x-4">
    <button class="flex items-center space-x-1 text-gray-700 border px-3 py-1 rounded">
      <span>☰</span>
      <span>Filter</span>
    </button>
    <span class="text-sm text-gray-600">Showing 1–16 of 32 results</span>
  </div>
  <div class="flex items-center space-x-2">
    <span class="text-sm">Show</span>
    <input type="number" value="16" class="w-16 border rounded px-2 py-1 text-sm">
    <span class="text-sm">Short by</span>
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
    <!-- Product Card 1 -->
    <div class="bg-white rounded-lg shadow overflow-hidden">
      <div class="h-44 overflow-hidden">
        <img src="{{ asset('images/dress.jpg') }}" alt="Flower Dress" class="w-full h-full object-cover">
      </div>
      <div class="p-4 text-center font-semibold text-gray-800">Flower Dress</div>
      <div class="p-4 text-center text-gray-600">Rp. 75.000,00</div>
    </div>

    <!-- Product Card 2 -->
    <div class="bg-white rounded-lg shadow overflow-hidden">
      <div class="h-44 overflow-hidden">
        <img src="{{ asset('images/kemeja.jpg') }}" alt="Blue Shirt" class="w-full h-full object-cover">
      </div>
      <div class="p-4 text-center font-semibold text-gray-800">Blue Shirt</div>
      <div class="p-4 text-center text-gray-600">Rp. 25.000,00</div>
    </div>

    <!-- Product Card 3 -->
    <div class="bg-white rounded-lg shadow overflow-hidden">
      <div class="h-44 overflow-hidden">
        <img src="{{ asset('images/jacket.jpg') }}" alt="Leather Jacket" class="w-full h-full object-cover">
      </div>
      <div class="p-4 text-center font-semibold text-gray-800">Leather Jacket</div>
      <div class="p-4 text-center text-gray-600">Rp. 150.000,00</div>
    </div>

    <!-- Product Card 4 -->
    <div class="bg-white rounded-lg shadow overflow-hidden">
      <div class="h-44 overflow-hidden">
        <img src="{{ asset('images/shirt.jpg') }}" alt="Flowy Blouse" class="w-full h-full object-cover">
      </div>
      <div class="p-4 text-center font-semibold text-gray-800">Flowy Blouse</div>
      <div class="p-4 text-center text-gray-600">Rp. 30.000,00</div>
    </div>

    <!-- Product Card 5 -->
    <div class="bg-white rounded-lg shadow overflow-hidden">
      <div class="h-44 overflow-hidden">
        <img src="{{ asset('images/niqab.jpg') }}" alt="Red Scarf" class="w-full h-full object-cover">
      </div>
      <div class="p-4 text-center font-semibold text-gray-800">White Niqab</div>
      <div class="p-4 text-center text-gray-600">Rp. 50.000,00</div>
    </div>

    <!-- Product Card 6 -->
    <div class="bg-white rounded-lg shadow overflow-hidden">
      <div class="h-44 overflow-hidden">
        <img src="{{ asset('images/lebaran.jpg') }}" alt="Vintage Jeans" class="w-full h-full object-cover">
      </div>
      <div class="p-4 text-center font-semibold text-gray-800">Lebaran Dress</div>
      <div class="p-4 text-center text-gray-600">Rp. 120.000,00</div>
    </div>

    <!-- Product Card 7 -->
    <div class="bg-white rounded-lg shadow overflow-hidden">
      <div class="h-44 overflow-hidden">
        <img src="{{ asset('images/sarung2.jpg') }}" alt="Black Boots" class="w-full h-full object-cover">
      </div>
      <div class="p-4 text-center font-semibold text-gray-800">Sarung</div>
      <div class="p-4 text-center text-gray-600">Rp. 250.000,00</div>
    </div>

    <!-- Product Card 8 -->
    <div class="bg-white rounded-lg shadow overflow-hidden">
      <div class="h-44 overflow-hidden">
        <img src="{{ asset('images/Peci.jpg') }}" alt="Striped T-Shirt" class="w-full h-full object-cover">
      </div>
      <div class="p-4 text-center font-semibold text-gray-800">Peci</div>
      <div class="p-4 text-center text-gray-600">Rp. 65.000,00</div>
    </div>

    <!-- Product Card 9 -->
    <div class="bg-white rounded-lg shadow overflow-hidden">
      <div class="h-44 overflow-hidden">
        <img src="{{ asset('images/gergaji mesin.jpg') }}" alt="Sunglasses" class="w-full h-full object-cover">
      </div>
      <div class="p-4 text-center font-semibold text-gray-800">Electric Saw</div>
      <div class="p-4 text-center text-gray-600">Rp. 80.000,00</div>
    </div>

    <!-- Product Card 10 -->
    <div class="bg-white rounded-lg shadow overflow-hidden">
      <div class="h-44 overflow-hidden">
        <img src="{{ asset('images/safety.jpg') }}" alt="Denim Jacket" class="w-full h-full object-cover">
      </div>
      <div class="p-4 text-center font-semibold text-gray-800">Safety Glasses</div>
      <div class="p-4 text-center text-gray-600">Rp. 175.000,00</div>
    </div>

    <!-- Product Card 11 -->
    <div class="bg-white rounded-lg shadow overflow-hidden">
      <div class="h-44 overflow-hidden">
        <img src="{{ asset('images/screw.jpg') }}" alt="Casual Shoes" class="w-full h-full object-cover">
      </div>
      <div class="p-4 text-center font-semibold text-gray-800">Screw</div>
      <div class="p-4 text-center text-gray-600">Rp. 90.000,00</div>
    </div>

    <!-- Product Card 12 -->
    <div class="bg-white rounded-lg shadow overflow-hidden">
      <div class="h-44 overflow-hidden">
        <img src="{{ asset('images/nailgun.jpg') }}" alt="Knit Sweater" class="w-full h-full object-cover">
      </div>
      <div class="p-4 text-center font-semibold text-gray-800">Nail Gun</div>
      <div class="p-4 text-center text-gray-600">Rp. 100.000,00</div>
    </div>

    <!-- Product Card 13 -->
    <div class="bg-white rounded-lg shadow overflow-hidden">
      <div class="h-44 overflow-hidden">
        <img src="{{ asset('images/sandal.jpg') }}" alt="Floral Skirt" class="w-full h-full object-cover">
      </div>
      <div class="p-4 text-center font-semibold text-gray-800">Sandal</div>
      <div class="p-4 text-center text-gray-600">Rp. 55.000,00</div>
    </div>

    <!-- Product Card 14 -->
    <div class="bg-white rounded-lg shadow overflow-hidden">
      <div class="h-44 overflow-hidden">
        <img src="{{ asset('images/slingman.jpg') }}" alt="Leather Bag" class="w-full h-full object-cover">
      </div>
      <div class="p-4 text-center font-semibold text-gray-800">Black Sling Bag</div>
      <div class="p-4 text-center text-gray-600">Rp. 300.000,00</div>
    </div>

    <!-- Product Card 15 -->
    <div class="bg-white rounded-lg shadow overflow-hidden">
      <div class="h-44 overflow-hidden">
        <img src="{{ asset('images/sunman.jpg') }}" alt="Sneakers" class="w-full h-full object-cover">
      </div>
      <div class="p-4 text-center font-semibold text-gray-800">Sunglasses</div>
      <div class="p-4 text-center text-gray-600">Rp. 180.000,00</div>
    </div>

    <!-- Product Card 16 -->
    <div class="bg-white rounded-lg shadow overflow-hidden">
      <div class="h-44 overflow-hidden">
        <img src="{{ asset('images/capman.jpg') }}" alt="Cozy Cardigan" class="w-full h-full object-cover">
      </div>
      <div class="p-4 text-center font-semibold text-gray-800">Brown Cap</div>
      <div class="p-4 text-center text-gray-600">Rp. 85.000,00</div>
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
