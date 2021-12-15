<div class="p-6 bg-white border-b border-gray-200">
    <div class="mt-8 text-3xl flex">
        <img class="block h-12 w-auto mr-6" src="{{ asset('/storage/' . $course->logo_path); }}">
        {{ ucfirst($course->name) }}&nbsp;<font color="#5a38fc">Course</font>&nbsp;for creative minds!
    </div>

    <div class="mt-6 text-gray-500 sm:px-20">
        {{ ucfirst($course->description) }}
    </div>
</div>

<div class="bg-gray-200 bg-opacity-25 grid grid-cols-1 md:grid-cols-2">
    @foreach ($topics as $topic)
        <div class="p-6 border-gray-200 {{ $loop->index > 1 ? 'border-t' : '' }} {{ $loop->even ? 'md:border-l' : ''  }}">
            <div class="flex items-center">
                <img class="w-8 h-8 text-gray-400" src="{{ asset('/storage/' . $topic->icon); }}">
                <div class="ml-4 text-lg text-gray-600 leading-7 font-semibold"><a href="#">{{ $topic->name }}</a></div>
            </div>

            <div class="ml-12">
                <div class="mt-2 text-sm text-gray-500">
                    {{ $topic->description }}
                </div>

                <a href="#">
                    <div class="mt-3 flex items-center text-sm font-semibold text-indigo-700">
                            <div>Explore the topic</div>

                            <div class="ml-1 text-indigo-500">
                                <svg viewBox="0 0 20 20" fill="currentColor" class="w-4 h-4"><path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                            </div>
                    </div>
                </a>
            </div>
        </div>
    @endforeach

    <div class="bg-white p-6 col-span-1 md:col-span-2 border-t border-gray-200">
        <div class="text-3xl text-center mt-4 mb-4">
            <img class="mx-auto" src="{{ asset('gifs/thatsall.gif') }}" alt="no content" width="20%">
            <font color="#5a38fc">Keep Learning</font>
        </div>
    </div>
</div>
