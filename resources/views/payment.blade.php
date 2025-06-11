@extends('layouts.app')

@section('content')
<div class="container mx-auto px-4 py-8">
    <h2 class="text-3xl font-bold text-yellow-500 text-center mx-auto mb-10">Payment Confirmation</h2>

    {{-- Flash message --}}
    @if(session('success'))
        {{-- <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded mb-6">
        {{ session('success') }}
        </div> --}}
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
        <script>
            Swal.fire({
                icon: 'success',
                title: 'Payment Successful',
                text: '{{ session('success') }}',
                confirmButtonText: 'OK'
            }).then(() => {
                window.location.href = '{{ route('home') }}';
            });
        </script>
    @endif

    @if ($errors->any())
        <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded mb-6">
            <ul class="list-disc list-inside">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <!-- Ringkasan Pesanan -->
    <div class="mb-6">
        <h3 class="text-xl font-semibold text-gray-700 mt-5 mb-3">Order Summary</h3>
        <div class="bg-gray-200 p-4 rounded">
        @php
            $cartItems = $selectedItems ?? [];
            $total = $total ?? 0;
        @endphp

            <p><span class="font-semibold">Products : </span></p>
            <ul class="list-disc list-inside text-gray-700 mb-3">
            @foreach ($cartItems as $id => $item)
                <input type="hidden" name="selected_products[]" value="{{ $id }}">
            @endforeach
            </ul>

            <p><span class="font-semibold">Price : </span>Rp. {{ number_format($total, 0, ',', '.') }}</p>
            <p><span class="font-semibold">Shipping : </span>Rp. <span id="shipping-cost">{{ number_format(session('shipping_cost', 5000), 0, ',', '.') }}</span></p>
            <p class="mt-3 font-bold text-gray-800">Total: Rp. <span id="total-cost">{{ number_format($total + session('shipping_cost', 5000), 0, ',', '.') }}</span></p>
        </div>
    </div>

    <!-- Shipping Options -->
    <div class="mb-6">
        <h3 class="text-xl font-semibold text-gray-700 mb-3">Shipping Options</h3>
        <div class="space-y-2">
            <label class="flex items-center cursor-pointer">
                <input type="radio" name="shipping_option" value="hemat" data-cost="5000" class="mr-2" checked>
                <span>Hemat: Rp. 5,000 (Delivery: {{ \Carbon\Carbon::now()->addDays(3)->format('d M Y') }})</span>
            </label>
            <label class="flex items-center cursor-pointer">
                <input type="radio" name="shipping_option" value="reguler" data-cost="10000" class="mr-2">
                <span>Reguler: Rp. 10,000 (Delivery: {{ \Carbon\Carbon::now()->addDays(1)->format('d M Y') }})</span>
            </label>
        </div>
    </div>

    <!-- Payment Form -->
    <form action="{{ route('payment.process') }}" method="POST" class="space-y-4">
        @csrf
        <!-- Hidden input shipping option -->
        <input type="hidden" name="shipping_option" id="shipping_option" value="hemat">

        <!-- Hidden input for selected product IDs -->
        @foreach ($cartItems as $id => $item)
            <input type="hidden" name="selected_products[]" value="{{ $id }}">
        @endforeach

        <div>
            <label class="block text-sm font-medium text-gray-700">Name on Card</label>
            <input type="text" name="card_name" required class="w-full mt-1 px-4 py-2 border rounded-md focus:outline-none focus:ring-2 focus:ring-yellow-500" />
        </div>

        <div>
            <label class="block text-sm font-medium text-gray-700">Card Number</label>
            <input type="text" name="card_number" placeholder="13-19 digit" required pattern="\d{13,19}" title="Harus 13-19 digit angka" class="w-full mt-1 px-4 py-2 border rounded-md focus:outline-none focus:ring-2 focus:ring-yellow-500" />
        </div>

        <div class="flex space-x-4">
            <div class="w-1/2">
                <label class="block text-sm font-medium text-gray-700">Expiry Date</label>
                <input type="text" name="expiry" placeholder="MM/YY" required pattern="^(0[1-9]|1[0-2])\/\d{2}$" title="Format MM/YY" class="w-full mt-1 px-4 py-2 border rounded-md focus:outline-none focus:ring-2 focus:ring-yellow-500" />
            </div>
            <div class="w-1/2">
                <label class="block text-sm font-medium text-gray-700">CVV</label>
                <input type="text" name="cvv" required placeholder="last 3 digit" pattern="\d{3}" title="3 digit angka terakhir" class="w-full mt-1 px-4 py-2 border rounded-md focus:outline-none focus:ring-2 focus:ring-yellow-500" />
            </div>
        </div>

        <button type="submit" class="w-full bg-black text-white py-3 px-4 rounded font-medium transition duration-300 hover:bg-yellow-500 block text-center mt-6">
            Pay
        </button>
    </form>
</div>

<script>
    const radios = document.querySelectorAll('input[name="shipping_option"]');
    const hiddenShippingInput = document.getElementById('shipping_option');
    const shippingCostDisplay = document.getElementById('shipping-cost');
    const totalCostDisplay = document.getElementById('total-cost');
    const productPrice = {!! json_encode($total) !!};

    radios.forEach(radio => {
        radio.addEventListener('change', function () {
            const shipping = parseInt(this.dataset.cost);
            const total = productPrice + shipping;

            hiddenShippingInput.value = this.value;
            shippingCostDisplay.textContent = shipping.toLocaleString('id-ID');
            totalCostDisplay.textContent = total.toLocaleString('id-ID');
        });
    });
</script>
@endsection