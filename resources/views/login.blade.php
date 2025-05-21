@extends('layouts.app')

@section('content')


<!-- Hero Shop Section -->
<!-- <section class="relative">
  <img src="{{ asset('images/blur.jpg') }}" alt="Shop Banner" class="w-full h-64 object-cover">
  <div class="absolute inset-0 flex flex-col items-center justify-center text-center text-black">
    <h1 class="text-4xl font-bold mb-2">Login</h1>
    <p class="text-gray-700">
      <a href="{{ route('home') }}" class="hover:text-yellow-500 hover:underline">Home</a>
      > Log in
    </p>
  </div>
</section> -->

<!-- Login Section -->
<section class="relative flex justify-center items-center min-h-[calc(100vh-200px)] py-12 bg-cover bg-center" style="background-image: url('{{ asset('images/blur.jpg') }}');">
  <div class="w-full max-w-md px-8 py-10 bg-white rounded-lg shadow-md">
    <h1 class="text-3xl font-bold text-center mb-2">LOGIN</h1>
    <p class="text-center text-gray-600 mb-8">Welcome Back!</p>
    <p class="text-center text-gray-700 mb-6">Please enter your credential to login</p>
    
    <!-- Tampilkan pesan sukses registrasi -->
    @if (session('success'))
      <div class="mb-6 px-4 py-3 bg-green-100 border border-green-400 text-green-700 rounded">
        {{ session('success') }}
      </div>
    @endif

    <form method="POST" action="{{ route('login') }}">
      @csrf
      
      <div class="mb-6">
        <label for="email" class="block text-gray-700 font-medium mb-2">Email address</label>
        <input 
          type="email" 
          id="email" 
          name="email" 
          placeholder="Enter your email address" 
          class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-yellow-500"
          required
        >
      </div>
      
      <div class="mb-8">
        <label for="password" class="block text-gray-700 font-medium mb-2">Password</label>
        <input 
          type="password" 
          id="password" 
          name="password" 
          placeholder="Enter your password (6-8 digit)" 
          class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-yellow-500"
          minlength="6"
          maxlength="8"
          required
        >
      </div>
      
      <button 
        type="submit" 
        class="w-full bg-yellow-500 text-white py-3 px-4 rounded-lg font-medium hover:bg-yellow-600 transition duration-300 mb-6"
      >
        LOGIN
      </button>
    </form>
    
    <p class="text-center text-gray-600">
      Don't have an account? 
      <a href="{{ route('signup') }}" class="text-yellow-500 hover:underline">Sign Up</a>
    </p>
  </div>
</section>
@endsection