<aside id="sidebar"
    class="fixed left-0 z-20 flex flex-col flex-shrink-0 hidden w-64 h-full pt-16 duration-200 top-5 lg:flex transition-width"
    aria-label="Sidebar">
    <div class="relative flex flex-col flex-1 min-h-0 pt-0 bg-gray-50">
        <div class="flex flex-col flex-1 pt-8 pb-4 overflow-y-auto">
            <div class="flex-1 px-3 bg-gray-50" id="sidebar-items">

                <hr class="h-px border-0 bg-gradient-to-r from-gray-100 via-gray-300 to-gray-100">
                <div class="pt-2">
                    <a href="{{ route('dashboard') }}"
                        class="flex items-center py-2.5 px-4 text-base font-normal text-dark-500 rounded-lg hover:bg-gray-200 group transition-all duration-200"
                        sidebar-toggle-collapse>

                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                            xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z">
                            </path>
                        </svg>

                        <span class="ml-3 text-sm font-light text-dark-500" sidebar-toggle-item>NUMBERS</span>
                    </a>
                </div>
            </div>
        </div>
</aside>

<div class="fixed inset-0 z-10 hidden bg-gray-900 opacity-50" id="sidebarBackdrop"></div>
