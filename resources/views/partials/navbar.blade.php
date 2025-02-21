<nav class="bg-gray-800 text-white py-3 px-10 flex justify-between items-center  ">
    <div>
        <h3>social network</h3>
    </div>
    <div class="flex space-x-8">
        <a href="{{route("home")}}" class="hover:text-gray-300 cursor-pointer">Home</a>
        <a href="{{route("profiles.index")}}" class="hover:text-gray-300 cursor-pointer">All Profiles</a>
        <a href="{{route("profiles.create")}}" class="hover:text-gray-300 cursor-pointer">Add a profile</a>
        <a href="/" class="hover:text-gray-300 cursor-pointer">My Informations</a>
    </div>
    <div>
        @guest
            <a href="{{route("login.show")}}" class="hover:text-gray-300 cursor-pointer">Login</a>
        @endguest
        @auth
        <div class="relative">
            <!-- Profile Button -->
            <button id="profile" class="px-4 py-1 text-white bg-blue-600 rounded-lg shadow-md hover:bg-blue-700 transition duration-300">
                Profile
            </button>
        
            <!-- Dropdown Menu -->
            <div id="infos" class="hidden absolute right-0 mt-2 w-48 bg-white shadow-lg rounded-lg p-3 border border-gray-200">
                <a href="#" class="block px-4 py-2 text-gray-700 hover:bg-gray-100 rounded-md transition duration-200">
                    Name: 
                </a>
                <a href="#" class="block px-4 py-2 text-gray-700 hover:bg-gray-100 rounded-md transition duration-200">
                    Email: 
                </a>
                <a href="{{route('login.logout')}}" class="block px-4 py-2 text-red-600 hover:bg-red-100 rounded-md transition duration-200">
                    Logout
                </a>
            </div>
        </div>
        @endauth
        
    </div>
</nav>