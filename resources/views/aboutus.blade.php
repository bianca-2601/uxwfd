@extends('layouts.app')

@section('content')

<!-- Hero Shop Section -->
<section class="relative">
  <img src="{{ asset('images/blur.jpg') }}" alt="Shop Banner" class="w-full h-64 object-cover">
  <div class="absolute inset-0 flex flex-col items-center justify-center text-center text-black">
    <h1 class="text-4xl font-bold mb-2">About Us</h1>
    <p class="text-gray-700">
      <a href="{{ route('home') }}" class="hover:text-yellow-500 hover:underline">Home</a>
      > About Us
    </p>
  </div>
</section>

{{-- <h1 class="text-4xl font-bold mb-2" style="text-align: center">Categories</h1>
<br> --}}

<!-- About Us Text -->
<div style="font-family: Arial, sans-serif; max-width: 800px; margin: 40px auto; padding: 20px; line-height: 1.7; color: #333;">
  <h2 style="font-size: 28px; font-weight: bold; margin-bottom: 20px; color: #222;">Thryft</h2>
  <p>Welcome to Thryft, your trusted platform for buying and selling quality preloved items! We believe that items no longer in use can still bring great value to others. Thryft was founded in 2025 as a solution for those who want to give new life to their preloved goods, while helping others find affordable, quality items.</p>
  <br>
  <p>At Thryft, we offer a wide range of preloved items, from clothing, accessories, and home goods to electronics, all through a seamless, secure, and trusted process. We are committed to ensuring that every transaction is smooth and enjoyable, providing you with the opportunity to discover your dream items at a fraction of the price.</p>
  <br>
  <p>With the philosophy of <strong>“Reuse, Recycle, Relove”</strong>, Thryft is not just about buying and selling, but also about creating a community that cares for sustainability and reducing consumer waste.</p>
  <br>
  <p>Join us at Thryft, and let's together give preloved items a second chance to make a positive impact!</p>

  <h3 style="font-size: 20px; font-weight: bold; margin-top: 30px; color: #222;">Why Choose Thryft?</h3>
  <ul style="list-style-type: disc; padding-left: 20px; margin-top: 10px;">
    <li><strong>Sustainable Shopping :</strong> Reduce your environmental footprint by buying and selling preloved items.</li>
    <li><strong>Affordable Finds :</strong> Discover great deals on quality products.</li>
    <li><strong>Easy & Secure :</strong> Enjoy a seamless and safe shopping experience.</li>
  </ul>

  <p style="margin-top: 30px; font-size: 26px; font-weight: 800; color: #000000;">Welcome to Thryft!</p>
<p style="font-style: italic; font-size: 22px; color: #000000;">“where sustainability meets style!”</p>

</div>




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