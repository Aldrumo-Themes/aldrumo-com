<!doctype html>
<html>
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <link href="/aldrumo/aldrumo-com/css/site.css" rel="stylesheet">

        <title>{{ !empty($page) ? $page->title : '' }}{{ config('app.name') }}</title>
    </head>
    <body class="bg-gray-200">
        <section class="min-h-screen" x-data="{ sideBar: false }">
            <nav
                    class="fixed top-0 left-0 z-20 h-full pb-10 overflow-x-hidden overflow-y-auto transition origin-left transform bg-white border-r w-60 md:translate-x-0"
                    :class="{ '-translate-x-full' : !sideBar, 'translate-x-0' : sideBar }"
                    @click.away="sideBar = false"
            >
                <a href="/" class="flex items-center px-4 py-5">
                    <svg class="w-20 mx-auto" viewBox="0 0 816 670" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M307.791 97.9782C307.791 105 309.639 111.898 313.15 117.978L592.464 601.764C599.609 614.14 612.814 621.764 627.105 621.764L671.592 621.764C693.684 621.764 711.592 603.856 711.592 581.764L711.592 570.37C711.592 563.348 709.744 556.451 706.233 550.37L426.919 66.584C419.774 54.208 406.569 46.584 392.278 46.5841L347.791 46.5841C325.7 46.5841 307.791 64.4926 307.791 86.584L307.791 97.9782Z" fill="#14213D" />

                        <path d="M26.8953 570.786C26.8953 563.764 28.7436 556.867 32.2543 550.786L311.568 66.9999C318.713 54.6239 331.919 46.9999 346.209 46.9999L390.697 46.9999C412.788 46.9999 430.697 64.9085 430.697 86.9999L430.697 98.3941C430.697 105.416 428.848 112.313 425.338 118.394L146.024 602.18C138.878 614.556 125.673 622.18 111.383 622.18L66.8954 622.18C44.804 622.18 26.8954 604.271 26.8954 582.18L26.8953 570.786Z" fill="#14213D" />

                        <path d="M199.791 571.37C199.791 564.349 201.639 557.451 205.15 551.37L484.464 67.5842C491.609 55.2081 504.814 47.5842 519.105 47.5842L563.592 47.5842C585.684 47.5842 603.592 65.4928 603.592 87.5841L603.592 98.9784C603.592 106 601.744 112.898 598.233 118.978L318.919 602.764C311.774 615.14 298.569 622.764 284.278 622.764L239.791 622.764C217.7 622.764 199.791 604.856 199.791 582.764L199.791 571.37Z" fill="#F59E0B" />

                        <path d="M384.791 571.37C384.791 564.349 386.639 557.451 390.15 551.37L669.464 67.5842C676.609 55.2081 689.814 47.5842 704.105 47.5842L748.592 47.5842C770.684 47.5842 788.592 65.4928 788.592 87.5841L788.592 98.9784C788.592 106 786.744 112.898 783.233 118.978L503.919 602.764C496.774 615.14 483.569 622.764 469.278 622.764L424.791 622.764C402.7 622.764 384.791 604.856 384.791 582.764L384.791 571.37Z" fill="#059669" />
                    </svg>
                </a>
                <nav class="text-sm font-medium text-gray-600" aria-label="Main Navigation">
                    <a class="flex items-center px-4 py-3 transition cursor-pointer group hover:bg-gray-100 hover:text-gray-900" href="#">
                        <span>Home</span>
                    </a>
                    <a class="flex items-center px-4 py-3 transition cursor-pointer group hover:bg-gray-100 hover:text-gray-900" href="#">
                        <span>Articles</span>
                    </a>
                    <a class="flex items-center px-4 py-3 text-gray-900 transition bg-gray-100 cursor-pointer group hover:bg-gray-100 hover:text-gray-900" href="#">
                        <span>Collections</span>
                    </a>
                    <a class="flex items-center px-4 py-3 transition cursor-pointer group hover:bg-gray-100 hover:text-gray-900" href="#">
                        <span>Checklists</span>
                    </a>
                    <a class="flex items-center px-4 py-3 transition cursor-pointer group hover:bg-gray-100 hover:text-gray-900 justify-between" href="#">
                        <div class="flex items-center">
                            <span>Integrations</span>
                        </div>
                    </a>
                    <div class="mb-4">
                        <a class="flex items-center py-2 pl-8 pr-4 transition cursor-pointer hover:bg-gray-100 hover:text-gray-900" href="#">Shopify</a>
                        <a class="flex items-center py-2 pl-8 pr-4 transition cursor-pointer hover:bg-gray-100 hover:text-gray-900" href="#">Slack</a>
                        <a class="flex items-center py-2 pl-8 pr-4 transition cursor-pointer hover:bg-gray-100 hover:text-gray-900" href="#">Zapier</a>
                    </div>
                    <a class="flex items-center px-4 py-3 transition cursor-pointer group hover:bg-gray-100 hover:text-gray-900" href="#">
                        <span>Changelog</span>
                    </a>
                    <a class="flex items-center px-4 py-3 transition cursor-pointer group hover:bg-gray-100 hover:text-gray-900" href="#">
                        <span>Settings</span>
                    </a>
                </nav>

                <div class="w-full text-center mt-10">
                    <p class="w-full mb-8 text-sm text-center text-blue-950">
                        &copy; Aldrumo 2021.<br>All Rights Reserved.
                    </p>

                    <div class="flex justify-center">
                        <a href="#" class="text-twitter hover:text-twitter-dark mr-5">
                            <span class="sr-only">Twitter</span>
                            <x-fab-twitter class="w-5 h-5" />
                        </a>
                        <a href="#" class="text-github hover:text-github-dark">
                            <span class="sr-only">Github</span>
                            <x-fab-github class="w-5 h-5" />
                        </a>
                    </div>
                </div>
            </nav>
            <div class="ml-0 transition md:ml-60">
                <header class="flex items-center justify-between w-full px-4 bg-white border-b h-14">
                    <button class="block btn btn-light md:hidden" @click.stop="sideBar = true">
                        <span class="sr-only">Menu</span>
                        <svg class="w-4 h-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd" d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z" clip-rule="evenodd" />
                        </svg>
                    </button>
                    <div class="hidden -ml-3 form-icon md:block w-96">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" /></svg>
                        <input class="border-0 form-input" placeholder="Search for articles..." />
                    </div>
                </header>

                <div class="content">
                    {{ $slot }}
                </div>
            </div>
            <!-- Sidebar Backdrop -->
            <div class="fixed inset-0 z-10 w-screen h-screen bg-black bg-opacity-25 md:hidden" x-show.transition="sideBar" x-cloak></div>
        </section>

        <script src="/aldrumo/aldrumo-com/js/site.js"></script>
    </body>
</html>