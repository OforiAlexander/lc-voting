<form action="#" method="post" class="space-y-4 px-4 py-6" wire:submit.prevent = "createIdea">
    @csrf
    <div>
        <input type="text"
            class="w-full bg-gray-100 border-none rounded-xl text-sm placeholder-gray-900 px-4 py-2" required
            placeholder="Your idea" wire:model.defer='title'>

            @error('title')
                <div class="text-red py-2 px-4 mt-1">
                    {{ $message }}
                </div>
            @enderror
    </div>
    <div>
        <select name="category_add" id="category_add" wire:model.defer='category' required
            class="w-full rounded-xl bg-gray-100 text-sm border-none px-6 py-2">

            @foreach ($categories as $category)
            <option value="{{ $category->id }}">{{ $category->name }}</option>
            @endforeach
        </select>

        @error('category')
        <div class="text-red py-2 px-4 mt-1">
            {{ $message }}
        </div>
    @enderror
    </div>
    <div class="">
        <textarea name="idea" id="ida" cols="30" rows="4" wire:model.defer='description' required
            class="w-full bg-gray-100 text-sm rounded-xl placeholder-gray-900 texy-sm px-4 py-2 border-none"
            placeholder="Describe your idea"></textarea>

            @error('description')
            <div class="text-red py-2 px-4 mt-1">
                {{ $message }}
            </div>
        @enderror
    </div>
    <div class="flex items-center justify-between space-x-3">
        <button type="button"
            class="flex items-center justify-center w-1/2 h-11 text-sm bg-gray-200 font--semibold rounded-xl border border-gray-200 hover:border-gray-400 transition duration-150 ease-in px-6 py-3">
            <svg class="text-gray-600 w-4 -rotate-45" fill="none" viewBox="0 0 24 24"
                stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                <path stroke-linecap="round" stroke-linejoin="round"
                    d="M18.375 12.739l-7.693 7.693a4.5 4.5 0 01-6.364-6.364l10.94-10.94A3 3 0 1119.5 7.372L8.552 18.32m.009-.01l-.01.01m5.699-9.941l-7.81 7.81a1.5 1.5 0 002.112 2.13" />
            </svg>
            <span class="ml-1">
                Attach
            </span>
        </button>
        <button type="submit"
            class="flex items-center justify-center w-1/2 h-11 text-sm bg-blue font--semibold rounded-xl border border-blue hover:bg-blue-hover transition duration-150 ease-in px-6 py-3">
            <span class="ml-1 text-white">
                Submit
            </span>
        </button>
    </div>

    <div>
        @if (session('success_message'))
            <div 
            x-data="{isVisible: true}"
            x-init="
            setTimeout(()=>{
                isVisible = false
            },5000)
            "
            x-show.transition.duration.1000ms="isVisible"
            class="text-black bg-green py-2 px-4 text-center mt-4">
                {{ session('success_message') }}
            </div>
        @endif
    </div>
</form>
