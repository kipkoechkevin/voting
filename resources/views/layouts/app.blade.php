<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Voting') }}</title>

    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600;700&display=swap">

    <!-- Styles -->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
</head>
<body class="font-sans antialiased text-gray-900 text-sm bg-gray-background ">
<header class="flex items-center justify-between px-8 py-4">
    <svg xmlns="http://www.w3.org/2000/svg" width="157" height="18" viewBox="0 0 157 18">
        <g fill="none" fill-rule="evenodd">
            <path fill="#4A4A4A" fill-rule="nonzero"
                  d="M0 2.694h3.406V14.65h7.38v2.778H0V2.694zM26.024 14.27H19.19l-1.303 3.157h-3.49l6.56-14.734h3.364l6.581 14.734h-3.574l-1.304-3.157zm-1.072-2.59l-2.334-5.64-2.334 5.64h4.668zm20.368 5.747l-2.839-4.105h-3.133v4.105h-3.406V2.694h6.37c1.305 0 2.437.217 3.397.652.96.435 1.7 1.053 2.218 1.853.519.8.778 1.747.778 2.841 0 1.095-.263 2.038-.788 2.831-.526.793-1.273 1.4-2.24 1.821l3.301 4.736H45.32zm-.063-9.388c0-.828-.267-1.463-.8-1.905-.532-.442-1.31-.663-2.333-.663h-2.776v5.136h2.776c1.023 0 1.801-.224 2.334-.673.532-.45.799-1.081.799-1.895zm19.337 6.23h-6.833l-1.304 3.158h-3.49l6.56-14.734h3.364l6.582 14.734h-3.575l-1.304-3.157zm-1.072-2.588L61.188 6.04l-2.334 5.642h4.668zm17.824 5.999c-1.5 0-2.857-.327-4.07-.98a7.3 7.3 0 0 1-2.859-2.715c-.694-1.157-1.04-2.466-1.04-3.925 0-1.46.346-2.768 1.04-3.926a7.3 7.3 0 0 1 2.86-2.715c1.212-.653 2.576-.979 4.09-.979 1.275 0 2.428.225 3.459.674a6.929 6.929 0 0 1 2.596 1.936l-2.186 2.02c-.996-1.15-2.23-1.725-3.701-1.725-.911 0-1.724.2-2.44.6-.714.4-1.271.957-1.67 1.673-.4.716-.6 1.53-.6 2.442 0 .912.2 1.726.6 2.442.399.715.956 1.273 1.67 1.673.716.4 1.529.6 2.44.6 1.472 0 2.705-.583 3.7-1.747l2.187 2.02a6.817 6.817 0 0 1-2.607 1.958c-1.037.45-2.194.674-3.47.674zm36.026 0a12.03 12.03 0 0 1-3.375-.474c-1.087-.316-1.96-.726-2.618-1.231l1.156-2.568c.631.463 1.381.835 2.25 1.115.87.28 1.738.421 2.608.421.967 0 1.682-.144 2.144-.431.463-.288.694-.67.694-1.147 0-.351-.137-.642-.41-.874-.273-.232-.624-.417-1.051-.558a20.91 20.91 0 0 0-1.735-.463c-1.121-.266-2.04-.533-2.754-.8a4.475 4.475 0 0 1-1.84-1.284c-.512-.59-.768-1.375-.768-2.357 0-.856.232-1.632.694-2.326.463-.695 1.16-1.246 2.092-1.653.933-.406 2.071-.61 3.417-.61.94 0 1.858.112 2.755.337.897.224 1.682.547 2.355.968l-1.052 2.59c-1.36-.773-2.72-1.159-4.079-1.159-.953 0-1.657.155-2.113.464-.456.308-.683.715-.683 1.22 0 .506.262.88.788 1.127.526.245 1.328.487 2.408.726 1.121.266 2.04.533 2.754.8a4.561 4.561 0 0 1 1.84 1.263c.512.575.767 1.354.767 2.336 0 .842-.234 1.61-.704 2.305-.47.694-1.174 1.245-2.113 1.652-.94.407-2.082.61-3.427.61zm14.922-12.209h-4.71V2.694h12.826v2.778h-4.71v11.956h-3.406V5.472zm18.18 12.209a12.03 12.03 0 0 1-3.374-.474c-1.086-.316-1.96-.726-2.618-1.231l1.157-2.568c.63.463 1.38.835 2.25 1.115.869.28 1.738.421 2.607.421.967 0 1.682-.144 2.144-.431.463-.288.694-.67.694-1.147 0-.351-.136-.642-.41-.874-.273-.232-.623-.417-1.051-.558a20.91 20.91 0 0 0-1.735-.463c-1.121-.266-2.04-.533-2.754-.8a4.475 4.475 0 0 1-1.84-1.284c-.512-.59-.768-1.375-.768-2.357 0-.856.232-1.632.694-2.326.463-.695 1.16-1.246 2.092-1.653.933-.406 2.072-.61 3.417-.61.94 0 1.858.112 2.755.337.897.224 1.682.547 2.355.968l-1.051 2.59c-1.36-.773-2.72-1.159-4.08-1.159-.953 0-1.657.155-2.113.464-.455.308-.683.715-.683 1.22 0 .506.263.88.788 1.127.526.245 1.328.487 2.408.726 1.121.266 2.04.533 2.754.8a4.561 4.561 0 0 1 1.84 1.263c.512.575.768 1.354.768 2.336 0 .842-.235 1.61-.705 2.305-.47.694-1.174 1.245-2.113 1.652-.94.407-2.082.61-3.427.61z"/>
            <g fill="#4A4A4A" fill-rule="nonzero">
                <path
                    d="M94.06 4.688l2.4 2.401a1.266 1.266 0 1 1-1.79 1.79l-2.401-2.4a1.266 1.266 0 1 1 1.79-1.79zM99.191 9.82l5.143 5.143a1.266 1.266 0 1 1-1.79 1.79L97.4 11.612a1.266 1.266 0 1 1 1.79-1.79z"/>
                <path
                    d="M92.843 4.363l13.816-3.59a1.303 1.303 0 0 1 1.583.915 1.264 1.264 0 0 1-.9 1.56L93.525 6.836a1.303 1.303 0 0 1-1.583-.914 1.264 1.264 0 0 1 .9-1.56z"/>
                <path
                    d="M102.193 15.504l3.59-13.816a1.264 1.264 0 0 1 1.559-.9c.686.189 1.093.894.914 1.582l-3.59 13.817a1.264 1.264 0 0 1-1.56.9 1.303 1.303 0 0 1-.913-1.583z"/>
            </g>
            <path fill="#53B5FF"
                  d="M101.718 9.147l-4.99 4.991a1.289 1.289 0 0 1-1.822-1.822l4.99-4.991a1.289 1.289 0 1 1 1.822 1.822zM94.288 16.578l-.75.75a1.289 1.289 0 0 1-1.822-1.822l.75-.75a1.289 1.289 0 1 1 1.822 1.822z"/>
        </g>
    </svg>
    <div class="flex items-center">
        @if (Route::has('login'))
            <div class="px-6 py-4">
            @auth
                <!-- Authentication -->
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <a href="{{route('logout')}}"
                           onclick="event.preventDefault();
                                        this.closest('form').submit();">
                            {{ __('Log Out') }}
                        </a>
                    </form>
                @else
                    <a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Log in</a>

                    @if (Route::has('register'))
                        <a href="{{ route('register') }}"
                           class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Register</a>
                    @endif
                @endauth
            </div>
        @endif
        <a href="">
            <img class="w-10 h-10 rounded-full"
                 src="https://www.gravatar.com/avatar/00000000000000000000000000000000?d=mp" alt="avatar"/>
        </a>
    </div>
