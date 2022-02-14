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
                    <div
                        x-data="{isOpen:false}"
                        class="flex items-center space-x-2">
                        <div
                            class="bg-gray-200 text-xs font-bold uppercase leading-none rounded-full text-center w-28 h-7 py-2 px-4">
                            open
                        </div>
                        <button
                            @click="isOpen=!isOpen"
                            class=" relative bg-gray-100 hover:bg-gray-200 rounded-full h-7 transition duration-200 ease-in py-2 px-4">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                                 stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                      d="M5 12h.01M12 12h.01M19 12h.01M6 12a1 1 0 1 1-2 0 1 1 0 0 1 2 0zm7 0a1 1 0 1 1-2 0 1 1 0 0 1 2 0zm7 0a1 1 0 1 1-2 0 1 1 0 0 1 2 0z"/>
                            </svg>
                            <ul x-cloak
                                x-show="isOpen"
                                x-show.transition.origin.top.left.duration.200ms="isOpen"
                                @click.away="isOpen = false"
                                @keydown.escape.window="isOpen = false"
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

    <div class="buttons-container flex justify-between mt-6">
        <div class="flex items-center space-x-4 ml-6">
            <div x-data="{ isOpen: false }" class="relative">
                <button
                    @click="isOpen = !isOpen"
                    type="button"
                    class="flex items-center justify-center h-11 w-32 text-sm text-white bg-blue font-semibold rounded-xl border border-blue hover:bg-blue transition duration-200 ease-in px-6 py-3"
                >
                    <span class="ml-1">Reply</span>
                </button>

                <div
                    x-cloak
                    x-show="isOpen"
                    x-show.transition.origin.top.left.duration.200ms="isOpen"
                    @click.away="isOpen = false"
                    @keydown.escape.window="isOpen = false"
                    class="absolute z-10 w-104 text-left font-semibold bg-white rounded-xl shadow-dialog mt-2">
                    <form action="#" class="space-y-4 px-4 py-6">
                        <div>
                            <label for="post_comment">
                            </label>
                            <textarea name="post_comment" id="post_comment" cols="30" rows="4"
                                      placeholder="Go ahead and share your thoughts ..."
                                      class="w-full text-sm bg-gray-100 rounded-xl placeholder-gray-900 border-none px-4 py-2">
                            </textarea>
                            <div class="flex items-center space-x-3">
                                <button
                                    type="button"
                                    class="flex items-center justify-center h-11  text-sm text-white bg-blue font-semibold rounded-xl border border-blue hover:bg-blue transition duration-200 ease-in px-6 py-3"
                                >
                                    Post Comment
                                </button>
                                <button
                                    type="button"
                                    class="flex items-center justify-center w-32 h-11 text-xs bg-gray-200 font-semibold rounded-xl border border-gray-200 hover:border-gray-400 transition duration-200 ease-in px-6 py-3"
                                >
                                    <svg xmlns="http://www.w3.org/2000/svg"
                                         class="h-5 w-5 text-gray-500 transform -rotate-45" fill="none"
                                         viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                              d="m15.172 7-6.586 6.586a2 2 0 1 0 2.828 2.828l6.414-6.586a4 4 0 0 0-5.656-5.656l-6.415 6.585a6 6 0 1 0 8.486 8.486L20.5 13"/>
                                    </svg>
                                    <span class="ml-2 text-gray-900">Attach</span>
                                </button>
                            </div>
                        </div>

                    </form>
                </div>
            </div>
            <div
                class="relative"
                x-data="{ isOpen: false }"
            >
                <button
                    @click="isOpen = !isOpen"
                    type="button"
                    class="flex items-center justify-center h-11 text-sm bg-gray-200 font-semibold rounded-xl border border-gray-200 hover:border-gray-400 transition duration-200 ease-in px-6 py-3"
                >
                    <span class="mr-1">Set Status</span>
                    <svg class="h-5 w-5 ml-2" fill="none" viewBox="0 0 24 24"
                         stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m19 9-7 7-7-7"/>
                    </svg>
                </button>
                <div x-cloak
                     x-show="isOpen"
                     x-show.transition.origin.top.left.duration.200ms="isOpen"
                     @click.away="isOpen = false"
                     @keydown.escape.window="isOpen = false"
                     class="absolute z-20 w-76 text-left font-semibold rounded-xl bg-white shadow-dialog mt-2">

                    <form action="#" class="space-y-4 px-4 py-6">
                        <div class="space-y-2">
                            <div>
                                <label class="inline-flex items-center" for="">
                                    <input type="radio" checked="" class="bg-gray-200 text-blue border-none"
                                           name="status" value="1">
                                    <span class="ml-2">Open</span>
                                </label>
                            </div>
                            <div>
                                <label class="inline-flex items-center" for="">
                                    <input type="radio" checked="" class="bg-gray-200 text-green border-none"
                                           name="status" value="2">
                                    <span class="ml-2">Considering</span>
                                </label>
                            </div>

                            <div>
                                <label class="inline-flex items-center" for="">
                                    <input type="radio" checked="" class="bg-gray-200 text-yellow border-none"
                                           name="status" value="2">
                                    <span class="ml-2">In Progress</span>
                                </label>
                            </div>
                            <div>
                                <label class="inline-flex items-center" for="">
                                    <input type="radio" checked="" class="bg-gray-200 text-purple border-none"
                                           name="status" value="2">
                                    <span class="ml-2">Implemented</span>
                                </label>
                            </div>
                            <div>
                                <label class="inline-flex items-center" for="">
                                    <input type="radio" checked="" class="bg-gray-200 text-red border-none"
                                           name="status" value="2">
                                    <span class="ml-2">Closed</span>
                                </label>
                            </div>
                        </div>

                        <div>
                            <textarea name="update_comment" id="update_comments" cols="30" rows="3"
                                      class="w-full text-sm bg-gray-100 rounded-xl placeholder-gray-900 border-gray-200 px-4 py-2"
                                      placeholder="Text here">

                            </textarea>
                        </div>
                        <div class="flex items-center justify-between space-x-3">
                            <button
                                type="button"
                                class="flex items-center justify-center w-1/2 h-11 text-xs bg-gray-200 font-semibold rounded-xl border border-gray-200 hover:border-gray-400 transition duration-200 ease-in px-6 py-3"
                            >
                                <svg xmlns="http://www.w3.org/2000/svg"
                                     class="h-5 w-5 text-gray-500 transform -rotate-45" fill="none" viewBox="0 0 24 24"
                                     stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                          d="m15.172 7-6.586 6.586a2 2 0 1 0 2.828 2.828l6.414-6.586a4 4 0 0 0-5.656-5.656l-6.415 6.585a6 6 0 1 0 8.486 8.486L20.5 13"/>
                                </svg>
                                <span class="ml-2">Attach</span>
                            </button>
                            <button
                                type="submit"
                                class="flex items-center justify-center w-1/2 h-11 text-xs text-white bg-blue font-semibold rounded-xl border border-blue hover:bg-blue transition duration-200 ease-in px-6 py-3"
                            >
                                <span class="ml-2">Update</span>
                            </button>
                        </div>

                        <div>
                            <label class="font-normal inline-flex items-center" for="">
                                <input type="checkbox" class="rounded bg-gray-200" name="notify_voters" checked="">
                                <span class="ml-2">Notify all voters</span>
                            </label>
                        </div>
                    </form>
                </div>
            </div>

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
