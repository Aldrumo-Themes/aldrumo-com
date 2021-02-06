<!doctype html>
<html>
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <link href="/aldrumo/aldrumo-com/css/site.css" rel="stylesheet">

        <title>{{ !empty($page) ? $page->title : '' }}{{ config('app.name') }}</title>
    </head>
    <body class="bg-gray-200">
        <header class="z-30 w-full px-2 py-4 bg-white sm:px-4">
            <div class="container flex items-center justify-between mx-auto">
                <a href="/" title="Aldrumo Homepage" class="flex items-center">
                    <svg viewBox="0 0 1361 323" fill="none" xmlns="http://www.w3.org/2000/svg" class="w-auto h-12">
                        <path d="M484.26 86.7H452.94L393 235.2H429.36L440.34 205.5H496.86L507.84 235.2H544.2L484.26 86.7ZM485.34 175.8H451.86L468.42 132.6H468.78L485.34 175.8Z" fill="#14213D"/>
                        <path d="M583.832 86.7H549.992V235.2H634.952V205.5H583.832V86.7Z" fill="#14213D"/>
                        <path d="M651.77 86.7V235.2H694.79C735.65 235.2 769.67 204.24 769.67 160.86C769.67 117.66 735.47 86.7 694.79 86.7H651.77ZM685.61 204.96V116.94H690.83C716.03 116.94 733.13 136.2 733.13 161.04C732.95 185.88 715.85 204.96 690.83 204.96H685.61Z" fill="#14213D"/>
                        <path d="M784.66 86.7V235.2H818.5V176.52L863.86 235.2H906.88L855.76 173.82C873.94 168.06 886.18 153.12 886.18 130.8C886.18 101.64 865.3 86.7 837.76 86.7H784.66ZM818.5 152.58V113.7H822.46C835.24 113.7 850.54 114.6 850.54 133.14C850.54 151.68 835.24 152.58 822.46 152.58H818.5Z" fill="#14213D"/>
                        <path d="M1027.63 86.7H993.788V172.56C993.788 197.4 986.228 204.6 969.668 204.6C953.108 204.6 945.548 197.4 945.548 172.56V86.7H911.708V182.46C911.708 219.18 931.868 237.9 969.668 237.9C1007.47 237.9 1027.63 219.18 1027.63 182.46V86.7Z" fill="#14213D"/>
                        <path d="M1170.21 235.2H1204.05L1190.73 86.7H1154.73L1121.79 172.38L1088.85 86.7H1052.85L1039.53 235.2H1073.37L1080.39 147.18H1081.29L1111.71 234.3H1131.87L1162.29 147.18H1163.19L1170.21 235.2Z" fill="#14213D"/>
                        <path d="M1211.13 160.86C1211.13 204.24 1242.09 237.9 1286.01 237.9C1328.67 237.9 1360.71 204.24 1360.71 160.86C1360.71 117.48 1327.23 84 1286.01 84C1245.15 84 1211.13 117.48 1211.13 160.86ZM1247.67 160.86C1247.67 138.72 1259.91 116.58 1286.01 116.58C1312.29 116.58 1324.17 138.72 1324.17 160.86C1324.17 183 1313.01 205.14 1286.01 205.14C1258.29 205.14 1247.67 183 1247.67 160.86Z" fill="#14213D"/>

                        <path d="M148.228 46.0253C148.228 50.1664 149.318 54.2345 151.388 57.8209L281.401 283.009C287.268 293.172 298.112 299.432 309.847 299.432L319.101 299.432C332.13 299.432 342.693 288.87 342.693 275.841C342.693 271.7 341.602 267.632 339.532 264.046L209.519 38.8572C203.652 28.6946 192.809 22.4342 181.074 22.4342L171.819 22.4342C158.79 22.4342 148.228 32.9963 148.228 46.0253Z" fill="#14213D"/>
                        <path d="M12.9524 276.042C12.9524 271.901 14.0424 267.832 16.113 264.246L146.126 39.0575C151.993 28.8949 162.836 22.6345 174.571 22.6345L183.826 22.6345C196.855 22.6345 207.417 33.1966 207.417 46.2256C207.417 50.3667 206.327 54.4349 204.257 58.0212L74.2438 283.21C68.3765 293.372 57.5331 299.633 45.7984 299.633L36.5435 299.633C23.5145 299.633 12.9524 289.071 12.9524 276.042Z" fill="#14213D"/>
                        <path d="M96.2166 276.323C96.2165 272.182 97.3066 268.114 99.3772 264.527L229.39 39.3388C235.257 29.1762 246.101 22.9158 257.835 22.9158L267.09 22.9158C280.119 22.9158 290.681 33.4779 290.681 46.5069C290.681 50.648 289.591 54.7162 287.521 58.3025L157.508 283.491C151.641 293.654 140.797 299.914 129.063 299.914L119.808 299.914C106.779 299.914 96.2166 289.352 96.2166 276.323Z" fill="#F59E0B"/>
                        <path d="M185.31 276.323C185.31 272.182 186.4 268.114 188.47 264.527L318.483 39.3388C324.35 29.1762 335.194 22.9158 346.929 22.9158L356.183 22.9158C369.212 22.9158 379.775 33.4779 379.775 46.5069C379.775 50.648 378.684 54.7162 376.614 58.3025L246.601 283.491C240.734 293.654 229.891 299.914 218.156 299.914L208.901 299.914C195.872 299.914 185.31 289.352 185.31 276.323Z" fill="#059669"/>
                    </svg>
                    <span class="sr-only">Aldrumo</span>
                </a>
                <div class="flex items-center space-x-1">
                    <div class="hidden space-x-1 md:inline-flex text-blue-950">
                        <a href="/features" class="btn btn-sm hover:text-green-600">Features</a>
                        <a href="#" class="btn btn-sm hover:text-green-600">Docs</a>
                        <a href="https://github.com/aldrumo" target="_blank" class="btn btn-sm hover:text-green-600">Github</a>
                        <a href="https://twitter.com/aldrumo" target="_blank" class="btn btn-sm hover:text-green-600">Twitter</a>
                    </div>
                    <a href="#" class="btn btn-primary">Try the Demo</a>
                    <div class="inline-flex md:hidden" x-data="{ open: false }">
                        <button class="flex-none px-2 btn btn-sm text-blue-950 hover:text-green-600" @click="open = true">
                            <svg
                                    xmlns="http://www.w3.org/2000/svg"
                                    viewBox="0 0 24 24"
                                    fill="none"
                                    stroke="currentColor"
                                    stroke-width="2"
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                    aria-hidden="true"
                                    class="w-5 h-5"
                            >
                                <line x1="3" y1="12" x2="21" y2="12"></line>
                                <line x1="3" y1="6" x2="21" y2="6"></line>
                                <line x1="3" y1="18" x2="21" y2="18"></line>
                            </svg>
                            <span class="sr-only">Open Menu</span>
                        </button>
                        <div class="absolute top-0 left-0 right-0 z-50 flex flex-col p-2 pb-4 m-2 space-y-3 bg-white rounded shadow text-blue-950" x-show.transition="open" @click.away="open = false" x-cloak>
                            <button class="self-end flex-none px-2 ml-2 btn btn-icon hover:text-green-600" @click="open = false">
                                <svg
                                        xmlns="http://www.w3.org/2000/svg"
                                        width="24"
                                        height="24"
                                        viewBox="0 0 24 24"
                                        fill="none"
                                        stroke="currentColor"
                                        stroke-width="2"
                                        stroke-linecap="round"
                                        stroke-linejoin="round"
                                        aria-hidden="true"
                                >
                                    <line x1="18" y1="6" x2="6" y2="18"></line>
                                    <line x1="6" y1="6" x2="18" y2="18"></line>
                                </svg>
                                <span class="sr-only">Close Menu</span>
                            </button>
                            <a href="/features" class="w-full btn hover:text-green-600">Features</a>
                            <a href="#" class="w-full btn hover:text-green-600">Docs</a>
                            <a href="https://github.com/aldrumo" target="_blank" class="w-full btn hover:text-green-600">Github</a>
                            <a href="https://twitter.com/aldrumo" target="_blank" class="w-full btn hover:text-green-600">Twitter</a>
                        </div>
                    </div>
                </div>
            </div>
        </header>

        {{ $slot }}

        <footer class="bg-white">
            <div class="container flex flex-col items-center justify-between px-4 py-12 mx-auto md:flex-row">
                <p class="mb-8 text-sm text-center text-blue-950 md:text-left md:mb-0">
                    &copy; Aldrumo 2021. All Rights Reserved.
                </p>
                <div class="flex items-center space-x-6">
                    <a href="https://twitter.com/aldrumo" target="_blank" class="text-twitter hover:text-twitter-dark">
                        <span class="sr-only">Twitter</span>
                        <x-fab-twitter class="w-5 h-5" />
                    </a>
                    <a href="https://github.com/aldrumo" target="_blank" class="text-github hover:text-github-dark">
                        <span class="sr-only">Github</span>
                        <x-fab-github class="w-5 h-5" />
                    </a>
                </div>
            </div>
        </footer>

        <script src="/aldrumo/aldrumo-com/js/site.js"></script>
    </body>
</html>
