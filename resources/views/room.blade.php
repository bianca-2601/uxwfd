@extends('layouts.app')

@section('content')
<!-- Chat Header -->
<div class="flex items-center justify-between p-4 border-b bg-white sticky top-0 z-50">
  <div class="flex items-center space-x-3">
    <a href="{{ url('/') }}" class="text-yellow-500">
      <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none"
           viewBox="0 0 24 24" stroke="currentColor">
        <path stroke-linecap="round" stroke-linejoin="round"
              stroke-width="2" d="M15 19l-7-7 7-7" />
      </svg>
    </a>
    <h2 class="text-lg font-semibold">Chat</h2>
  </div>
</div>

<!-- Chat List -->
<div class="divide-y bg-white">
  <!-- Chat Item 1 -->
  <a href="/chat" class="block">
    <div class="p-3 flex items-start space-x-3 hover:bg-gray-50">
      <div class="bg-gray-200 rounded-full w-12 h-12 flex items-center justify-center text-gray-500">
        S
      </div>
      <div class="flex-1">
        <div class="flex justify-between items-center">
          <h3 class="font-medium">Seller A</h3>
        </div>
        <p class="text-sm text-gray-500">Halo! Ada yang bisa saya bantu?</p>
      </div>
    </div>
  </a>

  <!-- Chat Item 2 -->
  <a href="/chat" class="block">
    <div class="p-3 flex items-start space-x-3 hover:bg-gray-50">
      <div class="bg-gray-200 rounded-full w-12 h-12 flex items-center justify-center text-gray-500">
        S
      </div>
      <div class="flex-1">
        <div class="flex justify-between items-center">
          <h3 class="font-medium">Seller B</h3>
        </div>
        <p class="text-sm text-gray-500">Halo! Ada yang bisa saya bantu?</p>
      </div>
    </div>
  </a>

  <!-- Chat Item 3 -->
  <a href="/chat" class="block">
    <div class="p-3 flex items-start space-x-3 hover:bg-gray-50">
      <div class="bg-gray-200 rounded-full w-12 h-12 flex items-center justify-center text-gray-500">
        A
      </div>
      <div class="flex-1">
        <div class="flex justify-between items-center">
          <h3 class="font-medium">Seller C</h3>
        </div>
        <p class="text-sm text-gray-500">Admin akan membantumu</p>
      </div>
    </div>
  </a>

  <!-- Chat Item 4 -->
  <a href="/chat" class="block">
    <div class="p-3 flex items-start space-x-3 hover:bg-gray-50">
      <div class="bg-gray-200 rounded-full w-12 h-12 flex items-center justify-center text-gray-500">
        C
      </div>
      <div class="flex-1">
        <div class="flex justify-between items-center">
          <h3 class="font-medium">Seller D</h3>
        </div>
        <p class="text-sm text-gray-500">Halo! Ada yang bisa saya bantu?</p>
      </div>
    </div>
  </a>

  <!-- Chat Item 5 -->
  <a href="/chat" class="block">
    <div class="p-3 flex items-start space-x-3 hover:bg-gray-50">
      <div class="bg-gray-200 rounded-full w-12 h-12 flex items-center justify-center text-gray-500">
        S
      </div>
      <div class="flex-1">
        <div class="flex justify-between items-center">
          <h3 class="font-medium">Seller E</h3>
        </div>
        <p class="text-sm text-gray-500">Halo! Ada yang bisa saya bantu?</p>
      </div>
    </div>
  </a>

  <!-- Chat Item 6 -->
  <a href="/chat" class="block">
    <div class="p-3 flex items-start space-x-3 hover:bg-gray-50">
      <div class="bg-gray-200 rounded-full w-12 h-12 flex items-center justify-center text-gray-500">
        O
      </div>
      <div class="flex-1">
        <div class="flex justify-between items-center">
          <h3 class="font-medium">Seller F</h3>
        </div>
        <p class="text-sm text-gray-500">Halo! Ada yang bisa saya bantu?</p>
      </div>
    </div>
  </a>
</div>

@endsection