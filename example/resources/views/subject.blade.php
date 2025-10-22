<x-layout>
    <x-slot:heading>
        Subject Details
    </x-slot:heading>

    <h2 class="text-xl font-bold">{{ $subject->name }}</h2>

    <h3 class="mt-3 font-semibold">Teachers teaching this subject:</h3>
    <ul class="list-disc pl-5">
        @foreach ($subject->teachers as $teacher)
            <li>{{ $teacher->name }}</li>
        @endforeach
    </ul>

    <a href="/subjects" class="text-blue-500 hover:underline block mt-3">← Back to list</a>
</x-layout>
