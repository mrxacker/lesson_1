<x-layout>
    <x-slot:heading>
        Information about <b>{{ $job['name'] }}</b>
    </x-slot:heading>
    <h1>{{ $job['name'] }}</h1>
    <p>
        Average salary is: ${{ $job['salary'] }}
    </p>
</x-layout>