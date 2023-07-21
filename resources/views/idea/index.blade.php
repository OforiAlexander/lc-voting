<x-app-layout>
    <div class="filters flex flex-col md:flex-row space-y-3 md:space-y-0 md:space-x-6">
        <div class="w-full md:w-1/3">
            <select name="category" id="category" class="w-full rounded-xl border-none px-6 py-2">
                <option value="Category One">Category One</option>
                <option value="Category Two">Category Two</option>
                <option value="Category Three">Category Three</option>
                <option value="Category Four">Category Four</option>
            </select>
        </div>
        <div class="w-full md:w-1/3">
            <select name="otherfilters" id="otherfilters" class="w-full rounded-xl border-none px-6 py-2">
                <option value="Filters One">Filters One</option>
                <option value="Filters Two">Filters Two</option>
                <option value="Filters Three">Filters Three</option>
                <option value="Filters Four">Filters Four</option>
            </select>
        </div>
        <div class="w-full md:w-2/3 relative">
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
        @foreach ($ideas as $idea)
        <div
            class="idea-container hover:shadow-card transition duration-150 ease-in cursor-pointer bg-white rounded-xl flex">
            <div class="hidden md:block border-r border-gray-100 px-5 py-8">
                <div class="text-center">
                    <div class="font-semibold text-2xl">12</div>
                    <div class="text-gray-500">Votes</div>
                </div>

                <div class="mt-8">
                    <button
                        class="w-20 bg-gray-200 font-bold text-xxs border border-gray-200 hover:border-gray-400 transition duration-150 ease-in uppercase rounded-xl px-4 py-4">Vote</button>
                </div>
            </div>
            <div class="flex flex-1 flex-col md:flex-row px-2 py-6">
                <div class="flex-none mx-2 md:mx-0">
                    <a href="#">
                        <img src="https://source.unsplash.com/200x200/?face&crop=face&v=1" alt="avatar"
                            class="w-14 h-14 rounded-xl">
                    </a>
                </div>
                <div class="w-full flex flex-col justify-between mx-4">
                    <h4 class="text-xl font-semibold mt-2 md:mt-0">
                        <a href="{{ route("idea.show", $idea) }}" class="hover:underline">{{ $idea->title }}</a>
                    </h4>
                    <div class="text-gray-600 mt-3 line-clamp-3">{{ $idea->description }}</div>
                    <div class="flex flex-col md:flex-row md:items-center justify-between mt-6">
                        <div class="flex items-center text-xs font-semibold space-x-2 text-gray-400">
                            <div>{{ $idea->created_at->diffForHumans() }}</div>
                            <div>&bull;</div>
                            <div>Category 1</div>
                            <div>&bull;</div>
                            <div class="text-gray-900">3 Comments</div>
                            <div>&bull;</div>
                        </div>
                        <div class="flex items-center space-x-2 mt-4 md:mt-0" x-data="{ isOpen: false }">
                            <div
                                class="bg-gray-200 text-xxs font-bold uppercase leading-none rounded-full text-center w-28 h-7 py-2 px-4 hover:bg-gray-300 transition duration-150 ease-in">
                                Open</div>
                            <button @click="isOpen = !isOpen"
                                class="relative bg-gray-100 hover:bg-gray-200 rounded-full h-7 transition duration-150 ease-in border py-2 px-4">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="16"
                                    fill="currentColor" class="bi bi-three-dots" viewBox="0 0 16 16">
                                    <path style="color: rgba(39, 39, 39, 0.5)"
                                        d="M3 9.5a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3zm5 0a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3zm5 0a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3z" />
                                </svg>
                                <ul x-cloak x-show.transition.origin.top.left="isOpen" @click.away="isOpen = false"
                                    @keydown.escape.window="isOpen = false"
                                    class="absolute w-44 text-left font-semibold md:ml-8 top-8 md:top-6 right-0 md:left-0 bg-white shadow-dialog rounded-xl py-3">
                                    <li><a href="#"
                                            class="hover:bg-gray-100 px-5 py-3 transition block duration-150 ease-in">Mark
                                            as Spam</a></li>
                                    <li><a href="#"
                                            class="hover:bg-gray-100 px-5 py-3 transition block duration-150 ease-in">Delete
                                            Post</a></li>
                                </ul>
                            </button>
                        </div>
                        <div class="flex items-center md:hidden mt-4 md:mt-0">
                            <div class="bg-gray-100 text-center rounder-xl h-10 px-4 py-2 pr-8">
                                <div class="text-sm font-bold leading-none">12</div>
                                <div class="text-xxs font-semibold leading-none text-gray-400">Votes</div>
                            </div>
                            <button
                                class="w-20  bg-gray-200 font-bold text-xxs border border-gray-200 hover:border-gray-400 transition duration-150 ease-in uppercase rounded-xl px-4 py-3 -mx-5">Vote</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>    
        @endforeach
        
        
        {{--Idea Container --}}
    </div>{{-- Ideas Container --}}

    <div class="my-8">
        {{ $ideas->links() }}
    </div>
</x-app-layout>