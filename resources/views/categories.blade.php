@extends('layouts.app')

@section('content')

<!-- Hero Shop Section -->
<section class="relative">
  <img src="{{ asset('images/blur.jpg') }}" alt="Shop Banner" class="w-full h-64 object-cover">
  <div class="absolute inset-0 flex flex-col items-center justify-center text-center text-black">
    <h1 class="text-4xl font-bold mb-2">Categories</h1>
    <p class="text-gray-700">
      <a href="{{ route('home') }}" class="hover:text-yellow-500 hover:underline">Home</a>
      > Categories
    </p>
  </div>
</section>
<br><br>

<!-- Product Grid -->
<section class="p-6 bg-white">
  <div class="grid grid-cols-2 sm:grid-cols-4 gap-6">
    <!-- Product Card 1 -->
    <div class="bg-white rounded-lg shadow-md overflow-hidden transition-transform duration-300 hover:shadow-lg hover:-translate-y-1 cursor-pointer" onclick="window.location.href='{{ route('woman') }}'">
      <div class="h-64 overflow-hidden">
        <img src="{{ asset('images/fashion.jpg') }}" alt="Flower Dress" class="w-full h-full object-cover transition-transform duration-300 hover:scale-105">
      </div>
      <div class="p-4 text-center font-semibold text-gray-800 min-h-20 flex items-center justify-center">
        Woman Clothing & Accessories
      </div>
    </div>

    <!-- Product Card 2 -->
    <div class="bg-white rounded-lg shadow-md overflow-hidden transition-transform duration-300 hover:shadow-lg hover:-translate-y-1 cursor-pointer" onclick="window.location.href='{{ route('man') }}'">
      <div class="h-64 overflow-hidden">
        <img src="{{ asset('images/man.jpg') }}" alt="Blue Shirt" class="w-full h-full object-cover transition-transform duration-300 hover:scale-105">
      </div>
      <div class="p-4 text-center font-semibold text-gray-800 min-h-20 flex items-center justify-center">
        Men Clothing & Accessories
      </div>
    </div>

    <!-- Product Card 3 -->
    <div class="bg-white rounded-lg shadow-md overflow-hidden transition-transform duration-300 hover:shadow-lg hover:-translate-y-1 cursor-pointer" onclick="window.location.href='{{ route('kids') }}'">
      <div class="h-64 overflow-hidden">
        <img src="{{ asset('images/kids.jpg') }}" alt="Leather Jacket" class="w-full h-full object-cover transition-transform duration-300 hover:scale-105">
      </div>
      <div class="p-4 text-center font-semibold text-gray-800 min-h-20 flex items-center justify-center">
        Kids Clothing & Accessories
      </div>
    </div>

    <!-- Product Card 4 -->
    <div class="bg-white rounded-lg shadow-md overflow-hidden transition-transform duration-300 hover:shadow-lg hover:-translate-y-1 cursor-pointer" onclick="window.location.href='{{ route('muslim') }}'">
      <div class="h-64 overflow-hidden">
        <img src="{{ asset('images/muslim.jpg') }}" alt="Flowy Blouse" class="w-full h-full object-cover transition-transform duration-300 hover:scale-105">
      </div>
      <div class="p-4 text-center font-semibold text-gray-800 min-h-20 flex items-center justify-center">
        Muslim Clothing & Accessories
      </div>
    </div>

    <!-- Product Card 5 -->
    <div class="bg-white rounded-lg shadow-md overflow-hidden transition-transform duration-300 hover:shadow-lg hover:-translate-y-1 cursor-pointer" onclick="window.location.href='{{ route('carpentry') }}'">
      <div class="h-64 overflow-hidden">
        <img src="{{ asset('images/pertukangan.jpg') }}" alt="Red Scarf" class="w-full h-full object-cover transition-transform duration-300 hover:scale-105">
      </div>
      <div class="p-4 text-center font-semibold text-gray-800 min-h-20 flex items-center justify-center">
        Carpentry
      </div>
    </div>

    <!-- Product Card 6 -->
    <div class="bg-white rounded-lg shadow-md overflow-hidden transition-transform duration-300 hover:shadow-lg hover:-translate-y-1 cursor-pointer" onclick="window.location.href='{{ route('sports') }}'">
      <div class="h-64 overflow-hidden">
        <img src="{{ asset('images/sport.jpg') }}" alt="Vintage Jeans" class="w-full h-full object-cover transition-transform duration-300 hover:scale-105">
      </div>
      <div class="p-4 text-center font-semibold text-gray-800 min-h-20 flex items-center justify-center">
        Sports Equipment
      </div>
    </div>

    <!-- Product Card 7 -->
    <div class="bg-white rounded-lg shadow-md overflow-hidden transition-transform duration-300 hover:shadow-lg hover:-translate-y-1 cursor-pointer" onclick="window.location.href='{{ route('books') }}'">
      <div class="h-64 overflow-hidden">
        <img src="{{ asset('images/booka.jpg') }}" alt="Black Boots" class="w-full h-full object-cover transition-transform duration-300 hover:scale-105">
      </div>
      <div class="p-4 text-center font-semibold text-gray-800 min-h-20 flex items-center justify-center">
        Books
      </div>
    </div>

    <!-- Product Card 8 -->
    <div class="bg-white rounded-lg shadow-md overflow-hidden transition-transform duration-300 hover:shadow-lg hover:-translate-y-1 cursor-pointer" onclick="window.location.href='{{ route('automotive') }}'">
      <div class="h-64 overflow-hidden">
        <img src="{{ asset('images/sparepart.jpg') }}" alt="Striped T-Shirt" class="w-full h-full object-cover transition-transform duration-300 hover:scale-105">
      </div>
      <div class="p-4 text-center font-semibold text-gray-800 min-h-20 flex items-center justify-center">
        Automotive
      </div>
    </div>

    <!-- Product Card 9 -->
    <div class="bg-white rounded-lg shadow-md overflow-hidden transition-transform duration-300 hover:shadow-lg hover:-translate-y-1 cursor-pointer" onclick="window.location.href='{{ route('electronics') }}'">
      <div class="h-64 overflow-hidden">
        <img src="{{ asset('images/elecs.jpg') }}" alt="Sunglasses" class="w-full h-full object-cover transition-transform duration-300 hover:scale-105">
      </div>
      <div class="p-4 text-center font-semibold text-gray-800 min-h-20 flex items-center justify-center">
        Electronics
      </div>
    </div>

    <!-- Product Card 10 -->
    <div class="bg-white rounded-lg shadow-md overflow-hidden transition-transform duration-300 hover:shadow-lg hover:-translate-y-1 cursor-pointer" onclick="window.location.href='{{ route('baby') }}'">
      <div class="h-64 overflow-hidden">
        <img src="{{ asset('images/baby.jpg') }}" alt="Denim Jacket" class="w-full h-full object-cover transition-transform duration-300 hover:scale-105">
      </div>
      <div class="p-4 text-center font-semibold text-gray-800 min-h-20 flex items-center justify-center">
        Mom & Baby Essentials
      </div>
    </div>

    <!-- Product Card 11 -->
    <div class="bg-white rounded-lg shadow-md overflow-hidden transition-transform duration-300 hover:shadow-lg hover:-translate-y-1 cursor-pointer" onclick="window.location.href='{{ route('gaming') }}'">
      <div class="h-64 overflow-hidden">
        <img src="{{ asset('images/game.jpg') }}" alt="Casual Shoes" class="w-full h-full object-cover transition-transform duration-300 hover:scale-105">
      </div>
      <div class="p-4 text-center font-semibold text-gray-800 min-h-20 flex items-center justify-center">
        Gaming
      </div>
    </div>

    <!-- Product Card 12 -->
    <div class="bg-white rounded-lg shadow-md overflow-hidden transition-transform duration-300 hover:shadow-lg hover:-translate-y-1 cursor-pointer" onclick="window.location.href='{{ route('music') }}'">
      <div class="h-64 overflow-hidden">
        <img src="{{ asset('images/musik.jpg') }}" alt="Knit Sweater" class="w-full h-full object-cover transition-transform duration-300 hover:scale-105">
      </div>
      <div class="p-4 text-center font-semibold text-gray-800 min-h-20 flex items-center justify-center">
        Music Essentials
      </div>
    </div>

    <!-- Product Card 13 -->
    <div class="bg-white rounded-lg shadow-md overflow-hidden transition-transform duration-300 hover:shadow-lg hover:-translate-y-1 cursor-pointer" onclick="window.location.href='{{ route('toys') }}'">
      <div class="h-64 overflow-hidden">
        <img src="{{ asset('images/knit.jpg') }}" alt="Floral Skirt" class="w-full h-full object-cover transition-transform duration-300 hover:scale-105">
      </div>
      <div class="p-4 text-center font-semibold text-gray-800 min-h-20 flex items-center justify-center">
        Toys & Hobbies
      </div>
    </div>

    <!-- Product Card 14 -->
    <div class="bg-white rounded-lg shadow-md overflow-hidden transition-transform duration-300 hover:shadow-lg hover:-translate-y-1 cursor-pointer" onclick="window.location.href='{{ route('gadget') }}'">
      <div class="h-64 overflow-hidden">
        <img src="{{ asset('images/gadget.jpg') }}" alt="Sneakers" class="w-full h-full object-cover transition-transform duration-300 hover:scale-105">
      </div>
      <div class="p-4 text-center font-semibold text-gray-800 min-h-20 flex items-center justify-center">
        Gadgets
      </div>
    </div>

    <!-- Product Card 15 -->
    <div class="bg-white rounded-lg shadow-md overflow-hidden transition-transform duration-300 hover:shadow-lg hover:-translate-y-1 cursor-pointer" onclick="window.location.href='{{ route('furniture') }}'">
      <div class="h-64 overflow-hidden">
        <img src="{{ asset('images/furniture.jpg') }}" alt="Cozy Cardigan" class="w-full h-full object-cover transition-transform duration-300 hover:scale-105">
      </div>
      <div class="p-4 text-center font-semibold text-gray-800 min-h-20 flex items-center justify-center">
        Furniture
      </div>
    </div>

    <!-- Product Card 16 -->
    <div class="bg-white rounded-lg shadow-md overflow-hidden transition-transform duration-300 hover:shadow-lg hover:-translate-y-1 cursor-pointer" onclick="window.location.href='{{ route('kitchen') }}'">
      <div class="h-64 overflow-hidden">
        <img src="{{ asset('images/kitchenware.jpg') }}" alt="Leather Bag" class="w-full h-full object-cover transition-transform duration-300 hover:scale-105">
      </div>
      <div class="p-4 text-center font-semibold text-gray-800 min-h-20 flex items-center justify-center">
        Kitchenware
      </div>
    </div>
  </div>
