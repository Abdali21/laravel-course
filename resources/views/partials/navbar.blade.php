<nav class="bg-gray-800 text-white py-4 px-10 flex justify-between  ">
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
                  <button class="cursor-pointer">Profile</button>
                  <div class="flex flex-col p-4 hidden space-y-2 absolute bg-red-500">
                    <a href="#">test</a>
                    <a href="#">test</a>
                    <a href="#">test</a>
                    <a href="{{route("login.logout")}}" class="hover:text-gray-300 cursor-pointer">Logout</a>
                  </div>
               </div>
        @endauth
    </div>
</nav>