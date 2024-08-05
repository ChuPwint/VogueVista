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
    @include('includes.navbar', ['status' => $status, 'cartItems' => $cartItems])

    <div class="p-4">
        <div>
            <p class="font-semibold mb-6 text-2xl">Shopping Cart</p>
            <hr class="w-full border border-light-gray">
        </div>
        <div class="mt-5 px-5">
            <div class="relative overflow-x-auto shadow-md">
                @if ($cartItems > 0)
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
                                    Quantity
                                </th>
                                <th class="px-6 py-3 text-center">
                                    Total Price
                                </th>
                                <th class="px-6 py-3 text-center">
                                    <span>Delete</span>
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            {{-- Start of cart items --}}
                            @foreach ($allItems as $item)
                                <tr class="bg-white border-b border-b-light-gray border-opacity-25 hover:bg-gray-50">
                                    <th class="px-6 py-4 font-medium flex items-center text-gray-900 whitespace-nowrap">
                                        <div class="w-20 h-20 flex justify-center items-center shadow-md">
                                            <img class="h-full" src="{{ $item->products->p_photo }}" alt="">
                                        </div>
                                        <div class="ml-2">
                                            <p class="text-lg font-medium">{{ $item->products->pname }}</p>
                                            <p class="text-sm font-light text-light-gray">Size <span
                                                    class="size">{{ $item->products->size }}</span>
                                        </div>
                                    </th>
                                    <td class="px-6 py-4 text-lg text-center">
                                        ${{ number_format($item->products->price) }}
                                    </td>
                                    <td class="px-6 py-4 text-center">
                                        <form action="{{ route('cart.update', $item->products->id) }}" method="post">
                                            @csrf
                                            @method('PATCH')
                                            
                                            <div class="flex justify-center items-center space-x-0">
                                                <button type="submit" name="action" value="decrease"
                                                    class="minusBtn cursor-pointer w-5 text-center py-[1px] font-semibold bg-gray-300 text-gray-500"
                                                    {{ $item->quantity == 1 ? 'disabled' : '' }}>-</button>
                                                <input type="number" name="qty" value="{{ $item->quantity }}"
                                                    class="quantityInput text-center text-black w-10 border border-black"
                                                    readonly>
                                                <button type="submit" name="action" value="increase"
                                                    class="plusBtn cursor-pointer w-5 py-[1px] font-semibold text-center bg-gray-300 text-gray-500"
                                                    {{ $item->quantity == $item->products->stock ? 'disabled' : '' }}>+</button>
                                            </div>
                                        </form>
                                    </td>
                                    @php
                                        $total = $item->products->price * $item->quantity;
                                    @endphp
                                    <td class="px-6 py-4 text-lg text-center">
                                        ${{ number_format($total) }}
                                    </td>
                                    <td class="px-6 py-4 text-center">
                                        <form action="{{ route('cart.destroy', $item->products->id) }}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit">
                                            <ion-icon name="trash-outline"
                                                class="text-2xl text-red-500 cursor-pointer"></ion-icon>
                                            </button>
                                        </form>
                                    </td>
                                </tr>
                                {{-- End of cart items --}}
                            @endforeach
                        </tbody>
                    </table>
                @else
                    <div class="text-center text-2xl ">
                        <p
                            class="px-6 py-4 font-medium flex justify-center items-center text-gray-900 whitespace-nowrap">
                            Your Cart is
                            Empty!</p>
                    </div>
                @endif
            </div>
            @if ($cartItems > 0)
                <form action="/checkout" method="get">
                    <div class="flex justify-end items-center px-4 mt-6">
                        <div class=" mr-[75px]">
                            Total (<span class="totalItems font-semibold text-lg">{{ $cartItems }}</span> item(s)):
                            <span class="totalPrice font-semibold text-lg">${{ number_format($totalPrice) }}</span>
                        </div>
                        <button type="submit" class="px-4 py-2 bg-black text-white rounded-sm">Proceed to
                            checkout</button>
                    </div>
                </form>
            @endif
        </div>
    </div>
</body>

</html>
