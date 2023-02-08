@props(['colname', 'colname_form', 'input_value'])

<div class="flex items-center space-x-2">
    <label for="{{ $colname_form }}">
        {{ $colname }}
    </label>
    <div class="ledger-multiple-container w-full flex flex-col space-y-2">
        <input type="text" class="ledger-multiple-value-input w-full p-4 text-gray-900 border rounded-md" value=""
                placeholder="Нажмите, чтобы вывести список (возможна долгая загрузка)">
        <input type="text" name="{{ $colname_form }}" class="ledger-multiple-id-input hidden" value="{{ $input_value }}">

        <div class="ledger-multiple-dropdown hidden w-full p-4 h-64 overflow-y-auto text-gray-900 border rounded-md">
            <ul class="ledger-multiple-ul">
                {{ $slot }}
            </ul>
        </div>

        <div class="ledger-multiple-selected">

        </div>
    </div>
</div>
