<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
</head>

<body class="mx-auto max-w-md">
    <div class="overflow-hidden">
        @yield('content')
    </div>

    <div class="fixed z-50 w-full h-16 max-w-md -translate-x-1/2 bg-white border border-gray-200 bottom-0 left-1/2">
        <div class="grid h-full max-w-md grid-cols-4 mx-auto">
            <a href="/pages/" data-tooltip-target="tooltip-home" type="button"
                class="inline-flex flex-col items-center justify-center px-5 hover:bg-gray-100 group">
                <svg class="w-5 h-5 mb-1 group-hover:text-green-600 {{ request()->routeIs('dashboard') ? 'text-green-500' : 'text-gray-500' }}"
                    aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                    <path
                        d="m19.707 9.293-2-2-7-7a1 1 0 0 0-1.414 0l-7 7-2 2a1 1 0 0 0 1.414 1.414L2 10.414V18a2 2 0 0 0 2 2h3a1 1 0 0 0 1-1v-4a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v4a1 1 0 0 0 1 1h3a2 2 0 0 0 2-2v-7.586l.293.293a1 1 0 0 0 1.414-1.414Z" />
                </svg>
                <span class="sr-only">Home</span>
            </a>

            <a href="/pages/report" data-tooltip-target="tooltip-report" type="button"
                class="inline-flex flex-col items-center justify-center px-5 hover:bg-gray-100 group">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                    fill="currentColor"
                    class="w-6 h-6 mb-1 group-hover:text-green-600 {{ request()->routeIs('report') ? 'text-green-500' : 'text-gray-500' }}">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                    <path d="M2 3m0 2a2 2 0 0 1 2 -2h16a2 2 0 0 1 2 2v0a2 2 0 0 1 -2 2h-16a2 2 0 0 1 -2 -2z" />
                    <path
                        d="M19 9c.513 0 .936 .463 .993 1.06l.007 .14v7.2c0 1.917 -1.249 3.484 -2.824 3.594l-.176 .006h-10c-1.598 0 -2.904 -1.499 -2.995 -3.388l-.005 -.212v-7.2c0 -.663 .448 -1.2 1 -1.2h14zm-5 2h-4l-.117 .007a1 1 0 0 0 0 1.986l.117 .007h4l.117 -.007a1 1 0 0 0 0 -1.986l-.117 -.007z" />
                </svg>
                <span class="sr-only">Pelaporan</span>
            </a>
            <div id="tooltip-report" role="tooltip"
                class="absolute z-10 invisible inline-block px-3 py-2 text-sm font-medium text-white transition-opacity duration-300 bg-gray-900 rounded-lg shadow-sm opacity-0 tooltip ">
                Pelaporan
                <div class="tooltip-arrow" data-popper-arrow></div>
            </div>
            <a href="/pages/support" data-tooltip-target="tooltip-profile" type="button"
                class="inline-flex flex-col items-center justify-center px-5 hover:bg-gray-100 group">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                    fill="currentColor"
                    class="w-6 h-6 mb-1 group-hover:text-green-600 {{ request()->routeIs('support') ? 'text-green-500' : 'text-gray-500' }}">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                    <path
                        d="M18 3a4 4 0 0 1 4 4v8a4 4 0 0 1 -4 4h-4.724l-4.762 2.857a1 1 0 0 1 -1.508 -.743l-.006 -.114v-2h-1a4 4 0 0 1 -3.995 -3.8l-.005 -.2v-8a4 4 0 0 1 4 -4zm-2.8 9.286a1 1 0 0 0 -1.414 .014a2.5 2.5 0 0 1 -3.572 0a1 1 0 0 0 -1.428 1.4a4.5 4.5 0 0 0 6.428 0a1 1 0 0 0 -.014 -1.414m-5.69 -4.286h-.01a1 1 0 1 0 0 2h.01a1 1 0 0 0 0 -2m5 0h-.01a1 1 0 0 0 0 2h.01a1 1 0 0 0 0 -2" />
                </svg>
                <span class="sr-only">Support</span>
            </a>
            <div id="tooltip-profile" role="tooltip"
                class="absolute z-10 invisible inline-block px-3 py-2 text-sm font-medium text-white transition-opacity duration-300 bg-gray-900 rounded-lg shadow-sm opacity-0 tooltip ">
                Profile
                <div class="tooltip-arrow" data-popper-arrow></div>
            </div>

            <a href="/pages/profile" data-tooltip-target="tooltip-profile" type="button"
                class="inline-flex flex-col items-center justify-center px-5 hover:bg-gray-100 group">
                <svg class="w-5 h-5 mb-1 group-hover:text-green-600 {{ request()->routeIs('profile') ? 'text-green-500' : 'text-gray-500' }}" aria-hidden="true"
                    xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                    <path
                        d="M10 0a10 10 0 1 0 10 10A10.011 10.011 0 0 0 10 0Zm0 5a3 3 0 1 1 0 6 3 3 0 0 1 0-6Zm0 13a8.949 8.949 0 0 1-4.951-1.488A3.987 3.987 0 0 1 9 13h2a3.987 3.987 0 0 1 3.951 3.512A8.949 8.949 0 0 1 10 18Z" />
                </svg>
                <span class="sr-only">Profile</span>
            </a>
            <div id="tooltip-profile" role="tooltip"
                class="absolute z-10 invisible inline-block px-3 py-2 text-sm font-medium text-white transition-opacity duration-300 bg-gray-900 rounded-lg shadow-sm opacity-0 tooltip ">
                Profile
                <div class="tooltip-arrow" data-popper-arrow></div>
            </div>
        </div>
    </div>


</body>

</html>
