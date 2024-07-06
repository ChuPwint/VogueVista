<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Checkout</title>
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

<body>
    <div class="p-4">
        <div>
            <p class="font-semibold mb-6 text-2xl">Checkout</p>
            <hr class="w-full border border-light-gray">
        </div>
        <div class="mt-5 px-5 flex justify-between">
            <div class="w-1/2 px-4 py-2 border-r-2 border-light-gray">
                <div class="text-lg font-semibold mb-3">Shipping Details</div>
                <hr class="w-full border border-light-gray">
                <div class="mt-5">
                    <div class="mb-5 w-full">
                        <label for="deliName">Full Name</label>
                        <input type="text" id="deliName" name="deliName" placeholder="John Smith"
                            class="border border-black px-3 py-5 rounded-md w-full h-8">
                    </div>
                    <div class="mb-5 w-full">
                        <label for="address">Address</label>
                        <input type="text" id="address" name="address" placeholder="Abc Street, DEF building"
                            class="border border-black px-3 py-5 rounded-md w-full h-8">
                    </div>
                    <div class="mb-5 w-full">
                        <label for="region">Region</label>
                        <input type="text" id="region" name="region" placeholder="Singapore"
                            class="border border-black px-3 py-5 rounded-md w-full h-8">
                    </div>
                    <div class="mb-5 w-full">
                        <label for="postalCode">Postal Code</label>
                        <input type="number" id="postalCode" name="postalCode" placeholder="123456"
                            class="border border-black px-3 py-5 rounded-md w-full h-8">
                    </div>
                    <div class=" w-full">
                        <label for="phone">Phone Number</label>
                        <input type="text" id="phone" name="phone" placeholder="+65 12345678"
                            class="border border-black px-3 py-5 rounded-md w-full h-8">
                    </div>
                    <div class="mt-3 flex justify-between">
                        <div>
                            <input type="checkbox" name="same" id="same">
                            <label for="same">Is it same address as stated in profile?</label>
                        </div>
                    </div>
                    <div class="mt-5">
                        <button
                            class="px-5 py-2 w-full bg-black rounded-sm text-white text-lg font-semibold">Confirm</button>
                    </div>
                </div>
            </div>
            <div class="w-1/2 px-14 py-3">
                <form action="/payment" method="get">
                    <div class="boxShadow h-[480px] overflow-y-auto p-4 border">
                        <div class="flex justify-between items-center mb-3">
                            <div class="text-lg font-semibold">Order Summary</div>
                            <div><span class="totalItem">4</span> items</div>
                        </div>
                        <hr class="border-b border-light-gray w-full">
                        <div class="mt-3">
                            {{-- Start of items --}}
                            <div class="flex justify-between items-center mb-5">
                                <div class="min-w-[300px] flex items-center">
                                    <div class="w-16 h-16 flex justify-center items-center shadow-md">
                                        <img class="h-full" src="/images/new arrival dress.webp" alt="">
                                    </div>
                                    <div class="ml-2">
                                        <p class="text-lg">Classic Velvet Dress</p>
                                    </div>
                                </div>
                                <div class="itemPrice flex items-center justify-center">$70</div>
                                <div class="flex items-center space-x-0">
                                    <input type="number" name="qty" value="2"
                                        class="quantityInput outline-none cursor-default text-center text-black w-10 border rounded-md border-black"
                                        readonly>
                                </div>
                                <div class="totalPrice flex items-center justify-center">$70</div>
                            </div>
                            {{-- End of items --}}
                            {{-- Start of items --}}
                            <div class="flex justify-between items-center mb-5">
                                <div class="min-w-[300px] flex items-center">
                                    <div class="w-16 h-16 flex justify-center items-center shadow-md">
                                        <img class="h-full" src="/images/new arrival dress.webp" alt="">
                                    </div>
                                    <div class="ml-2">
                                        <p class="text-lg">Classic Velvet Dress</p>
                                    </div>
                                </div>
                                <div class="itemPrice flex items-center justify-center">$70</div>
                                <div class="flex items-center space-x-0">
                                    <input type="number" name="qty" value="2"
                                        class="quantityInput outline-none cursor-default text-center text-black w-10 border rounded-md border-black"
                                        readonly>
                                </div>
                                <div class="totalPrice flex items-center justify-center">$70</div>
                            </div>
                            {{-- End of items --}}
                            {{-- Start of items --}}
                            <div class="flex justify-between items-center mb-5">
                                <div class="min-w-[300px] flex items-center">
                                    <div class="w-16 h-16 flex justify-center items-center shadow-md">
                                        <img class="h-full" src="/images/new arrival dress.webp" alt="">
                                    </div>
                                    <div class="ml-2">
                                        <p class="text-lg">Classic Velvet Dress</p>
                                    </div>
                                </div>
                                <div class="itemPrice flex items-center justify-center">$70</div>
                                <div class="flex items-center space-x-0">
                                    <input type="number" name="qty" value="2"
                                        class="quantityInput outline-none cursor-default text-center text-black w-10 border rounded-md border-black"
                                        readonly>
                                </div>
                                <div class="totalPrice flex items-center justify-center">$70</div>
                            </div>
                            {{-- End of items --}}
                        </div>
                        <hr class="w-full border border-light-gray">
                        <div class="flex justify-between items-center mt-2 mb-2">
                            <div class="space-y-1">
                                <div>Subtotal: </div>
                                <div>Shipping Fee: </div>
                                <div>Grand Total: </div>
                            </div>
                            <div class="space-y-1">
                                <div>$210</div>
                                <div>$10</div>
                                <div>$220</div>
                            </div>
                        </div>
                    </div>
                    <div class="mt-[43px]">
                        <button type="submit"
                            class="px-5 py-2 w-full bg-black rounded-sm text-white text-lg font-semibold">Proceed to
                            Payment</button>
                    </div>
                </form>
            </div>

        </div>
    </div>
</body>

</html>
