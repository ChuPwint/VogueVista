<div>
    <nav class="bg-black w-full">
        <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
            <img src="/images/Logo.png" class="h-12 w-12 object-cover" alt="Flowbite Logo">
            <div class="flex md:order-2 space-x-3 rtl:space-x-reverse">
                <form class="max-w-md mx-auto">
                    <div class="relative">
                        <input type="search"
                            class="block p-2.5 w-9/12 z-20 text-sm text-gray-900 bg-gray-50 rounded-s-lg border-s-gray-50 border-s-2 border border-gray-300 outline-none"
                            placeholder="Search" required />
                        <button type="submit"
                            class="absolute top-0 end-0 p-2.5 mr-2 text-sm font-medium h-full text-white bg-gray-500 rounded-e-lg border border-gray-500 hover:bg-gray-600 focus:ring-4 focus:outline-none focus:ring-gray-500">
                            <svg class="w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                fill="none" viewBox="0 0 20 20">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z" />
                            </svg>
                            <span class="sr-only">Search</span>
                        </button>
                    </div>
                </form>
                <div class="flex items-center space-x-4">
                    <a href="#" class="text-white hover:text-gray-400">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                            stroke-width="1.5" stroke="currentColor" class="w-6 h-6" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M21 8.25c0-2.485-2.099-4.5-4.688-4.5-1.935 0-3.597 1.126-4.312 2.733-.715-1.607-2.377-2.733-4.313-2.733C5.1 3.75 3 5.765 3 8.25c0 7.22 9 12 9 12s9-4.78 9-12Z" />
                        </svg>
                    </a>

                    <a href="/cart" class="relative text-white hover:text-gray-400">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                            stroke-width="1.5" stroke="currentColor" class="w-6 h-6" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M15.75 10.5V6a3.75 3.75 0 1 0-7.5 0v4.5m11.356-1.993 1.263 12c.07.665-.45 1.243-1.119 1.243H4.25a1.125 1.125 0 0 1-1.12-1.243l1.264-12A1.125 1.125 0 0 1 5.513 7.5h12.974c.576 0 1.059.435 1.119 1.007ZM8.625 10.5a.375.375 0 1 1-.75 0 .375.375 0 0 1 .75 0Zm7.5 0a.375.375 0 1 1-.75 0 .375.375 0 0 1 .75 0Z" />
                        </svg>
                        <div class="absolute -top-3 -right-3 w-5 h-5 rounded-full bg-red-500 text-white flex items-center justify-center">
                            <span class="text-sm font-medium">{{ $cartItems }}</span>
                        </div>
                    </a>
                    @php
                        $loggedIn = ($status == "logIn") ? true : false;
                    @endphp
                    <a href="/userProfile"
                    @class([
                        'text-white',
                        'hover:text-gray-400', 
                        'hidden' => !$loggedIn,
                        'block' => $loggedIn])
                    >
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" stroke-width="2"
                            viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M12 4a4 4 0 100 8 4 4 0 000-8zM16 20H8a4 4 0 01-4-4v-1a4 4 0 014-4h8a4 4 0 014 4v1a4 4 0 01-4 4z">
                            </path>
                        </svg>
                    </a>
                    @php
                        $loggedIn = ($status == "logIn") ? true : false;
                    @endphp

                    <a href="/login" 
                    @class([
                        'bg-black',
                        'text-white',
                        'border',
                        'border-white',
                        'font-medium',
                        'p-2',
                        'rounded',
                        'px-4',
                        'hover:bg-white',
                        'hover:text-black',
                        'transition',
                        'duration-500',
                        'hidden' => $loggedIn,
                        'block' => !$loggedIn])
                    > 
                        Login 
                    </a>
                </div>
            </div>
            <div class="items-center justify-between hidden w-full md:flex md:w-auto md:order-1" id="navbar-sticky">
                <ul
                    class="flex flex-col p-4 md:p-0 mt-4 font-medium md:space-x-12 rtl:space-x-reverse md:flex-row md:mt-0 bg-black">
                    <li>
                        <a href="/"
                            class="block py-2 px-3 text-white md:hover:text-gray-400 md:p-0">Home</a>
                    </li>
                    <li>
                        <a href="/about" class="block py-2 px-3 md:hover:text-gray-400 md:p-0 text-white">About
                            Us</a>
                    </li>
                    <li>
                        <a href="/shop" class="block py-2 px-3 md:hover:text-gray-400 md:p-0 text-white">Shop</a>
                    </li>
                    <li>
                        <a href="/services"
                            class="block py-2 px-3 md:hover:text-gray-400 md:p-0 text-white">Services</a>
                    </li>
                    <li>
                        <a href="/contactUs" class="block py-2 px-3 md:hover:text-gray-400 md:p-0 text-white">Contact
                            Us</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</div>
