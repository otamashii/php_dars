<x-layout>
    <x-slot:heading>
        <div class="bg-gradient-to-r from-blue-500 to-indigo-600 text-white text-3xl font-bold p-4 rounded-xl shadow-lg text-center">
            💼 Job Details
        </div>
    </x-slot:heading>

    <div class="max-w-3xl mx-auto mt-10 bg-gradient-to-br from-blue-50 via-white to-indigo-50 rounded-3xl shadow-xl border border-gray-200 p-10 relative overflow-hidden">
        {{-- Background decorations --}}
        <div class="absolute -top-10 -right-10 w-40 h-40 bg-blue-200 rounded-full opacity-30 blur-3xl"></div>
        <div class="absolute -bottom-10 -left-10 w-40 h-40 bg-indigo-200 rounded-full opacity-30 blur-3xl"></div>

        {{-- Content --}}
        <div class="relative z-10">
            <div class="flex items-center gap-5">
                <img src="https://ui-avatars.com/api/?name={{ urlencode($job['title']) }}&background=4F46E5&color=fff&size=120"
                     alt="Job Icon" class="w-24 h-24 rounded-full shadow-md border-4 border-white">
                <div>
                    <h2 class="text-3xl font-extrabold text-gray-800 tracking-tight">{{ $job['title'] }}</h2>
                    <p class="text-gray-500 mt-1 text-sm">Job ID: <span class="font-semibold">{{ $job['id'] }}</span></p>
                </div>
            </div>

            <div class="mt-8 grid grid-cols-1 sm:grid-cols-2 gap-6 text-gray-700">
                <div class="bg-white rounded-2xl p-5 shadow-sm hover:shadow-md transition">
                    <p class="text-sm text-gray-500">Position</p>
                    <p class="font-semibold">{{ $job['title'] }}</p>
                </div>
                <div class="bg-white rounded-2xl p-5 shadow-sm hover:shadow-md transition">
                    <p class="text-sm text-gray-500">Salary</p>
                    <p class="font-semibold">${{ $job['salary'] }}</p>
                </div>
            </div>

            {{-- Back Button --}}
            <div class="mt-10 flex justify-center">
                <a href="/jobs" class="inline-flex items-center gap-2 px-6 py-3 bg-gradient-to-r from-blue-600 to-indigo-600 text-white font-semibold rounded-full shadow-md hover:shadow-lg hover:scale-105 transition duration-300">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7" />
                    </svg>
                    Back to Jobs
                </a>
            </div>
        </div>
    </div>
</x-layout>
