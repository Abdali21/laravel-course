<div class="grid grid-cols-1  md:grid-cols-3 gap-4">
     @foreach ($profiles as $profile)
           <div class="bg-white shadow-md rounded-lg p-4 flex items-center space-x-4">
                 <input type="image" src="https://picsum.photos/id/237/200/300"
                       class="w-16 h-16 rounded-full object-cover border-2 border-gray-300" alt="Profile Image">
                 <div class="flex flex-col">
                       <h2 class="text-lg font-semibold text-gray-800">{{ $profile->name }}</h2>
                       <p class="text-sm text-gray-600">{{ $profile->email }}</p>
                       <p class="text-sm text-gray-500">{{ Str::limit($profile->bio, 30) }}</p>
                       <div class=" flex justify-center  mt-2 border px-2 py-2 min-w-1/2">
                         <a href="{{route("profiles.show", $profile->id)}}" class="text-sm">
                              show more
                         </a>
                      </div>
                 </div>
           </div>
      @endforeach
</div>
<div class="mt-2">
     {{ $profiles->links() }}
</div>