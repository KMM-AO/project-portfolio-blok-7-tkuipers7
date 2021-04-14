@php
$landing = 'x-section.landing';
@endphp
<x-app-layout>
    {{--  Landing  --}}
{{--    @includeIf('sections.landing', ['class' => 'h-screen flex justify-center items-center'])--}}
    <x-sections.landing></x-sections.landing>
</x-app-layout>
