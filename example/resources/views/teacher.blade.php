<x-layout>
    <x-slot:heading>
        Teacher Details
    </x-slot:heading>

    <h2 class="text-xl font-bold">{{ $teacher->name }}</h2>

    <h3 class="mt-3 font-semibold">Subjects taught:</h3>
    <ul class="list-disc pl-5">
        @foreach ($teacher->subjects as $subject)
            <li>{{ $subject->name }}</li>
        @endforeach
    </ul>

    <a href="/teachers" class="text-blue-500 hover:underline block mt-3">← Back to list</a>
</x-layout>
