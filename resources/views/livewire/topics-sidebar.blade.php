<nav class="hidden relative z-10 h-screen w-1/4 bg-white overflow-x-hidden lg:block">
    <div class="absolute right-0 -mr-4 z-10 w-8 h-40 pointer-events-none" style="background-image: linear-gradient(to bottom, rgba(255, 255, 255, 1), rgba(255, 255, 255, 0))"></div>
    <div id="sidebar" class="relative h-full flex-1 overflow-y-auto">
        <div class="pt-4 pb-8 px-8 bg-white">
            <div class="">
                <!-- If active is in first series, expand all series. Otherwise, only expand the active series -->
                {{-- <div x-data="{
                collapsed: false,
                init() {
                setTimeout(() => {
                    document.getElementById('sidebar').scrollTo({ top: this.$refs.header.offsetTop + 1 });
                }, 200)
            }}" x-init="init">
                    <button x-ref="header" class="w-full flex items-center justify-between py-3 focus:outline-none"
                        @click="collapsed = !collapsed">
                        <h5 class="mb-0 text-base font-semibold text-blue-800">Getting Started</h5>
                        <svg class="w-5 h-5 text-gray-500 transform rotate-180"
                            :class="{ 'transform rotate-180': ! collapsed }" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M19 9l-7 7-7-7">
                            </path>
                        </svg>
                    </button>
                    <ul x-show="! collapsed" class="mt-0 list-none">
                        <li>
                            <a href="/screencasts/installation"
                                class="relative group block mb-1 rounded-full overflow-hidden -mx-1 transition-colors duration-200 hover:bg-gray-100 ">
                                <div class="relative w-full flex justify-start items-center p-1 pr-2">
                                    <span style="width: 1.75rem; height: 1.75rem" class="mr-2 flex items-center justify-center rounded-full flex-shrink-0 transition-colors duration-200 text-indigo-600 bg-indigo-100">
                                        <svg class="w-6 h-6 " stroke-linecap="round" stroke-linejoin="round">
                                            <polygon points="10 8 16 12 10 16 10 8" fill="currentColor"
                                                stroke-width="1" stroke="currentColor"></polygon>
                                        </svg>
                                    </span>
                                    <span class="text-xs font-semibold ">Installation</span>
                                    <span class="text-xs font-bold ml-auto text-gray-500">2:32</span>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="/screencasts/data-binding"
                                class="relative group block mb-1 rounded-full overflow-hidden -mx-1 transition-colors duration-200 hover:bg-gray-100 bg-indigo-500 hover:bg-indigo-500 text-white cursor-default">
                                <div class="relative w-full flex justify-start items-center p-1 pr-2">
                                    <span style="width: 1.75rem; height: 1.75rem" class="mr-2 flex items-center justify-center rounded-full flex-shrink-0 transition-colors duration-200 text-white text-indigo-600 bg-indigo-100">
                                        <svg class="w-5 h-5" viewBox="0 0 24 24" stroke="currentColor"
                                            stroke-width="2" fill="none" stroke-linecap="round"
                                            stroke-linejoin="round">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M5 12h.01M12 12h.01M19 12h.01M6 12a1 1 0 11-2 0 1 1 0 012 0zm7 0a1 1 0 11-2 0 1 1 0 012 0zm7 0a1 1 0 11-2 0 1 1 0 012 0z">
                                            </path>
                                        </svg>
                                    </span>
                                    <span class="text-xs font-semibold text-white">Data Binding</span>
                                    <span class="text-xs font-bold ml-auto text-white">9:11</span>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="/screencasts/actions"
                                class="relative group block mb-1 rounded-full overflow-hidden -mx-1 transition-colors duration-200 hover:bg-gray-100 ">
                                <div class="relative w-full flex justify-start items-center p-1 pr-2">
                                    <span style="width: 1.75rem; height: 1.75rem" class="mr-2 flex items-center justify-center rounded-full flex-shrink-0 transition-colors duration-200 text-indigo-600 bg-indigo-100">
                                        <svg class="w-6 h-6 " stroke-linecap="round" stroke-linejoin="round">
                                            <polygon points="10 8 16 12 10 16 10 8" fill="currentColor"
                                                stroke-width="1" stroke="currentColor"></polygon>
                                        </svg>
                                    </span>
                                    <span class="text-xs font-semibold ">Actions</span>
                                    <span class="text-xs font-bold ml-auto text-gray-500">4:17</span>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="/screencasts/hooks"
                                class="relative group block mb-1 rounded-full overflow-hidden -mx-1 transition-colors duration-200 hover:bg-gray-100 ">
                                <div class="relative w-full flex justify-start items-center p-1 pr-2">
                                    <span style="width: 1.75rem; height: 1.75rem" class="mr-2 flex items-center justify-center rounded-full flex-shrink-0 transition-colors duration-200 text-indigo-600 bg-indigo-100">

                                        <svg class="w-6 h-6 " stroke-linecap="round" stroke-linejoin="round">
                                            <polygon points="10 8 16 12 10 16 10 8" fill="currentColor"
                                                stroke-width="1" stroke="currentColor"></polygon>
                                        </svg>
                                    </span>
                                    <span class="text-xs font-semibold ">Lifecycle Hooks</span>
                                    <span class="text-xs font-bold ml-auto text-gray-500">4:43</span>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="/screencasts/nesting"
                                class="relative group block mb-1 rounded-full overflow-hidden -mx-1 transition-colors duration-200 hover:bg-gray-100 ">
                                <div class="relative w-full flex justify-start items-center p-1 pr-2">
                                    <span style="width: 1.75rem; height: 1.75rem" class="mr-2 flex items-center justify-center rounded-full flex-shrink-0 transition-colors duration-200

                             text-indigo-600 bg-indigo-100
                        ">

                                        <svg class="w-6 h-6 " stroke-linecap="round" stroke-linejoin="round">
                                            <polygon points="10 8 16 12 10 16 10 8" fill="currentColor"
                                                stroke-width="1" stroke="currentColor"></polygon>
                                        </svg>
                                    </span>
                                    <span class="text-xs font-semibold ">Nesting</span>
                                    <span class="text-xs font-bold ml-auto text-gray-500">11:28</span>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="/screencasts/events"
                                class="relative group block mb-1 rounded-full overflow-hidden -mx-1 transition-colors duration-200 hover:bg-gray-100 ">
                                <div class="relative w-full flex justify-start items-center p-1 pr-2">
                                    <span style="width: 1.75rem; height: 1.75rem" class="mr-2 flex items-center justify-center rounded-full flex-shrink-0 transition-colors duration-200

                             text-indigo-600 bg-indigo-100
                        ">

                                        <svg class="w-6 h-6 " stroke-linecap="round" stroke-linejoin="round">
                                            <polygon points="10 8 16 12 10 16 10 8" fill="currentColor"
                                                stroke-width="1" stroke="currentColor"></polygon>
                                        </svg>
                                    </span>
                                    <span class="text-xs font-semibold ">Events</span>
                                    <span class="text-xs font-bold ml-auto text-gray-500">9:44</span>
                                </div>
                            </a>
                        </li>
                    </ul>
                </div> --}}
                <!-- If active is in first series, expand all series. Otherwise, only expand the active series -->
                <div x-data="{
        collapsed: false,
        init() {
                            }
    }" x-init="init">
                    <button x-ref="header" class="w-full flex items-center justify-between py-3 focus:outline-none"
                        @click="collapsed = !collapsed">
                        <h5 class="mb-0 text-base font-semibold text-blue-800 mr-3">A Basic Form With Validation</h5>
                        <svg class="w-5 h-5 text-gray-500 transform rotate-180"
                            :class="{ 'transform rotate-180': ! collapsed }" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M19 9l-7 7-7-7">
                            </path>
                        </svg>
                    </button>
                    <ul x-show="! collapsed" class="mt-0 list-none">
                        <li>
                            <a href="/screencasts/s1-introduction"
                                class="relative group block mb-1 rounded-full overflow-hidden -mx-1 transition-colors duration-200 hover:bg-gray-100 ">
                                <div class="relative w-full flex justify-start items-center p-1 pr-2">
                                    <span style="width: 1.75rem; height: 1.75rem" class="mr-2 flex items-center justify-center rounded-full flex-shrink-0 transition-colors duration-200

                             text-indigo-600 bg-indigo-100
                        ">

                                        <svg class="w-6 h-6 " stroke-linecap="round" stroke-linejoin="round">
                                            <polygon points="10 8 16 12 10 16 10 8" fill="currentColor"
                                                stroke-width="1" stroke="currentColor"></polygon>
                                        </svg>
                                    </span>
                                    <span class="text-xs font-semibold ">Introduction</span>
                                    <span class="text-xs font-bold ml-auto text-gray-500">1:47</span>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="/screencasts/s1-setting-up-the-component"
                                class="relative group block mb-1 rounded-full overflow-hidden -mx-1 transition-colors duration-200 hover:bg-gray-100 ">
                                <div class="relative w-full flex justify-start items-center p-1 pr-2">
                                    <span style="width: 1.75rem; height: 1.75rem" class="mr-2 flex items-center justify-center rounded-full flex-shrink-0 transition-colors duration-200

                             text-indigo-600 bg-indigo-100
                        ">

                                        <svg class="w-6 h-6 " stroke-linecap="round" stroke-linejoin="round">
                                            <polygon points="10 8 16 12 10 16 10 8" fill="currentColor"
                                                stroke-width="1" stroke="currentColor"></polygon>
                                        </svg>
                                    </span>
                                    <span class="text-xs font-semibold ">Setting Up The Component</span>
                                    <span class="text-xs font-bold ml-auto text-gray-500">6:43</span>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="/screencasts/s1-setting-up-the-form"
                                class="relative group block mb-1 rounded-full overflow-hidden -mx-1 transition-colors duration-200 hover:bg-gray-100 ">
                                <div class="relative w-full flex justify-start items-center p-1 pr-2">
                                    <span style="width: 1.75rem; height: 1.75rem" class="mr-2 flex items-center justify-center rounded-full flex-shrink-0 transition-colors duration-200

                             text-indigo-600 bg-indigo-100
                        ">

                                        <svg class="w-6 h-6 " stroke-linecap="round" stroke-linejoin="round">
                                            <polygon points="10 8 16 12 10 16 10 8" fill="currentColor"
                                                stroke-width="1" stroke="currentColor"></polygon>
                                        </svg>
                                    </span>
                                    <span class="text-xs font-semibold ">Setting Up The Form</span>
                                    <span class="text-xs font-bold ml-auto text-gray-500">8:47</span>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="/screencasts/s1-adding-validation"
                                class="relative group block mb-1 rounded-full overflow-hidden -mx-1 transition-colors duration-200 hover:bg-gray-100 ">
                                <div class="relative w-full flex justify-start items-center p-1 pr-2">
                                    <span style="width: 1.75rem; height: 1.75rem" class="mr-2 flex items-center justify-center rounded-full flex-shrink-0 transition-colors duration-200

                             text-indigo-600 bg-indigo-100
                        ">

                                        <svg class="w-6 h-6 " stroke-linecap="round" stroke-linejoin="round">
                                            <polygon points="10 8 16 12 10 16 10 8" fill="currentColor"
                                                stroke-width="1" stroke="currentColor"></polygon>
                                        </svg>
                                    </span>
                                    <span class="text-xs font-semibold ">Adding Validation</span>
                                    <span class="text-xs font-bold ml-auto text-gray-500">7:18</span>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="/screencasts/s1-writing-tests"
                                class="relative group block mb-1 rounded-full overflow-hidden -mx-1 transition-colors duration-200 hover:bg-gray-100 ">
                                <div class="relative w-full flex justify-start items-center p-1 pr-2">
                                    <span style="width: 1.75rem; height: 1.75rem" class="mr-2 flex items-center justify-center rounded-full flex-shrink-0 transition-colors duration-200

                             text-indigo-600 bg-indigo-100
                        ">

                                        <svg class="w-6 h-6 " stroke-linecap="round" stroke-linejoin="round">
                                            <polygon points="10 8 16 12 10 16 10 8" fill="currentColor"
                                                stroke-width="1" stroke="currentColor"></polygon>
                                        </svg>
                                    </span>
                                    <span class="text-xs font-semibold ">Writing Tests</span>
                                    <span class="text-xs font-bold ml-auto text-gray-500">14:51</span>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="/screencasts/s1-real-time-validation"
                                class="relative group block mb-1 rounded-full overflow-hidden -mx-1 transition-colors duration-200 hover:bg-gray-100 ">
                                <div class="relative w-full flex justify-start items-center p-1 pr-2">
                                    <span style="width: 1.75rem; height: 1.75rem" class="mr-2 flex items-center justify-center rounded-full flex-shrink-0 transition-colors duration-200

                             text-indigo-600 bg-indigo-100
                        ">

                                        <svg class="w-6 h-6 " stroke-linecap="round" stroke-linejoin="round">
                                            <polygon points="10 8 16 12 10 16 10 8" fill="currentColor"
                                                stroke-width="1" stroke="currentColor"></polygon>
                                        </svg>
                                    </span>
                                    <span class="text-xs font-semibold ">Real-Time Validation (TDD)</span>
                                    <span class="text-xs font-bold ml-auto text-gray-500">7:02</span>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="/screencasts/s1-styling"
                                class="relative group block mb-1 rounded-full overflow-hidden -mx-1 transition-colors duration-200 hover:bg-gray-100 ">
                                <div class="relative w-full flex justify-start items-center p-1 pr-2">
                                    <span style="width: 1.75rem; height: 1.75rem" class="mr-2 flex items-center justify-center rounded-full flex-shrink-0 transition-colors duration-200

                             text-indigo-600 bg-indigo-100
                        ">

                                        <svg class="w-6 h-6 " stroke-linecap="round" stroke-linejoin="round">
                                            <polygon points="10 8 16 12 10 16 10 8" fill="currentColor"
                                                stroke-width="1" stroke="currentColor"></polygon>
                                        </svg>
                                    </span>
                                    <span class="text-xs font-semibold ">Styling With Tailwind UI</span>
                                    <span class="text-xs font-bold ml-auto text-gray-500">13:19</span>
                                </div>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</nav>
