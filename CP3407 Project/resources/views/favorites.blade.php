<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Shopping Cart</title>
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    @vite('resources/css/app.css')
</head>

<body>
    @include('includes.navbar')
    <div class="flex">
        @include('profile.sidebar')
        <div class="p-4 w-full">
            <div>
                <p class="font-semibold mb-6 text-2xl">My Wishlist</p>
                <hr class="w-full border border-light-gray">
            </div>
            <div class="mt-5 px-5">
                <div class="relative overflow-x-auto shadow-md">
                    <table class="w-full text-sm text-left text-gray-500">
                        <thead class="border-b border-b-light-gray border-opacity-25 text-gray-700">
                            <tr>
                                <th class="px-6 py-3">

                                </th>
                                <th class="px-6 py-3 text-center">
                                    Product Name
                                </th>
                                <th class="px-6 py-3 text-center">
                                    Price
                                </th>
                                <th class="px-6 py-3 text-center">
                                    Stock Status
                                </th>
                                <th class="px-6 py-3 text-center">
                                    Actions
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            {{-- Start of cart items --}}
                            <tr class="bg-white border-b border-b-light-gray border-opacity-25 hover:bg-gray-50">
                                <th
                                    class="px-6 py-4 justify-center font-medium flex items-center text-gray-900 whitespace-nowrap">
                                    <div class="w-20 h-20 flex justify-center items-center shadow-md">
                                        <img class="h-full" src="/images/new arrival dress.webp" alt="">
                                    </div>

                                </th>
                                <td class="py-4 text-lg text-center">
                                    <p class="text-lg font-medium">Casual Cotton Dress</p>
                                </td>
                                <td class="px-6 py-4 text-lg text-center">
                                    $70
                                </td>
                                <td class="px-6 py-4 text-lg text-center">
                                    {{-- @foreach ($product as $products)
                                <tr>
                                    <td class="px-6 py-4 text-lg text-center">{{ $products->name }}</td>
                                    <td class="px-6 py-4 text-lg text-center">
                                        {{ $products->stock > 0 ? 'In Stock' : 'Out of Stock' }}
                                    </td>
                                </tr>
                            @endforeach --}}
                                </td>
                                <td class="px-6 py-4 text-center">
                                    <div class="flex items-center justify-center">
                                        <button class="px-4 py-2 bg-black text-white text-m">Add to cart</button>
                                        <ion-icon name="trash-outline"
                                            class="text-2xl hover:text-red-500 cursor-pointer ml-4"></ion-icon>
                                    </div>
                                </td>
                            </tr>
                            <tr
                                class="bg-white border-b border-b-light-gray border-opacity-25 shadow-sm hover:bg-gray-50">
                                <th
                                    class="px-6 py-4 justify-center font-medium flex items-center text-gray-900 whitespace-nowrap">
                                    <div class="w-20 h-20 flex justify-center items-center shadow-md">
                                        <img class="h-full" src="/images/new arrival skirt.jpg" alt="">
                                    </div>

                                </th>
                                <td class="py-4 text-lg text-center">
                                    Classic Velvet Dress
                                </td>
                                <td class="px-6 py-4 text-center">
                                    $90
                                </td>
                                <td class="px-6 py-4 text-lg text-center">

                                </td>
                                <td class="px-6 py-4 text-center">
                                    <div class="flex items-center justify-center">
                                        <button class="px-4 py-2 bg-black text-white text-m">Add to cart</button>
                                        <ion-icon name="trash-outline"
                                            class="text-2xl hover:text-red-500 cursor-pointer ml-4"></ion-icon>
                                    </div>
                                </td>
                            </tr>
                            <tr
                                class="bg-white border-b border-b-light-gray border-opacity-25 shadow-sm hover:bg-gray-50">
                                <th
                                    class="px-6 py-4 justify-center font-medium flex items-center text-gray-900 whitespace-nowrap">
                                    <div class="w-20 h-20 flex justify-center items-center shadow-md">
                                        <img class="h-full" src="/images/new arrival top.webp" alt="">
                                    </div>

                                </th>

                                <td class="py-4 text-lg text-center">
                                    Elegant Blouse
                                </td>
                                <td class="px-6 py-4 text-center">
                                    $55
                                </td>
                                <td class="px-6 py-4 text-lg text-center">

                                </td>
                                <td class="px-6 py-4 text-center">
                                    <div class="flex items-center justify-center">
                                        <button class="px-4 py-2 bg-black text-white text-m">Add to cart</button>
                                        <ion-icon name="trash-outline"
                                            class="text-2xl hover:text-red-500 cursor-pointer ml-4"></ion-icon>
                                    </div>
                                </td>
                            </tr>
                            {{-- End of cart items --}}
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    </div>
</body>

</html>
