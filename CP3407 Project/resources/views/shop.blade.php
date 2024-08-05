<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Shop</title>
    @vite('resources/css/app.css')
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>

    {{-- @vite('resources/lib/jquery3.6.0.js') --}}
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    @vite('resources/js/shop.js')

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
<script>
    $(document).ready(function() {
        // Handle sort change
        $('.shopSort').change(function() {
            var sortBy = $(this).val();
            var url = "{{ route('sortProduct') }}";
            loadProducts(url, sortBy);
        });

        function loadProducts(url, sortBy) {
            $.ajax({
                url: url,
                method: 'GET',
                data: {
                    sortBy: sortBy,
                    _token: $('meta[name="csrf-token"]').attr('content')
                },
                success: function(data) {
                    var products = data.products.data;
                    var links = data.links;
                    $('.productList').empty();

                    var productCard = `
                    <div class="mt-4">
                        <div class="flex justify-between items-center">
                    `;

                    products.forEach((product, index) => {
                        if (index % 4 == 0 && index != 0) {
                            productCard += `
                                            </div>
                                            <div class="mt-5 flex items-center ${products.length - index < 4 ? 'justify-start' : 'justify-between'}">
                                        `;
                        }
                        productCard += `
                                        <div class="mr-20 products">
                                            <div class="w-56 h-[320px] rounded-md shadow-md shadow-gray-300 hover:cursor-pointer hover:scale-[1.03] transition-transform mb-4">
                                                <div class="w-full h-3/4">
                                                    <img class="object-cover w-full h-full" src="${product.p_photo}" alt="${product.pname}">
                                                </div>
                                                <div class="px-3 py-1 h-1/4 w-full shadow-lg">
                                                    <div class="flex justify-between items-center mb-2">
                                                        <p class="text-lg font-medium">${product.pname}</p>
                                                        <div class="flex justify-end text-xl">
                                                            <ion-icon name="heart-outline" class="like"></ion-icon>
                                                        </div>
                                                    </div>
                                                    <form action="{{ route('cart.store') }}" method="POST" >
                                                        @csrf
                                                        <input type="hidden" name="productId" value="${product.id}">
                                                        <input type="hidden" name="quantity" value=1>
                                                        <div class="flex justify-between items-center">
                                                            <p class="font-medium">$${product.price}</p>
                                                            <button
                                                                type="submit"
                                                                class="buyNow text-sm bg-black text-white px-2 py-1 rounded-md hover:text-black hover:bg-white hover:border hover:border-black"
                                                                >Add to Cart</button>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    `;
                    });
                    productCard += `
                                        </div>
                                    </div>
                                    <div class="mt-4 pagination">
                                        ${links}
                                    </div>
                                `;
                    $('.productList').append(productCard);

                    // Rebind the click event for pagination links
                    $('.pagination a').on('click', function(e) {
                        e.preventDefault();
                        var url = $(this).attr('href');
                        loadProducts(url, sortBy);
                    });
                },
                error: function(error) {
                    console.log(error);
                }
            });
        }
    });
</script>

