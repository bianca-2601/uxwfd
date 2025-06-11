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

  {{-- Flash message --}}
  @if(session('success'))
    <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded mb-6">
      {{ session('success') }}
    </div>
  @endif

  @if(session('error'))
    <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded mb-6">
      {{ session('error') }}
    </div>
  @endif

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
    <form action="{{ route('add.to.cart', $product->id) }}" method="POST">
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
  <div class="relative group w-full max-w-xl">
    <!-- Magnifier overlay -->
    <div id="magnifier"
      class="absolute inset-0 md:block pointer-events-none rounded-md shadow"
      style="background-image: url('{{ asset('images/' . $product->image) }}'); background-size: 200%; display: none; z-index: 10;">
    </div>
    <!-- Gambar produk -->
    <img id="product-image"
      src="{{ asset('images/' . $product->image) }}"
      alt="{{ $product->name }}"
      class="w-full object-cover rounded-md shadow cursor-zoom-in">
  </div>
  <div class="space-y-4">
    <h2 class="text-3xl font-bold">{{ $product->name }}</h2>
    <p class="text-yellow-500 text-2xl font-semibold">Rp. {{ number_format($product->price, 0, ',', '.') }}</p>
    <h3 class="text-xl font-bold mb-2">Description</h3>
    <p class="text-gray-700">{{ $product->short_description }}</p>

    <div class="text-sm text-gray-500 space-y-2">
      <p><strong>Condition:</strong> {{ $product->condition }}</p>
      <p><strong>Category:</strong> {{ $product->category->name ?? 'Uncategorized' }}</p>
      <p><strong>Tags:</strong> {{ $product->tags }}</p>
    </div>
  </div>
</section>
<!-- Modal Zoom Overlay (Hidden by Default) -->
<div id="imageModal" class="fixed inset-0 bg-black bg-opacity-60 z-50 hidden items-center justify-center">
  <div class="bg-white p-4 rounded shadow relative max-w-3xl w-full">
    <!-- Tombol Tutup -->
    <button id="closeModal" class="absolute top-2 right-2 text-gray-600 hover:text-black text-3xl">&times;</button>
    <!-- Gambar Zoom -->
    <img src="{{ asset('images/' . $product->image) }}" class="w-full h-auto object-contain rounded">
    <h2 class="text-lg font-semibold mt-4">{{ $product->name }}</h2>
  </div>
</div>


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
<div class="fixed bottom-0 left-0 right-0 z-30 bg-white border-t border-gray-300 flex text-md text-gray-700">

  <!-- Chat (lebih kecil) -->
  <a href="{{ route('chat') }}" class="flex flex-col items-center justify-center w-1/5 py-2 hover:text-green-600 transition">
    <img src="{{ asset('images/chat.png') }}" alt="Chat" class="w-5 h-5 mb-1">
    <span><b>Chat</b></span>
  </a>

  <!-- Garis Vertikal -->
  <div class="w-px bg-gray-300"></div>

  <!-- + Keranjang -->
<div id="addToCartButton" class="w-2/5 bg-yellow-300 hover:bg-yellow-400 transition cursor-pointer">
  <button class="h-full w-full flex flex-col items-center justify-center py-2">
    <img src="{{ asset('images/shopping-cart.png') }}" alt="Cart" class="w-6 h-6">
    <span><b>Add To Cart</b></span>
  </button>
</div>


  <!-- Garis Vertikal -->
  <div class="w-px bg-gray-300"></div>

  <!-- Beli Sekarang -->
  <!-- <a href="{{ route('cart') }}" class="flex flex-col items-center justify-center w-2/5 py-2 text-white text-md bg-red-500 hover:bg-red-600 transition cursor-pointer">
    <span class="font-bold text-sm">Buy Now</span>
    <span class="text-[20px] font-bold">Rp. {{ number_format($product->price, 0, ',', '.') }}</span>
  </a> -->
  <form action="{{ route('buy.now', $product->id) }}" method="POST" class="w-2/5 text-white text-md bg-red-500 hover:bg-red-600 transition cursor-pointer">
    @csrf
    <button type="submit" class="h-full w-full flex flex-col items-center justify-center py-2">
      <span class="font-bold text-sm">Buy Now</span>
      <span class="text-[20px] font-bold">Rp. {{ number_format($product->price, 0, ',', '.') }}</span>
    </button>
  </form>

 <!-- Modal Sukses Add to Cart -->
