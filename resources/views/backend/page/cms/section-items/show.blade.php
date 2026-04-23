@extends('backend.layout.app')

@section('title', 'View Section Item')
@section('page-title', 'View Section Item')
@section('page-subtitle', 'Full detail of CMS item')

@section('content')

<div class="max-w-full space-y-6 border-b ">

    {{-- CARD --}}
    <div class="bg-gray-900 border border-gray-800 rounded-xl p-6 space-y-5">

        {{-- HEADER --}}
        <div class="flex justify-between items-center border-b border-gray-800 pb-3">
            <h2 class="text-white text-lg font-semibold">
                {{ $item->title_en ?? 'No Title' }}
            </h2>

            <span class="text-xs px-2 py-1 rounded
                {{ $item->is_active ? 'bg-green-500/20 text-green-400' : 'bg-red-500/20 text-red-400' }}">
                {{ $item->is_active ? 'Active' : 'Inactive' }}
            </span>
        </div>

        {{-- BASIC INFO --}}
        <div class="grid grid-cols-2 gap-4 text-sm border-b border-gray-800 pb-4">

            <div>
                <p class="text-gray-400">Page</p>
                <p class="text-white">{{ $item->page }}</p>
            </div>

            <div>
                <p class="text-gray-400">Section</p>
                <p class="text-white">{{ $item->section_key }}</p>
            </div>

            <div>
                <p class="text-gray-400">Component Type</p>
                <p class="text-white">{{ $item->component_type }}</p>
            </div>

            <div>
                <p class="text-gray-400">Sort Order</p>
                <p class="text-white">{{ $item->sort_order }}</p>
            </div>

        </div>

        {{-- TITLE --}}
        <div >
            <p class="text-gray-400 text-sm">Title EN</p>
            <p class="text-white">{{ $item->title_en }}</p>
        </div>

        <div class="border-b border-gray-800 pb-4">
            <p class="text-gray-400 text-sm">Title KH</p>
            <p class="text-white">{{ $item->title_km }}</p>
        </div>

        {{-- DESCRIPTION --}}
        <div >
            <p class="text-gray-400 text-sm">Description EN</p>
            <p class="text-white whitespace-pre-line">{{ $item->description_en }}</p>
        </div>

        <div class="border-b border-gray-800 pb-4">
            <p class="text-gray-400 text-sm">Description KH</p>
            <p class="text-white whitespace-pre-line">{{ $item->description_km }}</p>
        </div>

        {{-- IMAGE --}}
        @if($item->image)
            <div class="border-b border-gray-800 pb-4">
                <p class="text-gray-400 text-sm mb-2">Image</p>
                <img src="{{ asset('storage/' . $item->image) }}"
                     class="rounded-lg border border-gray-800 max-h-64">
            </div>
        @endif

        {{-- ICON --}}
        @if($item->icon)
            <div class="border-b border-gray-800 pb-4">
                <p class="text-gray-400 text-sm">Icon</p>
                <p class="text-white">{{ $item->icon }}</p>
            </div>
        @endif

        {{-- LINK --}}
        @if($item->link)
            <div class="border-b border-gray-800 pb-4">
                <p class="text-gray-400 text-sm">Link</p>
                <a href="{{ $item->link }}"
                   target="_blank"
                   class="text-blue-400 hover:underline">
                    {{ $item->link }}
                </a>
            </div>
        @endif

        {{-- BUTTON --}}
        <div class="grid grid-cols-2 gap-4  pb-4">

            <div>
                <p class="text-gray-400 text-sm">Button EN</p>
                <p class="text-white">{{ $item->button_text_en }}</p>
            </div>

            <div>
                <p class="text-gray-400 text-sm">Button KH</p>
                <p class="text-white">{{ $item->button_text_km }}</p>
            </div>

        </div>

        {{-- META --}}
        @if($item->meta)
            <div>
                <p class="text-gray-400 text-sm mb-2">Meta (JSON)</p>
                <pre class="bg-gray-800 text-xs text-gray-300 p-3 rounded overflow-auto">
                    {{ json_encode($item->meta, JSON_PRETTY_PRINT) }}
                </pre>
            </div>
        @endif

        {{-- FOOTER --}}
        <div class="flex justify-end gap-2 pt-4 border-t border-gray-800">

            <a href="{{ route('admin.section-items.index') }}"
               class="px-4 py-2 bg-gray-700 text-white rounded hover:bg-gray-600">
                Back
            </a>

            {{-- <a href="{{ route('admin.section-items.edit', $item->id) }}"
               class="px-4 py-2 bg-orange-500 text-white rounded hover:bg-orange-600">
                Edit
            </a> --}}

        </div>

    </div>

</div>

@endsection