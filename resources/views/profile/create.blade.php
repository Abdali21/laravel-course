<x-layouts>
  <div class="max-w-md mx-auto mt-10 bg-white p-6 rounded-2xl shadow-lg">
    @if ($errors->any())
    <x-alert type="red-400">
    <ul>
      @foreach ($errors->all() as $error)
        <li>{{$error}}</li>
      @endforeach   
    </ul>
    </x-alert>
  @endif
    <h2 class="text-2xl font-semibold text-gray-800 mb-4">Create Profile</h2>
    <form method="POST" action="{{route("profiles.store")}}" class="space-y-4">
      @csrf
      <div>
        <label class="block text-sm font-medium text-gray-700">Name</label>
        <input type="text" name="name" placeholder="Enter your name"
          class="w-full mt-1 p-2 border border-gray-300 rounded-lg focus:ring-blue-500 focus:border-blue-500">

        @error("name")
      <div class="text-red-400 mt-2">
        {{$message}}
      </div>
    @enderror 
      </div>

      <div>
        <label class="block text-sm font-medium text-gray-700">Email</label>
        <input type="email" name="email" placeholder="Enter your email"
          class="w-full mt-1 p-2 border border-gray-300 rounded-lg focus:ring-blue-500 focus:border-blue-500">
        @error('email')
      <div class="text-red-400 mt-2">
        {{$message}}
      </div>
    @enderror
      </div>

      <div>
        <label class="block text-sm font-medium text-gray-700">Password</label>
        <input type="password" name="password" placeholder="Enter your password"
          class="w-full mt-1 p-2 border border-gray-300 rounded-lg focus:ring-blue-500 focus:border-blue-500">
        @error('password')
      <div class="text-red-400 mt-2">
        {{$message}}
      </div>
    @enderror
      </div>

      <div>
        <label class="block text-sm font-medium text-gray-700">Bio</label>
        <textarea name="bio" placeholder="Tell us about yourself"
          class="w-full mt-1 p-2 border border-gray-300 rounded-lg focus:ring-blue-500 focus:border-blue-500"></textarea>
        @error('bio')
      <div class="text-red-400 mt-2">
        {{$message}}
      </div>
    @enderror
      </div>

      <button type="submit"
        class="w-full bg-blue-600 text-white py-2 rounded-lg hover:bg-blue-700 transition duration-300">
        create
      </button>
    </form>
  </div>
</x-layouts>