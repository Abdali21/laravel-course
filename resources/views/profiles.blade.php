<x-layouts>
    <h2 class="text-2xl font-bold m-2 ">Profiles</h2>
    <hr>
    <table class="w-[95%] mx-auto my-3 border  border-gray-300 text-center text-sm text-gray-600">
        <thead class="bg-gray-100 text-gray-700">
            <tr>
                <th class="border-b px-4 py-2">ID</th>
                <th class="border-b px-4 py-2">Name</th>
                <th class="border-b px-4 py-2">Email</th>
                <th class="border-b px-4 py-2">Bio</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($profiles as $profile)
            <tr class="odd:bg-white even:bg-gray-50 hover:bg-blue-50">
                <td class="border px-4 py-2">{{$profile->id}}</td>
                <td class="border px-4 py-2">{{$profile->name}}</td>
                <td class="border px-4 py-2">{{$profile->email}}</td>
                <td class="border px-4 py-2">{{$profile->bio}}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
    {{$profiles->links()}}
</x-layouts>