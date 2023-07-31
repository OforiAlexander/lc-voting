<x-app-layout>
    <div class="">
        <a href="/" class="flex items-center font-semibold hover:underline">
            <svg fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4">
                <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 19.5L8.25 12l7.5-7.5" />
            </svg>

            <span class="ml-2">All Ideas</span>
        </a>
    </div>{{-- link to index --}}

    <livewire:idea-show 
    :idea="$idea" 
    :votesCount="$votesCount"
    />

    <div class="comments-container relative space-y-6 md:ml-22 pt-4 my-8 mt-1">
        <div class="comment-container relative bg-white rounded-xl flex mt-4">
            <div class="flex flex-col md:flex-row flex-1 px-4 py-6">
                <div class="flex-none">
                    <a href="#">
                        <img src="https://source.unsplash.com/200x200/?face&crop=face&v=11" alt="avatar"
                            class="w-14 h-14 rounded-xl">
                    </a>
                </div>
                <div class="w-full md:mx-4">
                    {{-- <h4 class="text-xl font-semibold">
                        <a href="" class="hover:underline">Lorem ipsum dolor sit amet.</a>
                    </h4> --}}
                    <div class="text-gray-600 mt-3 line-clamp-3">Lorem, ipsum dolor sit amet consectetur adipisicing
                        elit.
                        Harum
                        iusto laudantium aperiam sapiente mollitia quod similique nemo quas expedita ab deserunt, quasi
                        fugit voluptatibus sunt adipisci doloremque accusamus aut consequuntur! Explicabo, velit in.
                        Culpa dolores porro et autem ad. Quas illo numquam quam iusto nam corrupti. Temporibus vero
                    </div>
                    <div class="flex items-center justify-between mt-6">
                        <div class="flex items-center text-xs font-semibold space-x-2 text-gray-400">
                            <div class="font-bold text-gray-900">John Doe</div>
                            <div>&bull;</div>
                            <div>10 hours ago</div>
                            <div>&bull;</div>

                        </div>
                        <div x-data="{ isOpen: false }" class="flex items-center space-x-2">

                            <button @click="isOpen= !isOpen"
                                class="relative bg-gray-100 hover:bg-gray-200 rounded-full h-7 transition duration-150 ease-in border py-2 px-4">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="16"
                                    fill="currentColor" class="bi bi-three-dots" viewBox="0 0 16 16">
                                    <path style="color: rgba(39, 39, 39, 0.5)"
                                        d="M3 9.5a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3zm5 0a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3zm5 0a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3z" />
                                </svg>
                                <ul x-cloak x-show.transition.origin.top.left="isOpen" @click.away="isOpen = false"
                                    @keydown.escape.window="isOpen = false"
                                    class="absolute w-44 text-left font-semibold md:ml-8 top-8 md:top-6 right-0 md:left-0 z-10 bg-white shadow-dialog rounded-xl py-3">
                                    <li><a href="#"
                                            class="hover:bg-gray-100 px-5 py-3 transition block duration-150 ease-in">Mark
                                            as Spam</a></li>
                                    <li><a href="#"
                                            class="hover:bg-gray-100 px-5 py-3 transition block duration-150 ease-in">Delete
                                            Post</a></li>
                                </ul>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="is-admin comment-container relative bg-white rounded-xl flex mt-4">
            <div class="flex flex-col md:flex-row flex-1 px-4 py-6">
                <div class="flex-none">
                    <a href="#">
                        <img src="https://source.unsplash.com/200x200/?face&crop=face&v=3" alt="avatar"
                            class="w-14 h-14 rounded-xl">
                    </a>
                    <div class="md:text-center mx-4 uppercase text-blue text-xxs font-bold mt-1">Admin</div>
                </div>
                <div class="w-full md:mx-4">
                    <h4 class="text-xl font-semibold">
                        <a href="#" class="hover:underline">Status Changed to "Under Consideration"</a>
                    </h4>
                    <div class="text-gray-600 mt-3 line-clamp-3">Lorem, ipsum dolor sit amet consectetur adipisicing
                        elit.
                        Harum
                        iusto laudantium aperiam sapiente mollitia quod similique nemo quas expedita ab deserunt, quasi
                        fugit voluptatibus sunt adipisci doloremque accusamus aut consequuntur! Explicabo, velit in.
                        Culpa dolores porro et autem ad. Quas illo numquam quam iusto nam corrupti. Temporibus vero
                    </div>
                    <div class="flex items-center justify-between mt-6">
                        <div class="flex items-center text-xs font-semibold space-x-2 text-gray-400">
                            <div class="font-bold text-blue">Andrea</div>
                            <div>&bull;</div>
                            <div>10 hours ago</div>
                            <div>&bull;</div>

                        </div>
                        <div x-data="{ isOpen: false }" class="flex items-center space-x-2">

                            <button @click="isOpen= !isOpen"
                                class="relative bg-gray-100 hover:bg-gray-200 rounded-full h-7 transition duration-150 ease-in border py-2 px-4">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="16"
                                    fill="currentColor" class="bi bi-three-dots" viewBox="0 0 16 16">
                                    <path style="color: rgba(39, 39, 39, 0.5)"
                                        d="M3 9.5a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3zm5 0a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3zm5 0a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3z" />
                                </svg>
                                <ul x-cloak x-show.transition.origin.top.left="isOpen" @click.away="isOpen = false"
                                    @keydown.escape.window="isOpen = false"
                                    class="absolute w-44 text-left font-semibold md:ml-8 top-8 md:top-6 right-0 md:left-0 z-10 bg-white shadow-dialog rounded-xl py-3">
                                    <li><a href="#"
                                            class="hover:bg-gray-100 px-5 py-3 transition block duration-150 ease-in">Mark
                                            as Spam</a></li>
                                    <li><a href="#"
                                            class="hover:bg-gray-100 px-5 py-3 transition block duration-150 ease-in">Delete
                                            Post</a></li>
                                </ul>
                            </button>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <div class="comment-container relative bg-white rounded-xl flex mt-4">
            <div class="flex flex-col md:flex-row flex-1 px-4 py-6">
                <div class="flex-none">
                    <a href="#">
                        <img src="https://source.unsplash.com/200x200/?face&crop=face&v=7" alt="avatar"
                            class="w-14 h-14 rounded-xl">
                    </a>
                </div>
                <div class="w-full md:mx-4">
                    {{-- <h4 class="text-xl font-semibold">
                        <a href="" class="hover:underline">Lorem ipsum dolor sit amet.</a>
                    </h4> --}}
                    <div class="text-gray-600 mt-3 line-clamp-3">Lorem, ipsum dolor sit amet consectetur adipisicing
                        elit.
                        Harum
                        iusto laudantium aperiam sapiente mollitia quod similique nemo quas expedita ab deserunt, quasi
                        fugit voluptatibus sunt adipisci doloremque accusamus aut consequuntur! Explicabo, velit in.
                        Culpa dolores porro et autem ad. Quas illo numquam quam iusto nam corrupti. Temporibus vero
                    </div>
                    <div class="flex items-center justify-between mt-6">
                        <div class="flex items-center text-xs font-semibold space-x-2 text-gray-400">
                            <div class="font-bold text-gray-900">John Doe</div>
                            <div>&bull;</div>
                            <div>10 hours ago</div>
                            <div>&bull;</div>

                        </div>
                        <div x-data="{ isOpen: false }" class="flex items-center space-x-2">

                            <button @click="isOpen = !isOpen"
                                class="relative bg-gray-100 hover:bg-gray-200 rounded-full h-7 transition duration-150 ease-in border py-2 px-4">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="16"
                                    fill="currentColor" class="bi bi-three-dots" viewBox="0 0 16 16">
                                    <path style="color: rgba(39, 39, 39, 0.5)"
                                        d="M3 9.5a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3zm5 0a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3zm5 0a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3z" />
                                </svg>
                                <ul x-cloak x-show.transition.origin.top.left="isOpen" @click.away="isOpen = false"
                                    @keydown.escape.window="isOpen = false"
                                    class="absolute w-44 text-left font-semibold md:ml-8 top-8 md:top-6 right-0 md:left-0 z-10 bg-white shadow-dialog rounded-xl py-3">
                                    <li><a href="#"
                                            class="hover:bg-gray-100 px-5 py-3 transition block duration-150 ease-in">Mark
                                            as Spam</a></li>
                                    <li><a href="#"
                                            class="hover:bg-gray-100 px-5 py-3 transition block duration-150 ease-in">Delete
                                            Post</a></li>
                                </ul>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>{{-- End of comment container --}}
    </div>{{-- End Comments Section --}}
</x-app-layout>
