<x-app-layout>
    <div class="filters flex space-x-6">
        <div class="w-1/3">
            <select name="category" id="category" class="w-full rounded-xl border-none px-6 py-2">
                <option value="Category One">Category One</option>
                <option value="Category Two">Category Two</option>
                <option value="Category Three">Category Three</option>
                <option value="Category Four">Category Four</option>
            </select>
        </div>
        <div class="w-1/3">
            <select name="otherfilters" id="otherfilters" class="w-full rounded-xl border-none px-6 py-2">
                <option value="Filters One">Filters One</option>
                <option value="Filters Two">Filters Two</option>
                <option value="Filters Three">Filters Three</option>
                <option value="Filters Four">Filters Four</option>
            </select>
        </div>
        <div class="w-2/3 relative">
            <input type="search" name="" id="" placeholder="Find an idea"
                class="w-full rounded-xl placeholder-text-gray-900 bg-white border-none px-4 py-2 pl-8">
            <div class="absolute top-0 flex items-center h-full ml-2">
                <svg class="w-4 text-gray-700" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                    stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M21 21l-5.197-5.197m0 0A7.5 7.5 0 105.196 5.196a7.5 7.5 0 0010.607 10.607z" />
                </svg>
            </div>
        </div>
    </div>{{-- end filters --}}


    <div class="ideas-container space-y-6 my-6">
        <div class="idea-container hover:shadow-card transition duration-150 ease-in cursor-pointer bg-white rounded-xl flex">
            <div class="border-r border-gray-100 px-5 py-8">
                <div class="text-center">
                    <div class="font-semibold text-2xl">12</div>
                    <div class="text-gray-500">Votes</div>
                </div>

                <div class="mt-8">
                    <button
                        class="w-20 bg-gray-200 font-bold text-xxs border border-gray-200 hover:border-gray-400 transition duration-150 ease-in uppercase rounded-xl px-4 py-4">Vote</button>
                </div>
            </div>
            <div class="flex px-2 py-6">
                <a href="#" class="flex-none">
                    <img src="https://source.unsplash.com/200x200/?face&crop=face&v=1" alt="avatar"
                        class="w-14 h-14 rounded-xl">
                </a>
                <div class="mx-4">
                    <h4 class="text-xl font-semibold">
                        <a href="" class="hover:underline">Lorem ipsum dolor sit amet.</a>
                    </h4>
                    <div class="text-gray-600 mt-3 line-clamp-3">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Harum
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
                                class="relative bg-gray-100 hover:bg-gray-200 rounded-full h-7 transition duration-150 ease-in py-2 px-4">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="16"
                                    fill="currentColor" class="bi bi-three-dots" viewBox="0 0 16 16">
                                    <path style="color: rgba(39, 39, 39, 0.5)"
                                        d="M3 9.5a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3zm5 0a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3zm5 0a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3z" />
                                </svg>
                                <ul class="absolute w-44 text-left font-semibold ml-8 bg-white shadow-dialog rounded-xl py-3">
                                    <li><a href="#" class="hover:bg-gray-100 px-5 py-3 transition block duration-150 ease-in">Mark as Spam</a></li>
                                    <li><a href="#" class="hover:bg-gray-100 px-5 py-3 transition block duration-150 ease-in">Delete Post</a></li>
                                </ul>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>{{-- Idea Container --}}
        <div class="idea-container hover:shadow-card transition duration-150 ease-in cursor-pointer bg-white rounded-xl flex">
            <div class="border-r border-gray-100 px-5 py-8">
                <div class="text-center">
                    <div class="font-semibold text-2xl text-blue">66</div>
                    <div class="text-gray-500">Votes</div>
                </div>

                <div class="mt-8">
                    <button
                        class="w-20  bg-blue font-bold text-xxs text-gray-50 border border-gray-200 hover:border-gray-400 transition duration-150 ease-in uppercase rounded-xl px-4 py-4">Voted</button>
                </div>
            </div>
            <div class="flex px-2 py-6">
                <a href="#" class="flex-none">
                    <img src="https://source.unsplash.com/200x200/?face&crop=face&v=1" alt="avatar"
                        class="w-14 h-14 rounded-xl">
                </a>
                <div class="mx-4">
                    <h4 class="text-xl font-semibold">
                        <a href="" class="hover:underline">Lorem ipsum dolor sit amet consectetur.</a>
                    </h4>
                    <div class="text-gray-600 mt-3 line-clamp-3">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Harum
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
                            <div>10 hours ago</div>
                            <div>&bull;</div>
                            <div>Category 1</div>
                            <div>&bull;</div>
                            <div class="text-gray-900">3 Comments</div>
                            <div>&bull;</div>
                        </div>
                        <div class="flex items-center space-x-2">
                            <div
                                class="bg-yellow text-xxs font-bold uppercase leading-none rounded-full text-center text-gray-50 w-28 h-7 py-2 px-4 hover:bg-gray-300 transition duration-150 ease-in">
                                In progress</div>
                            <button
                                class="relative bg-gray-100 hover:bg-gray-200 rounded-full h-7 transition duration-150 ease-in py-2 px-4">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="16"
                                    fill="currentColor" class="bi bi-three-dots" viewBox="0 0 16 16">
                                    <path style="color: rgba(39, 39, 39, 0.5)"
                                        d="M3 9.5a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3zm5 0a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3zm5 0a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3z" />
                                </svg>
                                <ul class="absolute w-44 text-left font-semibold ml-8 bg-white shadow-dialog rounded-xl py-3 hidden">
                                    <li><a href="#" class="hover:bg-gray-100 px-5 py-3 transition block duration-150 ease-in">Mark as Spam</a></li>
                                    <li><a href="#" class="hover:bg-gray-100 px-5 py-3 transition block duration-150 ease-in">Delete Post</a></li>
                                </ul>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>{{-- Idea Container --}}
        <div class="idea-container hover:shadow-card transition duration-150 ease-in cursor-pointer bg-white rounded-xl flex">
            <div class="border-r border-gray-100 px-5 py-8">
                <div class="text-center">
                    <div class="font-semibold text-2xl">33</div>
                    <div class="text-gray-500">Votes</div>
                </div>

                <div class="mt-8">
                    <button
                        class="w-20 bg-gray-200 font-bold text-xxs border border-gray-200 hover:border-gray-400 transition duration-150 ease-in uppercase rounded-xl px-4 py-4">Vote</button>
                </div>
            </div>
            <div class="flex px-2 py-6">
                <a href="#" class="flex-none">
                    <img src="https://source.unsplash.com/200x200/?face&crop=face&v=1" alt="avatar"
                        class="w-14 h-14 rounded-xl">
                </a>
                <div class="mx-4">
                    <h4 class="text-xl font-semibold">
                        <a href="" class="hover:underline">Lorem ipsum dolor sit amet.</a>
                    </h4>
                    <div class="text-gray-600 mt-3 line-clamp-3">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Harum
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
                            <div>10 hours ago</div>
                            <div>&bull;</div>
                            <div>Category 1</div>
                            <div>&bull;</div>
                            <div class="text-gray-900">3 Comments</div>
                            <div>&bull;</div>
                        </div>
                        <div class="flex items-center space-x-2">
                            <div
                                class="bg-red text-gray-50 text-xxs font-bold uppercase leading-none rounded-full text-center w-28 h-7 py-2 px-4 hover:bg-gray-300 transition duration-150 ease-in">
                                Closed</div>
                            <button
                                class="relative bg-gray-100 hover:bg-gray-200 rounded-full h-7 transition duration-150 ease-in py-2 px-4">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="16"
                                    fill="currentColor" class="bi bi-three-dots" viewBox="0 0 16 16">
                                    <path style="color: rgba(39, 39, 39, 0.5)"
                                        d="M3 9.5a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3zm5 0a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3zm5 0a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3z" />
                                </svg>
                                <ul class="absolute w-44 text-left font-semibold ml-8 bg-white shadow-dialog rounded-xl py-3 hidden">
                                    <li><a href="#" class="hover:bg-gray-100 px-5 py-3 transition block duration-150 ease-in">Mark as Spam</a></li>
                                    <li><a href="#" class="hover:bg-gray-100 px-5 py-3 transition block duration-150 ease-in">Delete Post</a></li>
                                </ul>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>{{-- Idea Container --}}
        <div class="idea-container hover:shadow-card transition duration-150 ease-in cursor-pointer bg-white rounded-xl flex">
            <div class="border-r border-gray-100 px-5 py-8">
                <div class="text-center">
                    <div class="font-semibold text-2xl">22</div>
                    <div class="text-gray-500">Votes</div>
                </div>

                <div class="mt-8">
                    <button
                        class="w-20 bg-gray-200 font-bold text-xxs border border-gray-200 hover:border-gray-400 transition duration-150 ease-in uppercase rounded-xl px-4 py-4">Vote</button>
                </div>
            </div>
            <div class="flex px-2 py-6">
                <a href="#" class="flex-none">
                    <img src="https://source.unsplash.com/200x200/?face&crop=face&v=1" alt="avatar"
                        class="w-14 h-14 rounded-xl">
                </a>
                <div class="mx-4">
                    <h4 class="text-xl font-semibold">
                        <a href="" class="hover:underline">Lorem ipsum dolor sit amet.</a>
                    </h4>
                    <div class="text-gray-600 mt-3 line-clamp-3">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Harum
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
                            <div>10 hours ago</div>
                            <div>&bull;</div>
                            <div>Category 1</div>
                            <div>&bull;</div>
                            <div class="text-gray-900">3 Comments</div>
                            <div>&bull;</div>
                        </div>
                        <div class="flex items-center space-x-2">
                            <div
                                class="bg-green text-gray-50 text-xxs font-bold uppercase leading-none rounded-full text-center w-28 h-7 py-2 px-4 hover:bg-gray-300 transition duration-150 ease-in">
                                Implemented</div>
                            <button
                                class="relative bg-gray-100 hover:bg-gray-200 rounded-full h-7 transition duration-150 ease-in py-2 px-4">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="16"
                                    fill="currentColor" class="bi bi-three-dots" viewBox="0 0 16 16">
                                    <path style="color: rgba(39, 39, 39, 0.5)"
                                        d="M3 9.5a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3zm5 0a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3zm5 0a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3z" />
                                </svg>
                                <ul class="absolute w-44 text-left font-semibold ml-8 bg-white shadow-dialog rounded-xl py-3 hidden">
                                    <li><a href="#" class="hover:bg-gray-100 px-5 py-3 transition block duration-150 ease-in">Mark as Spam</a></li>
                                    <li><a href="#" class="hover:bg-gray-100 px-5 py-3 transition block duration-150 ease-in">Delete Post</a></li>
                                </ul>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>{{-- Idea Container --}}
        <div class="idea-container hover:shadow-card transition duration-150 ease-in cursor-pointer bg-white rounded-xl flex">
            <div class="border-r border-gray-100 px-5 py-8">
                <div class="text-center">
                    <div class="font-semibold text-2xl">22</div>
                    <div class="text-gray-500">Votes</div>
                </div>

                <div class="mt-8">
                    <button
                        class="w-20 bg-gray-200 font-bold text-xxs border border-gray-200 hover:border-gray-400 transition duration-150 ease-in uppercase rounded-xl px-4 py-4">Vote</button>
                </div>
            </div>
            <div class="flex px-2 py-6">
                <a href="#" class="flex-none">
                    <img src="https://source.unsplash.com/200x200/?face&crop=face&v=1" alt="avatar"
                        class="w-14 h-14 rounded-xl">
                </a>
                <div class="mx-4">
                    <h4 class="text-xl font-semibold">
                        <a href="" class="hover:underline">Lorem ipsum dolor sit amet.</a>
                    </h4>
                    <div class="text-gray-600 mt-3 line-clamp-3">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Harum
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
                            <div>10 hours ago</div>
                            <div>&bull;</div>
                            <div>Category 1</div>
                            <div>&bull;</div>
                            <div class="text-gray-900">3 Comments</div>
                            <div>&bull;</div>
                        </div>
                        <div class="flex items-center space-x-2">
                            <div
                                class="bg-purple text-gray-50 text-xxs font-bold uppercase leading-none rounded-full text-center w-28 h-7 py-2 px-4 hover:bg-gray-300 transition duration-150 ease-in">
                                Considering</div>
                            <button
                                class="relative bg-gray-100 hover:bg-gray-200 rounded-full h-7 transition duration-150 ease-in py-2 px-4">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="16"
                                    fill="currentColor" class="bi bi-three-dots" viewBox="0 0 16 16">
                                    <path style="color: rgba(39, 39, 39, 0.5)"
                                        d="M3 9.5a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3zm5 0a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3zm5 0a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3z" />
                                </svg>
                                <ul class="absolute w-44 text-left font-semibold ml-8 bg-white shadow-dialog rounded-xl py-3 hidden">
                                    <li><a href="#" class="hover:bg-gray-100 px-5 py-3 transition block duration-150 ease-in">Mark as Spam</a></li>
                                    <li><a href="#" class="hover:bg-gray-100 px-5 py-3 transition block duration-150 ease-in">Delete Post</a></li>
                                </ul>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>{{-- Idea Container --}}
    </div>{{-- Ideas Container --}}
</x-app-layout>
