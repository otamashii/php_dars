<x-layout>
    <x-slot:heading>
        <div class="bg-gradient-to-r from-blue-500 to-indigo-600 text-white text-3xl font-bold p-4 rounded-xl shadow-lg text-center">
            💼 Job Listings
        </div>
    </x-slot:heading>

    <div class="max-w-5xl mx-auto mt-8 bg-white shadow-2xl rounded-2xl overflow-hidden">
        <table class="min-w-full border border-gray-200 text-sm">
            <thead class="bg-gradient-to-r from-blue-100 to-indigo-200 text-gray-700 uppercase tracking-wider">
                <tr>
                    <th class="py-3 px-4 text-left border-b">ID</th>
                    <th class="py-3 px-4 text-left border-b">Title</th>
                    <th class="py-3 px-4 text-left border-b">Salary</th>
                </tr>
            </thead>
            <tbody class="divide-y divide-gray-100">
                @foreach ($jobs as $job)
                    <tr class="hover:bg-blue-50 transition-all duration-200">
                        <td class="py-3 px-4 font-medium text-gray-700">{{ $job['id'] }}</td>
                        <td class="py-3 px-4">
                            <a href="/job/{{ $job['id'] }}" 
                               class="text-blue-600 hover:text-indigo-700 font-semibold hover:underline flex items-center gap-2">
                                <img src="https://ui-avatars.com/api/?name={{ urlencode($job['title']) }}&background=E0E7FF&color=3730A3&size=40"
                                    alt="avatar" class="w-8 h-8 rounded-full border border-gray-200">
                                {{ $job['title'] }}
                            </a>
                        </td>
                        <td class="py-3 px-4 text-gray-700">${{ $job['salary'] }}</td>

                    </tr>
                @endforeach
            </tbody>
        </table>

        <div class="bg-gray-50 p-4 text-center text-sm text-gray-600">
            Showing {{ count($jobs) }} jobs in total
        </div>
    </div>
</x-layout>
