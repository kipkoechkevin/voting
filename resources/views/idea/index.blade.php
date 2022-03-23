<x-app-layout>
    <div class="filters flex flex-col md:flex-row space-y-3 md:space-x-6 md:space-y-0">
        <div class="w-full md:w-1/3">
            <select name="category" id="category" class="w-full rounded-xl border-none px-4 py-2">
                <option value="Category One">Category One</option>
                <option value="Category One">Category Two</option>
                <option value="Category One">Category Three</option>
                <option value="Category One">Category Four</option>
            </select>
        </div>
        <div class="w-full md:w-1/3">
            <select name="other_filters" id="category" class="w-full rounded-xl border-none px-4 py-2">
                <option value="Filter One">Filter One</option>
                <option value="Filter Two">Filter Two</option>
                <option value="Filter Three">Filter Three</option>
                <option value="Filter Four">Filter Four</option>
            </select>
        </div>
        <div class="w-full md:w-2/3 relative">
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
        @foreach($ideas as $idea)
            <livewire:idea-index :idea="$idea" :votesCount="$idea->votes_count" />
        @endforeach
    </div>
    <div>
        {{$ideas->links()}}
    </div>
    {{--    end idea container--}}
</x-app-layout>
