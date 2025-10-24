<x-layout>
    <x-slot:heading>
        <div class="bg-gradient-to-r from-blue-500 to-indigo-600 text-white text-3xl font-bold p-4 rounded-xl shadow-lg text-center">
            🎓 Students List
        </div>
    </x-slot:heading>

    {{-- 💡 Muvaffaqiyat xabarini ko'rsatish (QO'SHING) --}}
    @if (session('success'))
        <div class="max-w-6xl mx-auto mt-4 p-4 text-sm text-green-700 bg-green-100 rounded-xl shadow-md" role="alert">
            <span class="font-medium">Tabriklaymiz!</span> {{ session('success') }}
        </div>
    @endif
    
    {{-- 💡 "Add New Student" tugmasini qo'shish (QO'SHING) --}}
    <div class="max-w-6xl mx-auto mt-4 flex justify-end">
        <a href="/students/create" class="inline-flex items-center px-4 py-2 border border-transparent text-sm font-medium rounded-md shadow-sm text-white bg-green-600 hover:bg-green-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-green-500 transition">
            ➕ Add New Student
        </a>
    </div>

    <div class="max-w-6xl mx-auto mt-4 bg-white shadow-2xl rounded-2xl overflow-hidden">
        <table class="min-w-full border border-gray-200 text-sm">
            <thead class="bg-gradient-to-r from-blue-100 to-indigo-200 text-gray-700 uppercase tracking-wider">
                <tr>
                    <th class="py-2 px-4 text-left border-b">ID</th>
                    <th class="py-2 px-4 text-left border-b">Name</th>
                    <th class="py-2 px-4 text-left border-b">Lastname</th>
                    <th class="py-2 px-4 text-left border-b">Created At</th>
                </tr>
            </thead>
            <tbody class="divide-y divide-gray-100">
                @foreach ($students as $student)
                    <tr class="hover:bg-blue-50 transition-all duration-200">
                        <td class="py-3 px-4 font-medium text-gray-700">{{ $student->id }}</td>
                        <td class="py-3 px-4">
                            <a href="/student/{{ $student->id }}" class="text-blue-600 hover:text-indigo-700 font-semibold hover:underline flex items-center gap-2">
                                <img src="https://ui-avatars.com/api/?name={{ urlencode($student->name.' '.$student->lastname) }}&background=E0E7FF&color=3730A3&size=40"
                                     alt="avatar" class="w-8 h-8 rounded-full border border-gray-200">
                                {{ $student->name }}
                            </a>
                        </td>
                        <td class="py-3 px-4 text-gray-700">{{ $student->lastname }}</td>
                        <td class="py-3 px-4 text-gray-500">{{ $student->created_at->format('Y-m-d') }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>

        <div class="bg-gray-50 p-4 flex justify-between items-center">
            <p class="text-gray-600 text-sm">
                Showing <span class="font-semibold">{{ $students->firstItem() }}</span>
                to <span class="font-semibold">{{ $students->lastItem() }}</span>
                of <span class="font-semibold">{{ $students->total() }}</span> results
            </p>
            <div class="flex space-x-2">
                {{ $students->links('pagination::tailwind') }}
            </div>
        </div>
    </div>
</x-layout>