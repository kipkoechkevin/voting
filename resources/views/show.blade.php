<x-app-layout>
    <div>
        <a href="/" class="flex items-center font-semibold hover:underline">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                 stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                      d="m15 19-7-7 7-7"/>
            </svg>
            <span class="ml-2">
              All ideas
            </span>

        </a>
    </div>
    <div class="idea-container bg-white rounded-xl flex mt-8">
        <div class="flex flex-1 px-4 py-6">
            <div class="flex-none">
                <a href="">
                    <img class="w-10 h-10 rounded-xl" src="https://source.unsplash.com/150x150/?face&crop=face&v=2"
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
                        <div class="font-bold text-gray-900">John Doe</div>
                        <div>&bull;</div>
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
                            <ul class="hidden absolute text-left w-44 font-semibold bg-white shadow-lg rounded-xl ml-8">
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

    <div class="buttons-container flex justify-between mt-6">
        <div class="flex items-center space-x-4 ml-6">
            <button
                type="button"
                class="flex items-center justify-center h-11 w-32 text-xs text-white bg-blue font-semibold rounded-xl border border-blue hover:bg-blue transition duration-200 ease-in px-6 py-3"
            >
                <span class="ml-1">Reply</span>
            </button>
            <button
                type="button"
                class="flex items-center justify-center h-11 w-36 text-xs bg-gray-200 font-semibold rounded-xl border border-gray-200 hover:border-gray-400 transition duration-200 ease-in px-6 py-3"
            >
                <span class="mr-1">Set Status</span>
                <svg class="h-5 w-5 ml-2" fill="none" viewBox="0 0 24 24"
                     stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m19 9-7 7-7-7"/>
                </svg>
            </button>
        </div>
        <div class="flex items-center space-x-3">
            <div class="bg-white text-center font-semibold rounded-xl px-3 py-2">
                <div class="text-xl leading-snug">12</div>
                <div class="text-gray-400 leading-none text-xs">Votes</div>
            </div>
            <button
                type="button"
                class="flex items-center justify-center h-11 text-xs bg-gray-200 font-semibold rounded-xl border border-gray-200 hover:border-gray-400 transition duration-200 ease-in px-6 py-3"
            >
                <span class="uppercase">Vote</span>
            </button>
        </div>
    </div>
    <div class="relative comments-container space-y-6 ml-24 my-8 pt-4 mt-1">
        <div class="comment-container relative bg-white rounded-xl flex mt-8">
            <div class="flex flex-1 px-4 py-6">
                <div class="flex-none">
                    <a href="">
                        <img class="w-10 h-10 rounded-xl" src="https://source.unsplash.com/150x150/?face&crop=face&v2"
                             alt="avatar"></a>
                </div>
                <div class="w-full mx-4">
{{--                    <h4 class="text-xl font-semibold">--}}
{{--                        <a href="" class="hover:underline">A random comment can go here</a>--}}
{{--                    </h4>--}}
                    <div class="text-gray-600 mt-3">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Architecto, aspernatur atque beatae blanditiis distinctio doloremque eaque eius, eos eveniet ipsum magni nulla odit praesentium quo reiciendis similique sit veritatis voluptates!
                    </div>
                    <div class="flex items-center justify-between mt-6">
                        <div class="flex items-center text-xs font-semibold space-x-2 text-gray-400">
                            <div class="font-bold text-gray-900">John Doe</div>
                            <div>&bull;</div>
                            <div>10hrs ago</div>
                        </div>
                        <div class="flex items-center space-x-2">

                            <button
                                class=" relative bg-gray-100 hover:bg-gray-200 rounded-full h-7 transition duration-200 ease-in py-2 px-4">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                                     stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                          d="M5 12h.01M12 12h.01M19 12h.01M6 12a1 1 0 1 1-2 0 1 1 0 0 1 2 0zm7 0a1 1 0 1 1-2 0 1 1 0 0 1 2 0zm7 0a1 1 0 1 1-2 0 1 1 0 0 1 2 0z"/>
                                </svg>
                                <ul class="hidden absolute text-left w-44 font-semibold bg-white shadow-lg rounded-xl ml-8">
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
        <div class="is-admin comment-container relative bg-white rounded-xl flex mt-8">
            <div class="flex flex-1 px-4 py-6">
                <div class="flex-none">
                    <a href="">
                        <img class="w-10 h-10 rounded-xl" src="https://source.unsplash.com/150x150/?face&crop=face&v3"
                             alt="avatar"></a>
                    <div class="text-center uppercase text-blue text-sm font-bold mt-1">ADMIN</div>
                </div>

                <div class="w-full mx-4">
                                        <h4 class="text-xl font-semibold">
                                            <a href="" class="hover:underline">A random comment can go here</a>
                                        </h4>
                    <div class="text-gray-600 mt-3">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Architecto, aspernatur atque beatae blanditiis distinctio doloremque eaque eius, eos eveniet ipsum magni nulla odit praesentium quo reiciendis similique sit veritatis voluptates!
                    </div>
                    <div class="flex items-center justify-between mt-6">
                        <div class="flex items-center text-xs font-semibold space-x-2 text-gray-400">
                            <div class="font-bold text-blue">Annett</div>
                            <div>&bull;</div>
                            <div>10hrs ago</div>
                        </div>
                        <div class="flex items-center space-x-2">

                            <button
                                class=" relative bg-gray-100 hover:bg-gray-200 rounded-full h-7 transition duration-200 ease-in py-2 px-4">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                                     stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                          d="M5 12h.01M12 12h.01M19 12h.01M6 12a1 1 0 1 1-2 0 1 1 0 0 1 2 0zm7 0a1 1 0 1 1-2 0 1 1 0 0 1 2 0zm7 0a1 1 0 1 1-2 0 1 1 0 0 1 2 0z"/>
                                </svg>
                                <ul class="hidden absolute text-left w-44 font-semibold bg-white shadow-lg rounded-xl ml-8">
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
        <div class="comment-container relative bg-white rounded-xl flex mt-8">
            <div class="flex flex-1 px-4 py-6">
                <div class="flex-none">
                    <a href="">
                        <img class="w-10 h-10 rounded-xl" src="https://source.unsplash.com/150x150/?face&crop=face&v4"
                             alt="avatar"></a>
                </div>
                <div class="w-full mx-4">
                    {{--                    <h4 class="text-xl font-semibold">--}}
                    {{--                        <a href="" class="hover:underline">A random comment can go here</a>--}}
                    {{--                    </h4>--}}
                    <div class="text-gray-600 mt-3">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Architecto, aspernatur atque beatae blanditiis distinctio doloremque eaque eius, eos eveniet ipsum magni nulla odit praesentium quo reiciendis similique sit veritatis voluptates!
                    </div>
                    <div class="flex items-center justify-between mt-6">
                        <div class="flex items-center text-xs font-semibold space-x-2 text-gray-400">
                            <div class="font-bold text-gray-900">John Doe</div>
                            <div>&bull;</div>
                            <div>10hrs ago</div>
                        </div>
                        <div class="flex items-center space-x-2">

                            <button
                                class=" relative bg-gray-100 hover:bg-gray-200 rounded-full h-7 transition duration-200 ease-in py-2 px-4">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                                     stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                          d="M5 12h.01M12 12h.01M19 12h.01M6 12a1 1 0 1 1-2 0 1 1 0 0 1 2 0zm7 0a1 1 0 1 1-2 0 1 1 0 0 1 2 0zm7 0a1 1 0 1 1-2 0 1 1 0 0 1 2 0z"/>
                                </svg>
                                <ul class="hidden absolute text-left w-44 font-semibold bg-white shadow-lg rounded-xl ml-8">
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
</x-app-layout>
