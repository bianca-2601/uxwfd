@extends('layout')

@section('title', 'Jual Produk')

@section('content')
<div class="max-w-3xl mx-auto py-8">
  <h1 class="text-3xl font-bold mb-6">Jual Produk</h1>

  @if ($errors->any())
    <div class="bg-red-100 text-red-700 p-4 mb-4 rounded">
      <ul>
        @foreach ($errors->all() as $error)
          <li>- {{ $error }}</li>
        @endforeach
      </ul>
    </div>
  @endif

  <form method="POST" action="{{ route('product.store') }}" enctype="multipart/form-data" class="space-y-6">
    @csrf

    <div>
      <label class="block mb-1 font-medium">Nama Produk</label>
      <input type="text" name="name" value="{{ old('name') }}" required class="w-full border p-2 rounded">
    </div>

    <div>
      <label class="block mb-1 font-medium">Deskripsi</label>
      <textarea name="description" rows="4" class="w-full border p-2 rounded">{{ old('description') }}</textarea>
    </div>

    <div class="grid grid-cols-2 gap-4">
      <div>
        <label class="block mb-1 font-medium">Harga</label>
        <input type="number" name="price" value="{{ old('price') }}" required class="w-full border p-2 rounded">
      </div>

      <div>
        <label class="block mb-1 font-medium">Stok</label>
        <input type="number" name="stock" value="{{ old('stock') }}" required class="w-full border p-2 rounded">
      </div>
    </div>

    <div>
      <label class="block mb-1 font-medium">Kategori</label>
      <select name="category_id" required class="w-full border p-2 rounded">
        <option value="">Pilih Kategori</option>
        @foreach ($categories as $category)
          <option value="{{ $category->id }}" {{ old('category_id') == $category->id ? 'selected' : '' }}>
            {{ $category->name }}
          </option>
        @endforeach
      </select>
    </div>

    <div>
      <label class="block mb-1 font-medium">Gambar Produk</label>
      <input type="file" name="image" accept="image/*" class="w-full">
    </div>

    <div>
      <button type="submit" class="bg-yellow-500 text-white px-4 py-2 rounded hover:bg-yellow-600 transition">
        Jual Produk
      </button>
    </div>
  </form>
</div>
@endsection
