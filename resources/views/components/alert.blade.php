@props(['type', 'title', 'message'])
<div class="bg-{{$type}} text-white p-4  flex items-center justify-between">
    <span class="font-semibold">{{$title}}</span>
    <p class="ml-2">{{$message}}</p>
</div>
