@props(['colname', 'colname_form', 'input_value', 'type'])

<div class="flex items-center space-x-2">
    <label for="{{ $colname_form }}" class="">
        {{ $colname }}
    </label>
    @isset($type)
        @if ($type == "decimal")
            <input type="number" step="0.01" name="{{ $colname_form }}" class="w-full p-4 text-gray-900 border rounded-md" value="{{ $input_value }}">
        @else
            <input type="{{ $type }}" name="{{ $colname_form }}" class="w-full p-4 text-gray-900 border rounded-md" value="{{ $input_value }}">
        @endif
    @else
        <input type="text" name="{{ $colname_form }}" class="w-full p-4 text-gray-900 border rounded-md" value="{{ $input_value }}">
    @endisset
</div>
