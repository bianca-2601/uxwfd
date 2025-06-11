@foreach ((array) $messages as $message)
    <p {{ $attributes->merge(['class' => 'text-red-600 text-sm mt-1']) }}>
        {{ $message }}
    </p>
@endforeach