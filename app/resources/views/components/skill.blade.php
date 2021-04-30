@props([
    'skill'
])
<div class="rounded-full h-48 w-48 flex items-center justify-center bg-red-400">
    <div class="rounded-full h-32 w-32 flex items-center justify-center bg-main text-white text-xl">
        {{ $skill->name }}
    </div>
</div>
