<!DOCTYPE html>
<html class="h-full bg-white" lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link href="{{asset('css/fonts.css')}}" rel="stylesheet"/>
    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <!-- Styles -->
    @livewireStyles
</head>
<body class="h-full dark:bg-zinc-900 bg-zinc-50">
<div class="" style="">
    <div class="dark:bg-zinc-900 bg-zinc-50">
        <div x-data="{ open: false }" @keydown.window.escape="open = false">

            <div x-show="open" class="relative z-50 lg:hidden"
                 x-description="Off-canvas menu for mobile, show/hide based on off-canvas menu state." x-ref="dialog"
                 aria-modal="true" style="display: none;">

                <div x-show="open" x-transition:enter="transition-opacity ease-linear duration-300"
                     x-transition:enter-start="opacity-0" x-transition:enter-end="opacity-100"
                     x-transition:leave="transition-opacity ease-linear duration-300"
                     x-transition:leave-start="opacity-100" x-transition:leave-end="opacity-0"
                     class="fixed inset-0 bg-gray-900/80"
                     x-description="Off-canvas menu backdrop, show/hide based on off-canvas menu state."
                     aria-hidden="true" style="display: none;"></div>


                <div class="fixed inset-0 flex">

                    <div x-show="open" x-transition:enter="transition ease-in-out duration-300 transform"
                         x-transition:enter-start="-translate-x-full" x-transition:enter-end="translate-x-0"
                         x-transition:leave="transition ease-in-out duration-300 transform"
                         x-transition:leave-start="translate-x-0" x-transition:leave-end="-translate-x-full"
                         x-description="Off-canvas menu, show/hide based on off-canvas menu state."
                         class="relative mr-16 flex w-full max-w-xs flex-1" @click.away="open = false"
                         style="display: none;">

                        <div x-show="open" x-transition:enter="ease-in-out duration-300"
                             x-transition:enter-start="opacity-0" x-transition:enter-end="opacity-100"
                             x-transition:leave="ease-in-out duration-300" x-transition:leave-start="opacity-100"
                             x-transition:leave-end="opacity-0"
                             x-description="Close button, show/hide based on off-canvas menu state."
                             class="absolute left-full top-0 flex w-16 justify-center pt-5" style="display: none;">
                            <button type="button" class="-m-2.5 p-2.5" @click="open = false">
                                <span class="sr-only"></span>
                                <svg class="h-6 w-6 text-white" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                     stroke="currentColor" aria-hidden="true" data-slot="icon">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                          d="M6 18 18 6M6 6l12 12"></path>
                                </svg>
                            </button>
                        </div>

                        @include('components.nav.mobile')

                    </div>

                </div>
            </div>

            <div class="hidden lg:fixed lg:inset-y-0 lg:z-50 lg:flex lg:w-72 lg:flex-col">
                @include('components.nav.desktop')
            </div>

            <div class="lg:pl-72">
                <div
                    class="sticky top-0 z-40 flex h-16 shrink-0 items-center text-zinc-950 dark:text-indigo-200 gap-x-4 dark:border-gray-700 border-b border-gray-200  dark:bg-zinc-800 bg-zinc-50  px-4 shadow-sm sm:gap-x-6 sm:px-6 lg:px-8 w-full content-end">
                    <button type="button" class="-m-2.5 p-2.5 text-gray-700 dark:text-indigo-400 lg:hidden" @click="open = true">
                        <span class="sr-only">Open sidebar</span>
                        <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                             aria-hidden="true" data-slot="icon">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                  d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5"></path>
                        </svg>
                    </button>

                    <!-- Separator -->
                    <div class="h-6 w-px bg-gray-900/10 lg:hidden" aria-hidden="true"></div>

                    <div class="flex flex-1 content-end gap-x-4 self-stretch lg:gap-x-6">
                        @if (isset($header))
                            <header class="bg-white dark:bg-zinc-950 shadow me-auto">
                                <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                                    {{ $header }}
                                </div>
                            </header>
                        @endif
                        <div class="flex items-center content-end gap-x-4 lg:gap-x-6 ms-auto">
                            <button type="button" class="-m-2.5 p-2.5 text-indigo-400 hover:text-indigo-500">
                                <span class="sr-only">View notifications</span>
                                <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                     stroke="currentColor" aria-hidden="true" data-slot="icon">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                          d="M14.857 17.082a23.848 23.848 0 0 0 5.454-1.31A8.967 8.967 0 0 1 18 9.75V9A6 6 0 0 0 6 9v.75a8.967 8.967 0 0 1-2.312 6.022c1.733.64 3.56 1.085 5.455 1.31m5.714 0a24.255 24.255 0 0 1-5.714 0m5.714 0a3 3 0 1 1-5.714 0"></path>
                                </svg>
                            </button>

                            <!-- Separator -->
                            <div class="hidden lg:block lg:h-6 lg:w-px lg:bg-tinc-900/10 dark:lg:bg-gray-200/10"
                                 aria-hidden="true"></div>
                            <x-dropdown>
                                <x-slot:trigger>
                                    <button type="button" class="-m-1.5 flex items-center p-1.5" id="user-menu-button"
                                            x-ref="button">
                                        <span class="sr-only">Open user menu</span>
                                        <img class="h-8 w-8 rounded-full bg-gray-50"
                                             @php  @endphp
                                             src="{{user_profile()}}"
                                             alt="">
                                        <span class="hidden lg:flex lg:items-center">
                  <span class="ml-4 text-sm font-light leading-6 dark:text-indigo-200 text-zinc-900"
                        aria-hidden="true">{{auth()->user()->full_name}}</span>
                  <svg class="ml-2 h-5 w-5 dark:text-indigo-200 text-zinc-900" viewBox="0 0 20 20" fill="currentColor"
                       aria-hidden="true"
                       data-slot="icon">
  <path fill-rule="evenodd"
        d="M5.22 8.22a.75.75 0 0 1 1.06 0L10 11.94l3.72-3.72a.75.75 0 1 1 1.06 1.06l-4.25 4.25a.75.75 0 0 1-1.06 0L5.22 9.28a.75.75 0 0 1 0-1.06Z"
        clip-rule="evenodd"></path>
</svg>
                </span>
                                    </button>
                                </x-slot:trigger>
                                <x-slot:content>
                                    <x-dropdown-link href="{{route('logout')}}" class="dark:bg-zinc-700 hover:dark:text-zinc-900 bg-white dark:text-indigo-200">
                                        Your profile
                                    </x-dropdown-link>
                                    <form method="post" action="{{ route('logout') }}">
                                        @csrf
                                        <button class="dark:bg-zinc-700 bg-white dark:text-indigo-200 hover:dark:text-zinc-900 block cursor-pointer w-full px-4 py-2 text-start text-sm leading-5 text-gray-700 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 transition duration-150 ease-in-out">
                                            Logout
                                        </button>
                                    </form>
                                </x-slot:content>
                            </x-dropdown>
                        </div>
                    </div>
                </div>
                <main class="py-10 dark:bg-zinc-900 bg-zinc-50">
                    <div class="px-4 sm:px-6 lg:px-8">
                        {{$slot}}
                    </div>
                </main>
            </div>
        </div>
    </div>
</div>
<x-banner/>
@stack('modals')
@livewireScripts
</body>
</html>
