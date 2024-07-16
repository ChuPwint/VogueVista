<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home</title>
    @vite('resources/css/app.css')

</head>

<body>
    @include('includes.navbar')

    <aside class="bg-black top-0 left-0 z-40 w-64 h-screen transition-transform border-t border-white ">
        <div class="h-full px-3 py-4 overflow-y-auto bg-black text-white">
            <div class="space-y-2 font-medium">
                <div>
                    <span class="text-center text-2xl">User Profile</span>
                </div>
            </div>

    </aside>
</body>

</html>
