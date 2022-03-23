<div
    x-data
    @click="
                target = $event.target.tagName.toLowerCase()
                ignores = ['button','svg','span','a','path']
                if (!ignores.includes(target)){
                     $event.target.closest('.idea-container').querySelector('.idea-link').click()
                }
                "
    class="idea-container hover:shadow-md transition cursor-pointer duration-200 ease-in bg-white rounded-xl flex">
    <div class="hidden md:block border-r border-gray-100 px-5 py-8">
        <div class="flex flex-col text-center">
            <span class="font-semibold text-2xl">{{ $votesCount }}</span>
            <span class="text-gray-500">votes</span>
        </div>
        <div class="mt-8">
            <button
                class="w-20 bg-gray-200 border border-gray-200 hover:bg-gray-400 transition duration-200 ease-in  font-bold uppercase text-xs rounded-xl px-4 py-3">
                Vote
            </button>
        </div>
    </div>

    <div class="flex flex-col md:flex-row flex-1 px-2 py-6">

        <div class="flex-none mx-2 md:mx-4 md:mx-0">
            <a href="">
                <img class="w-10 h-10 rounded-xl"
                     src="{{$idea->user->getAvatar()}}"
                     alt="avatar"></a>
        </div>
        <div class="w-full mx-2 md:mx-4">
            <h4 class="text-xl font-semibold">
                <a href="{{route('idea.show',[$idea->slug])}}"
                   class="idea-link hover:underline">{{$idea->title}}</a>
            </h4>
            <div class="text-gray-600 mt-3 line-clamp-3">
                {{$idea->description}}
            </div>
            <div class="flex flex-col md:flex-row md:items-center justify-between mt-6">
                <div class="flex items-center text-xs font-semibold space-x-2 text-gray-400">
                    <span>{{$idea->created_at->diffForHumans()}}</span>
                    <div>&bull;</div>
                    <span>{{$idea->category->name}}</span>
                    <div>&bull;</div>
                    <span class="text-gray-900">3 Comments</span>
                </div>
                <div
                    x-data="{ isOpen: false }"
                    class="flex items-center mt-4 md:mt-0 space-x-2">
                    <button
                        class="{{$idea->getStatusClasses()}} text-xs font-bold uppercase leading-none rounded-full text-center w-28 h-7 py-2 px-4">
                        {{$idea->status->name}}
                    </button>
                    <button
                        @click="isOpen = !isOpen"
                        class=" relative bg-gray-100 hover:bg-gray-200 rounded-full h-7 transition duration-200 ease-in py-2 px-4">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none"
                             viewBox="0 0 24 24"
                             stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                  d="M5 12h.01M12 12h.01M19 12h.01M6 12a1 1 0 1 1-2 0 1 1 0 0 1 2 0zm7 0a1 1 0 1 1-2 0 1 1 0 0 1 2 0zm7 0a1 1 0 1 1-2 0 1 1 0 0 1 2 0z"/>
                        </svg>
                        <ul x-cloak
                            x-show="isOpen"
                            x-show.transition.origin.top.left.duration.200ms="isOpen"
                            @click.away="isOpen = false"
                            @keydown.escape.window="isOpen = false"
                            class="absolute text-left w-44 font-semibold bg-white shadow-lg rounded-xl md:ml-8 top-8 md:tp-6 right-0 md:left-0">
                            <li><a href=""
                                   class="hover:bg-gray-100 px-6 py-3 block transition duration-200 ease-in">
                                    Mark as Spam</a></li>
                            <li><a href=""
                                   class="hover:bg-gray-100 px-6 py-3 block transition duration-200 ease-in">
                                    Delete Post</a></li>
                        </ul>
                    </button>
                </div>
                <div class="flex items-center md:hidden mt-4 md:mt-0">
                    <div class="bg-gray-100 text-center rounded-xl h-10 px-4 py-2 pr-8">
                                    <span class="text-sm font-bold leading-none">
                                       {{$votesCount}}
                                    </span>
                        <span class="text-xs font-semibold leading-none text-gray-400">
                                        Votes
                                    </span>
                    </div>
                    <button
                        class="w-20 bg-gray-200 border border-gray-200 font-bold text-xs uppercase rounded-xl hover:border-gray-400 transition duration-200 ease-in px-4 py-3 -mx-6">
                        vote
                    </button>
                </div>

            </div>
        </div>
    </div>
</div>
