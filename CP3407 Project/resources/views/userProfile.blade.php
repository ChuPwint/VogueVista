<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home</title>
    @vite('resources/css/app.css')
    <meta name="csrf-token" content="{{ csrf_token() }}">
</head>
<body>
    @include('includes.navbar', ['status' => $status, 'cartItems' => $cartItems])

    <div class="flex">
        @include('profile.sidebar', ['status' => $status])
        <div class="ml-36 mt-10 w-2/3">
            <div class="text-3xl font-bold mb-6">My Profile</div>
            <div class="relative">
                <img id="profileImageMain" class="w-32 h-32 rounded-full mb-6" src="{{ Auth::user()->profile ? Storage::url(Auth::user()->profile) : '/images/user profile.jpg' }}" alt="Profile Image">
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
                        <h2 class="text-xl font-bold mb-4">Update Profile Image</h2>
                        <button id="closeModalBtn" class="text-gray-600 hover:text-gray-900 focus:outline-none">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                            </svg>
                        </button>
                    </div>
                    <div class="flex align-middle items-center">
                        <img id="profileImageModalImg" class="w-32 h-32 rounded-full mb-6" src="{{ Auth::user()->profile ? Storage::url(Auth::user()->profile) : '/images/user profile.jpg' }}" alt="Profile Image">
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
                            <input type="email" name="email" value="{{ Auth::user()->email }}" class="w-[90%] mt-1 p-2 border border-gray-300 rounded" readonly>
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
       document.addEventListener('DOMContentLoaded', () => {
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

            fetch('{{ route('updateProfileImage') }}', {
                method: 'POST',
                body: formData,
            })
            .then(response => response.json())
            .then(data => {
                if (data.success) {
                    const newImageUrl = data.image_url + '?t=' + new Date().getTime();
                    document.getElementById('profileImageMain').src = newImageUrl;
                    document.getElementById('profileImageModalImg').src = newImageUrl;
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
        fetch('{{ route('removeProfileImage') }}', {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json',
                'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
            }
        })
        .then(response => response.json())
        .then(data => {
            if (data.success) {
                const defaultImageUrl = '/images/user profile.jpg';
                document.getElementById('profileImageMain').src = defaultImageUrl;
                document.getElementById('profileImageModalImg').src = defaultImageUrl;
                document.getElementById('profileImageModal').classList.add('hidden');
            } else {
                console.error('Server response error:', data.message);
                alert('Failed to remove profile image: ' + data.message);
            }
        })
        .catch(error => {
            console.error('Network error:', error);
            alert('Failed to remove profile image. Please try again.');
        });
    });
});
    </script>
</body>
</html>
