<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home</title>
    @vite('resources/css/app.css')
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>

</head>

<body>

    @include('includes.navbar')

    <div id="indicators-carousel" class="relative w-full" data-carousel="static">
        <div class="relative overflow-hidden h-[600px]">
            <div class="duration-700 ease-in-out h-full" data-carousel-item="active">
                <img src="/images/slider 1.png"
                    class="relative h-full w-full"
                    alt="...">
                    <div class="absolute top-[48px] left-20 text-center">
                        <div class="block mb-4">
                            <span class="text-5xl font-bold tracking-widest bg-black text-white inline-block p-4">BLACK</span>
                        </div>
                        <div class="block mb-4">
                            <span class="text-5xl font-bold tracking-widest bg-black text-white inline-block p-4 px-8">FRIDAY</span>
                        </div>
                        <div class="block mb-4">
                            <span class="text-5xl font-bold tracking-widest bg-black text-white inline-block p-4">SALE</span>
                        </div>
                    </div>

                    <div class="absolute bottom-20 left-80">
                        <div class="block mb-3">
                            <span class="text-3xl font-medium tracking-widest text-white inline-block italic">UP TO </span>
                        </div>

                            <span class="text-6xl font-bold  text-black block italic mb-5">50% <span class="text-xl">off</span> </span>

                        <div class="block">
                            <span class="text-3xl font-regular  text-white inline-block">all summer collection</span>
                        </div>
                    </div>

                    <div class="absolute bottom-20 left-16 italic tracking-wider">
                    <a href="/shop" class="text-3xl underline">Shop</a><br>
                    <a href="/shop" class="text-3xl underline mx-8">Now</a>
                </div>

            </div>
            <div class="duration-700 ease-in-out" data-carousel-item>
                <img src="/images/arrival.jpg"
                    class="absolute block w-full h-full object-cover -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2"
                    alt="...">
            </div>
            <div class="duration-700 ease-in-out" data-carousel-item>
                <img src="/images/member promotion.jpg"
                    class="absolute block w-full h-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2"
                    alt="...">
            </div>
            <div class="duration-700 ease-in-out" data-carousel-item>
                <img src="/images/fashion slide.jpg"
                    class="absolute block w-full h-full object-cover -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2"
                    alt="...">
            </div>
            <div class="duration-700 ease-in-out" data-carousel-item>
                <img src="/images/fashion week.jpg"
                    class="absolute block w-full h-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2"
                    alt="...">
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
                        <img src="images/new arrival dress.webp" alt="" class="w-full h-[26rem] object-cover">
                        <div class="px-3 py-1 h-1/4 w-full mt-2">
                            <div class="flex justify-between items-center mb-2">
                                <p class="text-white">Classic Velvet Dress</p>
                                <div class="flex justify-end text-xl text-white">
                                    <ion-icon name="heart-outline" class=" like"></ion-icon>
                                </div>
                            </div>
                            <div class="flex justify-between items-center">
                                <p class="text-white">$50</p>
                                <button class="text-sm bg-white text-black px-2 py-1 rounded-md">Buy Now</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="w-1/3 p-2">
                <div class="p-4">
                    <div class="w-full">
                        <img src="images/new arrival top.webp" alt="" class="w-full h-[26rem] object-cover">
                        <div class="px-3 py-1 h-1/4 w-full mt-2">
                            <div class="flex justify-between items-center mb-2">
                                <p class="text-white">Elegant Blouse</p>
                                <div class="flex justify-end text-xl text-white">
                                    <ion-icon name="heart-outline" class=" like"></ion-icon>
                                </div>
                            </div>
                            <div class="flex justify-between items-center  ">
                                <p class="text-white">$50</p>
                                <button class="text-sm bg-white text-black px-2 py-1 rounded-md">Buy Now</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="w-1/3 p-2">
                <div class="p-4">
                    <div class="w-full">
                        <img src="images/new arrival skirt.jpg" alt="" class="w-full h-[26rem] object-cover">
                        <div class="px-3 py-1 h-1/4 w-full mt-2">
                            <div class="flex justify-between items-center mb-2">
                                <p class="text-white">Long Aesthetic Dress</p>
                                <div class="flex justify-end text-xl text-white">
                                    <ion-icon name="heart-outline" class=" like"></ion-icon>
                                </div>
                            </div>
                            <div class="flex justify-between items-center  ">
                                <p class="text-white">$70</p>
                                <button class="text-sm bg-white text-black px-2 py-1 rounded-md">Buy Now</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="mt-2">
                <a href="/shop">
                <button class="bg-white text-black rounded-lg p-2 px-4 mb-8 font-semibold">View All</button>
            </a>
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

            @include('includes.footer')



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
