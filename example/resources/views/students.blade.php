<x-layout>
    <x-slot:heading>
        🎓 Students List
    </x-slot:heading>

    <div class="max-w-6xl mx-auto mt-10 bg-white shadow-xl rounded-3xl border border-gray-200 overflow-hidden">
        {{-- Header --}}
        <div class="bg-gradient-to-r from-blue-600 to-indigo-600 px-8 py-5">
            <h1 class="text-2xl font-bold text-white tracking-wide">All Registered Students</h1>
            <p class="text-blue-100 text-sm">Showing student profiles with pagination</p>
        </div>

        {{-- Table --}}
        <div class="overflow-x-auto">
            <table class="min-w-full text-sm text-left">
                <thead class="bg-gray-100 border-b">
                    <tr>
                        <th class="px-6 py-3 font-semibold text-gray-600 uppercase tracking-wider">ID</th>
                        <th class="px-6 py-3 font-semibold text-gray-600 uppercase tracking-wider">Name</th>
                        <th class="px-6 py-3 font-semibold text-gray-600 uppercase tracking-wider">Lastname</th>
                        <th class="px-6 py-3 font-semibold text-gray-600 uppercase tracking-wider">Created At</th>
                    </tr>
                </thead>

                <tbody>
                    @foreach ($students as $student)
                    <tr class="border-b hover:bg-blue-50 transition duration-200">
                        {{-- ID --}}
                        <td class="px-6 py-4 text-gray-700 font-medium">{{ $student->id }}</td>

                        {{-- Name + clickable link --}}
                        <td class="px-6 py-4">
                            <a href="/student/{{ $student->id }}" 
                               class="flex items-center gap-3 text-blue-700 hover:text-blue-900 font-semibold hover:underline">
                                <img src="https://ui-avatars.com/api/?name={{ urlencode($student->name.' '.$student->lastname) }}&background=E0E7FF&color=3730A3&size=40" 
                                     alt="avatar" class="w-8 h-8 rounded-full border border-gray-200">
                                {{ $student->name }}
                            </a>
                        </td>

                        {{-- Lastname --}}
                        <td class="px-6 py-4 text-gray-700">{{ $student->lastname }}</td>

                        {{-- Created date --}}
                        <td class="px-6 py-4 text-gray-600">{{ $student->created_at->format('Y-m-d') }}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

        {{-- Pagination --}}
        <div class="flex justify-between items-center px-8 py-4 bg-gray-50 border-t">
            <p class="text-gray-600 text-sm">
                Showing <span class="font-semibold">{{ $students->firstItem() }}</span> to 
                <span class="font-semibold">{{ $students->lastItem() }}</span> of 
                <span class="font-semibold">{{ $students->total() }}</span> results
            </p>

            {{-- Custom styled pagination --}}
            <div class="flex items-center gap-2">
                @if ($students->onFirstPage())
                    <span class="px-3 py-1 text-gray-400 border border-gray-200 rounded-md">← Prev</span>
                @else
                    <a href="{{ $students->previousPageUrl() }}" 
                       class="px-3 py-1 bg-blue-600 text-white rounded-md hover:bg-blue-700 transition">← Prev</a>
                @endif

                @foreach ($students->getUrlRange(1, $students->lastPage()) as $page => $url)
                    <a href="{{ $url }}"
                       class="px-3 py-1 rounded-md border 
                              {{ $page == $students->currentPage() 
                                  ? 'bg-blue-600 text-white border-blue-600' 
                                  : 'bg-white text-gray-700 border-gray-200 hover:bg-blue-50' }}">
                       {{ $page }}
                    </a>
                @endforeach

                @if ($students->hasMorePages())
                    <a href="{{ $students->nextPageUrl() }}" 
                       class="px-3 py-1 bg-blue-600 text-white rounded-md hover:bg-blue-700 transition">Next →</a>
                @else
                    <span class="px-3 py-1 text-gray-400 border border-gray-200 rounded-md">Next →</span>
                @endif
            </div>
        </div>
    </div>
</x-layout>
