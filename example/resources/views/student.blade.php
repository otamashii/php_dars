<x-layout>
    <x-slot:heading>
        🎓 Student Profile
    </x-slot:heading>

    <div class="max-w-3xl mx-auto mt-10 bg-gradient-to-br from-blue-50 via-white to-indigo-50 rounded-3xl shadow-xl border border-gray-200 p-10 relative overflow-hidden">
        {{-- Decorative Circle Background --}}
        <div class="absolute -top-10 -right-10 w-40 h-40 bg-blue-200 rounded-full opacity-30 blur-3xl"></div>
        <div class="absolute -bottom-10 -left-10 w-40 h-40 bg-indigo-200 rounded-full opacity-30 blur-3xl"></div>

        {{-- Header --}}
        <div class="flex flex-col sm:flex-row items-center sm:items-start sm:justify-between gap-6">
            <div class="flex items-center gap-5">
                <img src="https://ui-avatars.com/api/?name={{ urlencode($student['name'].' '.$student['lastname']) }}&background=4F46E5&color=fff&size=120" 
                     alt="Profile Image"
                     class="w-28 h-28 rounded-full shadow-md border-4 border-white">
                <div>
                    <h2 class="text-3xl font-extrabold text-gray-800 tracking-tight">
                        {{ $student['name'] }} {{ $student['lastname'] }}
                    </h2>
                    <p class="text-gray-500 mt-1 text-sm">Student ID: <span class="font-semibold text-gray-700">{{ $student['id'] }}</span></p>
                </div>
            </div>
        </div>

        {{-- Info Section --}}
        <div class="mt-8 grid grid-cols-1 sm:grid-cols-2 gap-6 text-gray-700">
            <div class="bg-white rounded-2xl p-5 shadow-sm hover:shadow-md transition">
                <p class="text-sm text-gray-500">Email</p>
                <p class="font-semibold">{{ $student['email'] ?? 'Not provided' }}</p>
            </div>

            <div class="bg-white rounded-2xl p-5 shadow-sm hover:shadow-md transition">
                <p class="text-sm text-gray-500">Phone</p>
                <p class="font-semibold">{{ $student['phone'] ?? '—' }}</p>
            </div>

            <div class="bg-white rounded-2xl p-5 shadow-sm hover:shadow-md transition">
                <p class="text-sm text-gray-500">Address</p>
                <p class="font-semibold">{{ $student['address'] ?? '—' }}</p>
            </div>

            <div class="bg-white rounded-2xl p-5 shadow-sm hover:shadow-md transition">
                <p class="text-sm text-gray-500">Created At</p>
                <p class="font-semibold">{{ $student['created_at']->format('Y-m-d') }}</p>
            </div>
        </div>

        {{-- Footer Button --}}
        <div class="mt-10 flex justify-center">
            <a href="/students" 
               class="inline-flex items-center gap-2 px-6 py-3 bg-gradient-to-r from-blue-600 to-indigo-600 text-white font-semibold rounded-full shadow-md hover:shadow-lg hover:scale-105 transition duration-300">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7" />
                </svg>
                Back to Students
            </a>
        </div>
    </div>
</x-layout>
