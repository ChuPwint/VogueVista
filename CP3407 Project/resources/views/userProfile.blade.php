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
                    <a href="/userProfile" class="flex items-center p-2 text-white rounded-lg {{ request()->is('userProfile*') ? 'bg-[#7D7575]' : 'hover:bg-[#7D7575]' }} mb-2">
                        <svg class="w-6 h-6 text-white transition duration-75 group-hover:text-gray-900"
                            fill="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M12 12c2.21 0 4-1.79 4-4s-1.79-4-4-4-4 1.79-4 4 1.79 4 4 4zM12 14c-2.67 0-8 1.34-8 4v2h16v-2c0-2.66-5.33-4-8-4z">
                            </path>
                        </svg>
                        <span class="ml-3">User info</span>
                    </a>
                    <a href="/favorites" class="flex items-center p-2 text-white rounded-lg {{ request()->is('favorites*') ? 'bg-[#7D7575]' : 'hover:bg-[#7D7575]' }} mb-2">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor"
                            class="h-6 w-6 text-white transition duration-75 group-hover:text-white" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M21 8.25c0-2.485-2.099-4.5-4.688-4.5-1.935 0-3.597 1.126-4.312 2.733-.715-1.607-2.377-2.733-4.313-2.733C5.1 3.75 3 5.765 3 8.25c0 7.22 9 12 9 12s9-4.78 9-12Z" />
                        </svg>
                        <span class="ml-3">Favorites</span>
                    </a>
                    <a href="/orderHistory" class="flex items-center p-2 text-white rounded-lg {{ request()->is('orderHistory*') ? 'bg-[#7D7575]' : 'hover:bg-[#7D7575]' }} mb-2">
                        <svg class="h-6 w-6 text-white transition duration-75 group-hover:text-white" width="24"
                            height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                            stroke-linecap="round" stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" />
                            <rect x="5" y="3" width="14" height="18" rx="2" />
                            <line x1="9" y1="7" x2="15" y2="7" />
                            <line x1="9" y1="11" x2="15" y2="11" />
                            <line x1="9" y1="15" x2="13" y2="15" />
                        </svg>
                        <span class="ml-3">Order History</span>
                    </a>
                    <a href="/userProfile" class="flex items-center p-2 text-white rounded-lg {{ request()->is('notifications*') ? 'bg-[#7D7575]' : 'hover:bg-[#7D7575]' }} mb-2">
                        <svg class="h-6 w-6 text-white transition duration-75 group-hover:text-white"
                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                            stroke-linecap="round" stroke-linejoin="round">
                            <path d="M18 8A6 6 0 0 0 6 8c0 7-3 9-3 9h18s-3-2-3-9" />
                            <path d="M13.73 21a2 2 0 0 1-3.46 0" />
                        </svg>
                        <span class="ml-3">Notifications</span>
                    </a>
                </div>
            </div>
            <div class="absolute bottom-8 w-full flex items-center justify-center">
                <a href="#" class="flex items-center px-5 py-2 text-black rounded-lg bg-white font-medium">
                    <svg class="h-6 w-6 text-black transition duration-75 group-hover:text-white mr-5" width="24"
                        height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                        stroke-linecap="round" stroke-linejoin="round">
                        <path stroke="none" d="M0 0h24v24H0z" />
                        <path d="M14 8v-2a2 2 0 0 0 -2 -2h-7a2 2 0 0 0 -2 2v12a2 2 0 0 0 2 2h7a2 2 0 0 0 2 -2v-2" />
                        <path d="M7 12h14l-3 -3m0 6l3 -3" />
                    </svg>
                    Log Out
                </a>
            </div>

        </aside>
        <div class="ml-36 mt-10 w-2/3">
            <meta name="csrf-token" content="{{ csrf_token() }}">
            <div class="text-3xl font-bold mb-6">My Profile</div>
            <div class="relative">
                <img id="profileImageMain" class="w-32 h-32 rounded-full mb-6" src="{{ Auth::user()->profile_picture ? Storage::url(Auth::user()->profile_picture) : '/images/user profile.png' }}" alt="Profile Image">
                <button id="editProfileImageBtn" class="absolute bottom-3 left-24 bg-blue-500 text-white rounded-full p-1 hover:bg-blue-700">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M15.232 5.232a3 3 0 014.243 4.243l-7.07 7.071a4.5 4.5 0 01-2.121 1.06l-2.243.374a.75.75 0 01-.848-.848l.374-2.243a4.5 4.5 0 011.06-2.121l7.071-7.07z"/>
                        <path stroke-linecap="round" stroke-linejoin="round" d="M18 9l-6-6"/>
                    </svg>
                </button>
            </div>
            <div id="profileImageModal" class="fixed inset-0 flex items-center justify-center bg-black bg-opacity-50 hidden">
                <div class="bg-white p-6 rounded-lg w-[400px]">
                    <div class="flex justify-between">
                        <h2 class="text-xl font-bold mb-4">My Profile</h2><br>
                        <button id="closeModalBtn" class="text-gray-600 hover:text-gray-900 focus:outline-none">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                            </svg>
                        </button>
                    </div>
                    <div class="flex align-middle items-center">
                        <img id="profileImageModalImg" class="w-32 h-32 rounded-full mb-6" src="{{ Auth::user()->profile_picture ? Storage::url(Auth::user()->profile_picture) : '/images/user profile.png' }}" alt="Profile Image">
                        <input type="file" id="profileImageInput" accept="image/*" class="mb-4 ml-[16px]">
                    </div>
                    <div class="text-right">
                        <button id="removeProfileImageBtn" class="bg-red-500 text-white px-4 py-2 rounded-lg hover:bg-red-700 mb-2">Remove Photo</button>
                        <button id="updateProfileImageModalBtn" class="bg-blue-500 text-white px-4 py-2 rounded-lg hover:bg-blue-700">OK</button>
                    </div>
                </div>

        </div>

            <div class="mt-8 w-full">
                <form method="POST" action="{{ route('updateProfile') }}">
                    @csrf
                    <div class="grid grid-cols-2 gap-4">
                        <div>
                            <label class="block text-gray-700">Name</label>
                            <input type="text" name="name" class="w-[90%] mt-1 p-2 border border-gray-300 rounded" value="{{ Auth::user()->name }}">
                        </div>
                        <div>
                            <label class="block text-gray-700">Email</label>
                            <input type="email" name="email" value="{{ Auth::user()->email }}" class="w-[90%] mt-1 p-2 border border-gray-300 rounded">
                        </div>
                        <div>
                            <label class="block text-gray-700">Address</label>
                            <input type="text" name="address" class="w-[90%] mt-1 p-2 border border-gray-300 rounded" value="{{ Auth::user()->address }}">
                        </div>
                        <div>
                            <label class="block text-gray-700">Phone Number</label>
                            <input type="text" name="phone" class="w-[90%] mt-1 p-2 border border-gray-300 rounded" value="{{ Auth::user()->phone }}">
                        </div>
                        <div>
                            <label class="block text-gray-700">Postal Code</label>
                            <input type="text" name="postcode" class="w-[90%] mt-1 p-2 border border-gray-300 rounded" value="{{ Auth::user()->postcode }}">
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
        document.addEventListener('DOMContentLoaded', () => {
            const links = document.querySelectorAll('.nav-link');
            const currentSection = localStorage.getItem('activeSection');

            links.forEach(link => {
                link.addEventListener('click', () => {
                    localStorage.setItem('activeSection', link.getAttribute('data-section'));
                });

                if (link.getAttribute('data-section') === currentSection) {
                    link.classList.add('bg-[#7D7575]');
                }
            });
        });
        </script>

