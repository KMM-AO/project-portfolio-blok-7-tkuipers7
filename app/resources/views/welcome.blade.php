<x-app-layout>
    @foreach($section_items as $section_item)
        @includeIf('components.sections.' . $section_item->name, ['data' => $section_item])
    @endforeach
</x-app-layout>
