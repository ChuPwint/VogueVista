<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Wishlist</title>
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    @vite('resources/css/app.css')
</head>
<style>
    /* Chrome, Safari, Edge, Opera */
    input::-webkit-outer-spin-button,
    input::-webkit-inner-spin-button {
        -webkit-appearance: none;
        margin: 0;
    }

    /* Firefox */
    input[type=number] {
        -moz-appearance: textfield;
    }
</style>

<body>
    <div class="p-4">
        <div>
            <p class="font-semibold mb-6 text-2xl">My Wishlist 
                <ion-icon name="heart-outline" class=" like"></ion-icon>
            </p>
            <hr class="w-full border border-light-gray">
        </div>
        <div class="mt-5 px-5">
            <div class="relative overflow-x-auto shadow-md">
                <table class="w-full text-sm text-left text-gray-500">
                    <thead class="border-b border-b-light-gray border-opacity-25 text-gray-700">
                        <tr>
                            <th class="px-6 py-3">
                                Description
                            </th>
                            <th class="px-6 py-3 text-center">
                                Price
                            </th>
                            <th class="px-6 py-3 text-center">
                                Stock Status
                            </th>
                            <th class="px-6 py-3 text-center">
                                Action
                            </th>
                            <th class="px-6 py-3 text-center">
                                <span>Delete</span>
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        {{-- Start of cart items --}}
                        <tr class="bg-white border-b border-b-light-gray border-opacity-25 hover:bg-gray-50">
                            <th class="px-6 py-4 font-medium flex items-center text-gray-900 whitespace-nowrap">
                                <div class="w-20 h-20 flex justify-center items-center shadow-md">
                                    <img class="h-full" src="/images/new arrival dress.webp" alt="">
                                </div>
                                <div class="ml-2">
                                    <p class="text-lg font-medium">Casual Cotton Dress</p>
                                </div>
                            </th>
                            <td class="px-6 py-4 text-lg text-center">
                                $70
                            </td>
                            <td class="px-6 py-4 text-center">
                                30 left
                            </td>
                            <td class="px-6 py-4 text-center">
                                <button class="px-3 py-1 bg-black text-white rounded-sm hover:bg-white hover:border hover:border-black hover:text-black">Add to cart</button>
                            </td>
                            <td class="px-6 py-4 text-center">
                                <ion-icon name="trash-outline"
                                    class="text-2xl hover:text-red-500 cursor-pointer"></ion-icon>
                            </td>
                        </tr>
                        <tr class="bg-white border-b border-b-light-gray border-opacity-25 shadow-sm hover:bg-gray-50">
                            <th class="px-6 py-4 font-medium flex items-center text-gray-900 whitespace-nowrap">
                                <div class="w-20 h-20 flex justify-center items-center shadow-md">
                                    <img class="h-full" src="/images/new arrival skirt.jpg" alt="">
                                </div>
                                <div class="ml-2">
                                    <p class="text-lg font-medium">Classic Velvet Dress</p>
                                </div>
                            </th>
                            <td class="px-6 py-4 text-lg text-center">
                                $90
                            </td>
                            <td class="px-6 py-4 text-center">
                                20 left
                            </td>
                            <td class="px-6 py-4 text-center">
                                <button class="px-3 py-1 bg-black text-white rounded-sm hover:bg-white hover:border hover:border-black hover:text-black">Add to cart</button>
                            </td>
                            <td class="px-6 py-4 text-center">
                                <ion-icon name="trash-outline"
                                    class="text-2xl hover:text-red-500 cursor-pointer"></ion-icon>
                            </td>
                        </tr>
                        <tr class="bg-white border-b border-b-light-gray border-opacity-25  hover:bg-gray-50">
                            <th class="px-6 py-4 font-medium flex items-center text-gray-900 whitespace-nowrap">
                                <div class="w-20 h-20 flex justify-center items-center shadow-md">
                                    <img class="h-full w-full" src="/images/new arrival top.webp" alt="">
                                </div>
                                <div class="ml-2">
                                    <p class="text-lg font-medium">Elegant Blouse</p>
                                </div>
                            </th>
                            <td class="px-6 py-4 text-lg text-center">
                                $55
                            </td>
                            <td class="px-6 py-4 text-center">
                                10 left
                            </td>
                            <td class="px-6 py-4 text-center">
                                <button class="px-3 py-1 bg-black text-white rounded-sm hover:bg-white hover:border hover:border-black hover:text-black">Add to cart</button>
                            </td>
                            <td class="px-6 py-4 text-center">
                                <ion-icon name="trash-outline"
                                    class="text-2xl hover:text-red-500 cursor-pointer"></ion-icon>
                            </td>
                        </tr>
                        {{-- End of cart items --}}
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>

</html>
