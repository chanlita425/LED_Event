@extends('backend.layout.app')

@section('title', 'Edit Menu Group')
@section('page-title', 'Edit Menu Group')
@section('page-subtitle', 'Update an existing menu group')

@section('content')

<div class="max-w-4xl mx-auto">

	<form action="{{ route('admin.menu-groups.update', $group->id) }}"
		  method="POST"
		  class="bg-gray-900 border border-gray-800 rounded-xl p-6 space-y-6">

		@csrf
		@method('PUT')

		<div class="grid grid-cols-1 md:grid-cols-2 gap-4">

			<div>
				<label class="text-xs text-gray-400">Slug</label>
				<input type="text"
					   name="slug"
					   value="{{ old('slug', $group->slug) }}"
					   class="w-full mt-2 bg-gray-800 text-gray-300 p-2 rounded-xl border border-gray-700 focus:border-orange-500 outline-none">
			</div>

			<div>
				<label class="text-xs text-gray-400">Sort Order</label>
				<input type="number"
					   name="sort_order"
					   value="{{ old('sort_order', $group->sort_order) }}"
					   class="w-full mt-2 bg-gray-800 text-gray-300 p-2 rounded-xl border border-gray-700 focus:border-orange-500 outline-none">
			</div>

		</div>

		<div class="grid grid-cols-1 md:grid-cols-2 gap-4">

			<div>
				<label class="text-xs text-gray-400">Name EN</label>
				<input type="text"
					   name="name_en"
					   value="{{ old('name_en', $group->name_en) }}"
					   class="w-full mt-2 bg-gray-800 text-gray-300 p-2 rounded-xl border border-gray-700 focus:border-orange-500 outline-none">
			</div>

			<div>
				<label class="text-xs text-gray-400">Name KH</label>
				<input type="text"
					   name="name_km"
					   value="{{ old('name_km', $group->name_km) }}"
					   class="w-full mt-2 bg-gray-800 text-gray-300 p-2 rounded-xl border border-gray-700 focus:border-orange-500 outline-none">
			</div>

		</div>

		<div>
			<label class="text-xs text-gray-400">Status</label>
			<select name="is_active"
					class="w-full mt-2 bg-gray-800 text-gray-300 p-2 rounded-xl border border-gray-700 focus:border-orange-500 outline-none">
				<option value="1" {{ old('is_active', $group->is_active) ? 'selected' : '' }}>Active</option>
				<option value="0" {{ !old('is_active', $group->is_active) ? 'selected' : '' }}>Inactive</option>
			</select>
		</div>

		<div class="flex justify-end gap-3 pt-4 border-t border-gray-800">
			<a href="{{ route('admin.menu-groups.index') }}"
			   class="px-5 py-2 bg-gray-800 text-white rounded-xl border border-gray-700 hover:bg-gray-700">
				Cancel
			</a>

			<button class="px-5 py-2 bg-orange-500 text-white rounded-xl hover:bg-orange-600">
				Update Group
			</button>
		</div>

	</form>

</div>

@endsection
