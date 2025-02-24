<div class="grid grid-cols-1  md:grid-cols-3 gap-4">
     @foreach ($profiles as $profile)
           <div class="bg-white shadow-md rounded-lg p-4 flex items-center space-x-4">
                 <input type="image" src="{{asset('storage/'.$profile->image)}}"
                       class="w-16 h-16 rounded-full object-cover border-2 border-gray-300" alt="Profile Image">
                 <div class="flex flex-col">
                       <h2 class="text-lg font-semibold text-gray-800">{{ $profile->name }}</h2>
                       <p class="text-sm text-gray-600">{{ $profile->email }}</p>
                       <p class="text-sm text-gray-500">{{ Str::limit($profile->bio, 30) }}</p>
                       <hr>
                        <div class="flex space-x-2 mt-2">
                               <!-- show more -->
                              <div>
                                   <button class="border bg-blue-500 p-1">
                                    <a href="{{route("profiles.show", $profile->id)}}">
                                          show more
                                     </a>
                                   </button>
                              </div>
                               <!-- delete -->
                              <div>
                                   <form method="POST" action="{{route("profiles.destroy", $profile->id)}}">
                                    @method("DELETE")
                                    @csrf
                                    <button class="border bg-red-500 p-1 cursor-pointer">delete</button>
                                   </form>
                              </div>
                                <!-- update -->
                              <div>
                                    <form method="GET" action="{{route("profiles.edit", $profile->id)}}">
                                     @csrf
                                     <button class="border bg-yellow-500 p-1 cursor-pointer">edit</button>
                                    </form>
                               </div>
                        </div>
                 </div>
           </div>
      @endforeach
</div>
<div class="mt-2">
     {{ $profiles->links() }}
</div>