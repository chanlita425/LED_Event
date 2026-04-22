@extends('backend.layout.app')

@section('title', 'Page Sections')
@section('page-title', 'Page Sections')
@section('page-subtitle', 'Manage CMS Page Sections')

@section('content')

<div class="space-y-6 ">

    {{-- HEADER --}}
    <div class="flex items-center justify-between">
        <h1 class="text-xl font-bold text-white">Page Sections</h1>

        <a href="{{ route('admin.page-sections.create') }}"
           class="px-4 py-2 bg-orange-500 text-white rounded-lg hover:bg-orange-600 transition">
            + Create Section
        </a>
    </div>

    {{-- TABLE CARD --}}
    <div class="bg-gray-900 border border-gray-800 rounded-xl overflow-hidden mt-8">

        <div class="overflow-x-auto">

            <table class="w-full text-sm text-left text-gray-300">

                <thead class="text-xs text-gray-400 border-b border-gray-800">
                    <tr>
                        <th class="px-4 py-3">Page</th>
                        <th class="px-4 py-3">Key</th>
                        <th class="px-4 py-3">Title</th>
                        <th class="px-4 py-3">Subtitle</th>
                        <th class="px-4 py-3">Media</th>
                        <th class="px-4 py-3">Order</th>
                        <th class="px-4 py-3">Status</th>
                        <th class="px-4 py-3 text-center">Action</th>
                    </tr>
                </thead>

                <tbody>

                    @foreach($sections as $section)

                        <tr class="border-b border-gray-800 hover:bg-gray-800/40">

                            {{-- PAGE --}}
                            <td class="px-4 py-3 text-orange-400 font-medium uppercase">
                                {{ $section->page }}
                            </td>

                            {{-- KEY --}}
                            <td class="px-4 py-3 text-white">
                                {{ $section->section_key }}
                            </td>

                            {{-- TITLE --}}
                            <td class="px-4 py-3 text-white">
                                {{ $section->title_en }}
                            </td>

                            {{-- SUBTITLE --}}
                            <td class="px-4 py-3 text-gray-400">
                                {{ Str::limit($section->subtitle_en, 40) }}
                            </td>

                            {{-- MEDIA --}}
                            <td class="px-4 py-3">
                                @if($section->media_type === 'image')
                                    <img src="{{ asset('storage/' . $section->media_url) }}"
                                         class="w-10 h-10 object-cover rounded">
                                @else
                                    <span class="text-gray-500 text-xs">
                                        {{ $section->media_type ?? '-' }}
                                    </span>
                                @endif
                            </td>

                            {{-- SORT ORDER --}}
                            <td class="px-4 py-3 text-gray-300">
                                {{ $section->sort_order }}
                            </td>

                            {{-- STATUS --}}
                            <td class="px-4 py-3">
                                @if($section->is_active)
                                    <span class="text-green-400 text-xs">Active</span>
                                @else
                                    <span class="text-red-400 text-xs">Inactive</span>
                                @endif
                            </td>

                            {{-- ACTION --}}
                            <td class="px-4 py-3 text-center space-x-2">

                                <a href="{{ route('admin.page-sections.edit', $section->id) }}"
                                   class="px-3 py-1 text-xs bg-blue-500/20 text-blue-400 rounded hover:bg-blue-500/30">
                                    Edit
                                </a>

                                {{-- <button onclick="openDeleteModal('{{ route('admin.page-sections.destroy', $section->id) }}', '{{ $section->section_key }}')"
                                        class="px-3 py-1 text-xs bg-red-500/20 text-red-400 rounded hover:bg-red-500/30">
                                    Delete
                                </button> --}}

                                 <button type="button"
                                        onclick="openDeleteModal(
                                            '{{ route('admin.page-sections.destroy', $section->id) }}',
                                            '{{ $section->section_key }}'
                                        )"
                                        class="px-3 py-1 text-xs bg-red-500/20 text-red-400 rounded hover:bg-red-500/30">
                                    Delete
                                </button>


                                   {{-- DELETE MODAL --}}
                                @include('backend.components.destroy')

                            </td>

                        </tr>

                    @endforeach

                </tbody>

            </table>

        </div>

    </div>

    {{-- PAGINATION --}}
    <div class="mt-4">
        {{ $sections->links() }}
    </div>

</div>

@endsection