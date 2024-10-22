<div class="flex grow flex-col gap-y-5 overflow-y-auto bg-indigo-600 dark:bg-zinc-800 dark:text-indigo-200 px-6 pb-4">
    <div class="flex h-16 shrink-0 items-center">
        <img class="h-8 w-auto" src="https://ffn-connect.de/images/logo-sm.svg"
             alt="{{config('app.name')}}">
    </div>
    <nav class="flex flex-1 flex-col">
        <ul role="list" class="flex flex-1 flex-col gap-y-7">
            <li>
                <ul role="list" class="-mx-2 space-y-1">
                    <li>
                        <a href="#"
                           class="bg-indigo-700 text-white group flex gap-x-3 rounded-md p-2 text-sm leading-6 font-semibold"
                           x-state:on="Current" x-state:off="Default"
                           x-state-description="Current: &quot;bg-indigo-700 text-white&quot;, Default: &quot;text-indigo-200 hover:text-white hover:bg-indigo-700&quot;">
                            <svg class="h-6 w-6 shrink-0 text-white" fill="none"
                                 viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                                 aria-hidden="true" data-slot="icon">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                      d="m2.25 12 8.954-8.955c.44-.439 1.152-.439 1.591 0L21.75 12M4.5 9.75v10.125c0 .621.504 1.125 1.125 1.125H9.75v-4.875c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125V21h4.125c.621 0 1.125-.504 1.125-1.125V9.75M8.25 21h8.25"></path>
                            </svg>
                            Dashboard
                        </a>
                    </li>
                    <li>
                        <a href="{{route('merchant.products.index')}}"
                           wire:navigate.hover
                           class="text-indigo-200 hover:text-white hover:bg-indigo-700 group flex gap-x-3 rounded-md p-2 text-sm leading-6 font-semibold"
                           x-state-description="undefined: &quot;bg-indigo-700 text-white&quot;, undefined: &quot;text-indigo-200 hover:text-white hover:bg-indigo-700&quot;">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 10.5V6a3.75 3.75 0 1 0-7.5 0v4.5m11.356-1.993 1.263 12c.07.665-.45 1.243-1.119 1.243H4.25a1.125 1.125 0 0 1-1.12-1.243l1.264-12A1.125 1.125 0 0 1 5.513 7.5h12.974c.576 0 1.059.435 1.119 1.007ZM8.625 10.5a.375.375 0 1 1-.75 0 .375.375 0 0 1 .75 0Zm7.5 0a.375.375 0 1 1-.75 0 .375.375 0 0 1 .75 0Z" />
                            </svg>
                            {{__('globals.products')}}
                        </a>
                    </li>
                    <li>
                        <a href="#"
                           class="text-indigo-200 hover:text-white hover:bg-indigo-700 group flex gap-x-3 rounded-md p-2 text-sm leading-6 font-semibold"
                           x-state-description="undefined: &quot;bg-indigo-700 text-white&quot;, undefined: &quot;text-indigo-200 hover:text-white hover:bg-indigo-700&quot;">
                            <svg class="h-6 w-6 shrink-0 text-indigo-200 group-hover:text-white"
                                 fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                 stroke="currentColor" aria-hidden="true" data-slot="icon">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                      d="M2.25 12.75V12A2.25 2.25 0 0 1 4.5 9.75h15A2.25 2.25 0 0 1 21.75 12v.75m-8.69-6.44-2.12-2.12a1.5 1.5 0 0 0-1.061-.44H4.5A2.25 2.25 0 0 0 2.25 6v12a2.25 2.25 0 0 0 2.25 2.25h15A2.25 2.25 0 0 0 21.75 18V9a2.25 2.25 0 0 0-2.25-2.25h-5.379a1.5 1.5 0 0 1-1.06-.44Z"></path>
                            </svg>
                            Projects
                        </a>
                    </li>
                    <li>
                        <a href="#"
                           class="text-indigo-200 hover:text-white hover:bg-indigo-700 group flex gap-x-3 rounded-md p-2 text-sm leading-6 font-semibold"
                           x-state-description="undefined: &quot;bg-indigo-700 text-white&quot;, undefined: &quot;text-indigo-200 hover:text-white hover:bg-indigo-700&quot;">
                            <svg class="h-6 w-6 shrink-0 text-indigo-200 group-hover:text-white"
                                 fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                 stroke="currentColor" aria-hidden="true" data-slot="icon">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                      d="M6.75 3v2.25M17.25 3v2.25M3 18.75V7.5a2.25 2.25 0 0 1 2.25-2.25h13.5A2.25 2.25 0 0 1 21 7.5v11.25m-18 0A2.25 2.25 0 0 0 5.25 21h13.5A2.25 2.25 0 0 0 21 18.75m-18 0v-7.5A2.25 2.25 0 0 1 5.25 9h13.5A2.25 2.25 0 0 1 21 11.25v7.5"></path>
                            </svg>
                            Calendar
                        </a>
                    </li>
                    <li>
                        <a href="#"
                           class="text-indigo-200 hover:text-white hover:bg-indigo-700 group flex gap-x-3 rounded-md p-2 text-sm leading-6 font-semibold"
                           x-state-description="undefined: &quot;bg-indigo-700 text-white&quot;, undefined: &quot;text-indigo-200 hover:text-white hover:bg-indigo-700&quot;">
                            <svg class="h-6 w-6 shrink-0 text-indigo-200 group-hover:text-white"
                                 fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                 stroke="currentColor" aria-hidden="true" data-slot="icon">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                      d="M15.75 17.25v3.375c0 .621-.504 1.125-1.125 1.125h-9.75a1.125 1.125 0 0 1-1.125-1.125V7.875c0-.621.504-1.125 1.125-1.125H6.75a9.06 9.06 0 0 1 1.5.124m7.5 10.376h3.375c.621 0 1.125-.504 1.125-1.125V11.25c0-4.46-3.243-8.161-7.5-8.876a9.06 9.06 0 0 0-1.5-.124H9.375c-.621 0-1.125.504-1.125 1.125v3.5m7.5 10.375H9.375a1.125 1.125 0 0 1-1.125-1.125v-9.25m12 6.625v-1.875a3.375 3.375 0 0 0-3.375-3.375h-1.5a1.125 1.125 0 0 1-1.125-1.125v-1.5a3.375 3.375 0 0 0-3.375-3.375H9.75"></path>
                            </svg>
                            Documents
                        </a>
                    </li>
                    <li>
                        <a href="#"
                           class="text-indigo-200 hover:text-white hover:bg-indigo-700 group flex gap-x-3 rounded-md p-2 text-sm leading-6 font-semibold"
                           x-state-description="undefined: &quot;bg-indigo-700 text-white&quot;, undefined: &quot;text-indigo-200 hover:text-white hover:bg-indigo-700&quot;">
                            <svg class="h-6 w-6 shrink-0 text-indigo-200 group-hover:text-white"
                                 fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                 stroke="currentColor" aria-hidden="true" data-slot="icon">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                      d="M10.5 6a7.5 7.5 0 1 0 7.5 7.5h-7.5V6Z"></path>
                                <path stroke-linecap="round" stroke-linejoin="round"
                                      d="M13.5 10.5H21A7.5 7.5 0 0 0 13.5 3v7.5Z"></path>
                            </svg>
                            Reports
                        </a>
                    </li>

                </ul>
            </li>
            <li>
                <div class="text-xs font-semibold leading-6 text-indigo-200">Your teams</div>
                <ul role="list" class="-mx-2 mt-2 space-y-1">
                    <li>
                        <a href="#"
                           class="text-indigo-200 hover:text-white hover:bg-indigo-700 group flex gap-x-3 rounded-md p-2 text-sm leading-6 font-semibold"
                           x-state:on="Current" x-state:off="Default"
                           x-state-description="Current: &quot;bg-indigo-700 text-white&quot;, Default: &quot;text-indigo-200 hover:text-white hover:bg-indigo-700&quot;">
                                                    <span
                                                        class="flex h-6 w-6 shrink-0 items-center justify-center rounded-lg border border-indigo-400 bg-indigo-500 text-[0.625rem] font-medium text-white">H</span>
                            <span class="truncate">Heroicons</span>
                        </a>
                    </li>
                    <li>
                        <a href="#"
                           class="text-indigo-200 hover:text-white hover:bg-indigo-700 group flex gap-x-3 rounded-md p-2 text-sm leading-6 font-semibold"
                           x-state-description="undefined: &quot;bg-indigo-700 text-white&quot;, undefined: &quot;text-indigo-200 hover:text-white hover:bg-indigo-700&quot;">
                                                    <span
                                                        class="flex h-6 w-6 shrink-0 items-center justify-center rounded-lg border border-indigo-400 bg-indigo-500 text-[0.625rem] font-medium text-white">T</span>
                            <span class="truncate">Tailwind Labs</span>
                        </a>
                    </li>
                    <li>
                        <a href="#"
                           class="text-indigo-200 hover:text-white hover:bg-indigo-700 group flex gap-x-3 rounded-md p-2 text-sm leading-6 font-semibold"
                           x-state-description="undefined: &quot;bg-indigo-700 text-white&quot;, undefined: &quot;text-indigo-200 hover:text-white hover:bg-indigo-700&quot;">
                                                    <span
                                                        class="flex h-6 w-6 shrink-0 items-center justify-center rounded-lg border border-indigo-400 bg-indigo-500 text-[0.625rem] font-medium text-white">W</span>
                            <span class="truncate">Workcation</span>
                        </a>
                    </li>

                </ul>
            </li>
            <li class="mt-auto">
                <a href="#"
                   class="group -mx-2 flex gap-x-3 rounded-md p-2 text-sm font-semibold leading-6 text-indigo-200 hover:bg-indigo-700 hover:text-white">
                    <svg class="h-6 w-6 shrink-0 text-indigo-200 group-hover:text-white"
                         fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                         stroke="currentColor" aria-hidden="true" data-slot="icon">
                        <path stroke-linecap="round" stroke-linejoin="round"
                              d="M9.594 3.94c.09-.542.56-.94 1.11-.94h2.593c.55 0 1.02.398 1.11.94l.213 1.281c.063.374.313.686.645.87.074.04.147.083.22.127.325.196.72.257 1.075.124l1.217-.456a1.125 1.125 0 0 1 1.37.49l1.296 2.247a1.125 1.125 0 0 1-.26 1.431l-1.003.827c-.293.241-.438.613-.43.992a7.723 7.723 0 0 1 0 .255c-.008.378.137.75.43.991l1.004.827c.424.35.534.955.26 1.43l-1.298 2.247a1.125 1.125 0 0 1-1.369.491l-1.217-.456c-.355-.133-.75-.072-1.076.124a6.47 6.47 0 0 1-.22.128c-.331.183-.581.495-.644.869l-.213 1.281c-.09.543-.56.94-1.11.94h-2.594c-.55 0-1.019-.398-1.11-.94l-.213-1.281c-.062-.374-.312-.686-.644-.87a6.52 6.52 0 0 1-.22-.127c-.325-.196-.72-.257-1.076-.124l-1.217.456a1.125 1.125 0 0 1-1.369-.49l-1.297-2.247a1.125 1.125 0 0 1 .26-1.431l1.004-.827c.292-.24.437-.613.43-.991a6.932 6.932 0 0 1 0-.255c.007-.38-.138-.751-.43-.992l-1.004-.827a1.125 1.125 0 0 1-.26-1.43l1.297-2.247a1.125 1.125 0 0 1 1.37-.491l1.216.456c.356.133.751.072 1.076-.124.072-.044.146-.086.22-.128.332-.183.582-.495.644-.869l.214-1.28Z"></path>
                        <path stroke-linecap="round" stroke-linejoin="round"
                              d="M15 12a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z"></path>
                    </svg>
                    Settings
                </a>
            </li>
        </ul>
    </nav>
</div>
