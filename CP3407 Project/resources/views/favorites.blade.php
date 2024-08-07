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
                                <th colspan="2" class="px-6 py-3 text-center">
                                    Actions
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            {{-- Start of cart items --}}
                            @forelse ($wishlists as $wishlist)
                                <tr class="bg-white border-b border-b-light-gray border-opacity-25 hover:bg-gray-50">
                                    <th
                                        class="px-6 py-4 justify-center font-medium flex items-center text-gray-900 whitespace-nowrap">
                                        <div class="w-20 h-20 flex justify-center items-center shadow-md">
                                            <img class="h-full" src="{{ $wishlist->product->p_photo }}" alt="">
                                        </div>
                                    </th>
                                    <td class="py-4 text-lg text-center">
                                        <p class="text-lg font-medium">{{ $wishlist->product->pname }}</p>
                                    </td>
                                    <td class="px-6 py-4 text-lg text-center">
                                        ${{ number_format($wishlist->product->price) }}
                                    </td>
                                    <td class="px-6 py-4 text-lg text-center">
                                        {{ $wishlist->product->stock > 0 ? 'In Stock' : 'Out of Stock' }}
                                    </td>
                                    <td class="px-3 py-4 text-center">
                                        <form action="{{ route('cart.store') }}" method="POST"
                                            class="{{ $wishlist->product->stock > 0 ? 'block' : 'hidden' }}">
                                            @csrf
                                            <input type="hidden" name="productId" value=" {{ $wishlist->product_id }}">
                                            <input type="hidden" name="quantity" value=1>
                                            <div class="flex items-center justify-center">
                                                <button type="submit" class=" px-4 py-2 bg-black text-white text-m">Add
                                                    to cart</button>
                                            </div>
                                        </form>

                                    </td>
                                    <td class="px-3 py-4 text-center">
                                        <form action="{{ route('favorites.destroy', $wishlist->product_id) }}"
                                            method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit">
                                                <ion-icon name="trash-outline"
                                                    class="text-2xl text-red-500 cursor-pointer"></ion-icon>
                                            </button>
                                        </form>
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="6" class="text-center py-4">
                                        No wishlists added yet.
                                    </td>
                                </tr>
                            @endforelse
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
