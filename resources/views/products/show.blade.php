<h1>{{ $product->name }}</h1>
<img src="{{ asset('images/' . $product->image) }}" class="w-64">
<p>Rp {{ $product->price }}</p>
<p>{{ $product->description }}</p>

<h3>Related Products</h3>
<div class="grid grid-cols-4 gap-2">
    @foreach($related as $item)
        <div>
            <img src="{{ asset('images/' . $item->image) }}" class="h-32 object-cover">
            <p>{{ $item->name }}</p>
        </div>
    @endforeach
</div>