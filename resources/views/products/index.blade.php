@foreach($categories as $category)
    <h2>{{ $category->name }}</h2>
    <div class="grid grid-cols-4 gap-4">
        @foreach($category->products as $product)
            <div class="border p-2">
                <img src="{{ asset('images/' . $product->image) }}" alt="" class="w-full h-48 object-cover">
                <h3>{{ $product->name }}</h3>
                <p>Rp {{ $product->price }}</p>
                <a href="{{ url('/products/' . $product->id) }}">View</a>
            </div>
        @endforeach
    </div>
@endforeach