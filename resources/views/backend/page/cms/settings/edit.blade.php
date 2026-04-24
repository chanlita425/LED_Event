@extends('backend.layout.app')

@section('title', 'Edit Setting')
@section('page-title', 'Edit Setting')
@section('page-subtitle', 'Update an existing system setting')

@section('content')

<div class="max-w-full mx-auto">

    <form action="{{ route('admin.settings.update', $setting->id) }}"
          method="POST"
          enctype="multipart/form-data"
          class="bg-gray-900 border border-gray-800 rounded-xl p-6 space-y-6">

        @csrf
        @method('PUT')

        <div class="grid grid-cols-2 gap-4">

            <div>
                <label class="text-xs text-gray-400">Group Name</label>

                <select name="group_name"
                        class="w-full mt-2 bg-gray-800 text-gray-400 p-2 rounded-xl border border-gray-700 focus:border-orange-500 outline-none">
                    <option value="">Select Group</option>
                    @foreach($groups as $group)
                        <option value="{{ $group }}" {{ old('group_name', $setting->group_name) === $group ? 'selected' : '' }}>
                            {{ $group }}
                        </option>
                    @endforeach
                </select>
            </div>

            <div>
                <label class="text-xs text-gray-400">Key Name</label>

                <input type="text"
                       name="key_name"
                       value="{{ old('key_name', $setting->key_name) }}"
                       class="w-full mt-2 bg-gray-800 text-gray-400 p-2 rounded-xl border border-gray-700 focus:border-orange-500 outline-none">
            </div>

        </div>

        <div class="grid grid-cols-2 gap-4">

            <div>
                <label class="text-xs text-gray-400">Type</label>

                <select name="type"
                        class="w-full mt-2 bg-gray-800 text-gray-400 p-2 rounded-xl border border-gray-700 focus:border-orange-500 outline-none">
                    <option value="">Select Type</option>
                    @foreach($types as $type)
                        <option value="{{ $type }}" {{ old('type', $setting->type) === $type ? 'selected' : '' }}>
                            {{ ucfirst($type) }}
                        </option>
                    @endforeach
                </select>
            </div>

            <div>
                <label class="text-xs text-gray-400">Sort Order</label>

                <input type="number"
                       name="sort_order"
                       value="{{ old('sort_order', $setting->sort_order) }}"
                       class="w-full mt-2 bg-gray-800 text-gray-400 p-2 rounded-xl border border-gray-700 focus:border-orange-500 outline-none">
            </div>

        </div>

        <div class="grid grid-cols-2 gap-4">

            <div>
                <label class="text-xs text-gray-400">Value EN</label>

                <input type="text"
                       name="value_en"
                       value="{{ old('value_en', $setting->value_en) }}"
                       class="w-full mt-2 bg-gray-800 text-gray-400 p-2 rounded-xl border border-gray-700 focus:border-orange-500 outline-none">
            </div>

            <div>
                <label class="text-xs text-gray-400">Value KH</label>

                <input type="text"
                       name="value_km"
                       value="{{ old('value_km', $setting->value_km) }}"
                       class="w-full mt-2 bg-gray-800 text-gray-400 p-2 rounded-xl border border-gray-700 focus:border-orange-500 outline-none">
            </div>

        </div>

        <div class="grid grid-cols-2 gap-4">

            <div>
                <label class="text-xs text-gray-400">Upload File</label>

                <input type="file"
                       name="file"
                       class="w-full mt-2 bg-gray-800 text-gray-400 p-2 rounded-xl border border-gray-700">

                @if($setting->type === 'image' && $setting->value_en)
                    <div class="mt-3">
                        <span class="block text-xs text-gray-500 mb-2">Current image</span>
                        <img src="{{ asset('storage/' . $setting->value_en) }}"
                             class="h-16 w-auto rounded-xl border border-gray-800 bg-gray-800 p-1 object-contain">
                    </div>
                @endif
            </div>

            <div>
                <label class="text-xs text-gray-400">Status</label>

                <select name="is_active"
                        class="w-full mt-2 mb-4 bg-gray-800 text-gray-400 p-2 rounded-xl border border-gray-700 focus:border-orange-500 outline-none">
                    <option value="1" {{ old('is_active', $setting->is_active) ? 'selected' : '' }}>Active</option>
                    <option value="0" {{ !old('is_active', $setting->is_active) ? 'selected' : '' }}>Inactive</option>
                </select>
            </div>

        </div>

        <div class="flex justify-end gap-3 pt-4 border-t border-gray-800">
            <a href="{{ route('admin.settings.index') }}"
               class="px-5 py-2 bg-gray-800 text-white rounded-xl border border-gray-700 hover:bg-gray-700">
                Cancel
            </a>

            <button class="px-5 py-2 bg-orange-500 text-white rounded-xl hover:bg-orange-600">
                Update Setting
            </button>
        </div>

    </form>

</div>

@endsection
