<nav id="default-sidebar" class="fixed top-0 left-0 w-1/5 h-screen transition-transform -translate-x-full sm:translate-x-0 border-r" aria-label="Sidebar">
    <div class="h-full px-3 py-4 overflow-y-auto bg-gray-50 dark:bg-gray-800">
        <a href="{{ url('/') }}" class="flex items-center pl-2.5 mb-5">
           <span class="self-center text-xl font-semibold whitespace-nowrap dark:text-white">Chirper</span>
        </a>
        <ul class="space-y-2">
            <li>
                <a href="{{ url('/' . Auth::user()->name) }}" class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
                    <span class="ml-3">Profile</span>
                </a>
            </li>
            <li>
                <a href="{{ url('/logout') }}" class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
                    <span class="ml-3">Log Out</span>
                </a>
            </li>
        </ul>
    </div>
</nav>
