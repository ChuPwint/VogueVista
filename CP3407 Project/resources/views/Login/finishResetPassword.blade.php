<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Finish Reset Password</title>
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
<body class="bg-light-gray w-screen h-screen flex">
    <div class="flex m-auto container text-black bg-white w-[80%]">
        {{-- image + logo --}}
        <div class="w-1/2 relative bg-black">
            <div class="w-full h-[600px] mt-5 flex items-center justify-center">
                <img class=" object-cover w-96" src="/images/laptop.png" alt="Forgot password">
            </div>
            <div class="cursor-pointer absolute top-2 left-5">
                <img class=" w-14" src="/images/Logo.png" alt="Login">
            </div>
        </div>
        <div class="w-1/2">
            <div class="p-8">
                <div class="text-3xl font-bold">Successful reset!</div>
                <hr class="w-full mt-6 mb-3 border border-light-gray border-opacity-15 h-px">
                <div class="text-xl mb-5">
                    You can now login to our website using your newly registered password.
                </div>
                    <div class=" mt-8">
                        <a href="/login" class="block w-full px-5 py-2 text-center bg-black rounded-md text-white text-xl font-semibold">Go to Login Page</a>
                    </div>
            </div>
        </div>
    </div>
</body>

</html>
