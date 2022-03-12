<div>
    <form wire:submit.prevent="createIdea" action="#" method="POST" class="space-y-4 px-4 py-6">
        <div>
            <input wire:model.defer="title"
                   type="text"
                   class="w-full bg-gray-100 text-sm rounded-xl border-none placeholder-gray-900 px-4 py-2"
                   placeholder="Your idea">
            @error('title')
            <p class="text-red text-xs mt-1">{{$message}}</p>
            @enderror
        </div>
        <div>
            <select wire:model.defer="category"
                    name="category" id="category_add"
                    class="w-full text-sm rounded-xl bg-gray-100 border-none px-4 py-2">
                @foreach($categories as $category)
                    <option value="{{$category->id}}">{{$category->name}}</option>
                @endforeach
            </select>
            @error('category')
            <p class="text-red text-xs mt-1">{{$message}}</p>
            @enderror
        </div>
        <div>
                    <textarea wire:model.defer="description"
                              name="idea" id="idea" cols="30" rows="4" placeholder="Describe your idea"
                              class="w-full bg-gray-100 text-sm border-none rounded-xl placeholder-gray-900 px-4 py-2">
                    </textarea>
            @error('description')
            <p class="text-red text-xs mt-1">{{$message}}</p>
            @enderror
        </div>

        <div class="flex items-center justify-between space-x-3">
            <button
                type="button"
                class="flex items-center justify-center w-1/2 h-11 text-xs bg-gray-200 font-semibold rounded-xl border border-gray-200 hover:border-gray-400 transition duration-200 ease-in px-6 py-3"
            >
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-500 transform -rotate-45"
                     fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                          d="m15.172 7-6.586 6.586a2 2 0 1 0 2.828 2.828l6.414-6.586a4 4 0 0 0-5.656-5.656l-6.415 6.585a6 6 0 1 0 8.486 8.486L20.5 13"/>
                </svg>
                <span class="ml-2">Attach</span>
            </button>
            <button
                type="submit"
                class="flex items-center justify-center w-1/2 h-11 text-xs text-white bg-blue font-semibold rounded-xl border border-blue hover:bg-blue transition duration-200 ease-in px-6 py-3"
            >
                <span class="ml-2">Submit</span>
            </button>
        </div>

        <div>
            @if(session('success_message'))
                <div x-data="{ isVisible: true }"
                     x-init="setTimeout(() => {isVisible = false}, 4000 ) "
                     x-show.transition.duration.1000ms="isVisible"
                     class="text-green mt-4">
                    {{session('success_message')}}
                </div>
            @endif
        </div>
    </form>
</div>
