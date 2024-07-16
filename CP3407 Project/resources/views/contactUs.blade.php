<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home</title>
    @vite('resources/css/app.css')
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

</head>

<body>
    @include('includes.navbar')

    <div class="relative">
        <img src="images/contactt.jpg" alt="" class="w-full h-[380px] object-cover brightness-[.4]  ">
        <h1
            class="text-white stroke-1 text-[38px] font-bold tracking-wider drop-shadow-xl text-center absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2">
            CONTACT US</h1>
    </div>
    <br><br><br>
    <div class="flex flex-wrap">
        <div class="w-full md:w-1/2">
            <div class="h-[350px] w-[520px] text-center flex flex-col items-center justify-center mx-20 ">
                <h1 class="text-[45px] font-bold mb-4">Vogue</h1>
                <h1 class="text-[45px] font-bold mb-4 ml-[118px]">Vista</h1>
            </div>
            <img src="images/contact image.jpg" alt="Fashion Image" class="w-[720px] h-[650px] mb-4 z-[-1] mx-20 ">
        </div>


        <div class="w-1/2">
            <div class="border bg-white border-black py-14 px-16 h-[480px] w-[680px]">
                <form action="{{ route('contactUs.store') }}" method="POST" class="align-center">
                    @csrf
                    <div class="mb-3">
                        <label for="fullName" class="block mb-2">Full Name</label>
                        <input type="text" name="fullName" id="fullName"
                            class="block border border-black w-full h-10 p-2.5" required>
                        @error('fullName')
                            <small class="text-red-500">{{ $message }}</small>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="email" class="block mb-2">Email</label>
                        <input type="email" name="email" id="email"
                            class="block border border-black w-full h-10 p-2.5" required>
                        @error('email')
                            <small class="text-red-500">{{ $message }}</small>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="message" class="block mb-2">Message</label>
                        <textarea name="message" id="message" cols="30" rows="5" placeholder="Type your message..."
                            class="block border border-black w-full h-24 p-2.5 resize-none" required></textarea>
                    </div>
                    <button type="submit"
                        class="bg-black rounded-full text-l font-medium text-white py-2 px-4 mt-2">Contact Us</button>
                </form>
                <div id="successModal"
                    class="fixed inset-0 bg-gray-800 bg-opacity-50 items-center flex justify-center hidden">
                    <div class="bg-white p-6 rounded shadow-md">
                        <h2 class="text-xl font-bold mb-4">Success</h2>
                        <p>{{ session('success') }}</p>
                        <button id="closeModal" class="mt-4 bg-black text-white px-4 py-2 rounded">OK</button>
                    </div>
                </div>

                @if (session('success'))
                    <script>
                        $(document).ready(function() {
                            $('#successModal').removeClass('hidden');
                            $('#closeModal').on('click', function() {
                                $('#successModal').addClass('hidden');
                            });
                        });
                    </script>
                @endif
            </div>
            <div class="w-full flex justify-center h-[540px] flex-col items-center">
                <div class="text-black text-left w-full md:w-1/2 align-middle grid h-[279px]">
                    <h2 class="text-3xl font-bold mb-2">Contact Information</h2>
                    <div class="flex">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" class="size-7 fill-black mr-2 mb-4">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M2.25 6.75c0 8.284 6.716 15 15 15h2.25a2.25 2.25 0 0 0 2.25-2.25v-1.372c0-.516-.351-.966-.852-1.091l-4.423-1.106c-.44-.11-.902.055-1.173.417l-.97 1.293c-.282.376-.769.542-1.21.38a12.035 12.035 0 0 1-7.143-7.143c-.162-.441.004-.928.38-1.21l1.293-.97c.363-.271.527-.734.417-1.173L6.963 3.102a1.125 1.125 0 0 0-1.091-.852H4.5A2.25 2.25 0 0 0 2.25 4.5v2.25Z" />
                        </svg>
                        <a href="tel:01234567" class="text-xl">+65 01234567</a>
                    </div>
                    <div class="flex">
                        <svg class=" w-10 h-10 fill-black mr-1 mt-[-4px] ml-[-4px] mb-2 text-white" viewBox="0 0 24 24"
                            stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                                d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                                d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                        </svg>
                        <h3 class="text-xl">
                            <a href="https://www.google.com/maps/dir/?api=1&destination=201+Victoria+St,+Singapore+188067"
                                target="_blank" rel="noopener noreferrer">
                                201 Victoria St, Singapore 188067
                            </a>
                        </h3>
                    </div>
                    <div class="flex">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" class="size-8 fill-black mr-2  text-white">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M21.75 6.75v10.5a2.25 2.25 0 0 1-2.25 2.25h-15a2.25 2.25 0 0 1-2.25-2.25V6.75m19.5 0A2.25 2.25 0 0 0 19.5 4.5h-15a2.25 2.25 0 0 0-2.25 2.25m19.5 0v.243a2.25 2.25 0 0 1-1.07 1.916l-7.5 4.615a2.25 2.25 0 0 1-2.36 0L3.32 8.91a2.25 2.25 0 0 1-1.07-1.916V6.75" />
                        </svg>
                        <a href="mailto:vv@admin.au" class="text-xl">vv@admin.au</a>
                    </div>
                </div>
            </div>
        </div>
    </div><br><br>

    @include('includes.footer')

</body>

</html>
