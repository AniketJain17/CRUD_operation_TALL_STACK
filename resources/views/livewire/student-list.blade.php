<div class="text-center">
    <h1 class="py-2 mb-4 text-2xl font-bold text-white bg-blue-500">Records</h1>
    <table class="min-w-full bg-white border border-gray-300">
        <thead>
            <tr class="bg-gray-200">
                <th class="px-4 py-2 border-b">ID</th>
                <th class="px-4 py-2 border-b">Name</th>
                <th class="px-4 py-2 border-b">Marks</th>
                <th class="px-4 py-2 border-b">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($records as $record)
                <tr>
                    <livewire:student-record :record="$record" :wire:key="$record->id"/>

                        <td class="px-4 py-2 border-b"><button wire:click="delete_row({{ $record->id }})"
                            class="focus:outline-none text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-900">Delete</button>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    <div>
        <input wire:model="name" type="text" placeholder="Name" />
        <input wire:model="marks" type="number" placeholder="Marks" />
        <button wire:click="add_form()"
            class="focus:outline-none text-white bg-green-700 hover:bg-green-800 focus:ring-4 focus:ring-green-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800">Add</button>
    </div>
</div>
