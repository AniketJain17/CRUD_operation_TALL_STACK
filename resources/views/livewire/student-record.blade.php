@props(['record'])

<div>
    <td class="px-4 py-2 border-b">{{ $record->id }}</td>
    <td class="px-4 py-2 border-b">{{ $record->name }}</td>
    <td x-data="{ count: {{$record->marks}} }"class="px-4 py-2 border-b">
        <input type="number" wire:model='record.marks' x-model="count"/>

         <button x-on:click="count++"
            class="px-4 py-2 text-white bg-indigo-500 rounded hover:bg-indigo-900">+</button>
        <button x-on:click="count--" class="px-4 py-2 text-white bg-indigo-500 rounded hover:bg-indigo-900">-</button>

        <button wire:click="emit('fsd')" class="px-4 py-2 text-white bg-indigo-500 rounded hover:bg-indigo-900">update</button>
    </td>
</div>
