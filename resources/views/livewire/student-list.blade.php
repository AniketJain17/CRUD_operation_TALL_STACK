<div class="text-center">
    <h1 class="py-2 mb-4 text-2xl font-bold text-white bg-blue-500">Student Records</h1>
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
                <td class="px-4 py-2 border-b">{{ $record->id }}</td>
                    <td class="px-4 py-2 border-b">{{ $record->name }}</td>
                    <td class="px-4 py-2 border-b">
                        {{$record->marks}}
                    </td>

                    <td class="px-4 py-2 border-b">
                        <button wire:click="delete_row({{ $record->id }})" class="focus:outline-none text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-900">
                            Delete
                        </button>

                        <a href="/student/edit?studentId={{$record->id}}" target="_blank" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">
                            Edit
                        </a>


                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

    <div x-data="{show: false}">
    <div  x-show="show">
        <input wire:model="name" type="text" placeholder="Name" />
        <input wire:model="marks" type="number" placeholder="Marks" />
        <button wire:click="add_form()"
            class="focus:outline-none text-white bg-green-700 hover:bg-green-800 focus:ring-4 focus:ring-green-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800">Add</button>
    </div>
    <button @click="show = ! show" :aria-expanded="show ? ' true' : 'false'" :class="{ 'active': show }">
        <span x-show="!show" class="text-blue-500">Show Input Form</span>
        <span x-show="show" class="text-blue-500">Hide Input Form</span>
    </button>
</div>

</div>
