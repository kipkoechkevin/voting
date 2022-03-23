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

    <livewire:idea-show :idea="$idea" :votesCount="$votesCount">

    <div class="relative comments-container space-y-6 md:ml-24 my-8 pt-4 mt-1">
        <div class="comment-container relative bg-white rounded-xl flex mt-8">
            <div class="flex flex-col md:flex-row flex-1 px-4 py-6">
                <div class="flex-none">
                    <a href="">
                        <img class="w-10 h-10 rounded-xl" src="https://source.unsplash.com/150x150/?face&crop=face&v2"
                             alt="avatar"></a>
                </div>
                <div class="w-full md:mx-4">
                    {{--                    <h4 class="text-xl font-semibold">--}}
                    {{--                        <a href="" class="hover:underline">A random comment can go here</a>--}}
                    {{--                    </h4>--}}
                    <div class="text-gray-600 mt-3">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Architecto, aspernatur atque beatae
                        blanditiis distinctio doloremque eaque eius, eos eveniet ipsum magni nulla odit praesentium quo
                        reiciendis similique sit veritatis voluptates!
                    </div>
                    <div class="flex items-center justify-between mt-6">
                        <div class="flex items-center text-xs font-semibold space-x-2 text-gray-400">
                            <div class="font-bold text-gray-900">John Doe</div>
                            <div>&bull;</div>
                            <div>10hrs ago</div>
                        </div>
                        <div class="flex items-center space-x-2">
                            <button
                                class="relative bg-gray-100 hover:bg-gray-200 rounded-full h-7 transition duration-200 ease-in py-2 px-4">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                                     stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                          d="M5 12h.01M12 12h.01M19 12h.01M6 12a1 1 0 1 1-2 0 1 1 0 0 1 2 0zm7 0a1 1 0 1 1-2 0 1 1 0 0 1 2 0zm7 0a1 1 0 1 1-2 0 1 1 0 0 1 2 0z"/>
                                </svg>
                                <ul class="absolute z-20 text-left w-44 font-semibold bg-white shadow-lg rounded-xl md:ml-8 top-8 md:top-6 right-0 md:left-0">
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
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Architecto, aspernatur atque beatae
                        blanditiis distinctio doloremque eaque eius, eos eveniet ipsum magni nulla odit praesentium quo
                        reiciendis similique sit veritatis voluptates!
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
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Architecto, aspernatur atque beatae
                        blanditiis distinctio doloremque eaque eius, eos eveniet ipsum magni nulla odit praesentium quo
                        reiciendis similique sit veritatis voluptates!
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
