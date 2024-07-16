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

    @include('includes.navbar')

    <div class="relative">
        <img src="images/service.webp" alt="" class="w-full h-[380px] object-cover brightness-50 ">
        <h1
            class="text-white text-[38px] font-bold tracking-wider drop-shadow-xl text-center absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2">
            OUR SERVICES</h1>
    </div>
    <div class="bg-[#CDCDC5]">
        <br><br>
        <div class="flex flex-wrap justify-center px-28">
            <div class="w-1/3 p-2">
                <div class="p-4">
                    <div class="w-full">
                        <img src="images/service 3.jpg" alt=""
                            class="w-full h-[300px] brightness-50 object-cover contrast-100">
                    </div>
                    <div class="bg-black text-2xl tracking-wider text-white p-4 font-medium text-center">
                        Lengthening
                    </div>
                </div>
            </div>
            <div class="w-1/3 p-2">
                <div class="p-4">
                    <div class="w-full">
                        <img src="images/service 2.jpg" alt=""
                            class="w-full h-[300px] brightness-75 object-cover contrast-100">
                    </div>
                    <div class="bg-black text-2xl tracking-wider text-white p-4 font-medium text-center">
                        Measuring
                    </div>
                </div>
            </div>
            <div class="w-1/3 p-2">
                <div class="p-4">
                    <div class="w-full">
                        <img src="images/service 1.jpg" alt=""
                            class="w-full h-[300px] brightness-50 object-cover contrast-100">
                    </div>
                    <div class="bg-black text-2xl tracking-wider text-white p-4 font-medium text-center">
                        Restoring
                    </div>
                </div>
            </div>
        </div>
        <br><br>
        <div class="relative">
            <img src="images/service pg photo.png" alt="" class="w-full h-[500px] object-cover">
            <h2 class="text-[40px] font-bold tracking-widest text-white absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 text-center leading-[100px] blur-[1px] stroke-current">Customer <br>satisfaction is <br>our core focus.</h2>
        </div><br><br><br>
    </div>

    @include('includes.footer')

</body>

</html>
