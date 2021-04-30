<div class="flex" id="skills">
    <div class="flex flex-col items-center w-screen space-y-8 p-16 py-0 font-main text-white">
        <div class="text-4xl">
            {{ $data->title }}
        </div>
        <div class="flex space-x-8 items-center justify-center flex-row flex-wrap">
            @forelse($skills as $skill)
                <x-skill :skill="$skill"></x-skill>
            @empty
                <div class="font-second text-xl">
                    There are no current skills
                </div>
            @endforelse
        </div>
    </div>
</div>
