<x-layout>
    <x-slot:heading>
        Subjects List
    </x-slot:heading>

    <ul>
        @foreach ($subjects as $subject)
            <li>
                <a href="/subject/{{ $subject->id }}" class="text-blue-500 hover:underline">
                    {{ $subject->name }}
                </a>
            </li>
        @endforeach
    </ul>
</x-layout>
