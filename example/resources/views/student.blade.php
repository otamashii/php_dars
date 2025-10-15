<x-layout>
    <x-slot:heading>
        Student Details
    </x-slot:heading>

    <h2>{{ $student['name'] }} {{ $student['lastname'] }}</h2>
    <p>ID: {{ $student['id'] }}</p>

    <a href="/students" class="text-blue-500 hover:underline">← Back to list</a>
</x-layout>
