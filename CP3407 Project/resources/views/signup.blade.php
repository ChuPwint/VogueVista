<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sign Up</title>
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
        <div class="w-1/2 m-auto">
            <div class="p-5">
                <div class="text-3xl font-bold mb-8">Register with us!</div>
                <form action="/signup" method="POST" class="w-full ">
                    @csrf
                    <div class="mb-5 w-full">
                        <label for="name">Full Name</label>
                        <input type="text" id="name" name="name" placeholder="John Smith" class="border border-black px-3 py-5 rounded-md w-full h-8" required>
                    </div>
                    <div class="mb-5 w-full">
                        <label for="email">Email</label>
                        <input type="email" id="email" name="email" placeholder="abc@gmail.com" class="border border-black px-3 py-5 rounded-md w-full h-8" required>
                    </div>
                    <div class="mb-5 w-full">
                        <label for="phone">Phone</label>
                        <input type="text" id="phone" name="phone" placeholder="12345678" class="border border-black px-3 py-5 rounded-md w-full h-8">
                    </div>
                    <div class="mb-5 w-full">
                        <label for="password">Password</label>
                        <input type="password" id="password" name="password" placeholder="" class="border border-black px-3 py-5 rounded-md w-full h-8" required>
                    </div>
                    <div class=" w-full">
                        <label for="password2">Re-enter Password</label>
                        <input type="password" id="password2" name="password2" placeholder="" class="border border-black px-3 py-5 rounded-md w-full h-8" required>
                    </div>
                    
                    <div class="mt-8">
                        <button type="submit" class="w-full px-5 py-2 text-center bg-black rounded-md text-white text-xl font-semibold">Sign Up</button>
                    </div>
                </form>
                <div class="mt-5 text-center">
                    <span>Already have an account?</span>
                    <a href="/login" class=" underline ">Login Here</a>
                </div>
            </div>
        </div>
    </div>
</body>
</html>