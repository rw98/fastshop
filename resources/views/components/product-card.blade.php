@props([
    "product"
])
<li class="flex hover:dark:bg-zinc-700 lg:dark:bg-zinc-800 hover:cursor-pointer justify-between gap-x-6 py-5  p-2 rounded-md">
    <div class="flex min-w-0 gap-x-4 grow">
        <img class="h-12 w-12 flex-none rounded-md bg-gray-50"
             src="https://images.unsplash.com/photo-1494790108377-be9c29b29330?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80"
             alt="">
        <div class="min-w-0 sm:flex-col flex w-full sm:w-auto">
            <p class="text-sm font-semibold leading-6 text-gray-900 dark:text-gray-300">
                {{$product->name}}
            </p>
            <div class="sm:hidden ms-auto sm:ms-2">
                <p class="mt-1 truncate text-xs leading-5 text-gray-500 dark:text-gray-400 text-end sm:text-start">
                    20,00 €</p>
                <p class="text-sm leading-6 text-gray-900 dark:text-gray-300 sm:hidden text-end">{{$product->available_stock_label_abbr}}
                    Verfügbar</p>
            </div>
            <p class="sm:flex hidden text-xs leading-5 text-gray-500 dark:text-gray-400">{{$product->net_price??0}}
                €</p>
        </div>
    </div>
    <div class="hidden shrink grow-0 sm:flex sm:flex-col sm:items-end">
        <p class="text-sm leading-6 text-gray-900 dark:text-gray-300">{{$product->available_stock_label_abbr}}
            Verfügbar</p>
        <p class="mt-1 text-xs leading-5 text-gray-500 dark:text-gray-400">Letzter verkauf
            <time datetime="2023-01-23T13:23Z">3h ago</time>
        </p>
    </div>
</li>
