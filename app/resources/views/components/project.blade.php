@props([
    'project',
    'invert'
])
@php
    $default_classes = 'flex bg-secondary w-inherit';
    $classes = $invert ? $default_classes . ' flex-row-reverse' : $default_classes;
@endphp
<div {{$attributes->merge(['class' => $classes])}} id="projects">
    <div class="flex flex-1 h-660px">
        <img src="{{ asset("images/$project->image") }}" class="bg-cover bg-no-repeat" alt="...">
    </div>
    @php
        $project_default_classes = 'flex flex-1 w-full justify-center';
        $project_classes = !$invert ? $project_default_classes . ' text-right' : $project_default_classes;
    @endphp
    <div class="{{$project_classes}}">
        <div class="flex flex-col py-24 font-main text-white space-y-8">
            <div class="text-4xl">
                {{ $project->name }}
            </div>
            <div class="flex text-xl justify-end max-w-2xl">
                {{ $project->description }}
            </div>
            <x-button class="font-second text-xl w-56 justify-center bg-transparent items-center" action="route('project.show',['id' => $project])">
                View Project
            </x-button>
        </div>
    </div>
</div>
