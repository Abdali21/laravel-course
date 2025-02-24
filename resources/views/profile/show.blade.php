<x-layouts title="Mon profile">
    <div class="max-w-lg mx-auto p-6 bg-white shadow-lg rounded-lg">
        <h3 class="text-xl font-semibold text-gray-800 mb-4">Profile</h3>
        <div class="flex items-center space-x-4">
            <input type="image" 
                src="{{ asset('storage/'.$profile->image) }}" 
                class="w-16 h-16 rounded-full object-cover border-2 border-gray-300 shadow-md" 
                alt="Profile Image">
            <div>
                <p class="text-gray-700 font-medium">ID: {{$profile->id}}</p>
                <p class="text-gray-800 font-semibold">{{$profile->name}}</p>
                <p class="text-gray-600">{{$profile->email}}</p>
            </div>
        </div>
    </div>
</x-layouts>
