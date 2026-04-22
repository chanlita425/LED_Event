@extends('backend.layout.app')

@section('title', 'Create Page Section')
@section('page-title', 'Create Page Section')
@section('page-subtitle', 'Add a new section to a page')

@section('content')

<form action="{{ route('admin.page-sections.store') }}" method="POST" enctype="multipart/form-data">
    @csrf

    <div class="space-y-4">

        {{-- ─── CONFIGURATION ──────────────────────────────────────── --}}
        <div class="bg-gray-900 border border-gray-800 rounded-xl overflow-hidden shadow-lg">

            <div class="px-6 py-4 border-b border-gray-800 bg-gray-800/50">
                <h2 class="text-white font-semibold uppercase text-sm tracking-widest">Configuration</h2>
            </div>

            <div class="p-6 grid grid-cols-1 md:grid-cols-2 gap-6">

                {{-- Page --}}
                <select name="page"
                        class="w-full  mb-4 mt-2 bg-gray-800 text-white px-3 py-2  rounded-lg border border-gray-700">

                    <option value="">— Select Page —</option>

                    @foreach($pages as $page)
                        <option value="{{ $page->slug }}" {{ old('page') == $page->slug ? 'selected' : '' }}>
                            {{ $page->title_en }}
                        </option>
                    @endforeach

                </select>

                {{-- Section Key --}}
                <div>
                    <label class="block text-xs font-medium text-gray-400 uppercase tracking-widest mb-2">Section Key</label>
                    <input type="text"
                           name="section_key"
                           value="{{ old('section_key') }}"
                           placeholder="e.g. hero, about, features"
                           class="w-full mb-4 mt-2 mt-2 bg-gray-800 text-white px-3 py-2 rounded-lg border border-gray-700 focus:outline-none focus:border-blue-500 focus:ring-1 focus:ring-blue-500 transition-colors">
                    @error('section_key')
                        <p class="mt-1 text-xs text-red-400">{{ $message }}</p>
                    @enderror
                </div>

                {{-- Sort Order --}}
                <div>
                    <label class="block text-xs font-medium text-gray-400 uppercase tracking-widest mb-2">Sort Order</label>
                    <input type="number"
                           name="sort_order"
                           value="{{ old('sort_order', 0) }}"
                           min="0"
                           class="w-full mb-4 mt-2 bg-gray-800 text-white px-3 py-2 rounded-lg border border-gray-700 focus:outline-none focus:border-blue-500 focus:ring-1 focus:ring-blue-500 transition-colors">
                    @error('sort_order')
                        <p class="mt-1 text-xs text-red-400">{{ $message }}</p>
                    @enderror
                </div>

                {{-- Is Active --}}
                <div class="flex items-center gap-3 pt-6">
                    <label class="relative inline-flex items-center cursor-pointer">
                        <input type="hidden" name="is_active" value="0">
                        <input type="checkbox" name="is_active" value="1" class="sr-only peer"
                               {{ old('is_active', true) ? 'checked' : '' }}>
                        <div class="w-11 h-6 bg-gray-700 rounded-full peer peer-checked:bg-blue-600
                                    after:content-[''] after:absolute after:top-0.5 after:left-[2px]
                                    after:bg-white after:rounded-full after:h-5 after:w-5
                                    after:transition-all peer-checked:after:translate-x-full"></div>
                    </label>
                    <span class="text-sm text-gray-300">Active</span>
                </div>

            </div>
        </div>

        {{-- ─── TITLE ──────────────────────────────────────────────── --}}
        <div class="bg-gray-900 border border-gray-800 rounded-xl overflow-hidden shadow-lg">

            <div class="px-6 py-4 border-b border-gray-800 bg-gray-800/50">
                <h2 class="text-white font-semibold uppercase text-sm tracking-widest">Title</h2>
            </div>

            <div class="p-6 grid grid-cols-1 md:grid-cols-2 gap-6">

                <div>
                    <label class="block text-xs font-medium text-gray-400 uppercase tracking-widest mb-2">Title (EN)</label>
                    <input type="text" name="title_en" value="{{ old('title_en') }}"
                           placeholder="English title"
                           class="w-full mb-4 mt-2 bg-gray-800 text-white px-3 py-2 rounded-lg border border-gray-700 focus:outline-none focus:border-blue-500 focus:ring-1 focus:ring-blue-500 transition-colors">
                    @error('title_en')
                        <p class="mt-1 text-xs text-red-400">{{ $message }}</p>
                    @enderror
                </div>

                {{-- <div>
                    <label class="block text-xs font-medium text-gray-400 uppercase tracking-widest mb-2">Title (KM)</label>
                    <input type="text" name="title_km" value="{{ old('title_km') }}"
                           placeholder="ចំណងជើងភាសាខ្មែរ"
                           class="w-full mb-4 mt-2 bg-gray-800 text-white px-3 py-2 rounded-lg border border-gray-700 focus:outline-none focus:border-blue-500 focus:ring-1 focus:ring-blue-500 transition-colors">
                    @error('title_km')
                        <p class="mt-1 text-xs text-red-400">{{ $message }}</p>
                    @enderror
                </div> --}}

            </div>
        </div>

        {{-- ─── SUBTITLE ───────────────────────────────────────────── --}}
        <div class="bg-gray-900 border border-gray-800 rounded-xl overflow-hidden shadow-lg">

            <div class="px-6 py-4 border-b border-gray-800 bg-gray-800/50">
                <h2 class="text-white font-semibold uppercase text-sm tracking-widest">Subtitle</h2>
            </div>

            <div class="p-6 grid grid-cols-1 md:grid-cols-2 gap-6">

                <div>
                    <label class="block text-xs font-medium text-gray-400 uppercase tracking-widest mb-2">Subtitle (EN)</label>
                    <input type="text" name="subtitle_en" value="{{ old('subtitle_en') }}"
                           placeholder="English subtitle"
                           class="w-full mb-4 mt-2 bg-gray-800 text-white px-3 py-2 rounded-lg border border-gray-700 focus:outline-none focus:border-blue-500 focus:ring-1 focus:ring-blue-500 transition-colors">
                    @error('subtitle_en')
                        <p class="mt-1 text-xs text-red-400">{{ $message }}</p>
                    @enderror
                </div>

                {{-- <div>
                    <label class="block text-xs font-medium text-gray-400 uppercase tracking-widest mb-2">Subtitle (KM)</label>
                    <input type="text" name="subtitle_km" value="{{ old('subtitle_km') }}"
                           placeholder="រឿងរ៉ាវបន្ថែម"
                           class="w-full mb-4 mt-2 bg-gray-800 text-white px-3 py-2 rounded-lg border border-gray-700 focus:outline-none focus:border-blue-500 focus:ring-1 focus:ring-blue-500 transition-colors">
                    @error('subtitle_km')
                        <p class="mt-1 text-xs text-red-400">{{ $message }}</p>
                    @enderror
                </div> --}}

            </div>
        </div>

        {{-- ─── DESCRIPTION ────────────────────────────────────────── --}}
        <div class="bg-gray-900 border border-gray-800 rounded-xl overflow-hidden shadow-lg">

            <div class="px-6 py-4 border-b border-gray-800 bg-gray-800/50">
                <h2 class="text-white font-semibold uppercase text-sm tracking-widest">Description</h2>
            </div>

            <div class="p-6 grid grid-cols-1 md:grid-cols-2 gap-6">

                <div>
                    <label class="block text-xs font-medium text-gray-400 uppercase tracking-widest mb-2">Description (EN)</label>
                    <textarea name="description_en" rows="5"
                              placeholder="English description..."
                              class="w-full mb-4 mt-2 bg-gray-800 text-white px-3 py-2 rounded-lg border border-gray-700 focus:outline-none focus:border-blue-500 focus:ring-1 focus:ring-blue-500 transition-colors resize-none">{{ old('description_en') }}</textarea>
                    @error('description_en')
                        <p class="mt-1 text-xs text-red-400">{{ $message }}</p>
                    @enderror
                </div>
{{-- 
                <div>
                    <label class="block text-xs font-medium text-gray-400 uppercase tracking-widest mb-2">Description (KM)</label>
                    <textarea name="description_km" rows="5"
                              placeholder="សេចក្តីអធិប្បាយ..."
                              class="w-full mb-4 mt-2 bg-gray-800 text-white px-3 py-2 rounded-lg border border-gray-700 focus:outline-none focus:border-blue-500 focus:ring-1 focus:ring-blue-500 transition-colors resize-none">{{ old('description_km') }}</textarea>
                    @error('description_km')
                        <p class="mt-1 text-xs text-red-400">{{ $message }}</p>
                    @enderror
                </div> --}}

            </div>
        </div>

        {{-- ─── BUTTON ─────────────────────────────────────────────── --}}
        <div class="bg-gray-900 border border-gray-800 rounded-xl overflow-hidden shadow-lg">

            <div class="px-6 py-4 border-b border-gray-800 bg-gray-800/50">
                <h2 class="text-white font-semibold uppercase text-sm tracking-widest">Button</h2>
            </div>

            <div class="p-6 grid grid-cols-1 md:grid-cols-2 gap-6">

                {{-- Button Text --}}
                <div>
                    <label class="block text-xs font-medium text-gray-400 uppercase tracking-widest mb-2">Button Text (EN)</label>
                    <input type="text" name="button_text_en" value="{{ old('button_text_en') }}"
                           placeholder="e.g. Learn More"
                           class="w-full mb-4 mt-2 bg-gray-800 text-white px-3 py-2 rounded-lg border border-gray-700 focus:outline-none focus:border-blue-500 focus:ring-1 focus:ring-blue-500 transition-colors">
                    @error('button_text_en')
                        <p class="mt-1 text-xs text-red-400">{{ $message }}</p>
                    @enderror
                </div>

                {{-- <div>
                    <label class="block text-xs font-medium text-gray-400 uppercase tracking-widest mb-2">Button Text (KM)</label>
                    <input type="text" name="button_text_km" value="{{ old('button_text_km') }}"
                           placeholder="ស្វែងយល់បន្ថែម"
                           class="w-full mb-4 mt-2 bg-gray-800 text-white px-3 py-2 rounded-lg border border-gray-700 focus:outline-none focus:border-blue-500 focus:ring-1 focus:ring-blue-500 transition-colors">
                    @error('button_text_km')
                        <p class="mt-1 text-xs text-red-400">{{ $message }}</p>
                    @enderror
                </div> --}}

                {{-- Button Link --}}
                <div>
                    <label class="block text-xs font-medium text-gray-400 uppercase tracking-widest mb-2">Button Link (EN)</label>
                    <input type="text" name="button_link_en" value="{{ old('button_link_en') }}"
                           placeholder="https://example.com/en/page"
                           class="w-full mb-4 mt-2 bg-gray-800 text-white px-3 py-2 rounded-lg border border-gray-700 focus:outline-none focus:border-blue-500 focus:ring-1 focus:ring-blue-500 transition-colors">
                    @error('button_link_en')
                        <p class="mt-1 text-xs text-red-400">{{ $message }}</p>
                    @enderror
                </div>

                <div>
                    <label class="block text-xs font-medium text-gray-400 uppercase tracking-widest mb-2">Button Link (KM)</label>
                    <input type="text" name="button_link_km" value="{{ old('button_link_km') }}"
                           placeholder="https://example.com/km/page"
                           class="w-full mb-4 mt-2 bg-gray-800 text-white px-3 py-2 rounded-lg border border-gray-700 focus:outline-none focus:border-blue-500 focus:ring-1 focus:ring-blue-500 transition-colors">
                    @error('button_link_km')
                        <p class="mt-1 text-xs text-red-400">{{ $message }}</p>
                    @enderror
                </div>

            </div>
        </div>

        {{-- ─── MEDIA ──────────────────────────────────────────────── --}}
        <div class="bg-gray-900 border border-gray-800 rounded-xl overflow-hidden shadow-lg">

            <div class="px-6 py-4 border-b border-gray-800 bg-gray-800/50">
                <h2 class="text-white font-semibold uppercase text-sm tracking-widest">Media</h2>
            </div>

            <div class="p-6 grid grid-cols-1 md:grid-cols-2 gap-6">

                {{-- Media Type --}}
                <div>
                    <label class="block text-xs font-medium text-gray-400 uppercase tracking-widest mb-2">Media Type</label>
                    <select name="media_type"
                            class="w-full mb-4 mt-2 bg-gray-800 text-white px-3 py-2 rounded-lg border border-gray-700 focus:outline-none focus:border-blue-500 focus:ring-1 focus:ring-blue-500 transition-colors">
                        <option value="">— None —</option>
                        <option value="image" {{ old('media_type') == 'image' ? 'selected' : '' }}>Image</option>
                        <option value="video" {{ old('media_type') == 'video' ? 'selected' : '' }}>Video</option>
                        <option value="youtube" {{ old('media_type') == 'youtube' ? 'selected' : '' }}>YouTube</option>
                    </select>
                    @error('media_type')
                        <p class="mt-1 text-xs text-red-400">{{ $message }}</p>
                    @enderror
                </div>

                {{-- Media URL --}}
                <div>
                    <label class="block text-xs font-medium text-gray-400 uppercase tracking-widest mb-2">Media URL</label>
                    <input type="text" name="media_url" value="{{ old('media_url') }}"
                           placeholder="https://... or /storage/..."
                           class="w-full mt-2 bg-gray-800 text-white px-3 py-2 rounded-lg border border-gray-700 focus:outline-none focus:border-blue-500 focus:ring-1 focus:ring-blue-500 transition-colors">
                    @error('media_url')
                        <p class="mt-1 text-xs text-red-400">{{ $message }}</p>
                    @enderror
                </div>

            </div>
        </div>

        {{-- ─── ACTIONS ────────────────────────────────────────────── --}}
        <div class="flex items-center justify-end gap-3 pb-6">
            <a href="{{ route('admin.page-sections.index') }}"
               class="px-5 py-2 text-sm text-gray-400 bg-gray-800 rounded-lg border border-gray-700 hover:bg-gray-700 hover:text-white transition-colors">
                Cancel
            </a>
            <button type="submit"
                    class="px-6 py-2 border text-sm font-medium bg-blue-600 text-white rounded-lg hover:bg-blue-500 transition-colors shadow-lg shadow-blue-600/20">
                Create Section
            </button>
        </div>

    </div>

</form>

@endsection