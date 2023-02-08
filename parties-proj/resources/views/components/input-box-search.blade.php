@props(['colname', 'colname_form', 'input_value'])

<div class="flex items-center space-x-2">
    <label for="{{ $colname_form }}">
        {{ $colname }}
    </label>
    <div class="ledger-search-container w-full flex flex-col space-y-2">
        <input type="text" class="ledger-search-value-input w-full p-4 text-gray-900 border rounded-md" value=""
            placeholder="Нажмите, чтобы вывести список (возможна долгая загрузка)">
        <input type="text" name="{{ $colname_form }}" class="ledger-search-id-input hidden" value="{{ $input_value }}">

        <div class="ledger-search-dropdown hidden w-full p-4 h-64 overflow-y-auto text-gray-900 border rounded-md">
            <ul class="ledger-search-ul">
                {{ $slot }}
            </ul>
        </div>
        </select>
    </div>
</div>
