<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Thank You</title>
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

    .boxShadow {
        -webkit-box-shadow: -26px 21px 0px 0px rgba(0, 0, 0, 0.75);
        -moz-box-shadow: -26px 21px 0px 0px rgba(0, 0, 0, 0.75);
        box-shadow: -26px 21px 0px 0px rgba(0, 0, 0, 0.75);
    }
</style>

<body class="bg-black overflow-hidden">
    @include('includes.navbar', ['status' => $status, 'cartItems' => $cartItems])
    <div class="flex justify-center items-center h-screen w-screen relative">
        <div class="p-4 w-[80%] bg-white border border-purple-500 ">
            <div class="">
                <div class="px-4">
                    <p class="font-semibold mb-3 text-2xl">Thank you for shopping with us!</p>
                    <p class="font-semibold mb-2 text-lg">Order No. (#123456)</p>
                    <hr class="w-full border border-light-gray">
                </div>
                <div class="mt-2 flex justify-between ">
                    <div class="px-4 w-[48%] py-2">
                        <div class="text-lg font-semibold mb-1">Order Details</div>
                        <hr class="w-full border border-light-gray border-opacity-50">
                        <div class="mt-2">
                            <div class="mt-3">
                                @foreach ($allItems as $item)
                                    {{-- Start of items --}}
                                <div class="flex justify-between items-center mb-5">
                                    <div class="min-w-[300px] flex items-center">
                                        <div class="w-16 h-16 flex justify-center items-center shadow-md">
                                            <img class="h-full" src="{{ $item->products->p_photo }}" alt="">
                                        </div>
                                        <div class="ml-2">
                                            <p class="text-lg">{{ $item->products->pname }}</p>
                                        </div>
                                    </div>
                                    <div class="itemPrice flex items-center justify-center">${{ number_format($item->products->price) }}</div>
                                    <div class="flex items-center space-x-0">
                                        <input type="number" name="qty" value="{{ $item->quantity }}"
                                            class="quantityInput outline-none cursor-default text-center text-black w-10 border rounded-md border-black"
                                            readonly>
                                    </div>
                                    @php
                                        $eachTotal = $item->products->price * $item->quantity;
                                    @endphp
                                    <div class="totalPrice flex items-center justify-center">${{ number_format($eachTotal) }}</div>
                                </div>
                                {{-- End of items --}}
                                @endforeach
                            </div>
                            <hr class="w-full border border-light-gray">
                            <div class="flex justify-between items-center mt-2 mb-2">
                                <div class="space-y-1">
                                    <div class="font-semibold">Grand Total: </div>
                                </div>
                                <div class="space-y-1">
                                    <div class="font-semibold">${{ number_format($totalPrice) }}</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="w-[48%] flex justify-center items-center border-l border-light-gray ">
                        <div class="boxShadow w-[80%] h-[80%] p-4 border border-light-gray">
                            <div class="mb-4">
                                <div class="font-semibold text-lg">Billing Information:</div>
                                <div>
                                    <p> <span>Adam Smith</span></p>
                                    <p> <span>ABC address, no.5 street avenue, 123456</span></p>
                                </div>
                            </div>
                            <div class="mb-4">
                                <div class="font-semibold text-lg">Payment Information:</div>
                                <div>
                                    <p> <span>Cash on delivery</span></p>
                                </div>
                            </div>
                            <div>
                                <div class="font-semibold text-lg">Shipping Information:</div>
                                <div>
                                    <p> <span>Estimated arrival on 11.1.2080</span></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="absolute top-0 left-0 -z-40">
                <img src="/images/thankyou.png" alt="">
            </div>
        </div>
    </div>
</body>

</html>
