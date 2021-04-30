<div class="flex flex-col items-center space-y-8">
    <div class="font-main text-5xl text-white">
        {{ $data->title }}
    </div>
    <div class="w-screen flex justify-center flex-col space-y-8">
        @forelse($projects as $project)
            <x-project :project="$project" :invert="$loop->even"></x-project>
        @empty
            <div class="font-second text-xl text-white">
                There are no current Projects
            </div>
        @endforelse
    </div>
</div>
