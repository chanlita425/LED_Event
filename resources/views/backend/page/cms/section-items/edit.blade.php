@extends('backend.layout.app')

@section('title', 'Update Section Item')
@section('page-title', 'Update Section Item')
@section('page-subtitle', 'Edit CMS section item')

@section('content')

<div class="max-w-4xl mx-auto">

<form action="{{ route('admin.section-items.update', $item->id) }}"
      method="POST"
      enctype="multipart/form-data"
      class="bg-gray-900 border border-gray-800 rounded-xl p-6 space-y-5">

    @csrf
    @method('PUT')

    {{-- PAGE + SECTION --}}
    <div class="grid grid-cols-2 gap-4">

        {{-- PAGE --}}
        <div>
            <label class="text-xs text-gray-400">Page</label>

            <select id="pageSelect"
                    name="page"
                    class="w-full mt-1 bg-gray-800 text-white p-2 rounded">

                <option value="">Select Page</option>

                @foreach($pages as $page)
                    <option value="{{ $page->slug }}"
                            data-id="{{ $page->id }}"
                            {{ $item->page == $page->slug ? 'selected' : '' }}>
                        {{ $page->name_en }}
                    </option>
                @endforeach

            </select>
        </div>

        {{-- SECTION KEY --}}
        <div>
            <label class="text-xs text-gray-400">Section Key *</label>

            <input type="text"
                   name="section_key"
                   value="{{ old('section_key', $item->section_key) }}"
                   class="w-full mt-1 bg-gray-800 text-white p-2 rounded"
                   placeholder="eg., services, projects, why_us ...">
        </div>

    </div>

    {{-- GROUP --}}
    <div>
        <label class="text-xs text-gray-400">Group (Menu)</label>

        <select id="groupSelect"
                name="group_title"
                class="w-full mt-1 bg-gray-800 text-white p-2 rounded">

            <option value="">Select Group</option>

            @foreach($groups as $group)
                <option value="{{ $group->name_en }}"
                        {{ $item->group_title == $group->name_en ? 'selected' : '' }}>
                    {{ $group->name_en }}
                </option>
            @endforeach

        </select>
    </div>

    {{-- TYPE --}}
    <div class="grid grid-cols-2 gap-4">

        <input type="text"
               name="component_type"
               value="{{ old('component_type', $item->component_type) }}"
               placeholder="eg., type blog_post, service_card .."
               class="bg-gray-800 text-white p-2 rounded">

        <input type="text"
               name="type"
               value="{{ old('type', $item->type) }}"
               placeholder="Type"
               class="bg-gray-800 text-white p-2 rounded">

    </div>

    {{-- TITLE --}}
    <div class="grid grid-cols-2 gap-4">

        <input type="text"
               name="title_en"
               value="{{ old('title_en', $item->title_en) }}"
               placeholder="Title EN"
               class="bg-gray-800 text-white p-2 rounded">

        <input type="text"
               name="title_km"
               value="{{ old('title_km', $item->title_km) }}"
               placeholder="Title KH"
               class="bg-gray-800 text-white p-2 rounded">

    </div>

    {{-- DESCRIPTION --}}
    <textarea name="description_en"
              class="w-full bg-gray-800 text-white p-2 rounded"
              placeholder="Description EN">{{ old('description_en', $item->description_en) }}</textarea>

    <textarea name="description_km"
              class="w-full bg-gray-800 text-white p-2 rounded"
              placeholder="Description KH">{{ old('description_km', $item->description_km) }}</textarea>

    {{-- IMAGE --}}
    <div>
        <label class="text-xs text-gray-400">Image</label>

        <input type="file"
               name="image"
               class="w-full mt-1 bg-gray-800 text-white p-2 rounded">

        @if($item->image)
            <img src="{{ asset('storage/' . $item->image) }}"
                 class="h-20 mt-2 rounded border border-gray-700">
        @endif
    </div>

    {{-- ICON + LINK --}}
    <div class="grid grid-cols-2 gap-4">

        <div>
            <label class="text-xs text-gray-400">Icon</label>
            <input type="file" name="icon"
                   accept="image/*,.svg"
                   class="w-full mt-1 bg-gray-800 text-white p-2 rounded">
            @if($item->icon)
                <img src="{{ asset('storage/' . $item->icon) }}"
                     class="h-10 mt-2 rounded border border-gray-700">
            @endif
        </div>

        <input type="text"
               name="link"
               value="{{ old('link', $item->link) }}"
               placeholder="Link"
               class="bg-gray-800 text-white p-2 rounded">

    </div>

    {{-- BUTTON --}}
    <div class="grid grid-cols-2 gap-4">

        <input type="text"
               name="button_text_en"
               value="{{ old('button_text_en', $item->button_text_en) }}"
               placeholder="Button EN"
               class="bg-gray-800 text-white p-2 rounded">

        <input type="text"
               name="button_text_km"
               value="{{ old('button_text_km', $item->button_text_km) }}"
               placeholder="Button KH"
               class="bg-gray-800 text-white p-2 rounded">

    </div>

    {{-- SORT + STATUS --}}
    <div class="grid grid-cols-2 gap-4">

        <input type="number"
               name="sort_order"
               value="{{ old('sort_order', $item->sort_order) }}"
               placeholder="Sort Order"
               class="bg-gray-800 text-white p-2 rounded">

        <select name="is_active"
                class="bg-gray-800 text-white p-2 rounded">

            <option value="1" {{ $item->is_active ? 'selected' : '' }}>Active</option>
            <option value="0" {{ !$item->is_active ? 'selected' : '' }}>Inactive</option>

        </select>

    </div>

    {{-- META --}}
    <div>
        <label class="text-xs text-gray-400">Meta (JSON)</label>

        <textarea name="meta"
                  class="w-full bg-gray-800 text-white p-2 rounded"
                  placeholder='{"key":"value"}'>{{ $item->meta ? json_encode($item->meta) : '' }}</textarea>
    </div>

    {{-- ACTION --}}
    <div class="flex justify-end gap-2">

        <a href="{{ route('admin.section-items.index') }}"
           class="px-4 py-2 bg-gray-700 text-white rounded hover:bg-gray-600">
            Cancel
        </a>

        <button class="px-4 py-2 bg-orange-500 text-white rounded hover:bg-orange-600">
            Update Item
        </button>

    </div>

</form>

</div>

@endsection

@push('scripts')
<script>
document.getElementById('pageSelect').addEventListener('change', function () {

    let pageId = this.options[this.selectedIndex]?.dataset?.id;
    let groupSelect = document.getElementById('groupSelect');

    if (!pageId) {
        groupSelect.innerHTML = '<option value="">Select Group</option>';
        return;
    }

    groupSelect.innerHTML = '<option value="">Loading...</option>';

    fetch(`/admin/get-groups/${pageId}`)
        .then(res => res.json())
        .then(data => {

            groupSelect.innerHTML = '<option value="">Select Group</option>';

            data.forEach(group => {
                groupSelect.innerHTML += `<option value="${group.name_en}">${group.name_en}</option>`;
            });

        })
        .catch(() => {
            groupSelect.innerHTML = '<option value="">Select Group</option>';
        });
});
</script>
@endpush