<body>
    @include('includes.navbar', ['status' => $status , "cartItems" => $cartItems])
    <div class="relative h-full">
        {{-- Start of side bar --}}
        <aside class="bg-black border-t border-white absolute top-0 left-0 z-40 w-64 h-full transition-transform ">
            <div class="h-full px-3 py-4 overflow-y-auto bg-black text-white">
                <div class="space-y-2 font-medium">
                    <div>
                        {{-- Start of categories  --}}
                        {{-- Category button --}}
                        <button type="button"
                            class="categoryToggle border-b border-white  flex items-center w-full p-2 text-base transition text-white  duration-75 rounded-sm hover:rounded-lg group hover:bg-gray-100 hover:text-black">
                            <span class="flex-1 ms-3 text-left rtl:text-right whitespace-nowrap">Categories</span>
                            <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                                viewBox="0 0 10 6">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2" d="m1 1 4 4 4-4" />
                            </svg>
                        </button>

                        {{-- Start of categories drop down list --}}
                        <div class="categoryList space-y-2">
                            {{-- Start of women categories list --}}
                            <button type="button"
                                class="categoryShow womenCategory ml-[25px] hidden border-b border-white  justify-between items-center w-[89%] p-2 text-base transition text-white  duration-75 rounded-sm hover:rounded-lg hover:bg-gray-100 hover:text-black">
                                <span class="flex-1 ms-3 text-left rtl:text-right whitespace-nowrap">Women</span>
                                <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                    fill="none" viewBox="0 0 10 6">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="2" d="m1 1 4 4 4-4" />
                                </svg>
                            </button>
                            <div class="womenCategoryShow hidden">
                                <div class="flex justify-end">
                                    <a href="#"
                                        class="text-left border-b border-white  flex items-center w-[75%] p-2 text-white transition duration-75 rounded-sm hover:rounded-lg pl-4 hover:bg-gray-100 hover:text-black">Tops</a>
                                </div>
                                <div class="flex justify-end">
                                    <a href="#"
                                        class="text-left border-b border-white  flex items-center w-[75%] p-2 text-white transition duration-75 rounded-sm hover:rounded-lg pl-4  hover:bg-gray-100 hover:text-black">Bottoms</a>
                                </div>
                            </div>
                            {{-- End of women categories list --}}
                            {{-- Start of men categories list --}}
                            <button type="button"
                                class="categoryShow menCategory hidden ml-[25px] border-b border-white  items-center w-[89%] p-2 text-base transition text-white  duration-75 rounded-sm hover:rounded-lg hover:bg-gray-100 hover:text-black">
                                <span class="flex-1 ms-3 text-left rtl:text-right whitespace-nowrap">Men</span>
                                <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                    fill="none" viewBox="0 0 10 6">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="2" d="m1 1 4 4 4-4" />
                                </svg>
                            </button>
                            <div class="menCategoryShow hidden">
                                <div class="flex justify-end">
                                    <a href="#"
                                        class="text-left border-b border-white  flex items-center w-[75%] p-2 text-white transition duration-75 rounded-sm hover:rounded-lg pl-4 hover:bg-gray-100 hover:text-black">Tops</a>
                                </div>
                                <div class="flex justify-end">
                                    <a href="#"
                                        class="text-left border-b border-white  flex items-center w-[75%] p-2 text-white transition duration-75 rounded-sm hover:rounded-lg pl-4 hover:bg-gray-100 hover:text-black">Bottoms</a>
                                </div>
                            </div>
                            {{-- End of men categories list --}}
                            {{-- Start of accessories categories list --}}
                            <button type="button"
                                class="categoryShow accessoryCategory hidden ml-[25px]  items-center w-[89%] p-2 text-base transition text-white  duration-75 rounded-sm hover:rounded-lg hover:bg-gray-100 hover:text-black">
                                <span class="flex-1 ms-3 text-left rtl:text-right whitespace-nowrap">Accessories</span>
                                <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                    fill="none" viewBox="0 0 10 6">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="2" d="m1 1 4 4 4-4" />
                                </svg>
                            </button>
                            <div class="accessoryCategoryShow hidden">
                                <div class="flex justify-end">
                                    <a href="#"
                                        class="text-left border-b border-white  flex items-center w-[75%] p-2 text-white transition duration-75 rounded-sm hover:rounded-lg pl-4 hover:bg-gray-100 hover:text-black">Jeweleries</a>
                                </div>
                                <div class="flex justify-end">
                                    <a href="#"
                                        class="text-left flex items-center w-[75%] p-2 text-white transition duration-75 rounded-sm hover:rounded-lg pl-4 hover:bg-gray-100 hover:text-black">Bags</a>
                                </div>
                            </div>
                            {{-- End of accessories categories list --}}
                            </ul>
                            {{-- End of categories drop down list --}}
                        </div>
                        {{-- End of categories  --}}
                        <hr class="w-full mb-3">
                        {{-- Start of prices --}}
                        <div class="">
                            <div class="px-2 py-2 text-black">
                                <div class="mb-3 text-lg text-white">Prices</div>
                                <div class="flex justify-around items-center mb-3">
                                    <input type="number"
                                        class="placeholder:text-center text-center w-[65px] rounded-lg px-2 py-1 outline-none"
                                        name="min" id="minPrice" placeholder="min">
                                    <span class="text-white font-medium text-lg">-</span>
                                    <input type="number"
                                        class=" placeholder:text-center text-center w-[65px] rounded-lg px-2 py-1"
                                        name="max" id="maxPrice" placeholder="max">
                                </div>
                            </div>
                        </div>
                        {{-- End of prices --}}

                        <hr class="w-full mb-3">
                        {{-- Start of sizes --}}
                        <div>
                            <div class="px-2 py-2 ">
                                <div class="mb-3 text-lg">Sizes</div>
                                <div class="text-black flex justify-around items-center mb-3">
                                    <button
                                        class="text-center px-5 py-1 rounded-xl bg-white w-12 flex justify-center items-center">S</button>
                                    <button
                                        class="text-center px-5 py-1 rounded-xl bg-white w-12 flex justify-center items-center">M</button>
                                    <button
                                        class="text-center px-5 py-1 rounded-xl bg-white w-12 flex justify-center items-center">L</button>
                                    <button
                                        class="text-center px-5 py-1 rounded-xl bg-white w-12 flex justify-center items-center">XL</button>
                                </div>
                            </div>
                        </div>
                        {{-- End of sizes --}}
                        <hr class="w-full mb-3">
                    </div>
                </div>
        </aside>
        {{-- End of side bar --}}
        <div class="px-4 py-2 ml-64">
            <div class="">
                <div class="flex justify-between items-center">
                    <div class="font-medium">
                        Shop > <span> {{ $count }} Products</span>
                    </div>
                    {{-- Start of Sort by --}}
                    <div>
                        <div class="p-3 w-full flex justify-end items-center">
                            <label for="shopSort" class="mr-5">Sort By: </label>
                            <select name="shopSort" id=""
                                class="shopSort block border border-black rounded-md py-1.5 px-4 ">
                                <option value="Popularity">Popularity</option>
                                <option value="Newest">Newest</option>
                                <option value="Lowest Price">Lowest Price</option>
                                <option value="Highest Price">Highest Price</option>
                            </select>
                        </div>
                    </div>
                    {{-- End of Sort by --}}
                </div>
                <div class="productList">
                    {{-- Start of products --}}
                    <div class="mt-4">
                        <div class="flex justify-between items-center">
                            @foreach ($products as $index => $product)
                                @if ((int) $index % 4 == 0)
                                    {{-- Next row --}}
                                    @if ((int) $index != 0)
                        </div>
                        @php
                            $last = count($products) - (int) $index < 4 ? true : false;
                        @endphp
                        <div @class([
                            'mt-5',
                            'flex',
                            'items-center',
                            'justify-start' => $last,
                            'justify-between' => !$last,
                        ])>
                            @endif
                            @endif
                            @php
                                $last2 = $loop->remaining < 2 ? true : false;
                                $lastProduct = (int) $index == $count - 1 ? true : false;
                            @endphp
                            <div @class([
                                'mr-20' => $last2 && $lastProduct,
                                'products',
                            ])>
                                <div
                                    class="w-56 h-[320px] rounded-md shadow-md shadow-gray-300 hover:cursor-pointer hover:scale-[1.03] transition-transform mb-4">
                                    <div class="w-full h-3/4">
                                        <img class="object-cover w-full h-full" src="{{ $product->p_photo }}"
                                            alt="{{ $product->pname }}">
                                    </div>
                                    <div class="px-3 py-1 h-1/4 w-full shadow-lg">
                                        <div class="flex justify-between items-center mb-2">
                                            <p class="text-lg font-medium">{{ $product->pname }}</p>
                                            <div class="flex justify-end text-xl">
                                                <ion-icon name="heart-outline" class="like"></ion-icon>
                                            </div>
                                        </div>
                                        <form action="{{ route('cart.store') }}" method="POST" >
                                            @csrf
                                            <input type="hidden" name="productId" value=" {{ $product->id }}">
                                            <input type="hidden" name="quantity" value=1>
                                            <div class="flex justify-between items-center">
                                                <p class="font-medium">${{ $product->price }}</p>
                                                <button
                                                    type="submit"
                                                    class="buyNow text-sm bg-black text-white px-2 py-1 rounded-md hover:text-black hover:bg-white hover:border hover:border-black"
                                                    >Add to Cart</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                    {{-- End of products --}}
                    <div class="mt-4 pagination">
                        {{ $products->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
