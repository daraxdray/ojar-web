<div>
    <label class="block mt-4 text-sm">
        <span class="text-gray-700">{{ $title ?? '' }}</span>
        <input
            class='block w-full p-2 mt-1 text-sm border border-gray-300 rounded focus:border-primary-400 focus:outline-none focus:shadow-outline-primary'
            autocomplete="off"
            placeholder="{{ $placeholder ?? '' }}"
            type="{{ $type ?? 'text' }}" id='{{ $name ?? '' }}'
    wire:model.debounce.700ms='{{ $name ?? '' }}'
        />
        @error($name ?? 'err')
            <span class="mt-1 text-xs text-red-700">{{ $message }}</span>
        @enderror
    </label>

    {{-- result --}}
    <div class="p-2 text-sm text-gray-400" wire:loading wire:target="{{ $name ?? '' }}">
        <x-heroicon-o-refresh class="w-4 h-5 animate-spin" />
    </div>
    <div class="border rounded-sm shadow-sm bg-gray-50" wire:loading.remove wire:target="{{ $name ?? '' }}" >
        @foreach($addresses ?? [] as $key => $address)
            <div class="px-4 py-2 text-sm text-gray-500 border-b cursor-pointer" x-on:click="livewire.emit('addressSelected',{{ $key }})" >
                {{ $address['name'] }}
            </div>
        @endforeach

    </div>

</div>
