<input
    {{ $attributes->merge(['class' => 'border-gray-300 rounded-md shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50']) }}
    type="{{ $type }}"
    name="{{ $name }}"
    id="{{ $id }}"
    value="{{ old($name, $value) }}"
    @if($required) required @endif
>