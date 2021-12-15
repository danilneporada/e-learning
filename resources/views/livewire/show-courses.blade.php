<div>
    <div class="p-6 bg-white border-b border-gray-200">
        <div class="mt-8 text-3xl flex">
            <img class="block h-12 w-auto mr-6" src="{{ asset('/storage/' . $theme->logo_path); }}">
            {{ ucfirst($theme->name) }}&nbsp;<font color="#5a38fc">Course</font>&nbsp;for creative minds!
        </div>

        <div class="mt-6 text-gray-500 sm:px-20">
            {{ ucfirst($theme->description) }}
        </div>
    </div>

    @if ($collection)
        <div class="bg-gray-200 bg-opacity-25 grid grid-cols-1 md:grid-cols-2">
            @each('livewire.partials.item-card', $collection, 'item')

            <div class="bg-white p-6 col-span-1 md:col-span-2 border-t border-gray-200">
                <div class="text-3xl text-center mt-4 mb-4">
                    <img class="mx-auto" src="{{ asset('gifs/thatsall.gif') }}" alt="no content" width="20%">
                    <font color="#5a38fc">Keep Learning</font>
                </div>
            </div>
        </div>
    @endif
</div
