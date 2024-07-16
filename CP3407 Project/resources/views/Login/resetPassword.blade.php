<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Reset Password</title>
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
        {{-- login form --}}
        <div class="w-1/2">
            <div class="p-8">
                <div class="text-3xl font-bold">Reset Your Password</div>
                <hr class="w-full mt-6 mb-3 border border-light-gray border-opacity-15 h-px">
                <div class="text-xl mb-5">
                    Your new password must be different from your previously registered password.
                </div>
                <form action="/resetPassword" method="POST" class="w-full ">
                    @csrf
                    <div class="mb-5 w-full">
                        <label for="password">New Password</label>
                        <input type="password" id="password" name="password" placeholder=""
                            class="border border-black px-3 py-5 rounded-md w-full h-8">
                        @error('password')
                            <small class="text-red-500">{{ $message }}</small>
                        @enderror
                    </div>
                    <div class="w-full">
                        <label for="password_confirmation">Re-enter Password</label>
                        <input type="password" id="password_confirmation" name="password_confirmation" placeholder=""
                            class="border border-black px-3 py-5 rounded-md w-full h-8">
                        @error('password_confirmation')
                            <small class="text-red-500">{{ $message }}</small>
                        @enderror
                    </div>
                    <div class=" mt-8">
                        <button type="submit"
                            class="w-full px-5 py-2 text-center bg-black rounded-md text-white text-xl font-semibold">Reset
                            Password</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>

</html>
