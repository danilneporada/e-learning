<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    @if (empty($course))
        <section class="hero content-center max-w-screen-lg mx-auto pb-10">
            <img class="mx-auto" src="{{ asset('gifs/pablita_page_is_under_construction_transparent.gif') }}" alt="no content" width="50%">

            <div class="text-center text-3xl">
                There are currently no <font color="#5a38fc">Courses</font> available for you!
            </div>
        </section>
    @else
        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                    @livewire('show-courses', ['theme' => $course, 'collection' => $topics])
                </div>
            </div>
        </div>
    @endif
</x-app-layout>
