<x-layout>
    <x-slot:heading>
        List of jobs
    </x-slot:heading>
    <ul>
        @foreach ($jobs as $job)
            <li>
                <a href="/job/{{ $job['id'] }}">
                    <b>{{ $job['name'] }}</b> average salary is ${{ $job['salary'] }} for yearly
                </a>
            </li>
        @endforeach
    </ul>
</x-layout>