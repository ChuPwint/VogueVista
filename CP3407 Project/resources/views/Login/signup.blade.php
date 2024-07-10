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
                <img class=" object-cover w-full h-full" src="/images/SignUp.png" alt="SignUp">
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
                        <input type="text" id="name" name="name" placeholder="John Smith" value="{{ old('name') }}" class="border border-black px-3 py-5 rounded-md w-full h-8" required>
                        @error("name")
                            <small class="text-red-500">{{ $message }}</small>
                        @enderror
                    </div>
                    <div class="mb-5 w-full">
                        <label for="email">Email</label>
                        <input type="email" id="email" name="email" placeholder="abc@gmail.com" value="{{ old('email') }}" class="border border-black px-3 py-5 rounded-md w-full h-8" required>
                        @error("email")
                            <small class="text-red-500">{{ $message }}</small>
                        @enderror
                    </div>
                    <div class="mb-5 w-full">
                        <label for="phone">Phone</label>
                        <input type="text" id="phone" name="phone" placeholder="12345678" value="{{ old('phone') }}" class="border border-black px-3 py-5 rounded-md w-full h-8">
                        @error("phone")
                            <small class="text-red-500">{{ $message }}</small>
                        @enderror
                    </div>
                    <div class="mb-5 w-full">
                        <label for="password">Password</label>
                        <input type="password" id="password" name="password" placeholder=""  class="border border-black px-3 py-5 rounded-md w-full h-8" required>
                        @error("password")
                            <small class="text-red-500">{{ $message }}</small>
                        @enderror
                    </div>
                    <div class=" w-full">
                        <label for="password_confirmation">Re-enter Password</label>
                        <input type="password" id="password_confirmation" name="password_confirmation" placeholder="" class="border border-black px-3 py-5 rounded-md w-full h-8" required>
                        @error("password_confirmation")
                            <small class="text-red-500">{{ $message }}</small>
                        @enderror
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