<script>
    document.getElementById('editProfileImageBtn').addEventListener('click', function() {
        document.getElementById('profileImageModal').classList.remove('hidden');
    });

    document.getElementById('closeModalBtn').addEventListener('click', function() {
        document.getElementById('profileImageModal').classList.add('hidden');
    });

    document.getElementById('profileImageInput').addEventListener('change', function(event) {
        const file = event.target.files[0];
        if (file) {
            const reader = new FileReader();
            reader.onload = function(e) {
                // Update the image in the popup only
                document.getElementById('profileImageModalImg').src = e.target.result;
            };
            reader.readAsDataURL(file);
        }
    });

    document.getElementById('updateProfileImageModalBtn').addEventListener('click', function() {
    const fileInput = document.getElementById('profileImageInput');
    const file = fileInput.files[0];
    if (file) {
        const formData = new FormData();
        formData.append('profile_image', file);
        formData.append('_token', document.querySelector('meta[name="csrf-token"]').getAttribute('content'));

        fetch('/profile/update-image', {
            method: 'POST',
            body: formData,
        })
        .then(response => response.json())
        .then(data => {
            console.log(data); // Log the response data
            if (data.success) {
                document.getElementById('profileImageMain').src = data.image_url;
                document.getElementById('profileImageModal').classList.add('hidden');
            } else {
                console.error('Server response error:', data.message);
                alert('Failed to update profile image: ' + data.message);
            }
        })
        .catch(error => {
            console.error('Network error:', error);
            alert('Failed to update profile image. Please try again.');
        });
    } else {
        alert('Please select an image.');
    }
});


    document.getElementById('removeProfileImageBtn').addEventListener('click', function() {
        fetch('/profile/remove-image', {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json',
                'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
            }
        })
        .then(response => response.json())
        .then(data => {
            if (data.success) {
                // Update the main profile image outside only
                document.getElementById('profileImageMain').src = '/images/user profile.png';
                document.getElementById('profileImageModalImg').src = '/images/user profile.png';
                document.getElementById('profileImageModal').classList.add('hidden');
            } else {
                console.error('Server response error:', data.message); // Log server response error
                alert('Failed to remove profile image: ' + data.message); // Show detailed error message
            }
        })
        .catch(error => {
            console.error('Network error:', error); // Log network errors
            alert('Failed to remove profile image. Please try again.'); // General error message
        });
    });
</script>
</body>
</html>
