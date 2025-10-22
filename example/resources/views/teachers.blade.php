<x-layout>
    <x-slot:heading>
        Teachers List
    </x-slot:heading>

    <h2 class="text-lg font-bold mb-4">Teachers</h2>

    <ul>
        @foreach ($teachers as $teacher)
            <li>
                <a href="/teacher/{{ $teacher->id }}" class="text-blue-500 hover:underline">
                    {{ $teacher->name }}
                </a>
            </li>
        @endforeach
    </ul>
</x-layout>
