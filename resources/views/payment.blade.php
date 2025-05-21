@extends('layouts.app')


@section('content')
<div class="container mx-auto px-4 py-8">
        <h2 class="text-3xl font-bold text-yellow-500 text-center mx-auto mb-10">Payment Confirmation</h2>

    <!--Ringkasan Pesanan -->
    <div class="mb-6">
        <h3 class="text-xl font-semibold text-gray-700 mt-5 mb-3">Order Summary</h3>
        <div class="bg-gray-200 p-4 rounded">
            <p><span class="font-semibold">Product : </span>Denim Jacket</p>
            <p><span class="font-semibold">Price : </span>Rp. 150.000</p>
            <p><span class="font-semibold">Shippping : </span>Rp. 10.000</p>
            <p class="mt-3 font-bold text-gray-800">Total: Rp.170.000</p>
        </div>
    </div>


       <!-- Payment Form -->
        <form action="{{ route('payment.process') }}" method="POST" class="space-y-4">
            @csrf
            <div>
                <label class="block text-sm font-medium text-gray-700">Name on Card</label>
                <input type="text" name="card_name" required class="w-full mt-1 px-4 py-2 border rounded-md focus:outline-none focus:ring-2 focus:ring-yellow-500">
            </div>
            <div>
                <label class="block text-sm font-medium text-gray-700">Card Number</label>
                <input type="text" name="card_number" required class="w-full mt-1 px-4 py-2 border rounded-md focus:outline-none focus:ring-2 focus:ring-yellow-500">
            </div>
            <div class="flex space-x-4">
                <div class="w-1/2">
                    <label class="block text-sm font-medium text-gray-700">Expiry Date</label>
                    <input type="text" name="expiry" placeholder="MM/YY" required class="w-full mt-1 px-4 py-2 border rounded-md focus:outline-none focus:ring-2 focus:ring-yellow-500">
                </div>
                <div class="w-1/2">
                    <label class="block text-sm font-medium text-gray-700">CVV</label>
                    <input type="text" name="cvv" required class="w-full mt-1 px-4 py-2 border rounded-md focus:outline-none focus:ring-2 focus:ring-yellow-500">
                </div>
            </div>

            <button type="submit" class="w-full bg-yellow-500 text-white font-semibold py-2 rounded hover:bg-yellow-600 transition-colors duration-300">
                Confirm Payment
            </button>
        </form>
    </div>
</div>
@endsection
