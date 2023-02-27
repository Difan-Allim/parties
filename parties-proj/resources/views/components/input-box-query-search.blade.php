@props(['var'])

<div class="flex items-center space-x-2">
    <div class="ledger-search-container w-full flex flex-col space-y-2">
        <input type="text" class="ledger-search-value-input w-full p-4 text-gray-900 border rounded-md"
            placeholder="Нажмите, чтобы вывести список (возможна долгая загрузка)">
        <input type="text" name="{{ $var }}" class="ledger-search-id-input hidden">

        <div class="ledger-search-dropdown hidden w-full p-4 h-64 overflow-y-auto text-gray-900 border rounded-md">
            <ul class="ledger-search-ul">
                {{ $slot }}
            </ul>
        </div>
        </select>
    </div>
</div>
