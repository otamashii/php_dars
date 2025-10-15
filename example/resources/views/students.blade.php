<x-layout>
    <x-slot:heading>
        Students List
    </x-slot:heading>

        @foreach ($students as $student)
         
                <a href="/student/{{ $student['id'] }}" class="text-blue-500 hover:underline">
                    <li>
                        {{ $student['name'] }} {{ $student['lastname'] }}
                    </li>
                </a>
        @endforeach
    
</x-layout>
