<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Forgot Password</title>
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
                <img class=" object-cover w-80" src="/images/key.png" alt="Forgot password">
            </div>
            <div class="cursor-pointer absolute top-2 left-5">
                <img class=" w-14" src="/images/Logo.png" alt="Login">
            </div>
        </div>
        {{-- login form --}}
        <div class="w-1/2">
            <div class="p-8">
                <div class="text-3xl font-bold">Forgot Your Password?</div>
                <hr class="w-full mt-6 mb-3 border border-light-gray border-opacity-15 h-px">
                <div class="text-xl mb-5">
                    Please enter your registered email address. We will send a 4 digit verification code to your email.
                </div>
                <form action="/forgotPassword" method="POST" class="w-full ">
                    @csrf
                    <div class="mb-5 w-full">
                        <label for="email">Email</label>
                        <input type="email" id="email" name="email" placeholder="abc@gmail.com"
                            class="border border-black px-3 py-5 rounded-md w-full h-8">
                    </div>
                    <div class="w-full">
                        <label for="code">Verification code</label>
                        <div class="relative w-full">
                            <input type="text" maxlength="4" id="code" name="code" placeholder="1234"
                                class="border border-black px-3 py-5 rounded-md w-full h-8 " style="letter-spacing: 1em">
                            <button type="submit"
                                class="absolute top-0 right-0 px-5 py-[7px] text-center bg-black rounded-md text-white text-lg">Send</button>
                        </div>
                    </div>
                    <div class=" mt-8">
                        <button type="submit" class="w-full px-5 py-2 text-center bg-opacity-50 bg-black rounded-md text-white text-xl font-semibold">Confirm</button>
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
