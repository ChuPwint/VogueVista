<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Payment</title>
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    @vite('resources/css/app.css')
    @vite('resources/lib/jquery3.6.0.js')
    @vite('resources/js/payment.js')
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

<body>
    @include('includes.navbar', ['status' => $status, 'cartItems' => $cartItems])
    <div class="p-4">
        <div>
            <p class="font-semibold mb-6 text-2xl">Payment</p>
            <hr class="w-full border border-light-gray">
        </div>
        <div class="">
            {{-- container --}}
            <div class="p-5">
                <div class="w-full flex justify-between overflow-x-auto whitespace-nowrap">
                    <button
                        class="w-[49.8%] cardChoose inline-flex bg-black items-center h-12 px-2 py-2 text-center border border-b-0 border-gray-300 sm:px-4  rounded-t-md -px-1 whitespace-nowrap focus:outline-none">
                        <span class="cardTxt mx-1 sm:text-base text-white font-semibold">
                            Credit Card Payment
                        </span>
                    </button>

                    <button
                        class="cashChoose w-[49.8%] inline-flex h-12 items-center px-2 py-2 text-center bg-black bg-opacity-40 border border-b border-gray-300 sm:px-4 -px-1 rounded-t-md  whitespace-nowrap cursor-base focus:outline-none hover:border-gray-400 ">
                        <span class="cashTxt mx-1 sm:text-base text-white font-light text-opacity-90">
                            Cash Payment
                        </span>
                    </button>

                </div>
                <div class="mt-1 border border-t-0 border-black">
                    <form action="/payment" method="POST">
                        @csrf
                        <div class="cardPay p-2 flex justify-between">
                            <div class=" w-1/2 px-4 py-2 ">
                                <div class="text-lg font-semibold mb-1">Payment Details</div>
                                <hr class="w-full border border-light-gray">
                                <div class="text-lg font-semibold mt-2 mb-3"> ** Only Visa Type Payments are accepted.
                                </div>

                                <input type="hidden" name="inCart" value="{{ $allItems }}">
                                <input type="hidden" name="total" value="{{ $totalPrice }}">
                                <div class="mt-2">
                                    <div class="mb-5 w-full">
                                        <label for="cardNum">Card Number</label>
                                        <input type="number" id="cardNum" name="cardNum"
                                            placeholder="1234 5678 9012 3456"
                                            class="border border-black px-3 py-5 rounded-md w-full h-8">
                                    </div>
                                    <div class="mb-5 w-full">
                                        <label for="cardName">Card Holder Name</label>
                                        <input type="text" id="cardName" name="cardName" placeholder="John Smith"
                                            class="border border-black px-3 py-5 rounded-md w-full h-8">
                                    </div>
                                    <div class="mb-5 w-full flex justify-between items-center">
                                        <div class="">
                                            <label for="expireDate">Expire Date</label>
                                            <input type="date" id="expireDate" name="expireDate" placeholder="12/12"
                                                class="border border-black px-3 py-5 rounded-md w-full h-8">
                                        </div>
                                        <div class="">
                                            <label for="cvv">CVV</label>
                                            <input type="number" maxlength="3" id="cvv" name="cvv"
                                                placeholder="123"
                                                class="border border-black px-3 py-5 rounded-md w-full h-8">
                                        </div>
                                    </div>
                                    <div class="mb-5 w-full">
                                        <label for="billAddress">Billing Address</label>
                                        <input type="text" id="billAddress" name="billAddress"
                                            placeholder="ABC Building"
                                            class="border border-black px-3 py-5 rounded-md w-full h-8">
                                    </div>
                                    <div class="mb-5 w-full">
                                        <label for="postalCode">Postal Code</label>
                                        <input type="number" id="postalCode" name="postalCode" placeholder="123456"
                                            class="border border-black px-3 py-5 rounded-md w-full h-8">
                                    </div>
                                    <div class="mt-8">
                                        <button type="submit" name="action" value="card"
                                            class="px-5 py-2 w-full bg-black rounded-sm text-white text-lg font-semibold">Confirm</button>
                                    </div>
                                </div>
                            </div>
                            <div class="w-1/2 px-14 py-3">
                                <div class="boxShadow h-[480px] overflow-y-auto p-4 border">
                                    <div class="flex justify-between items-center mb-3">
                                        <div class="text-lg font-semibold">Order Summary</div>
                                        <div><span class="totalItem">{{ $cartItems }}</span> items</div>
                                    </div>
                                    <hr class="border-b border-light-gray w-full">
                                    <div class="mt-3">
                                        @foreach ($allItems as $item)
                                            {{-- Start of items --}}
                                            <div class="flex justify-between items-center mb-5">
                                                <div class="min-w-[300px] flex items-center">
                                                    <div class="w-16 h-16 flex justify-center items-center shadow-md">
                                                        <img class="h-full" src="{{ $item->products->p_photo }}"
                                                            alt="">
                                                    </div>
                                                    <div class="ml-2">
                                                        <p class="text-lg"></p>{{ $item->products->pname }}
                                                    </div>
                                                </div>
                                                <div class="itemPrice flex items-center justify-center">${{ number_format($item->products->price) }}</div>
                                                <div class="flex items-center space-x-0">
                                                    <input type="number" name="qty" value="{{ $item->quantity }}"
                                                        class="quantityInput outline-none cursor-default text-center text-black w-10 border rounded-md border-black"
                                                        readonly>
                                                </div>
                                                @php
                                                    $eachTotal = $item->products->price * $item->quantity
                                                @endphp
                                                <div class="totalPrice flex items-center justify-center">${{ number_format($eachTotal) }}</div>
                                            </div>
                                            {{-- End of items --}}
                                        @endforeach
                                        
                                    </div>
                                    <hr class="w-full border border-light-gray">
                                    <div class="flex justify-between items-center mt-2 mb-2">
                                        <div class="space-y-1">
                                            <div>Grand Total: </div>
                                        </div>
                                        <div class="space-y-1">
                                            <div>${{ number_format($totalPrice) }}</div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="cashPay hidden px-2 py-5 h-full justify-between items-center">
                            <div class=" w-1/2 px-4 py-2 ">
                                <div class="text-2xl text-center font-semibold mb-1">
                                    Are you sure you want to proceed paying with cash?
                                </div>
                                <div class="mt-8">
                                    <input type="hidden" name="inCart" value="{{ $allItems }}">
                                    <input type="hidden" name="total" value="{{ $totalPrice }}">
                                    <button
                                        type="submit"
                                        name="action" value="cash"
                                        class="px-5 py-2 w-full bg-black rounded-sm text-white text-lg font-semibold">Confirm</button>
                                </div>
                            </div>
                            <div class="w-1/2 px-14 py-3">
                                <div class="boxShadow h-[480px] overflow-y-auto p-4 border">
                                    <div class="flex justify-between items-center mb-3">
                                        <div class="text-lg font-semibold">Order Summary</div>
                                        <div><span class="totalItem">{{ $cartItems }}</span> items</div>
                                    </div>
                                    <hr class="border-b border-light-gray w-full">
                                    <div class="mt-3">
                                        @foreach ($allItems as $item)
                                            {{-- Start of items --}}
                                            <div class="flex justify-between items-center mb-5">
                                                <div class="min-w-[300px] flex items-center">
                                                    <div class="w-16 h-16 flex justify-center items-center shadow-md">
                                                        <img class="h-full" src="{{ $item->products->p_photo }}"
                                                            alt="">
                                                    </div>
                                                    <div class="ml-2">
                                                        <p class="text-lg"></p>{{ $item->products->pname }}
                                                    </div>
                                                </div>
                                                <div class="itemPrice flex items-center justify-center">${{ number_format($item->products->price) }}</div>
                                                <div class="flex items-center space-x-0">
                                                    <input type="number" name="qty" value="{{ $item->quantity }}"
                                                        class="quantityInput outline-none cursor-default text-center text-black w-10 border rounded-md border-black"
                                                        readonly>
                                                </div>
                                                @php
                                                    $eachTotal = $item->products->price * $item->quantity
                                                @endphp
                                                <div class="totalPrice flex items-center justify-center">${{ number_format($eachTotal) }}</div>
                                            </div>
                                            {{-- End of items --}}
                                        @endforeach
                                    </div>
                                    <hr class="w-full border border-light-gray">
                                    <div class="flex justify-between items-center mt-2 mb-2">
                                        <div class="space-y-1">
                                            <div>Grand Total: </div>
                                        </div>
                                        <div class="space-y-1">
                                            <div>${{ number_format($totalPrice) }}</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>

                </div>
            </div>
        </div>

    </div>
</body>

</html>