</header>

<main class="container mx-auto flex max-w-5xl">
    <div class="w-70 mr-5">
        Form idea goes here. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci amet aspernatur consequatur eaque earum eum fuga molestiae quibusdam unde ut.
    </div>
    <div class="w-175">
       <nav class="flex item-center justify-between text-xs">
           <ul class="flex uppercase font-semibold space-x-10 border-b-4 pb-3">
               <li><a href="" class="border-b-4 pb-3 border-blue"> All Ideas(80)</a></li>
               <li><a href="" class="text-gray-400 transition duration-200 ease-in border-b-4 pb-3 hover:border-blue "> Considering(6)</a></li>
               <li><a href="" class="text-gray-400 transition duration-200 ease-in border-b-4 pb-3 hover:border-blue "> In Progress(4)</a></li>
           </ul>
           <ul class="flex uppercase font-semibold space-x-10 border-b-4 pb-3">
               <li><a href="" class="text-gray-400 transition duration-200 ease-in border-b-4 pb-3 hover:border-blue"> Implemented(9)</a></li>
               <li><a href="" class="text-gray-400 transition duration-200 ease-in border-b-4 pb-3 hover:border-blue"> Closed(12)</a></li>
           </ul>
       </nav>
        <div class="mt-8">
            {{$slot}}
        </div>
    </div>

</main>
</body>
</html>
