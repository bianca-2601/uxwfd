@extends('layouts.app')

@section('content')


<!-- Hero Shop Section -->
<!-- <section class="relative">
  <img src="{{ asset('images/blur.jpg') }}" alt="Shop Banner" class="w-full h-64 object-cover">
  <div class="absolute inset-0 flex flex-col items-center justify-center text-center text-black">
    <h1 class="text-4xl font-bold mb-2">Sign Up</h1>
    <p class="text-gray-700">
      <a href="{{ route('home') }}" class="hover:text-yellow-500 hover:underline">Home</a>
      > Sign Up
    </p>
  </div>
</section> -->

<!-- Sign Up Section -->
<section class="relative flex justify-center items-center min-h-[calc(100vh-200px)] py-12 bg-cover bg-center" style="background-image: url('{{ asset('images/blur.jpg') }}');">
  <div class="w-full max-w-md px-8 py-10 bg-white rounded-lg shadow-md">
    <h1 class="text-3xl font-bold text-center mb-2">SIGN UP</h1>
    <p class="text-center text-gray-600 mb-8">Create Your Account</p>
    
    <form method="POST" action="{{ route('signup') }}">
      @csrf
      
      <div class="mb-4">
        <label for="name" class="block text-gray-700 font-medium mb-2">Full Name</label>
        <input 
          type="text" 
          id="name" 
          name="name" 
          placeholder="Enter your full name" 
          class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-yellow-500"
          required
        >
      </div>
      
      <div class="mb-4">
        <label for="email" class="block text-gray-700 font-medium mb-2">Email Address</label>
        <input 
          type="email" 
          id="email" 
          name="email" 
          placeholder="Enter your email address" 
          class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-yellow-500"
          required
        >
      </div>
      
      <div class="mb-4">
        <label for="password" class="block text-gray-700 font-medium mb-2">Password</label>
        <input 
          type="password" 
          id="password" 
          name="password" 
          placeholder="Enter password (6-8 digit)" 
          class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-yellow-500"
          minlength="6"
          maxlength="8"
          required
        >
      </div>
      
      <div class="mb-6">
        <label for="password_confirmation" class="block text-gray-700 font-medium mb-2">Confirm Password</label>
        <input 
          type="password" 
          id="password_confirmation" 
          name="password_confirmation" 
          placeholder="Re-enter your password" 
          class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-yellow-500"
          required
        >
      </div>
      
      <button 
        type="submit" 
        class="w-full bg-yellow-500 text-white py-3 px-4 rounded-lg font-medium hover:bg-yellow-600 transition duration-300 mb-4"
      >
        SIGN UP
      </button>
      
      <p class="text-center text-gray-600">
        Already have an account? 
        <a href="{{ route('login') }}" class="text-yellow-500 hover:underline">Login</a>
      </p>
    </form>
  </div>
</section>



@endsection