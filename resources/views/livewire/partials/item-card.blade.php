<div class="p-6 border-gray-200 {{ $key > 1 ? 'border-t' : '' }} {{ $key % 2 !== 0 ? 'md:border-l' : ''  }}">
    <div class="flex items-center">
        <img class="w-8 h-8 text-gray-400" src="{{ asset('/storage/' . $item->icon); }}">
        <div class="ml-4 text-lg text-gray-600 leading-7 font-semibold"><a href="#">{{ $item->name }}</a></div>
    </div>

    <div class="ml-12">
        <div class="mt-2 text-sm text-gray-500">
            {{ ucfirst($item->description) }}
        </div>

        <a href="{{ route('topics.show', ['topic' => $item->id]) }}">
            <div class="mt-3 flex items-center text-sm font-semibold text-indigo-700">
                    <div>Explore the topic</div>

                    <div class="ml-1 text-indigo-500">
                        <svg viewBox="0 0 20 20" fill="currentColor" class="w-4 h-4"><path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                    </div>
            </div>
        </a>
    </div>
</div>
