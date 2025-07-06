<div class="text-center space-y-1">
    @if ($logo)
        <img src="{{ $logo }}" alt="Logo" class="h-12 mx-auto">
    @endif

    <div class="text-lg font-bold text-gray-800">
        {{ $name }}
    </div>

    <div class="text-sm text-gray-500">
        {{ $address }}
    </div>
</div>
