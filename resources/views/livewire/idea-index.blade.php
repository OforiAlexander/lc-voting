<div x-data
    @click="
            clicked = $event.target
             target = clicked.tagName.toLowerCase()
             ignores = ['button', 'svg', 'path', 'a']

             if(! ignores.includes(target)){
                 clicked.closest('.idea-container').querySelector('.idea-link').click()
             }
        "
    class="idea-container hover:shadow-card transition duration-150 ease-in cursor-pointer bg-white rounded-xl flex">
    <div class="hidden md:block border-r border-gray-100 px-5 py-8">
        <div class="text-center">
            <div class="font-semibold text-2xl">{{ $votesCount }}</div>
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
                <img src="{{ $idea->user->getAvatar() }}" alt="avatar" class="w-14 h-14 rounded-xl">
            </a>
        </div>
        <div class="w-full flex flex-col justify-between mx-4">
            <h4 class="text-xl font-semibold mt-2 md:mt-0">
                <a href="{{ route('idea.show', $idea) }}" class="idea-link hover:underline">{{ $idea->title }}</a>
            </h4>
            <div class="text-gray-600 mt-3 line-clamp-3">{{ $idea->description }}</div>
            <div class="flex flex-col md:flex-row md:items-center justify-between mt-6">
                <div class="flex items-center text-xs font-semibold space-x-2 text-gray-400">
                    <div>{{ $idea->created_at->diffForHumans() }}</div>
                    <div>&bull;</div>
                    <div>{{ $idea->category->name }}</div>
                    <div>&bull;</div>
                    <div class="text-gray-900">3 Comments</div>
                    <div>&bull;</div>
                </div>
                <div class="flex items-center space-x-2 mt-4 md:mt-0" x-data="{ isOpen: false }">
                    <div
                        class="{{ $idea->status->classes }} text-xxs font-bold uppercase leading-none rounded-full text-center w-28 h-7 py-2 px-4 hover:bg-gray-300 transition duration-150 ease-in">
                        {{ $idea->status->name }}</div>
                    <button @click="isOpen = !isOpen"
                        class="relative bg-gray-100 hover:bg-gray-200 rounded-full h-7 transition duration-150 ease-in border py-2 px-4">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="16" fill="currentColor"
                            class="bi bi-three-dots" viewBox="0 0 16 16">
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
                        <div class="text-sm font-bold leading-none">{{ $votesCount }}</div>
                        <div class="text-xxs font-semibold leading-none text-gray-400">Votes</div>
                    </div>
                    <button
                        class="w-20  bg-gray-200 font-bold text-xxs border border-gray-200 hover:border-gray-400 transition duration-150 ease-in uppercase rounded-xl px-4 py-3 -mx-5">Vote</button>
                </div>
            </div>
        </div>
    </div>
</div>
