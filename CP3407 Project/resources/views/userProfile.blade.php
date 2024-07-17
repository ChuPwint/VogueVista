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
    @include('includes.navbar', ['status' => $status])

    <div class="flex">
    <aside class="bg-black top-0 left-0 z-40 w-64 h-[89vh] transition-transform border-t border-white relative">
        <div class="h-full px-3 py-4 overflow-y-auto bg-black text-white">
            <div class="space-y-2 font-medium ">
                <div class="ml-4 mb-8">
                <span class="text-center text-2xl text-white font-medium">User Profile</span>
            </div>
                <a href="/userProfile" class="flex items-center p-2 text-white rounded-lg hover:bg-[#7D7575] mb-2" id="user-info-link">
                    <svg class="w-6 h-6 text-white transition duration-75 group-hover:text-gray-900" fill="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path d="M12 12c2.21 0 4-1.79 4-4s-1.79-4-4-4-4 1.79-4 4 1.79 4 4 4zM12 14c-2.67 0-8 1.34-8 4v2h16v-2c0-2.66-5.33-4-8-4z"></path>
                    </svg>
                    <span class="ml-3">User info</span>
                </a>
                <a href="#" class="flex items-center p-2 text-white rounded-lg hover:bg-[#7D7575] mb-2"  id="user-info-link-1"  >
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                            stroke-width="1.5" stroke="currentColor" class="h-6 w-6 text-white transition duration-75 group-hover:text-white" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M21 8.25c0-2.485-2.099-4.5-4.688-4.5-1.935 0-3.597 1.126-4.312 2.733-.715-1.607-2.377-2.733-4.313-2.733C5.1 3.75 3 5.765 3 8.25c0 7.22 9 12 9 12s9-4.78 9-12Z" />
                        </svg>
                    <span class="ml-3">Favorites</span>
                </a>
                <a href="#" class="flex items-center p-2 text-white rounded-lg hover:bg-[#7D7575] mb-2" id="user-info-link-2" >
                    <svg class="h-6 w-6 text-white transition duration-75 group-hover:text-white"  width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">  <path stroke="none" d="M0 0h24v24H0z"/>  <rect x="5" y="3" width="14" height="18" rx="2" />  <line x1="9" y1="7" x2="15" y2="7" />  <line x1="9" y1="11" x2="15" y2="11" />  <line x1="9" y1="15" x2="13" y2="15" /></svg>
                    <span class="ml-3">Order History</span>
                </a>
                <a href="#" class="flex items-center p-2 text-white rounded-lg hover:bg-[#7D7575] mb-2" id="user-info-link-3" >
                    <svg class="h-6 w-6 text-white transition duration-75 group-hover:text-white"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round">  <path d="M18 8A6 6 0 0 0 6 8c0 7-3 9-3 9h18s-3-2-3-9" />  <path d="M13.73 21a2 2 0 0 1-3.46 0" /></svg>
                    <span class="ml-3">Notifications</span>
                </a>
                <a href="#" class="flex items-center p-2 text-white rounded-lg hover:bg-[#7D7575]" id="user-info-link-4">
                    <svg class="h-6 w-6 text-white transition duration-75 group-hover:text-white"  width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">  <path stroke="none" d="M0 0h24v24H0z"/>  <path d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 0 0 2.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 0 0 1.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 0 0 -1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 0 0 -2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 0 0 -2.573 -1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 0 0 -1.065 -2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 0 0 1.066 -2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z" />  <circle cx="12" cy="12" r="3" /></svg>
                    <span class="ml-3">Settings</span>
                </a>
            </div>
        </div>
        <div class="absolute bottom-8 w-full flex items-center justify-center">
        <a href="#" class="flex items-center px-5 py-2 text-black rounded-lg bg-white font-medium">
            <svg class="h-6 w-6 text-black transition duration-75 group-hover:text-white mr-5"  width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">  <path stroke="none" d="M0 0h24v24H0z"/>  <path d="M14 8v-2a2 2 0 0 0 -2 -2h-7a2 2 0 0 0 -2 2v12a2 2 0 0 0 2 2h7a2 2 0 0 0 2 -2v-2" />  <path d="M7 12h14l-3 -3m0 6l3 -3" /></svg>
            Log Out
        </a>
    </div>

    </aside>
    <div class="ml-36 mt-10 w-2/3">
        <div class="mt-8 mx-auto w-full">
            <div class="flex">
            <div class="w-[120px] text-center relative">
                <img class="ml-[-4px] w-[120px] h-[110px] rounded-full" src="images/user profile.png" alt="User Profile Picture">
                <div class="absolute bottom-3 right-4 bg-black rounded-full p-1">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-3 h-3 text-black fill-white">
                        <path stroke-linecap="round" stroke-linejoin="round" d="m16.862 4.487 1.687-1.688a1.875 1.875 0 1 1 2.652 2.652L10.582 16.07a4.5 4.5 0 0 1-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 0 1 1.13-1.897l8.932-8.931Zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0 1 15.75 21H5.25A2.25 2.25 0 0 1 3 18.75V8.25A2.25 2.25 0 0 1 5.25 6H10" />
                      </svg>

                </div>
            </div>
            <div class="flex flex-col justify-center ml-10 leading-[20px]">
            <div class="mt-2 text-lg font-medium text-black">Emma</div>
            <div class="text-gray-500">Singapore</div>
        </div>
            </div>
            <div class="mt-8 w-full">
                <form>
                    <div class="grid grid-cols-2 gap-4">
                        <div>
                            <label class="block text-gray-700">Name</label>
                            <input type="text" class="w-[90%] mt-1 p-2 border border-gray-300 rounded" >
                        </div>
                        <div>
                            <label class="block text-gray-700">Full Name</label>
                            <input type="text" class="w-[90%] mt-1 p-2 border border-gray-300 rounded">
                        </div>
                        <div>
                            <label class="block text-gray-700">Address</label>
                            <input type="text" class="w-[90%] mt-1 p-2 border border-gray-300 rounded">
                        </div>
                        <div>
                            <label class="block text-gray-700">Phone Number</label>
                            <input type="text" class="w-[90%] mt-1 p-2 border border-gray-300 rounded">
                        </div>
                        <div>
                            <label class="block text-gray-700">Location</label>
                            <input type="text" class="w-[90%] mt-1 p-2 border border-gray-300 rounded">
                        </div>
                        <div>
                            <label class="block text-gray-700">Postal Code</label>
                            <input type="text" class="w-[90%] mt-1 p-2 border border-gray-300 rounded">
                        </div>
                    </div>
                    <div class="mt-12 flex items-center justify-center w-[96%]">
                        <button type="submit" class="px-4 py-2 bg-black text-white font-medium rounded">Save Changes</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<script>
    document.querySelectorAll('a[id^="user-info-link"]').forEach(link => {
        link.addEventListener('click', function(event) {
            event.preventDefault(); // Prevent default link behavior (optional)

            // Add a specific class for background color change
            this.classList.add('bg-[#7D7575]');
        });
    });
</script>

</body>
</html>
