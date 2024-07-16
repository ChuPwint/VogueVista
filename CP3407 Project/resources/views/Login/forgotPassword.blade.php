<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Forgot Password</title>
    @vite('resources/css/app.css')
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
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
        $('.sendCode').click(function(event) {
            $(".error").text('');
            $(".finishCode").text('');
            $(".sessionExpireError").text('');
            $(".codeError").text('');
            
            event.preventDefault(); // Prevent the default form submission
            // Send the Ajax request
            $.ajax({
                url: "{{ route('sendCode') }}",
                type: "POST",
                data: {
                    _token: '{{ csrf_token() }}',
                    email: $('#email').val(),
                    code: $('#code').val()
                },
                success: function(data) {
                    if (data.error) {
                        $(".error").text("User not found");
                    } else if (data.message) {
                        $(".finishCode").text(
                            'Verification code has been successfully sent!');
                    }
                },
                error: function(error) {
                    console.log(error);
                }
            });
        });
    });
</script>

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
                <form action="/forgotPassword/verify" method="POST">
                    @csrf
                    <div class="mb-5 w-full">
                        <label for="email">Email</label>
                        <input type="email" id="email" name="email" placeholder="abc@gmail.com"
                            value="{{ old('email', session('email')) }}"
                            class="border border-black px-3 py-5 rounded-md w-full h-8">
                        <small class="error text-red-500"></small>
                    </div>
                    <div class="w-full">
                        <label for="code">Verification code</label>
                        <div class="relative w-full">
                            <input type="text" maxlength="4" id="code" name="code" placeholder="1234"
                                class="border border-black px-3 py-5 rounded-md w-full h-8 "
                                style="letter-spacing: 1em">
                            <button
                                class="sendCode absolute top-0 right-0 px-5 py-[7px] text-center bg-black rounded-md text-white text-lg">Send</button>
                        </div>
                        <small class="finishCode text-red-500"></small>
                        @error('code')
                            <small class="codeError text-red-500">{{ $message }}</small>
                        @enderror
                    </div>
                    @error('error')
                        <small class="sessionExpireError text-red-500">{{ $message }}</small>
                    @enderror
                    <div class=" mt-8">
                        <button type="submit"
                            class="w-full px-5 py-2 text-center bg-black rounded-md text-white text-xl font-semibold">Confirm</button>
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
