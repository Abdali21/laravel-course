@if (session()->has("success"))
    <x-alert type="green-400">
         {{session("success")}}
    </x-alert>
@endif