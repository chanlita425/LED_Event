@extends('backend.layout.app')

@section('title', 'Create Section Item')
@section('page-title', 'Create Section Item')
@section('page-subtitle', 'Add new CMS item')

@section('content')

<div class="max-w-4xl mx-auto">

    <form action="{{ route('admin.section-items.store') }}"
        method="POST"
        enctype="multipart/form-data"
        class="bg-gray-900 border border-gray-800 rounded-xl p-6 space-y-5">

        @csrf

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
                        <option value="{{ $page->slug }}" data-id="{{ $page->id }}">
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
                        value="{{ old('section_key') }}"
                        placeholder="eg., services, projects, why_us ..."
                        class="w-full mt-1 bg-gray-800 text-white p-2 rounded border border-gray-700">
            </div>

        </div>

        {{-- GROUP --}}
        <div>
            <label class="text-xs text-gray-400">Group (Menu)</label>

            <select id="groupSelect"
                    name="group_title"
                    class="w-full mt-1 bg-gray-800 text-white p-2 rounded">

                <option value="">Select Group</option>

            </select>
        </div>

        {{-- TYPE --}}
        <div class="grid grid-cols-2 gap-4">

            <input type="text" name="component_type" placeholder="eg., type blog_post, service_card .."
                   class="bg-gray-800 text-white p-2 rounded border border-gray-700">

            <input type="text" name="type" placeholder="Type"
                   class="bg-gray-800 text-white p-2 rounded border border-gray-700">

        </div>

        {{-- TITLE --}}
        <div class="grid grid-cols-2 gap-4">

            <input type="text" name="title_en" placeholder="Title EN"
                   class="bg-gray-800 text-white p-2 rounded border border-gray-700">

            <input type="text" name="title_km" placeholder="Title KH"
                   class="bg-gray-800 text-white p-2 rounded border border-gray-700">

        </div>

        {{-- DESCRIPTION --}}
        <textarea name="description_en" placeholder="Description EN"
                  class="w-full bg-gray-800 text-white p-2 rounded border border-gray-700"></textarea>

        <textarea name="description_km" placeholder="Description KH"
                  class="w-full bg-gray-800 text-white p-2 rounded border border-gray-700"></textarea>

        {{-- IMAGE --}}
        <div>
            <label class="text-xs text-gray-400">Image</label>
            <input type="file" name="image"
                   class="w-full mt-1 bg-gray-800 text-white p-2 rounded border border-gray-700">
        </div>

        {{-- ICON + LINK --}}
         <div>
            <label class="text-xs text-gray-400">Icon</label>
            <input type="file" name="icon"
                    accept="image/*,.svg"
                    class="w-full mt-1 bg-gray-800 text-white p-2 rounded border border-gray-700">
        </div>
        <div class="grid grid-cols-1 gap-4">
            <input type="text" name="link" placeholder="Link"
                class="bg-gray-800 text-white p-2 rounded border border-gray-700">

        </div>

        {{-- BUTTON --}}
        <div class="grid grid-cols-2 gap-4">

            <input type="text" name="button_text_en" placeholder="Button EN"
                   class="bg-gray-800 text-white p-2 rounded border border-gray-700">

            <input type="text" name="button_text_km" placeholder="Button KH"
                   class="bg-gray-800 text-white p-2 rounded border border-gray-700">

        </div>

        {{-- SORT + STATUS --}}
        <div class="grid grid-cols-2 gap-4">

            <input type="number" name="sort_order" placeholder="Sort Order"
                   class="bg-gray-800 text-white p-2 rounded border border-gray-700">

            <select name="is_active"
                    class="bg-gray-800 text-white p-2 rounded border border-gray-700">
                <option value="1">Active</option>
                <option value="0">Inactive</option>
            </select>

        </div>

        {{-- META --}}
        <div>
            <label class="text-xs text-gray-400">Meta (JSON)</label>
            <textarea name="meta"
                    class="w-full bg-gray-800 text-white p-2 rounded border border-gray-700"
                    placeholder='{"key":"value"}'></textarea>
        </div>

        {{-- ACTION --}}
        <div class="flex justify-end gap-2">

            <a href="{{ route('admin.section-items.index') }}"
               class="px-4 py-2 bg-gray-700 text-white rounded hover:bg-gray-600">
                Cancel
            </a>

            <button class="px-4 py-2 bg-orange-500 text-white rounded hover:bg-orange-600">
                Create Item
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