<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Thryft')</title>
    
    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>

    <!-- Bootstrap CSS -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.0/dist/css/bootstrap.min.css" rel="stylesheet">

<!-- Bootstrap JS (plus jQuery for tabs) -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.0/dist/js/bootstrap.bundle.min.js"></script>

    
    <!-- Alpine.js -->
    <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>
    
    <!-- Swiper -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

    <!-- SweetAlert2 CDN -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

</head>

<body class="font-sans text-gray-800 bg-gray-50">
    <!-- Navbar -->
    <nav class="grid grid-cols-3 items-center px-8 py-4 border-b sticky top-0 bg-white z-50">
    <!-- Logo -->
    <div class="text-3xl font-bold text-yellow-500 hover:cursor-pointer transition-transform hover:scale-105" 
         onclick="window.location.href='{{ route('home') }}'">
        THRYFT
    </div>

    <!-- Navigation Links -->
<ul class="flex justify-center space-x-8">
  <li>
    <a href="{{ route('home') }}" 
       class="text-lg px-3 py-2 transition-colors duration-300 hover:text-yellow-500 hover:no-underline 
              {{ request()->routeIs('home') ? 'text-yellow-500 font-semibold' : 'text-black' }}">
      Home
    </a>
  </li>
  <li>
    <a href="{{ route('shop') }}" 
       class="text-lg px-3 py-2 transition-colors duration-300 hover:text-yellow-500 hover:no-underline 
              {{ request()->routeIs('shop') ? 'text-yellow-500 font-semibold' : 'text-black' }}">
      Shop
    </a>
  </li>
  <li>
    <a href="{{ route('aboutus') }}" 
       class="text-lg px-3 py-2 transition-colors duration-300 hover:text-yellow-500 hover:no-underline 
              {{ request()->routeIs('aboutus') ? 'text-yellow-500 font-semibold' : 'text-black' }}">
      About
    </a>
  </li>
  <li>
    <a href="{{ route('categories') }}" 
       class="text-lg px-3 py-2 transition-colors duration-300 hover:text-yellow-500 hover:no-underline 
              {{ request()->routeIs('categories') ? 'text-yellow-500 font-semibold' : 'text-black' }}">
      Categories
    </a>
  </li>
</ul>


    <!-- Icons -->
    <div class="flex justify-end space-x-6 items-center">
    <!-- Search -->
    <div x-data="{ open: false }" class="relative group">
        <button @click="open = !open" class="p-2 hover:bg-gray-100 rounded-full">
            <img src="{{ asset('images/search-interface-symbol.png') }}" alt="Search" class="w-6 h-6">
        </button>
        <form method="GET" action="{{ route('search') }}"
              x-show="open"
              @click.outside="open = false"
              x-transition
              class="absolute right-0 mt-2 bg-white p-2 shadow-md rounded z-10"
        >
            <input type="text" name="query" placeholder="Search products..."
                   class="border border-gray-300 rounded px-3 py-1 text-sm w-64" />
        </form>
        <div class="absolute bottom-[-2rem] left-1/2 transform -translate-x-1/2 bg-black text-white text-xs rounded py-1 px-2 opacity-0 group-hover:opacity-100 transition duration-300">
            Search
        </div>
    </div>

    @php
    $cartItems = session('cart', []);
    $totalQuantity = array_sum(array_column($cartItems, 'quantity'));
@endphp

<!-- Cart -->
<div class="relative group">
  <a href="{{ route('cart') }}"
     class="inline-flex items-center justify-center p-2 rounded-full hover:bg-gray-100 transition-colors duration-300 {{ request()->routeIs('cart') ? 'bg-yellow-100 ring-2 ring-yellow-400' : '' }}">
    <img src="{{ asset('images/shopping-cart.png') }}" alt="Cart" class="w-6 h-6 block">

    <span id="cart-count-badge" 
          class="absolute -top-1 -right-1 bg-red-500 text-white text-[10px] font-bold rounded-full px-1.5 py-0.5 leading-none {{ $totalQuantity == 0 ? 'hidden' : '' }}">
      {{ $totalQuantity > 99 ? '99+' : $totalQuantity }}
    </span>
  </a>

  <div class="absolute bottom-[-2rem] left-1/2 transform -translate-x-1/2 bg-black text-white text-xs rounded py-1 px-2 opacity-0 group-hover:opacity-100 transition duration-300">
    Cart
  </div>
</div>

    <!-- Chat -->
    <div class="relative group">
        <a href="{{ route('room') }}" 
        class="inline-flex items-center justify-center p-2 rounded-full transition-colors duration-300 hover:bg-gray-100 {{ request()->routeIs('room') ? 'bg-yellow-100 ring-2 ring-yellow-400' : '' }}">
            <img src="{{ asset('images/chat.png') }}" alt="Chat" class="w-6 h-6 block">
        </a>
        <div class="absolute bottom-[-2rem] left-1/2 transform -translate-x-1/2 bg-black text-white text-xs rounded py-1 px-2 opacity-0 group-hover:opacity-100 transition duration-300">
            Chat
        </div>
    </div>

    <!-- User -->
    <div class="relative group">
        <a href="{{ auth()->check() ? route('profile') : route('login') }}" 
        class="inline-flex items-center justify-center p-2 rounded-full transition-colors duration-300 hover:bg-gray-100 {{ request()->routeIs('profile') || request()->routeIs('login') ? 'bg-yellow-100 ring-2 ring-yellow-400' : '' }}">
            <img src="{{ asset('images/user.png') }}" alt="User" class="w-6 h-6 block">
        </a>
        <div class="absolute bottom-[-2rem] left-1/2 transform -translate-x-1/2 bg-black text-white text-xs rounded py-1 px-2 opacity-0 group-hover:opacity-100 transition duration-300">
            {{ auth()->check() ? 'Profile' : 'Login' }}
        </div>
    </div>
</div>
</nav>


    <!-- Main Content -->
    <main class="min-h-screen">
        @yield('content')
    </main>

    <!-- Footer -->
    @if(!request()->is('chat*'))
<footer class="bg-white border-t mt-12">
    <div class="container mx-auto px-4 sm:px-6 lg:px-8 py-8">
        <div class="flex flex-col md:flex-row justify-between items-center">
            <!-- Brand Section -->
            <div class="mb-6 md:mb-0 text-center md:text-left">
                <div class="text-3xl font-bold text-yellow-500 mb-2">THRYFT</div>
                <p class="text-gray-600">
                    ©️ {{ date('Y') }} All rights reserved
                </p>
            </div>

            <!-- Navigation Links -->
            <div class="flex flex-col md:flex-row space-y-4 md:space-y-0 md:space-x-8 text-center md:text-left">
                <a href="{{ route('home') }}" 
                   class="text-gray-600 hover:text-yellow-500 transition-colors duration-300">
                    Home
                </a>
                <a href="{{ route('shop') }}" 
                   class="text-gray-600 hover:text-yellow-500 transition-colors duration-300">
                    Shop
                </a>
                <a href="https://wa.me/6287862052143" 
                   class="text-gray-600 hover:text-yellow-500 transition-colors duration-300"
                   target="_blank"
                   rel="noopener noreferrer">
                    Contact
                </a>
            </div>
        </div>

        <!-- Additional Info -->
        <div class="border-t mt-8 pt-6 text-center">
            <p class="text-sm text-gray-500">
                Sustainable thrifting platform • Based in Jakarta, Indonesia
            </p>
        </div>
    </div>
</footer>
@endif

    @yield('scripts')
</body>
</html>
