@extends('backend.layout.app')

@section('title', 'Settings') 
@section('page-title', 'Settings')
@section('page-subtitle', 'Manage system setting')

@section('content')

<form method="GET" class="bg-gray-900 border border-gray-800 p-4 rounded-xl mb-4 flex flex-wrap gap-3">

    {{-- GROUP FILTER --}}
    <select name="group"
            class="bg-gray-800 text-white rounded px-3 py-2 text-sm">
        <option value="">All Groups</option>
        @foreach($allGroups as $group)
            <option value="{{ $group }}" {{ request('group') == $group ? 'selected' : '' }}>
                {{ $group }}
            </option>
        @endforeach
    </select>

    {{-- KEY SEARCH --}}
    <input type="text"
           name="key"
           value="{{ request('key') }}"
           placeholder="Search key..."
           class="bg-gray-800 text-white rounded px-3 py-2 text-sm">

    {{-- TYPE FILTER --}}
    <select name="type"
            class="bg-gray-800 text-white rounded px-3 py-2 text-sm">
        <option value="">All Types</option>
        <option value="text" {{ request('type') == 'text' ? 'selected' : '' }}>Text</option>
        <option value="image" {{ request('type') == 'image' ? 'selected' : '' }}>Image</option>
        <option value="textarea" {{ request('type') == 'textarea' ? 'selected' : '' }}>Textarea</option>
        <option value="phone" {{ request('type') == 'phone' ? 'selected' : '' }}>Phone</option>
        <option value="email" {{ request('type') == 'email' ? 'selected' : '' }}>Email</option>
    </select>

    {{-- STATUS FILTER --}}
    <select name="status"
            class="bg-gray-800 text-white rounded px-3 py-2 text-sm">
        <option value="">All Status</option>
        <option value="1" {{ request('status') == '1' ? 'selected' : '' }}>Active</option>
        <option value="0" {{ request('status') == '0' ? 'selected' : '' }}>Inactive</option>
    </select>

    {{-- BUTTONS --}}
    <button class="bg-orange-500 text-white px-4 py-2 rounded-xl text-sm hover:bg-orange-600">
        Filter
    </button>

    <a href="{{ route('admin.settings.index') }}"
       class="bg-gray-700 text-white border px-4 py-2 rounded-xl text-sm hover:bg-gray-600">
        Reset
    </a>

</form>

<div class="space-y-4">

    @if($settings->isEmpty())
        <div class="bg-gray-900 border border-gray-800 rounded-xl px-6 py-10 text-center text-gray-500 text-sm">
            No settings found matching your filters.
        </div>
    @endif

    @foreach($settings as $group => $items)

        {{-- GROUP CARD --}}
        <div class="bg-gray-900 border border-gray-800 rounded-xl overflow-hidden">

            {{-- GROUP HEADER --}}
            <div class="px-4 py-3 border-b border-gray-800">
                <h2 class="text-white font-semibold capitalize">
                    {{ $group }}
                </h2>
            </div>

            {{-- TABLE --}}
            <div class="overflow-x-auto">
                <table class="w-full text-sm text-left text-gray-300">

                    <thead class="text-xs text-gray-400 border-b border-gray-800">
                        <tr>
                            <th class="px-4 py-3">Key</th>
                            <th class="px-4 py-3">Value EN</th>
                            <th class="px-4 py-3">Value KH</th>
                            <th class="px-4 py-3 text-center">Action</th>
                        </tr>
                    </thead>

                    <tbody>

                        @foreach($items as $setting)

                            <tr class="border-b border-gray-800 hover:bg-gray-800/40">

                                {{-- KEY --}}
                                <td class="px-4 py-3 text-white">
                                    {{ $setting->key_name }}
                                </td>

                                @if($setting->type === 'image')

                                    {{-- IMAGE PREVIEW + UPLOAD --}}
                                    <td class="px-4 py-3" colspan="2">
                                        <div class="flex items-center gap-4">

                                            {{-- PREVIEW --}}
                                            @if($setting->value_en)
                                                <img src="{{ asset('storage/' . $setting->value_en) }}"
                                                     alt="{{ $setting->key_name }}"
                                                     class="h-14 w-auto max-w-[120px] rounded-lg border border-gray-700 object-contain bg-gray-800 p-1">
                                            @else
                                                <div class="h-14 w-24 rounded-lg border border-dashed border-gray-700 flex items-center justify-center text-gray-600 text-xs bg-gray-800">
                                                    No image
                                                </div>
                                            @endif

                                            {{-- FILE INPUT --}}
                                            <label class="flex flex-col gap-1 cursor-pointer">
                                                <span class="text-xs text-gray-500">Upload new image</span>
                                                <input type="file"
                                                       form="form-{{ $setting->id }}"
                                                       name="file"
                                                       accept="image/*"
                                                       onchange="previewImage(this, 'preview-{{ $setting->id }}')"
                                                       class="text-sm text-gray-400 file:mr-3 file:py-1 file:px-3 file:rounded file:border-0 file:text-xs file:bg-orange-500/20 file:text-orange-400 hover:file:bg-orange-500/30 cursor-pointer">
                                            </label>

                                            {{-- NEW IMAGE PREVIEW (before save) --}}
                                            <img id="preview-{{ $setting->id }}"
                                                 src=""
                                                 alt="preview"
                                                 class="hidden h-14 w-auto max-w-[120px] rounded-lg border border-orange-500/40 object-contain bg-gray-800 p-1">

                                        </div>
                                    </td>

                                @else

                                    {{-- VALUE EN --}}
                                    <td class="px-4 py-3">
                                        <input type="text"
                                               form="form-{{ $setting->id }}"
                                               name="value_en"
                                               value="{{ $setting->value_en }}"
                                               class="w-full bg-gray-800 text-white rounded px-2 py-1 border border-gray-700 focus:border-orange-500">
                                    </td>

                                    {{-- VALUE KH --}}
                                    <td class="px-4 py-3">
                                        <input type="text"
                                               form="form-{{ $setting->id }}"
                                               name="value_km"
                                               value="{{ $setting->value_km }}"
                                               class="w-full bg-gray-800 text-white rounded px-2 py-1 border border-gray-700 focus:border-orange-500">
                                    </td>

                                @endif

                                {{-- ACTION --}}
                                <td class="px-4 py-3 text-center">

                                    <form id="form-{{ $setting->id }}"
                                          action="{{ route('admin.settings.quick-update', $setting->id) }}"
                                          method="POST"
                                          enctype="multipart/form-data">
                                        @csrf
                                        @method('PUT')

                                        <button class="px-3 py-1 text-xs font-medium bg-green-500/20 text-green-400 rounded-lg hover:bg-green-500/30 border border-green-500/20 hover:border-green-500/40 transition">
                                            Save
                                        </button>
                                    </form>

                                </td>

                            </tr>

                        @endforeach

                    </tbody>

                </table>
            </div>

        </div>

    @endforeach

</div>

@push('scripts')
<script>
function previewImage(input, previewId) {
    const preview = document.getElementById(previewId);
    if (input.files && input.files[0]) {
        const reader = new FileReader();
        reader.onload = e => {
            preview.src = e.target.result;
            preview.classList.remove('hidden');
        };
        reader.readAsDataURL(input.files[0]);
    }
}
</script>
@endpush

@endsection