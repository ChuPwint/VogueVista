<aside class="bg-black top-0 left-0 z-40 w-64 h-[89vh] transition-transform border-t border-white relative">
    <div class="h-full px-3 py-4 overflow-y-auto bg-black text-white">
        <div class="space-y-2 font-medium ">
            <div class="ml-4 mb-8">
                <span class="text-center text-2xl text-white font-medium">User Profile</span>
            </div>
            <a href="/userProfile" class="flex items-center p-2 text-white rounded-lg {{ request()->is('userProfile*') ? 'bg-[#7D7575]' : 'hover:bg-[#7D7575]' }} mb-2">
                <svg class="w-6 h-6 text-white transition duration-75 group-hover:text-gray-900"
                    fill="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="M12 12c2.21 0 4-1.79 4-4s-1.79-4-4-4-4 1.79-4 4 1.79 4 4 4zM12 14c-2.67 0-8 1.34-8 4v2h16v-2c0-2.66-5.33-4-8-4z">
                    </path>
                </svg>
                <span class="ml-3">User info</span>
            </a>
            <a href="/favorites" class="flex items-center p-2 text-white rounded-lg {{ request()->is('favorites*') ? 'bg-[#7D7575]' : 'hover:bg-[#7D7575]' }} mb-2">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                    stroke="currentColor"
                    class="h-6 w-6 text-white transition duration-75 group-hover:text-white" aria-hidden="true">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M21 8.25c0-2.485-2.099-4.5-4.688-4.5-1.935 0-3.597 1.126-4.312 2.733-.715-1.607-2.377-2.733-4.313-2.733C5.1 3.75 3 5.765 3 8.25c0 7.22 9 12 9 12s9-4.78 9-12Z" />
                </svg>
                <span class="ml-3">Favorites</span>
            </a>
            <a href="/orderHistory" class="flex items-center p-2 text-white rounded-lg {{ request()->is('orderHistory*') ? 'bg-[#7D7575]' : 'hover:bg-[#7D7575]' }} mb-2">
                <svg class="h-6 w-6 text-white transition duration-75 group-hover:text-white" width="24"
                    height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                    stroke-linecap="round" stroke-linejoin="round">
                    <path stroke="none" d="M0 0h24v24H0z" />
                    <rect x="5" y="3" width="14" height="18" rx="2" />
                    <line x1="9" y1="7" x2="15" y2="7" />
                    <line x1="9" y1="11" x2="15" y2="11" />
                    <line x1="9" y1="15" x2="13" y2="15" />
                </svg>
                <span class="ml-3">Order History</span>
            </a>
            <a href="/userProfile" class="flex items-center p-2 text-white rounded-lg {{ request()->is('notifications*') ? 'bg-[#7D7575]' : 'hover:bg-[#7D7575]' }} mb-2">
                <svg class="h-6 w-6 text-white transition duration-75 group-hover:text-white"
                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                    stroke-linecap="round" stroke-linejoin="round">
                    <path d="M18 8A6 6 0 0 0 6 8c0 7-3 9-3 9h18s-3-2-3-9" />
                    <path d="M13.73 21a2 2 0 0 1-3.46 0" />
                </svg>
                <span class="ml-3">Notifications</span>
            </a>
        </div>
    </div>
    <div class="absolute bottom-8 w-full flex items-center justify-center">
        <a href="#" class="flex items-center px-5 py-2 text-black rounded-lg bg-white font-medium">
            <svg class="h-6 w-6 text-black transition duration-75 group-hover:text-white mr-5" width="24"
                height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                stroke-linecap="round" stroke-linejoin="round">
                <path stroke="none" d="M0 0h24v24H0z" />
                <path d="M14 8v-2a2 2 0 0 0 -2 -2h-7a2 2 0 0 0 -2 2v12a2 2 0 0 0 2 2h7a2 2 0 0 0 2 -2v-2" />
                <path d="M7 12h14l-3 -3m0 6l3 -3" />
            </svg>
            Log Out
        </a>
    </div>

</aside>
