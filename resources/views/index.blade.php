<x-app-layout>
    <div class="filters flex space-x-6">
        <div class="w-1/3">
            <select name="category" id="category" class="w-full rounded-xl border-none px-4 py-2">
                <option value="Category One">Category One</option>
                <option value="Category One">Category Two</option>
                <option value="Category One">Category Three</option>
                <option value="Category One">Category Four</option>
            </select>
        </div>
        <div class="w-1/3">
            <select name="other_filters" id="category" class="w-full rounded-xl border-none px-4 py-2">
                <option value="Filter One">Filter One</option>
                <option value="Filter Two">Filter Two</option>
                <option value="Filter Three">Filter Three</option>
                <option value="Filter Four">Filter Four</option>
            </select>
        </div>
        <div class="w-2/3 relative">
            <input type="search" placeholder="Find an idea"
                   class="w-full rounded-xl bg-white border-none placeholder-gray-900  px-4 py-2 pl-8">
            <div class="absolute top-0 flex items-center h-full ml-2">
                <svg xmlns="http://www.w3.org/2000/svg" class="w-4 text-gray-700"
                     fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                          d="m21 21-6-6m2-5a7 7 0 1 1-14 0 7 7 0 0 1 14 0z"/>
                </svg>
            </div>
        </div>
    </div>
    {{--    start ideas container--}}
    <div class="ideas-container space-y-6 my-6">
        <div
            class="idea-container hover:shadow-md transition cursor-pointer duration-200 ease-in bg-white rounded-xl flex">
            <div class="border-r border-gray-100 px-5 py-8">
                <div class="text-center">
                    <div class="font-semibold text-2xl">12</div>
                    <div class="text-gray-500">votes</div>
                </div>
                <div class="mt-8">
                    <button
                        class="w-20 bg-gray-200 border border-gray-200 hover:bg-gray-400 transition duration-200 ease-in  font-bold uppercase text-xs rounded-xl px-4 py-3">
                        Vote
                    </button>
                </div>
            </div>

            <div class="flex flex-1 px-2 py-6">

                <div class="flex-none">
                    <a href="">
                        <img class="w-10 h-10 rounded-xl" src="https://source.unsplash.com/150x150/?face&crop=face&v1"
                             alt="avatar"></a>
                </div>
                <div class="w-full mx-4">
                    <h4 class="text-xl font-semibold">
                        <a href="" class="hover:underline">A random title can go here</a>
                    </h4>
                    <div class="text-gray-600 mt-3 line-clamp-3">
                        Lorem mpore veritatis!
                    </div>
                    <div class="flex items-center justify-between mt-6">
                        <div class="flex items-center text-xs font-semibold space-x-2 text-gray-400">
                            <div>10hrs ago</div>
                            <div>&bull;</div>
                            <div>Category One</div>
                            <div>&bull;</div>
                            <div class="text-gray-900">3 Comments</div>
                        </div>
                        <div
                            x-data = "{ isOpen: false }"
                            class="flex items-center space-x-2">
                            <div
                                class="bg-gray-200 text-xs font-bold uppercase leading-none rounded-full text-center w-28 h-7 py-2 px-4">
                                open
                            </div>
                            <button
                                @click ="isOpen = !isOpen"
                                class=" relative bg-gray-100 hover:bg-gray-200 rounded-full h-7 transition duration-200 ease-in py-2 px-4">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                                     stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                          d="M5 12h.01M12 12h.01M19 12h.01M6 12a1 1 0 1 1-2 0 1 1 0 0 1 2 0zm7 0a1 1 0 1 1-2 0 1 1 0 0 1 2 0zm7 0a1 1 0 1 1-2 0 1 1 0 0 1 2 0z"/>
                                </svg>
                                <ul x-cloak
                                    x-show = "isOpen"
                                    x-show.transition.origin.top.left.duration.200ms="isOpen"
                                    @click.away ="isOpen = false"
                                    @keydown.escape.window = "isOpen = false"
                                    class="absolute text-left w-44 font-semibold bg-white shadow-lg rounded-xl ml-8">
                                    <li><a href=""
                                           class="hover:bg-gray-100 px-6 py-3 block transition duration-200 ease-in">
                                            Mark as Spam</a></li>
                                    <li><a href=""
                                           class="hover:bg-gray-100 px-6 py-3 block transition duration-200 ease-in">
                                            Delete Post</a></li>
                                </ul>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div
            class="idea-container hover:shadow-md transition cursor-pointer duration-200 ease-in bg-white rounded-xl flex">
            <div class="border-r border-gray-100 px-5 py-8">
                <div class="text-center">
                    <div class="font-semibold text-2xl text-blue">62</div>
                    <div class="text-blue">votes</div>
                </div>
                <div class="mt-8">
                    <button
                        class="w-20 bg-blue border border-gray-200 hover:bg-gray-400 transition duration-200 ease-in  font-bold text-white uppercase text-xs rounded-xl px-4 py-3">
                        Vote
                    </button>
                </div>
            </div>

            <div class="flex flex-1 px-2 py-6">
                <a href="" class="flex-none">
                    <img class="w-10 h-10 rounded-xl" src="https://source.unsplash.com/150x150/?face&crop=face&v1"
                         alt="avatar"></a>
                <div class="w-full mx-4">
                    <h4 class="text-xl font-semibold">
                        <a href="" class="hover:underline">Another random title can go here</a>
                    </h4>
                    <div class="text-gray-600 mt-3 line-clamp-3">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Architecto harum laboriosam quod
                        reiciendis voluptate. Ad aliquid aperiam dolor enim error est explicabo iusto laboriosam laborum
                        nostrum quidem sint, sit totam ut, velit vitae voluptate voluptatem! Accusantium, ad aliquid
                        amet dolorem et ex incidunt laborum, nostrum, nulla odio officiis tempore veritatis!
                    </div>
                    <div class="flex items-center justify-between mt-6">
                        <div class="flex items-center text-xs font-semibold space-x-2 text-gray-400">
                            <div>10hrs ago</div>
                            <div>&bull;</div>
                            <div>Category One</div>
                            <div>&bull;</div>
                            <div class="text-gray-900">33 Comments</div>
                        </div>
                        <div class="flex items-center space-x-2">
                            <div
                                class="bg-yellow text-white text-xs font-bold uppercase leading-none rounded-full text-center w-28 h-7 py-2 px-4">
                                Closed
                            </div>
                            <button
                                class=" relative bg-gray-100 hover:bg-gray-200 rounded-full h-7 transition duration-200 ease-in py-2 px-4">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                                     stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                          d="M5 12h.01M12 12h.01M19 12h.01M6 12a1 1 0 1 1-2 0 1 1 0 0 1 2 0zm7 0a1 1 0 1 1-2 0 1 1 0 0 1 2 0zm7 0a1 1 0 1 1-2 0 1 1 0 0 1 2 0z"/>
                                </svg>
                                <ul class="absolute text-left w-44 font-semibold bg-white shadow-lg rounded-xl ml-8">
                                    <li><a href=""
                                           class="hover:bg-gray-100 px-6 py-3 block transition duration-200 ease-in">
                                            Mark as Spam</a></li>
                                    <li><a href=""
                                           class="hover:bg-gray-100 px-6 py-3 block transition duration-200 ease-in">
                                            Delete Post</a></li>
                                </ul>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div
            class="idea-container hover:shadow-md transition cursor-pointer duration-200 ease-in bg-white rounded-xl flex">
            <div class="border-r border-gray-100 px-5 py-8">
                <div class="text-center">
                    <div class="font-semibold text-2xl">12</div>
                    <div class="text-gray-500">votes</div>
                </div>
                <div class="mt-8">
                    <button
                        class="w-20 bg-gray-200 border border-gray-200 hover:bg-gray-400 transition duration-200 ease-in  font-bold uppercase text-xs rounded-xl px-4 py-3">
                        Vote
                    </button>
                </div>
            </div>

            <div class="flex px-2 py-6">
                <a href="" class="flex-none">
                    <img class="w-10 h-10 rounded-xl" src="https://source.unsplash.com/150x150/?face&crop=face&v1"
                         alt="avatar"></a>
                <div class="mx-4">
                    <h4 class="text-xl font-semibold">
                        <a href="" class="hover:underline">A random title can go here</a>
                    </h4>
                    <div class="text-gray-600 mt-3 line-clamp-3">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Architecto harum laboriosam quod
                        reiciendis voluptate. Ad aliquid aperiam dolor enim error est explicabo iusto laboriosam laborum
                        nostrum quidem sint, sit totam ut, velit vitae voluptate voluptatem! Accusantium, ad aliquid
                        amet dolorem et ex incidunt laborum, nostrum, nulla odio officiis tempore veritatis!
                    </div>
                    <div class="flex items-center justify-between mt-6">
                        <div class="flex items-center text-xs font-semibold space-x-2 text-gray-400">
                            <div>10hrs ago</div>
                            <div>&bull;</div>
                            <div>Category One</div>
                            <div>&bull;</div>
                            <div class="text-gray-900">3 Comments</div>
                        </div>
                        <div class="flex items-center space-x-2">
                            <div
                                class="bg-gray-200 text-xs font-bold uppercase leading-none rounded-full text-center w-28 h-7 py-2 px-4">
                                open
                            </div>
                            <button
                                class=" relative bg-gray-100 hover:bg-gray-200 rounded-full h-7 transition duration-200 ease-in py-2 px-4">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                                     stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                          d="M5 12h.01M12 12h.01M19 12h.01M6 12a1 1 0 1 1-2 0 1 1 0 0 1 2 0zm7 0a1 1 0 1 1-2 0 1 1 0 0 1 2 0zm7 0a1 1 0 1 1-2 0 1 1 0 0 1 2 0z"/>
                                </svg>
                                <ul class="absolute text-left w-44 font-semibold bg-white shadow-lg rounded-xl ml-8">
                                    <li><a href=""
                                           class="hover:bg-gray-100 px-6 py-3 block transition duration-200 ease-in">
                                            Mark as Spam</a></li>
                                    <li><a href=""
                                           class="hover:bg-gray-100 px-6 py-3 block transition duration-200 ease-in">
                                            Delete Post</a></li>
                                </ul>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div
            class="idea-container hover:shadow-md transition cursor-pointer duration-200 ease-in bg-white rounded-xl flex">
            <div class="border-r border-gray-100 px-5 py-8">
                <div class="text-center">
                    <div class="font-semibold text-2xl">12</div>
                    <div class="text-gray-500">votes</div>
                </div>
                <div class="mt-8">
                    <button
                        class="w-20 bg-gray-200 border border-gray-200 hover:bg-gray-400 transition duration-200 ease-in  font-bold uppercase text-xs rounded-xl px-4 py-3">
                        Vote
                    </button>
                </div>
            </div>

            <div class="flex px-2 py-6">
                <a href="" class="flex-none">
                    <img class="w-10 h-10 rounded-xl" src="https://source.unsplash.com/150x150/?face&crop=face&v1"
                         alt="avatar"></a>
                <div class="mx-4">
                    <h4 class="text-xl font-semibold">
                        <a href="" class="hover:underline">A random title can go here</a>
                    </h4>
                    <div class="text-gray-600 mt-3 line-clamp-3">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Architecto harum laboriosam quod
                        reiciendis voluptate. Ad aliquid aperiam dolor enim error est explicabo iusto laboriosam laborum
                        nostrum quidem sint, sit totam ut, velit vitae voluptate voluptatem! Accusantium, ad aliquid
                        amet dolorem et ex incidunt laborum, nostrum, nulla odio officiis tempore veritatis!
                    </div>
                    <div class="flex items-center justify-between mt-6">
                        <div class="flex items-center text-xs font-semibold space-x-2 text-gray-400">
                            <div>10hrs ago</div>
                            <div>&bull;</div>
                            <div>Category One</div>
                            <div>&bull;</div>
                            <div class="text-gray-900">3 Comments</div>
                        </div>
                        <div class="flex items-center space-x-2">
                            <div
                                class="bg-gray-200 text-xs font-bold uppercase leading-none rounded-full text-center w-28 h-7 py-2 px-4">
                                open
                            </div>
                            <button
                                class=" relative bg-gray-100 hover:bg-gray-200 rounded-full h-7 transition duration-200 ease-in py-2 px-4">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                                     stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                          d="M5 12h.01M12 12h.01M19 12h.01M6 12a1 1 0 1 1-2 0 1 1 0 0 1 2 0zm7 0a1 1 0 1 1-2 0 1 1 0 0 1 2 0zm7 0a1 1 0 1 1-2 0 1 1 0 0 1 2 0z"/>
                                </svg>
                                <ul class="absolute text-left w-44 font-semibold bg-white shadow-lg rounded-xl ml-8">
                                    <li><a href=""
                                           class="hover:bg-gray-100 px-6 py-3 block transition duration-200 ease-in">
                                            Mark as Spam</a></li>
                                    <li><a href=""
                                           class="hover:bg-gray-100 px-6 py-3 block transition duration-200 ease-in">
                                            Delete Post</a></li>
                                </ul>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{--    end idea container--}}
</x-app-layout>
