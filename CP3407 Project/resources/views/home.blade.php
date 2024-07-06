<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home</title>
    @vite('resources/css/app.css')

</head>

<body>
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

                        <a href="#" class="text-white hover:text-gray-400">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                stroke-width="1.5" stroke="currentColor" class="w-6 h-6" aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M15.75 10.5V6a3.75 3.75 0 1 0-7.5 0v4.5m11.356-1.993 1.263 12c.07.665-.45 1.243-1.119 1.243H4.25a1.125 1.125 0 0 1-1.12-1.243l1.264-12A1.125 1.125 0 0 1 5.513 7.5h12.974c.576 0 1.059.435 1.119 1.007ZM8.625 10.5a.375.375 0 1 1-.75 0 .375.375 0 0 1 .75 0Zm7.5 0a.375.375 0 1 1-.75 0 .375.375 0 0 1 .75 0Z" />
                            </svg>
                        </a>
                        <a href="#" class="text-white hover:text-gray-400">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" stroke-width="2"
                                viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M12 4a4 4 0 100 8 4 4 0 000-8zM16 20H8a4 4 0 01-4-4v-1a4 4 0 014-4h8a4 4 0 014 4v1a4 4 0 01-4 4z">
                                </path>
                            </svg>
                        </a>
                    </div>
                </div>
                <div class="items-center justify-between hidden w-full md:flex md:w-auto md:order-1" id="navbar-sticky">
                    <ul
                        class="flex flex-col p-4 md:p-0 mt-4 font-medium md:space-x-12 rtl:space-x-reverse md:flex-row md:mt-0 bg-black">
                        <li>
                            <a href="/"
                                class="block py-2 px-3 text-white md:text-gray-400 md:p-0"
                                aria-current="page">Home</a>
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


    <div id="indicators-carousel" class="relative w-full" data-carousel="static">
        <div class="relative overflow-hidden h-[499px]">
            <div class="duration-700 ease-in-out" data-carousel-item="active">
                <img src="/images/slider 1.png"
                    class="absolute block w-full h-[499px] bg-cover -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2"
                    alt="...">
            </div>
            <div class="duration-700 ease-in-out" data-carousel-item>
                <img src="/images/Member promotion.png"
                    class="absolute block w-full h-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
            </div>
            <div class="duration-700 ease-in-out" data-carousel-item>
                <img src="/images/slider 1.png"
                    class="absolute block w-full h-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
            </div>
            <div class="duration-700 ease-in-out" data-carousel-item>
                <img src="/images/slider 1.png"
                    class="absolute block w-full h-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
            </div>
            <div class="duration-700 ease-in-out" data-carousel-item>
                <img src="/images/slider 1.png"
                    class="absolute block w-full h-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
            </div>
        </div>
        <div
            class="absolute z-30 flex -translate-x-1/2 space-x-3 rtl:space-x-reverse bottom-5 left-1/2 carousel-indicators">
            <button type="button" class="w-3 h-3 rounded-full" aria-current="true" aria-label="Slide 1"
                data-carousel-slide-to="0"></button>
            <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 2"
                data-carousel-slide-to="1"></button>
            <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 3"
                data-carousel-slide-to="2"></button>
            <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 4"
                data-carousel-slide-to="3"></button>
            <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 5"
                data-carousel-slide-to="4"></button>
        </div>
        <button type="button"
            class="absolute top-0 start-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none"
            data-carousel-prev>
            <span
                class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 group-hover:bg-white/50">
                <svg class="w-4 h-4 text-black rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                    fill="none" viewBox="0 0 6 10">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M5 1 1 5l4 4" />
                </svg>
                <span class="sr-only">Previous</span>
            </span>
        </button>
        <button type="button"
            class="absolute top-0 end-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none"
            data-carousel-next>
            <span
                class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 group-hover:bg-white/50">
                <svg class="w-4 h-4 text-black rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                    fill="none" viewBox="0 0 6 10">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="m1 9 4-4-4-4" />
                </svg>
                <span class="sr-only">Next</span>
            </span>
        </button>
    </div>
    <div class="bg-[#141212] opacity-92">
        <br>
        <h1 class="text-center text-2xl font-medium mt-4 text-white cursor-pointer">New Arrivals</h1><br>
            <div class="flex flex-wrap justify-center px-28">
                <div class="w-1/3 p-2">
                    <div class="p-4">
                        <div class="w-full">
                            <img src="images/new arrival dress.webp" alt=""
                                class="w-full h-[26rem] object-cover">
                            <div class="mt-2">
                                <div class="flex justify-between items-center">
                                    <div class="text-white">
                                        <h6>Classic Velvet Dress</h6>
                                        <h6>$70</h6>
                                    </div>
                                    <div>
                                        <a href="#" class="text-white hover:text-gray-400">
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none"
                                                viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                                                class="w-6 h-6" aria-hidden="true">
                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                    d="M21 8.25c0-2.485-2.099-4.5-4.688-4.5-1.935 0-3.597 1.126-4.312 2.733-.715-1.607-2.377-2.733-4.313-2.733C5.1 3.75 3 5.765 3 8.25c0 7.22 9 12 9 12s9-4.78 9-12Z" />
                                            </svg>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="w-1/3 p-2">
                    <div class="p-4">
                        <div class="w-full">
                            <img src="images/new arrival top.webp" alt=""
                                class="w-full h-[26rem] object-cover">
                            <div class="mt-2">
                                <div class="flex justify-between items-center">
                                    <div class="text-white">
                                        <h6>Elegant Blouse</h6>
                                        <h6>$70</h6>
                                    </div>
                                    <div>
                                        <a href="" class="text-white hover:text-gray-400">
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none"
                                                viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                                                class="w-6 h-6" aria-hidden="true">
                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                    d="M21 8.25c0-2.485-2.099-4.5-4.688-4.5-1.935 0-3.597 1.126-4.312 2.733-.715-1.607-2.377-2.733-4.313-2.733C5.1 3.75 3 5.765 3 8.25c0 7.22 9 12 9 12s9-4.78 9-12Z" />
                                            </svg>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="w-1/3 p-2">
                    <div class="p-4">
                        <div class="w-full">
                            <img src="images/new arrival skirt.jpg" alt=""
                                class="w-full h-[26rem] object-cover">
                            <div class="mt-2">
                                <div class="flex justify-between items-center">
                                    <div class="text-white">
                                        <h6>Long Aesthetic Dress</h6>
                                        <h6>$70</h6>
                                    </div>
                                    <div>
                                        <a href="" class="text-white hover:text-gray-400">
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none"
                                                viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                                                class="w-6 h-6" aria-hidden="true">
                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                    d="M21 8.25c0-2.485-2.099-4.5-4.688-4.5-1.935 0-3.597 1.126-4.312 2.733-.715-1.607-2.377-2.733-4.313-2.733C5.1 3.75 3 5.765 3 8.25c0 7.22 9 12 9 12s9-4.78 9-12Z" />
                                            </svg>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div>
                    <button class="bg-white text-black rounded-lg p-2 px-4 mb-8 font-semibold">View All</button>
                </div>
            </div>
            <div class="bg-[#CDCDC5] opacity-92">
                <br>
                <h1 class="text-center text-2xl font-medium mt-4 cursor-pointer">Categories</h1><br><br>
                <div class="columns-2 px-10">
                    <div class="relative px-4 hover:brightness-125 transition-all duration-800 ease-in-out cursor-pointer">
                        <img src="images/categories women.jpg" alt=""
                            class="w-full h-[38rem] object-cover brightness-50 drop-shadow-sm contrast-100">
                        <div class="text-overlay absolute items-center justify-center flex inset-0">
                            <a href="#shop" class="relative group">
                                <h2
                                    class="text-3xl font-medium text-white opacity-80 tracking-widest after:content-[''] after:absolute after:w-full after:h-0.5 after:bottom-[-0.25rem] after:bg-white after:left-0 after:scale-x-0 after:origin-bottom-left after:transition-transform after:duration-300 group-hover:after:scale-x-100 after:ease-in-out">
                                    WOMEN</h2>
                            </a>
                        </div>
                    </div>
                    <div class="w-full px-4">
                        <div class="relative hover:brightness-125 transition-all duration-800 ease-in-out cursor-pointer">
                            <img src="images/categories men.jpg" alt=""
                                class="w-full h-[18rem] object-cover brightness-50 drop-shadow-sm contrast-100">
                            <div class="text-overlay absolute items-center justify-center flex inset-0">
                                <a href="#shop" class="relative group">
                                    <h2
                                        class="text-3xl font-medium text-white opacity-80 tracking-widest after:content-[''] after:absolute after:w-full after:h-0.5 after:bottom-[-0.25rem]  after:bg-white after:left-0 after:scale-x-0 after:origin-bottom-left after:transition-transform after:duration-300 group-hover:after:scale-x-100 after:ease-in-out">
                                        MEN</h2>
                                </a>
                            </div>
                        </div>
                        <div class="relative hover:brightness-125 transition-all duration-800 ease-in-out cursor-pointer">
                            <img src="images/women accessories.jpg" alt=""
                                class="w-full h-[18rem] object-cover mt-8 brightness-50 drop-shadow-sm contrast-100">
                            <div class="text-overlay absolute items-center justify-center flex inset-0">
                                <a href="#shop" class="relative group">
                                    <h2
                                        class="text-3xl font-medium text-white opacity-80 tracking-widest after:content-[''] after:absolute after:w-full after:h-0.5 after:bottom-[-0.25rem]  after:bg-white after:left-0 after:scale-x-0 after:origin-bottom-left after:transition-transform after:duration-300 group-hover:after:scale-x-100 after:ease-in-out">
                                        ACCESSORIES</h2>
                                </a>
                            </div>
                        </div>
                    </div>
                </div><br><br>

                <footer class="bg-black">
                    <div class="mx-auto w-full max-w-screen-xl p-4 py-6 lg:py-8">
                        <div class="md:flex md:justify-between">
                            <div class="mb-6 md:mb-0">
                                <a href="https://flowbite.com/">
                                    <h1
                                        class="text-2xl font-bold italic whitespace-nowrap text-white align-middle text-center">
                                        Vogue Vista</h1>
                                </a>
                            </div>
                            <div class="grid grid-cols-2 gap-56 sm:gap sm:grid-cols-3">
                                <div>
                                    <h2 class="mb-4 text-l font-semibold text-white uppercase italic">Information</h2>
                                    <ul class="text-white font-medium">
                                        <li class="mb-2 group">
                                            <a href="/home"
                                                class="relative after:content-[''] after:absolute after:w-full after:h-[1px] after:bottom-[-0.25rem] after:bg-white after:left-0 after:scale-x-0 after:origin-bottom-left after:transition-transform after:duration-300 group-hover:after:scale-x-100 after:ease-in-out">Home</a>
                                        </li>
                                        <li class="mb-2 group">
                                            <a href="/about"
                                                class="relative after:content-[''] after:absolute after:w-full after:h-[1px] after:bottom-[-0.25rem] after:bg-white after:left-0 after:scale-x-0 after:origin-bottom-left after:transition-transform after:duration-300 group-hover:after:scale-x-100 after:ease-in-out">About
                                                Us</a>
                                        </li>
                                        <li class="group">
                                            <a href="/services"
                                                class="relative after:content-[''] after:absolute after:w-full after:h-[1px] after:bottom-[-0.25rem] after:bg-white after:left-0 after:scale-x-0 after:origin-bottom-left after:transition-transform after:duration-300 group-hover:after:scale-x-100 after:ease-in-out">Services</a>
                                        </li>
                                    </ul>
                                </div>
                                <div>
                                    <h2 class="mb-4 text-l font-semibold uppercase text-white italic">Shop</h2>
                                    <ul class="text-white font-medium">
                                        <li class="mb-2 group">
                                            <a href="/shop"
                                                class="relative after:content-[''] after:absolute after:w-full after:h-[1px] after:bottom-[-0.25rem] after:bg-white after:left-0 after:scale-x-0 after:origin-bottom-left after:transition-transform after:duration-300 group-hover:after:scale-x-100 after:ease-in-out">Men</a>
                                        </li>
                                        <li class="mb-2 group">
                                            <a href="/shop"
                                                class="relative after:content-[''] after:absolute after:w-full after:h-[1px] after:bottom-[-0.25rem] after:bg-white after:left-0 after:scale-x-0 after:origin-bottom-left after:transition-transform after:duration-300 group-hover:after:scale-x-100 after:ease-in-out">Women</a>
                                        </li>
                                        <li class="group">
                                            <a href="/shop"
                                                class="relative after:content-[''] after:absolute after:w-full after:h-[1px] after:bottom-[-0.25rem] after:bg-white after:left-0 after:scale-x-0 after:origin-bottom-left after:transition-transform after:duration-300 group-hover:after:scale-x-100 after:ease-in-out">Accessoriess</a>
                                        </li>
                                    </ul>
                                </div>
                                <div>
                                    <h2 class="mb-4 text-l font-semibold text-white italic uppercase">Contact Us</h2>
                                    <ul class="text-white font-medium">
                                        <li class="mb-2 flex gap-2">
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none"
                                                viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                                                class="size-5 mt-1 fill-white">
                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                    d="M2.25 6.75c0 8.284 6.716 15 15 15h2.25a2.25 2.25 0 0 0 2.25-2.25v-1.372c0-.516-.351-.966-.852-1.091l-4.423-1.106c-.44-.11-.902.055-1.173.417l-.97 1.293c-.282.376-.769.542-1.21.38a12.035 12.035 0 0 1-7.143-7.143c-.162-.441.004-.928.38-1.21l1.293-.97c.363-.271.527-.734.417-1.173L6.963 3.102a1.125 1.125 0 0 0-1.091-.852H4.5A2.25 2.25 0 0 0 2.25 4.5v2.25Z" />
                                            </svg>
                                            <a href="tel:68932100">+65 68932100</a>
                                        </li>
                                        <li class="flex gap-2 mb-4">
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                                stroke-width="1.5" stroke="currentColor"
                                                class="size-6 fill-white text-black">
                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                    d="M21.75 6.75v10.5a2.25 2.25 0 0 1-2.25 2.25h-15a2.25 2.25 0 0 1-2.25-2.25V6.75m19.5 0A2.25 2.25 0 0 0 19.5 4.5h-15a2.25 2.25 0 0 0-2.25 2.25m19.5 0v.243a2.25 2.25 0 0 1-1.07 1.916l-7.5 4.615a2.25 2.25 0 0 1-2.36 0L3.32 8.91a2.25 2.25 0 0 1-1.07-1.916V6.75" />
                                            </svg>
                                            <a href="mailto:abc@gmail.com">abc@gmail.com</a>
                                        </li>
                                        <li class="flex gap-4">
                                            <a href="https://www.instagram.com/">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28"
                                                    viewBox="0 0 71 72"
                                                    class="bg-white text-black rounded-full hover:text-white hover:bg-black transition duration-500">
                                                    <path fill="currentColor"
                                                        d="M27.3762 35.7808C27.3762 31.1786 31.1083 27.4468 35.7132 27.4468C40.3182 27.4468 44.0522 31.1786 44.0522 35.7808C44.0522 40.383 40.3182 44.1148 35.7132 44.1148C31.1083 44.1148 27.3762 40.383 27.3762 35.7808ZM22.8683 35.7808C22.8683 42.8708 28.619 48.618 35.7132 48.618C42.8075 48.618 48.5581 42.8708 48.5581 35.7808C48.5581 28.6908 42.8075 22.9436 35.7132 22.9436C28.619 22.9436 22.8683 28.6908 22.8683 35.7808ZM46.0648 22.4346C46.0646 23.0279 46.2404 23.608 46.5701 24.1015C46.8997 24.595 47.3684 24.9797 47.9168 25.2069C48.4652 25.4342 49.0688 25.4939 49.6511 25.3784C50.2334 25.2628 50.7684 24.9773 51.1884 24.5579C51.6084 24.1385 51.8945 23.6041 52.0105 23.0222C52.1266 22.4403 52.0674 21.8371 51.8404 21.2888C51.6134 20.7406 51.2289 20.2719 50.7354 19.942C50.2418 19.6122 49.6615 19.436 49.0679 19.4358H49.0667C48.2708 19.4361 47.5077 19.7522 46.9449 20.3144C46.3821 20.8767 46.0655 21.6392 46.0648 22.4346ZM25.6072 56.1302C23.1683 56.0192 21.8427 55.6132 20.9618 55.2702C19.7939 54.8158 18.9606 54.2746 18.0845 53.4002C17.2083 52.5258 16.666 51.6938 16.2133 50.5266C15.8699 49.6466 15.4637 48.3214 15.3528 45.884C15.2316 43.2488 15.2073 42.4572 15.2073 35.781C15.2073 29.1048 15.2336 28.3154 15.3528 25.678C15.4639 23.2406 15.8731 21.918 16.2133 21.0354C16.668 19.8682 17.2095 19.0354 18.0845 18.1598C18.9594 17.2842 19.7919 16.7422 20.9618 16.2898C21.8423 15.9466 23.1683 15.5406 25.6072 15.4298C28.244 15.3086 29.036 15.2844 35.7132 15.2844C42.3904 15.2844 43.1833 15.3106 45.8223 15.4298C48.2612 15.5408 49.5846 15.9498 50.4677 16.2898C51.6356 16.7422 52.4689 17.2854 53.345 18.1598C54.2211 19.0342 54.7615 19.8682 55.2161 21.0354C55.5595 21.9154 55.9658 23.2406 56.0767 25.678C56.1979 28.3154 56.2221 29.1048 56.2221 35.781C56.2221 42.4572 56.1979 43.2466 56.0767 45.884C55.9656 48.3214 55.5573 49.6462 55.2161 50.5266C54.7615 51.6938 54.2199 52.5266 53.345 53.4002C52.4701 54.2738 51.6356 54.8158 50.4677 55.2702C49.5872 55.6134 48.2612 56.0194 45.8223 56.1302C43.1855 56.2514 42.3934 56.2756 35.7132 56.2756C29.033 56.2756 28.2432 56.2514 25.6072 56.1302ZM25.4001 10.9322C22.7371 11.0534 20.9174 11.4754 19.3282 12.0934C17.6824 12.7316 16.2892 13.5878 14.897 14.977C13.5047 16.3662 12.6502 17.7608 12.0116 19.4056C11.3933 20.9948 10.971 22.8124 10.8497 25.4738C10.7265 28.1394 10.6982 28.9916 10.6982 35.7808C10.6982 42.57 10.7265 43.4222 10.8497 46.0878C10.971 48.7494 11.3933 50.5668 12.0116 52.156C12.6502 53.7998 13.5049 55.196 14.897 56.5846C16.289 57.9732 17.6824 58.8282 19.3282 59.4682C20.9204 60.0862 22.7371 60.5082 25.4001 60.6294C28.0687 60.7506 28.92 60.7808 35.7132 60.7808C42.5065 60.7808 43.3592 60.7526 46.0264 60.6294C48.6896 60.5082 50.5081 60.0862 52.0983 59.4682C53.7431 58.8282 55.1373 57.9738 56.5295 56.5846C57.9218 55.1954 58.7745 53.7998 59.4149 52.156C60.0332 50.5668 60.4575 48.7492 60.5768 46.0878C60.698 43.4202 60.7262 42.57 60.7262 35.7808C60.7262 28.9916 60.698 28.1394 60.5768 25.4738C60.4555 22.8122 60.0332 20.9938 59.4149 19.4056C58.7745 17.7618 57.9196 16.3684 56.5295 14.977C55.1395 13.5856 53.7431 12.7316 52.1003 12.0934C50.5081 11.4754 48.6894 11.0514 46.0284 10.9322C43.3612 10.811 42.5085 10.7808 35.7152 10.7808C28.922 10.7808 28.0687 10.809 25.4001 10.9322Z" />
                                                </svg>
                                            </a>
                                            <a href="https://www.facebook.com/">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28"
                                                    viewBox="0 0 71 72"
                                                    class="bg-white text-black rounded-full hover:bg-black hover:text-white transition duration-500">
                                                    <path fill="currentColor"
                                                        d="M46.4233 38.6403L47.7279 30.3588H39.6917V24.9759C39.6917 22.7114 40.8137 20.4987 44.4013 20.4987H48.1063V13.4465C45.9486 13.1028 43.7685 12.9168 41.5834 12.8901C34.9692 12.8901 30.651 16.8626 30.651 24.0442V30.3588H23.3193V38.6403H30.651V58.671H39.6917V38.6403H46.4233Z"
                                                        class="fill-current" />
                                                </svg>
                                            </a>

                                            <a href="https://twitter.com/">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28"
                                                    viewBox="0 0 512 512"
                                                    class="text-black bg-white  rounded-full p-1 hover:text-white hover:bg-black  transition duration-500">
                                                    <path fill="currentColor"
                                                        d="M459.37 151.716c.325 4.548.325 9.097.325 13.645 0 138.72-105.583 298.558-298.558 298.558-59.452 0-114.68-17.219-161.137-47.106 8.447.974 16.568 1.299 25.34 1.299 49.055 0 94.213-16.568 130.274-44.832-46.132-.975-84.792-31.188-98.112-72.772 6.498.974 12.995 1.624 19.818 1.624 9.421 0 18.843-1.3 27.614-3.573-48.081-9.747-84.143-51.98-84.143-102.985v-1.299c13.969 7.797 30.214 12.67 47.431 13.319-28.264-18.843-46.781-51.005-46.781-87.391 0-19.492 5.197-37.36 14.294-52.954 51.655 63.675 129.3 105.258 216.365 109.807-1.624-7.797-2.599-15.918-2.599-24.04 0-57.828 46.782-104.934 104.934-104.934 30.213 0 57.502 12.67 76.67 33.137 23.715-4.548 46.456-13.32 66.599-25.34-7.798 24.366-24.366 44.833-46.132 57.827 21.117-2.273 41.584-8.122 60.426-16.243-14.292 20.791-32.161 39.308-52.628 54.253z">
                                                        />
                                                </svg>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <hr>
                    <div class="mt-6 text-center mx-0">
                        <span class="text-sm text-[#CDCDC5] opacity-92 sm:text-center">© 2024 <a
                                href="https://voguevista.com/">Vogue Vista</a>. All Rights Reserved.
                        </span>
                    </div><br>
                </footer>


                <script>
                    document.addEventListener('DOMContentLoaded', function() {
                        const carousel = document.querySelector('[data-carousel="static"]');
                        const items = carousel.querySelectorAll('[data-carousel-item]');
                        const indicators = carousel.querySelectorAll('[data-carousel-slide-to]');
                        let activeIndex = 0;

                        function showSlide(index) {
                            items.forEach((item, i) => {
                                if (i === index) {
                                    item.classList.add('block');
                                    item.classList.remove('hidden');
                                } else {
                                    item.classList.add('hidden');
                                    item.classList.remove('block');
                                }
                            });
                            indicators.forEach((indicator, i) => {
                                if (i === index) {
                                    indicator.classList.add('bg-white');
                                    indicator.classList.remove('bg-gray-300');
                                    indicator.setAttribute('aria-current', 'true');
                                } else {
                                    indicator.classList.add('bg-gray-300');
                                    indicator.classList.remove('bg-white');
                                    indicator.setAttribute('aria-current', 'false');
                                }
                            });
                        }

                        carousel.querySelector('[data-carousel-prev]').addEventListener('click', () => {
                            activeIndex = (activeIndex > 0) ? activeIndex - 1 : items.length - 1;
                            showSlide(activeIndex);
                        });

                        carousel.querySelector('[data-carousel-next]').addEventListener('click', () => {
                            activeIndex = (activeIndex < items.length - 1) ? activeIndex + 1 : 0;
                            showSlide(activeIndex);
                        });

                        indicators.forEach((indicator, index) => {
                            indicator.addEventListener('click', () => {
                                activeIndex = index;
                                showSlide(activeIndex);
                            });
                        });

                        showSlide(activeIndex); // Initialize the first slide
                    });
                </script>


</body>

</html>
