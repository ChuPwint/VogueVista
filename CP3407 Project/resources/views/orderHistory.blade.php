<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Order History</title>
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    @vite('resources/css/app.css')
</head>

<body>
    @include('includes.navbar')
    <div class="flex">
        @include('profile.sidebar')
        <div class="w-full mx-auto mt-10">
            <h1 class="text-2xl font-bold mb-6 mx-6">Order History</h1>
            <div class="bg-white shadow-md rounded-lg p-6">
                <table class="table-auto w-full text-center">
                    <thead>
                        <tr>
                            <th class="px-4 py-2">Order Number</th>
                            <th class="px-4 py-2">Total Amount</th>
                            <th class="px-4 py-2">Status</th>
                            <th class="px-4 py-2">Order Date</th>
                            <th class="px-4 py-2">Details</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($orders as $order)
                            <tr>
                                <td class="border px-4 py-2">{{ $order->id }}</td>
                                <td class="border px-4 py-2">${{ number_format($order->totalPrice) }}</td>
                                @php
                                    if ($order->del_flg == 0) {
                                        $order_status = 'In Progress';
                                    } else {
                                        $order_status = 'Delivered';
                                    }
                                @endphp

                                <td class="border px-4 py-2">{{ $order_status }}</td>
                                <td class="border px-4 py-2">{{ $order->created_at->format('Y-m-d') }}</td>
                                <td class="border px-4 py-2">
                                    <button onclick="toggleDetails({{ $order->id }})" class="text-blue-500">View
                                        Details</button>
                                </td>
                            </tr>
                            <tr id="details-{{ $order->id }}" style="display: none;">
                                <td colspan="5" class="border px-4 py-2">
                                    <table class="table-auto w-full">
                                        <thead>
                                            <tr>
                                                <th class="px-4 py-2">Product Description</th>
                                                <th class="px-4 py-2 text-left"></th>
                                                <th class="px-4 py-2">Quantity</th>
                                                <th class="px-4 py-2">Total Price</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($orderDetails as $detail)
                                                <tr class="border">
                                                    <td class=" px-4 py-2 flex justify-center items-center"><img
                                                            class="w-20 h-20 " src="{{ $detail->product->p_photo }}"
                                                            alt=""></td>
                                                    <td class=" px-4 py-2 text-left">{{ $detail->product->pname }}</td>
                                                    <td class=" px-4 py-2">{{ $detail->quantity }}</td>
                                                    <td class=" px-4 py-2">${{ number_format($detail->totalPrice) }}
                                                    </td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="6" class="text-center py-4">
                                    No orders yet.
                                </td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <script>
        function toggleDetails(orderId) {
            var detailsRow = document.getElementById('details-' + orderId);
            if (detailsRow.style.display === 'none') {
                detailsRow.style.display = 'table-row';
            } else {
                detailsRow.style.display = 'none';
            }
        }
    </script>
</body>

</html>
