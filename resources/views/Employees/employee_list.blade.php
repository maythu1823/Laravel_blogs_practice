<x-app-layout>
    <div class="max-w-6xl mx-auto p-6">

        <h2 class="text-2xl font-bold mb-5">Employee List</h2>

        <table class="w-full border border-gray-300">
            <thead class="bg-gray-300">
                <tr>
                    <th class="border px-4 py-2">ID</th>
                    <th class="border px-4 py-2">name</th>
                    <th class="border px-4 py-2">email</th>
                    <th class="border px-4 py-2">position</th>
                    <th class="border px-4 py-2">Created</th>
                </tr>
            </thead>

            <tbody>
                @foreach ($employees as $employee)
                    <tr>
                        <td class="border px-4 py-2">{{ $employee->id }}</td>
                        <td class="border px-4 py-2">{{ $employee->name }}</td>
                        <td class="border px-4 py-2">{{ $employee->email }}</td>
                        
                        <td class="border px-4 py-2 ">
                            {{ Str::limit($employee->position, 100) }}
                        </td>
                      
                        <td class="border px-4 py-2 text-center">
                            <form
                                action="/employee_delete/{{ $employee->id }}"
                                method="POST"
                                onsubmit="return confirm('Are you sure you want to delete this article?')"
                            >
                                @csrf
                                @method('DELETE')

                                <button class="bg-red-500 text-white px-3 py-1 rounded">
                                    Delete
                                </button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>

    </div>
</x-app-layout>