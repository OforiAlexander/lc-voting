<x-app-layout>
    <div class="">
        <a href="/" class="flex items-center font-semibold hover:underline">
            <svg fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4">
                <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 19.5L8.25 12l7.5-7.5" />
            </svg>

            <span class="ml-2">All Ideas</span>
        </a>
    </div>{{-- link to index --}}

    <div class="idea-container bg-white rounded-xl flex mt-4">
        <div class="flex flex-1 px-4 py-6">
            <div class="flex-none">
                <a href="#">
                    <img src="https://source.unsplash.com/200x200/?face&crop=face&v=1" alt="avatar"
                        class="w-14 h-14 rounded-xl">
                </a>
            </div>
            <div class="w-full mx-4">
                <h4 class="text-xl font-semibold">
                    <a href="" class="hover:underline">Lorem ipsum dolor sit amet.</a>
                </h4>
                <div class="text-gray-600 mt-3">Lorem, ipsum dolor sit amet consectetur adipisicing elit.
                    Harum
                    iusto laudantium aperiam sapiente mollitia quod similique nemo quas expedita ab deserunt, quasi
                    fugit voluptatibus sunt adipisci doloremque accusamus aut consequuntur! Explicabo, velit in.
                    Culpa dolores porro et autem ad. Quas illo numquam quam iusto nam corrupti. Temporibus vero
                    molestiae quo modi veritatis repellendus atque expedita! Id, debitis sequi non nostrum nulla cum
                    dolores voluptates unde veritatis est voluptatum molestiae quas perferendis tenetur deleniti
                    aliquid explicabo a quos. Sint enim, labore dolore soluta cupiditate culpa. Fuga esse
                    consequatur eaque. Sint laudantium suscipit ab amet repudiandae sit consectetur enim
                    exercitationem iste molestiae!
                </div>
                <div class="flex items-center justify-between mt-6">
                    <div class="flex items-center text-xs font-semibold space-x-2 text-gray-400">
                        <div class="font-bold text-gray-800">John Doe</div>
                        <div>&bull;</div>
                        <div>10 hours ago</div>
                        <div>&bull;</div>
                        <div>Category 1</div>
                        <div>&bull;</div>
                        <div class="text-gray-900">3 Comments</div>
                        <div>&bull;</div>
                    </div>
                    <div class="flex items-center space-x-2">
                        <div
                            class="bg-gray-200 text-xxs font-bold uppercase leading-none rounded-full text-center w-28 h-7 py-2 px-4 hover:bg-gray-300 transition duration-150 ease-in">
                            Open</div>
                        <button
                            class="relative bg-gray-100 hover:bg-gray-200 rounded-full h-7 transition duration-150 ease-in border py-2 px-4">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="16" fill="currentColor"
                                class="bi bi-three-dots" viewBox="0 0 16 16">
                                <path style="color: rgba(39, 39, 39, 0.5)"
                                    d="M3 9.5a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3zm5 0a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3zm5 0a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3z" />
                            </svg>
                            <ul
                                class="absolute w-44 text-left font-semibold ml-8 bg-white shadow-dialog rounded-xl py-3 hidden">
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
    </div>{{-- End Idea Container --}}

    <div class="buttons-container flex items-center justify-between mt-6">
        <div class="flex items-center space-x-4  ml-6">
            <button type="button"
                class="flex items-center justify-center w-32 h-11 text-xs bg-blue font-semibold rounded-xl border border-blue hover:bg-blue-hover transition duration-150 ease-in px-6 py-3">
                <span class="ml-1 text-white">
                    Reply
                </span>
            </button>
            <button type="button"
                class="flex items-center justify-center h-11 w-36 text-xs bg-gray-200 font-semibold rounded-xl border border-gray-200 hover:border-gray-400 transition duration-150 ease-in px-6 py-3">

                <span>
                    Set Status
                </span>
                <svg fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4 ml-2">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
                </svg>
            </button>
        </div>
        <div class="flex items-center space-x-3">
            <div class="bg-white font-semibold text-center px-3 py-2 rounded-xl">
                <div class="text-xl leading-snug">12</div>
                <div class="text-gray-400 text-xs leading-none">Votes</div>
            </div>
            <button type="button"
                class="h-11 w-32 text-xs bg-gray-200 font-semibold uppercase rounded-xl border border-gray-200 hover:border-gray-400 transition duration-150 ease-in px-6 py-3">

                <span>
                    Vote
                </span>
            </button>
        </div>
    </div>{{-- End Buttons Container --}}

    <div class="comments-container relative space-y-6 ml-22 pt-4 my-8 mt-1">
        <div class="comment-container relative bg-white rounded-xl flex mt-4">
            <div class="flex flex-1 px-4 py-6">
                <div class="flex-none">
                    <a href="#">
                        <img src="https://source.unsplash.com/200x200/?face&crop=face&v=2" alt="avatar"
                            class="w-14 h-14 rounded-xl">
                    </a>
                </div>
                <div class="w-full mx-4">
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
                        <div class="flex items-center space-x-2">

                            <button
                                class="relative bg-gray-100 hover:bg-gray-200 rounded-full h-7 transition duration-150 ease-in border py-2 px-4">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="16"
                                    fill="currentColor" class="bi bi-three-dots" viewBox="0 0 16 16">
                                    <path style="color: rgba(39, 39, 39, 0.5)"
                                        d="M3 9.5a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3zm5 0a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3zm5 0a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3z" />
                                </svg>
                                <ul
                                    class="absolute w-44 text-left font-semibold ml-8 bg-white shadow-dialog rounded-xl py-3 hidden">
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
            <div class="flex flex-1 px-4 py-6">
                <div class="flex-none">
                    <a href="#">
                        <img src="https://source.unsplash.com/200x200/?face&crop=face&v=3" alt="avatar"
                            class="w-14 h-14 rounded-xl">
                    </a>
                    <div class="text-center uppercase text-blue text-xxs font-bold mt-1">Admin</div>
                </div>
                <div class="w-full mx-4">
                    <h4 class="text-xl font-semibold">
                        <a href="#" class="hover:underline">Status Changed to "under contruction"</a>
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
                        <div class="flex items-center space-x-2">

                            <button
                                class="relative bg-gray-100 hover:bg-gray-200 rounded-full h-7 transition duration-150 ease-in border py-2 px-4">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="16"
                                    fill="currentColor" class="bi bi-three-dots" viewBox="0 0 16 16">
                                    <path style="color: rgba(39, 39, 39, 0.5)"
                                        d="M3 9.5a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3zm5 0a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3zm5 0a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3z" />
                                </svg>
                                <ul
                                    class="absolute w-44 text-left font-semibold ml-8 bg-white shadow-dialog rounded-xl py-3 hidden">
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
            <div class="flex flex-1 px-4 py-6">
                <div class="flex-none">
                    <a href="#">
                        <img src="https://source.unsplash.com/200x200/?face&crop=face&v=7" alt="avatar"
                            class="w-14 h-14 rounded-xl">
                    </a>
                </div>
                <div class="w-full mx-4">
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
                        <div class="flex items-center space-x-2">

                            <button
                                class="relative bg-gray-100 hover:bg-gray-200 rounded-full h-7 transition duration-150 ease-in border py-2 px-4">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="16"
                                    fill="currentColor" class="bi bi-three-dots" viewBox="0 0 16 16">
                                    <path style="color: rgba(39, 39, 39, 0.5)"
                                        d="M3 9.5a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3zm5 0a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3zm5 0a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3z" />
                                </svg>
                                <ul
                                    class="absolute w-44 text-left font-semibold ml-8 bg-white shadow-dialog rounded-xl py-3 hidden">
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
