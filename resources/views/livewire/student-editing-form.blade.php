<div class="p-6">
    @if (session()->has('message'))
        <div class="p-4 mb-4 text-green-800 bg-green-200 rounded-sm">{{ session('message') }}</div>
    @endif

    <form wire:submit.prevent="updateStudent" class="space-y-4">
        <div>
            <label for="name" class="block mb-1 font-semibold">Name:</label>
            <input type="text" wire:model="name" id="name" class="w-full p-2 border border-gray-300 rounded">
            @error('name') <span class="text-red-500">{{ $message }}</span> @enderror
        </div>

        <div>
            <label for="marks" class="block mb-1 font-semibold">Marks:</label>
            <input type="number" wire:model="marks" id="marks" class="w-full p-2 border border-gray-300 rounded">
            @error('marks') <span class="text-red-500">{{ $message }}</span> @enderror
        </div>

        <div>
            <button type="submit" class="px-4 py-2 text-white bg-blue-500 rounded hover:bg-blue-600">Update Student</button>
        </div>
    </form>
</div>
