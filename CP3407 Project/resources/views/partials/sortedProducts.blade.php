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
        ])>
            <div id="product-{{ $index }}"
                class="w-56 h-[320px] rounded-md shadow-md shadow-gray-300 hover:cursor-pointer hover:scale-[1.03] transition-transform mb-4">
                <div class="w-full h-3/4">
                    <img class="object-cover w-full h-full" src="{{ $product->p_photo }}" alt="{{ $product->pname }}">
                </div>
                <div class="px-3 py-1 h-1/4 w-full shadow-lg">
                    <div class="flex justify-between items-center mb-2">
                        <p class="text-lg font-medium">{{ $product->pname }}</p>
                        <div class="flex justify-end text-xl">
                            <ion-icon name="heart-outline" class="like"></ion-icon>
                        </div>
                    </div>
                    <div class="flex justify-between items-center">
                        <p class="font-medium">${{ $product->price }}</p>
                        <button
                            class="text-sm bg-black text-white px-2 py-1 rounded-md hover:text-black hover:bg-white hover:border hover:border-black">Buy
                            Now</button>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
{{-- End of products --}}
<div class="mt-4">
    {{ $products->links() }}
</div>
