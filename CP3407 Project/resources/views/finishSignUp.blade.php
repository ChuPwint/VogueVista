<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Finished Sign Up</title>
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
            <div class="w-full h-[700px]">
                <img class=" object-cover w-full h-full" src="/images/Mask group.png" alt="Login">
            </div>
            <div class="cursor-pointer absolute top-5 left-5">
                <img class=" w-14" src="/images/Logo.png" alt="Login">
            </div>
        </div>
        {{-- sign up form --}}
        <div class="p-5">
            <div class="text-3xl font-semibold mb-10">
                <p class="mb-5">Thank you for Joining Us!</p>
                <p class="mb-5">Login to start shopping at VogueVista!</p>
            </div>
            <a href="/login" class="mt-10 w-full px-5 py-2 text-center bg-black rounded-md text-white text-xl font-semibold">Login</a>
        </div>
    </div>
</body>
</html>