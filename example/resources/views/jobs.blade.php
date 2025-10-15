<x-layout>
    <x-slot:heading>
        Jobs Listings
    </x-slot:heading>

        @foreach ($jobs as $job)
           <a href="/job/{{$job['id']}}" class="text-blue-500 hover:underline">
              <li>
                {{ $job['title'] }} : {{ $job['salary'] }}
              </li>
           </a>
        @endforeach
 
    
</x-layout>
