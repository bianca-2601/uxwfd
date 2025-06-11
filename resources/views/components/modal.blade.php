<div x-data="{ open: {{ $show ? 'true' : 'false' }} }" @if($focusable) x-on:keydown.escape.window="open = false" @endif>
    <div x-show="open" class="fixed inset-0 z-50 overflow-y-auto">
        <div class="flex items-center justify-center min-h-screen">
            <div class="fixed inset-0 bg-gray-500 opacity-75"></div>
            <div class="relative bg-white rounded-lg p-6 w-full max-w-md">
                {{ $slot }}
            </div>
        </div>
    </div>
</div>