<div id="successModal" class="fixed inset-0 bg-black bg-opacity-50 hidden items-center justify-center z-50 transition duration-300">
  <div class="bg-white p-6 rounded-xl shadow-xl text-center transform scale-90 transition duration-300" id="successModalContent">
    <div class="flex justify-center mb-4">
      <!-- Ikon Ceklis -->
      <svg class="w-12 h-12 text-green-500" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
        <path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7" />
      </svg>
    </div>
    <p class="text-green-600 font-semibold text-lg mb-2">Added to Cart!</p>
    <button id="closeSuccessModal"
      class="mt-4 px-5 py-2 bg-yellow-400 text-white font-medium rounded-lg hover:bg-yellow-500 transition">
      Tutup
    </button>
  </div>
</div>



</div>

<script>
  document.addEventListener("DOMContentLoaded", function () {
    const image = document.getElementById("product-image");
    const magnifier = document.getElementById("magnifier");

    image.addEventListener("mousemove", function (e) {
      const rect = image.getBoundingClientRect();
      const x = ((e.clientX - rect.left) / rect.width) * 100;
      const y = ((e.clientY - rect.top) / rect.height) * 100;

      magnifier.style.display = "block";
      magnifier.style.backgroundPosition = `${x}% ${y}%`;
    });

    image.addEventListener("mouseleave", function () {
      magnifier.style.display = "none";
    });
  });
</script>
<script>
  document.addEventListener("DOMContentLoaded", function () {
    const image = document.getElementById("product-image");
    const magnifier = document.getElementById("magnifier");

    // Magnifier saat hover
    image.addEventListener("mousemove", function (e) {
      const rect = image.getBoundingClientRect();
      const x = ((e.clientX - rect.left) / rect.width) * 100;
      const y = ((e.clientY - rect.top) / rect.height) * 100;

      magnifier.style.display = "block";
      magnifier.style.backgroundPosition = `${x}% ${y}%`;
    });

    image.addEventListener("mouseleave", function () {
      magnifier.style.display = "none";
    });

    // Modal Zoom saat diklik
    const modal = document.getElementById("imageModal");
    const closeBtn = document.getElementById("closeModal");

    image.addEventListener("click", () => {
      modal.classList.remove("hidden");
      modal.classList.add("flex");
    });

    closeBtn.addEventListener("click", () => {
      modal.classList.remove("flex");
      modal.classList.add("hidden");
    });

    modal.addEventListener("click", (e) => {
      if (e.target === modal) {
        modal.classList.remove("flex");
        modal.classList.add("hidden");
      }
    });
  });
</script>

<script>
  document.addEventListener("DOMContentLoaded", function () {
    const addToCartBtn = document.getElementById('addToCartButton');
    const successModal = document.getElementById('successModal');
    const successContent = document.getElementById('successModalContent');
    const closeSuccessModal = document.getElementById('closeSuccessModal');

    addToCartBtn.addEventListener('click', async () => {
      try {
        const response = await fetch("{{ route('add.to.cart', $product->id) }}", {
          method: "POST",
          headers: {
            "X-CSRF-TOKEN": "{{ csrf_token() }}",
            "Accept": "application/json"
          }
        });

        if (response.ok) {
          // Tampilkan modal dengan animasi
          successModal.classList.remove('hidden');
          successModal.classList.add('flex');
          setTimeout(() => {
            successContent.classList.remove('scale-90');
            successContent.classList.add('scale-100');
          }, 50);
        } else {
          alert('Gagal menambahkan ke keranjang');
        }
      } catch (error) {
        console.error(error);
        alert('Terjadi kesalahan saat menambahkan ke keranjang');
      }
    });

    closeSuccessModal.addEventListener('click', () => {
      // Tutup dengan animasi
      successContent.classList.remove('scale-100');
      successContent.classList.add('scale-90');
      setTimeout(() => {
        successModal.classList.remove('flex');
        successModal.classList.add('hidden');
      }, 200);
    });

    // Klik luar modal juga menutup
    successModal.addEventListener("click", function (e) {
      if (e.target === successModal) {
        closeSuccessModal.click();
      }
    });
  });
</script>

@endsection