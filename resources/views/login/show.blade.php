<x-layouts title="Login">
    <div class="flex flex-col items-center justify-center min-h-screen bg-gray-100">
        <div class="bg-white p-6 rounded-lg shadow-lg w-96">
            <h2 class="text-2xl font-semibold text-center text-gray-700 mb-4">Authentification</h2>
            <form  method="POST" action="{{route("login.login")}}" class="flex flex-col space-y-4">
                @csrf
                <div>
                    <label class="block text-gray-600 font-medium mb-1">Email:</label>
                    <input type="text" placeholder="enter your email" name="login" value="{{old("login")}}" class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
                    @error('login')
                         <span class="text-red-500">{{$message}}</span>
                    @enderror
                </div>
                <div>
                    <label class="block text-gray-600 font-medium mb-1">Password:</label>
                    <input type="password" placeholder="enter your password" name="password" class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
                </div>
                <button placeholder="enter your password" class="w-full bg-blue-500 text-white py-2 rounded-lg hover:bg-blue-600 transition">Login</button>
            </form>
        </div>
    </div>
</x-layouts>