</section>

<div style="font-family: Arial, sans-serif; max-width: 800px; margin: 0 auto; display: flex; justify-content: space-between; align-items: flex-start; gap: 30px; padding: 20px; border: 1px solid #eee; border-radius: 8px;">
    <!-- Item 1 -->
    <div style="flex: 1;">
        <h3 style="font-size: 18px; margin: 0 0 8px 0; color: #333;">Guaranteed Quality</h3>
        <p style="margin: 0; font-size: 14px; color: #666;">Thoroughly inspected for your satisfaction</p>
    </div>
    
    <!-- Garis Pemisah Vertikal -->
    <div style="width: 1px; background-color: #eee; height: 50px;"></div>
    
    <!-- Item 2 -->
    <div style="flex: 1;">
        <h3 style="font-size: 18px; margin: 0 0 8px 0; color: #333;">Free Shipping</h3>
        <p style="margin: 0; font-size: 14px; color: #666;">Order over Rp. 100.000,00</p>
    </div>
    
    <!-- Garis Pemisah Vertikal -->
    <div style="width: 1px; background-color: #eee; height: 50px;"></div>
    
    <!-- Item 3 -->
    <div style="flex: 1;">
        <h3 style="font-size: 18px; margin: 0 0 8px 0; color: #333;">24 / 7 Support</h3>
        <p style="margin: 0; font-size: 14px; color: #666;">Dedicated support</p>
    </div>
</div>

@endsection