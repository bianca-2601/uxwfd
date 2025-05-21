@extends('layouts.app')

@section('content')


<!-- Breadcrumb -->
<div class="p-6">
  <p class="text-gray-600 text-sm space-x-1">
    <a href="{{ route('home') }}" class="hover:text-yellow-500">Home</a> >
    <a href="{{ route('categories') }}" class="hover:text-yellow-500">{{ $product->category->name ?? 'Kategori' }}</a> >
    <span class="text-gray-700 font-semibold">{{ $product->name }}</span>
  </p>
</div>

<!-- Product Section -->
<!-- <section class="p-6 grid grid-cols-1 md:grid-cols-2 gap-10">
  <div>
    <img src="{{ asset('images/' . $product->image) }}" alt="{{ $product->name }}" class="w-full object-cover rounded-md shadow">
  </div>
  <div class="space-y-4">
    <h2 class="text-3xl font-bold">{{ $product->name }}</h2>
    <p class="text-yellow-500 text-2xl font-semibold">Rp. {{ number_format($product->price, 0, ',', '.') }}</p>
    <h3 class="text-xl font-bold mb-2">Description</h3>
    <p class="text-gray-700">{{ $product->short_description }}</p>
    {{--
    <form action="{{ route('cart.add', $product->id) }}" method="POST">
      @csrf
      <button type="submit" class="bg-yellow-500 text-white px-6 py-2 rounded hover:bg-yellow-600">Add to Cart</button>
    </form>
    --}}
    <div class="text-sm text-gray-500">
      <p><strong>Category:</strong> {{ $product->category->name ?? 'Uncategorized' }}</p>
      <p><strong>Tags:</strong> {{ $product->tags }}</p>
    </div>
  </div>
</section> -->

<!-- Product Section -->
<section class="p-6 grid grid-cols-1 md:grid-cols-2 gap-10">
  <div>
    <img src="{{ asset('images/' . $product->image) }}" alt="{{ $product->name }}" class="w-full object-cover rounded-md shadow">
  </div>
  <div class="space-y-4">
    <h2 class="text-3xl font-bold">{{ $product->name }}</h2>
    <p class="text-yellow-500 text-2xl font-semibold">Rp. {{ number_format($product->price, 0, ',', '.') }}</p>
    <h3 class="text-xl font-bold mb-2">Description</h3>
    <p class="text-gray-700">{{ $product->short_description }}</p>

    <div class="text-sm text-gray-500 space-y-2">
      <p><strong>Category:</strong> {{ $product->category->name ?? 'Uncategorized' }}</p>
      <p><strong>Tags:</strong> {{ $product->tags }}</p>
  </div>
</section>


<!-- Description -->
<section class="p-6">
  <!-- <h3 class="text-xl font-bold mb-2">Description</h3>
  <p class="text-gray-700 leading-relaxed mb-4">
    {{ $product->description }}
  </p> -->

  @if($product->features)
    <h4 class="text-lg font-semibold mb-2">Fitur Unggulan:</h4>
    <ul class="list-disc list-inside text-gray-700 space-y-1">
      @foreach($product->features as $feature)
        <li>{{ $feature }}</li>
      @endforeach
    </ul>
  @endif
</section>

<!-- Related Products -->
<section class="p-6 bg-gray-100">
  <h3 class="text-xl font-bold mb-4">Related Products</h3>
  <div class="grid grid-cols-2 sm:grid-cols-4 gap-6">
    @foreach($relatedProducts as $related)
      <a href="{{ route('detail', ['category' => strtolower($related->category->name), 'id' => $related->id]) }}" class="bg-white rounded-lg shadow hover:shadow-lg transition overflow-hidden">
        <!-- <img src="{{ asset('images/' . $related->image) }}" alt="{{ $related->name }}" class="w-full h-48 object-cover"> -->
        <img src="{{ asset('images/' . $related->image) }}"
          alt="{{ $related->name }}"
          class="w-full h-64 object-contain group-hover:scale-95 transition-all duration-500 ease-in-out" />

        <div class="p-4 text-center font-medium text-gray-800">
          {{ $related->name }}
        </div>
        <div class="text-center text-yellow-600 font-bold">Rp. {{ number_format($related->price, 0, ',', '.') }}</div>
      </a>
    @endforeach
  </div>
</section>


<!-- Fixed Bottom Action Bar Shopee-style -->
<!-- <div class="fixed bottom-0 left-0 right-0 z-50 bg-white border-t border-gray-200 flex items-center justify-between px-3 py-2 shadow-md"> -->
  <!-- Icon: Toko dan Keranjang -->
  <!-- <div class="flex space-x-2 w-1/3">
    <button class="flex flex-col items-center text-gray-600 text-xs">
      <svg class="w-6 h-6 mb-1" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24">
        <path d="M3 3h18l-1.5 9h-15zM6 21a1 1 0 110-2 1 1 0 010 2zm12 0a1 1 0 110-2 1 1 0 010 2z"/>
      </svg>
      Add to Cart
    </button>
    <button class="flex flex-col items-center text-gray-600 text-xs">
      <svg class="w-6 h-6 mb-1" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24">
        <path d="M5 12h14M12 5l7 7-7 7"/>
      </svg>
      Toko
    </button>
  </div>-->

  <!-- Tombol CTA -->
  <!--<div class="flex space-x-2 w-2/3">
    <button class="bg-gray-200 text-black font-semibold px-4 py-2 rounded-md w-1/2 text-sm hover:bg-gray-300 transition">
      + Keranjang
    </button>x  
    <button class="bg-[#f94c43] text-white font-bold px-4 py-2 rounded-md w-1/2 text-sm hover:bg-red-600 transition">
      Beli Sekarang<br><span class="text-xs font-normal">Rp183.179</span>
    </button>
  </div>
</div> -->
<!-- Fixed Bottom Action Bar -->
<div class="fixed bottom-0 left-0 right-0 z-50 bg-white border-t border-gray-300 flex text-md text-gray-700">

  <!-- Chat (lebih kecil) -->
  <a href="{{ route('chat') }}" class="flex flex-col items-center justify-center w-1/5 py-2 hover:text-green-600 transition">
  <img src="{{ asset('images/chat.png') }}" alt="Chat" class="w-5 h-5 mb-1">
  <span><b>Chat</b></span>
</a>

  <!-- Garis Vertikal -->
  <div class="w-px bg-gray-300"></div>

  <!-- + Keranjang -->
  <div class="flex flex-col items-center justify-center w-2/5 py-2 bg-yellow-300 hover:bg-yellow-400 transition cursor-pointer">
    <img src="{{ asset('images/shopping-cart.png') }}" alt="Cart" class="w-6 h-6" onclick="window.location.href='{{ route('login') }}'">
    <span><b>Add To Cart</b></span>
  </div>

  <!-- Garis Vertikal -->
  <div class="w-px bg-gray-300"></div>

  <!-- Beli Sekarang -->
<a href="{{ route('cart') }}" class="flex flex-col items-center justify-center w-2/5 py-2 text-white text-md bg-red-500 hover:bg-red-600 transition cursor-pointer">
  <span class="font-bold text-sm">Buy Now</span>
  <span class="text-[20px] font-bold">Rp. {{ number_format($product->price, 0, ',', '.') }}</span>
</a>

  

</div>

@endsection