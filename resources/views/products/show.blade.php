<h1>{{ $product->name }}</h1>
<img src="{{ asset('images/' . $product->image) }}" class="w-64">
<p>Rp {{ number_format($product->price, 0, ',', '.') }}</p> <!-- biar format harga rapi -->
<p>{{ $product->description }}</p>

<!-- Form Add to Cart -->
<form action="{{ route('cart.add') }}" method="POST" class="mt-4">
    @csrf
    <input type="hidden" name="id" value="{{ $product->id }}">
    <input type="hidden" name="name" value="{{ $product->name }}">
    <input type="hidden" name="price" value="{{ $product->price }}">
    <input type="hidden" name="image" value="{{ $product->image ?? 'default.png' }}">
    <input type="hidden" name="quantity" value="1">
    <button type="submit" 
            class="px-4 py-2 bg-yellow-500 text-white rounded hover:bg-yellow-600 transition">
        Add to Cart
    </button>
</form>

<h3 class="mt-10 mb-4 font-semibold text-lg">Related Products</h3>
<div class="grid grid-cols-4 gap-2">
    @foreach($related as $item)
        <div>
            <img src="{{ asset('images/' . $item->image) }}" class="h-32 object-cover w-full">
            <p class="mt-1 text-sm">{{ $item->name }}</p>
        </div>
    @endforeach
</div>
