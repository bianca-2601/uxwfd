@extends('layouts.app')

@section('content')
<section class="relative">
  <img src="{{ asset('images/blur.jpg') }}" alt="Banner" class="w-full h-64 object-cover">
  <div class="absolute inset-0 flex flex-col items-center justify-center text-center text-black">
    <h1 class="text-4xl font-bold mb-2">Cart</h1>
    <p class="text-gray-700">
      <a href="{{ route('home') }}" class="hover:text-yellow-500 hover:underline">Detail</a>
      &gt; Cart
    </p>
  </div>
</section>

<section class="container mx-auto py-12 px-4 max-w-4xl">

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

  @php
    $cartItems = session('cart') ?? [];
  @endphp

  @if(count($cartItems) > 0)
  {{-- SATU FORM GET UNTUK CHECKBOX DAN TOMBOL --}}
  <form action="{{ route('payment.show') }}" method="GET" id="cart-form">
    <div class="bg-white rounded-lg shadow-md overflow-hidden mb-8">
      <div class="hidden md:grid grid-cols-12 bg-gray-100 p-4 font-medium border-b">
        <div class="col-span-1 text-center">Select</div>
        <div class="col-span-5">Product</div>
        <div class="col-span-2 text-center">Price</div>
        <div class="col-span-1 text-center">Qty</div>
        <div class="col-span-2 text-center">Subtotal</div>
        <div class="col-span-1"></div>
      </div>

      @foreach($cartItems as $id => $item)
        @php
          $imagePath = $item['image'] ?: 'default.png';
          $subtotal = $item['price'] * $item['quantity'];
        @endphp
        <div class="grid grid-cols-12 items-center p-4 border-b">
          <div class="col-span-1 text-center">
            <input type="checkbox" name="selected_products[]" value="{{ $id }}" checked class="w-4 h-4 subtotal-checkbox" data-price="{{ $item['price'] }}" data-quantity="{{ $item['quantity'] }}">
          </div>
          <div class="col-span-5 flex items-center space-x-4">
            <img src="{{ asset('images/' . $imagePath) }}" alt="{{ $item['name'] }}" class="w-20 h-20 rounded object-cover bg-gray-200" />
            <div>
              <h3 class="font-medium">{{ $item['name'] }}</h3>
            </div>
          </div>
          <div class="col-span-2 text-center">
            Rp. {{ number_format($item['price'], 0, ',', '.') }}
          </div>
          <div class="col-span-1 text-center">
            {{ $item['quantity'] }}
          </div>
          <div class="col-span-2 text-center subtotal-cell">
            Rp. {{ number_format($subtotal, 0, ',', '.') }}
          </div>
          <div class="col-span-1 text-center">
            <form action="{{ route('cart.remove', $id) }}" method="POST" onsubmit="return confirm('Are you sure want to remove this item?')">
              @csrf
              @method('DELETE')
              <button type="submit" class="text-red-500 hover:text-red-700" title="Remove item">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mx-auto" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                </svg>
              </button>
            </form>
          </div>
        </div>
      @endforeach
    </div>

    <div class="bg-white rounded-lg shadow-md p-6">
      <h2 class="text-xl font-bold mb-4">Cart Totals</h2>
      <div class="flex justify-between border-t pt-4 font-semibold text-lg">
        <span>Total</span>
        <span id="cart-total">Rp. {{ number_format(array_sum(array_map(fn($i) => $i['price'] * $i['quantity'], $cartItems)), 0, ',', '.') }}</span>
      </div>
        <button type="submit" class="w-full bg-black text-white py-3 px-4 rounded font-medium transition duration-300 hover:bg-yellow-500 block text-center mt-6">
          Check Out
        </button>
    </div>
  </form>
  @else
    <div class="text-center p-6 text-gray-500 col-span-12">Your cart is empty.</div>
  @endif
</section>

<script>
  document.addEventListener('DOMContentLoaded', function() {
  const checkboxes = document.querySelectorAll('.subtotal-checkbox');
  const totalDisplay = document.getElementById('cart-total');

  function updateTotal() {
    let total = 0;
    checkboxes.forEach(cb => {
      if(cb.checked) {
        const price = parseInt(cb.dataset.price);
        const qty = parseInt(cb.dataset.quantity);
        total += price * qty;
      }
    });
    totalDisplay.textContent = 'Rp. ' + total.toLocaleString('id-ID');
  }

  checkboxes.forEach(cb => {
    cb.addEventListener('change', updateTotal);
  });

  updateTotal(); // initial total update

  // Validasi submit form supaya ada minimal 1 checkbox tercentang
  document.getElementById('cart-form').addEventListener('submit', function(e) {
    const anyChecked = Array.from(checkboxes).some(cb => cb.checked);
    if (!anyChecked) {
      e.preventDefault();
      alert('Pilih minimal satu produk untuk melanjutkan pembayaran!');
    }
  });
});
</script>
@endsection
