@props(['var', 'type'])

<div class="flex items-center space-x-2">
    @isset($type)
        @if ($type == "decimal")
            <input type="number" step="0.01" name="{{ $var }}" class="w-full p-4 text-gray-900 border rounded-md">
        @else
            <input type="{{ $type }}" name="{{ $var }}" class="w-full p-4 text-gray-900 border rounded-md">
        @endif
    @else
        <input type="text" name="{{ $var }}" class="w-full p-4 text-gray-900 border rounded-md">
    @endisset
</div>
