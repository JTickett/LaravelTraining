<x-layout>
    <x-slot:heading>
        Home Page
    </x-slot>

    <ul>
        @foreach ($jobs as $job)
            <li>{{ $job['title'] }}: Pays {{ $job['salary'] }} per year</li>
        @endforeach
    </ul>


</x-layout>