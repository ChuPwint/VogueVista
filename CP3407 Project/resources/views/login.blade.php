<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
    @vite('resources/css/app.css')
</head>
<body class="bg-light-gray w-screen h-screen flex">
    <div class="flex m-auto container text-black bg-white w-[80%]">
        {{-- image + logo --}}
        <div class="w-1/2 relative">
            <div class="w-full h-[600px]">
                <img class=" object-cover w-full h-full" src="/images/don't be a square.jpeg" alt="Login">
            </div>
            <div class="cursor-pointer absolute top-10 left-[250px]">
                <img class=" w-24" src="/images/Logo.png" alt="Login">
            </div>
        </div>
        {{-- login form --}}
        <div class="w-1/2 m-auto">
            <div class="p-8">
                <div class="text-center text-3xl font-bold mb-8">Welcome to <span class="cursor-pointer">Vogue Vista!</span></div>
                <form action="/login" method="POST" class="w-full ">
                    @csrf
                    <div class="mb-5 w-full">
                        <label for="email">Email</label>
                        <input type="email" id="email" name="email" placeholder="abc@gmail.com" class="border border-black px-3 py-5 rounded-md w-full h-8">
                    </div>
                    <div class=" w-full">
                        <label for="password">Password</label>
                        <input type="password" id="password" name="password" placeholder="" class="border border-black px-3 py-5 rounded-md w-full h-8">
                    </div>
                    <div class="mt-3 flex justify-between">
                        <div>
                            <input type="checkbox" name="remember" id="remember">
                            <label for="remember">Keep me logged in</label>
                        </div>
                        <div>
                            <a href="" class="underline">Forgot Your Password?</a>
                        </div>
                    </div>
                    <div class=" mt-5">
                        <button type="submit" class="w-full px-5 py-2 text-center bg-black rounded-md text-white text-xl font-semibold">Login</button>
                    </div>
                </form>
                <div class="mt-5 inline-flex justify-between items-center w-full">
                    <hr class=" w-1/2 mr-4 border-opacity-15 h-px border border-light-gray">
                    <div class="text-xl font-light">or</div>
                    <hr class=" w-1/2 ml-4 border-opacity-15 h-px border border-light-gray">
                </div>
                <div class="mt-5">
                    <button class="w-full px-5 py-1 text-center rounded-md text-xl font-light border border-black">
                        <img class="inline w-8 h-8 mr-3" src="/images/Group 5.png" alt="">
                        Login with Google
                    </button>
                </div>
                <div class="mt-5 text-center">
                    <span>Don't have an account yet?</span>
                    <a href="/signup" class=" underline ">Sign Up Here</a>
                </div>
            </div>
        </div>
    </div>
</body>
</html>