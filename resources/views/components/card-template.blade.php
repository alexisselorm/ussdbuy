<div class="w-full max-w-full px-3 mb-6 sm:w-1/2 sm:flex-none xl:mb-0 xl:w-1/4">
    <div
        class="relative flex flex-col min-w-0 break-words bg-white shadow-xl dark:bg-slate-850 dark:shadow-dark-xl rounded-2xl bg-clip-border">
        <div class="flex-auto p-4">
            <div class="flex flex-row -mx-3">
                <div class="flex-none w-2/3 max-w-full px-3">
                    <div>
                        {{ $slot }}
                    </div>
                </div>
                <div class="px-3 text-right basis-1/3">
                    <div
                        class="inline-block w-12 h-12 text-center rounded-circle bg-gradient-to-tl from-green-500 to-yellow-500">
                        <i class="ni leading-none ni-money-coins text-lg relative top-3.5 text-white"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
