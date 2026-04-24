@extends('backend.layout.app')

@section('title', 'Contact Info')
@section('page-title', 'Contact Info')
@section('page-subtitle', 'Manage system contact information')

@section('content')

<div class="space-y-4">

    <div class="flex justify-end">
        <button form="contact-info-form"
                class="inline-flex items-center gap-2 bg-orange-500 text-white px-4 py-2 rounded-xl text-sm hover:bg-orange-600 transition">
            Save Contact Info
        </button>
    </div>

    <form id="contact-info-form"
          action="{{ route('admin.contact-info.update') }}"
          method="POST"
          class="bg-gray-900 border border-gray-800 rounded-xl overflow-hidden">
        @csrf
        @method('PUT')

        <div class="px-4 py-3 border-b border-gray-800">
            <h2 class="text-white font-semibold">Contact Details</h2>
        </div>

        <div class="grid grid-cols-1 lg:grid-cols-2 gap-0">
            <div class="p-4 border-b border-gray-800 lg:border-r lg:border-b-0">
                <label class="block text-xs text-gray-400 mb-2">Address</label>
                <textarea name="address"
                          rows="4"
                          class="w-full bg-gray-800 text-gray-300 border border-gray-800 rounded-xl px-3 py-2 focus:border-orange-500 outline-none">{{ old('address', $info->address) }}</textarea>
            </div>

            <div class="p-4 border-b border-gray-800">
                <label class="block text-xs text-gray-400 mb-2">Working Hours</label>
                <input type="text"
                       name="working_hours"
                       value="{{ old('working_hours', $info->working_hours) }}"
                       class="w-full bg-gray-800 text-gray-300 border border-gray-800 rounded-xl px-3 py-2 focus:border-orange-500 outline-none">
            </div>

            <div class="p-4 border-b border-gray-800 lg:border-r lg:border-b-0">
                <label class="block text-xs text-gray-400 mb-2">Email</label>
                <input type="email"
                       name="email"
                       value="{{ old('email', $info->email) }}"
                       class="w-full bg-gray-800 text-gray-300 border border-gray-800 rounded-xl px-3 py-2 focus:border-orange-500 outline-none">
            </div>

            <div class="p-4 border-b border-gray-800 lg:border-b-0">
                <label class="block text-xs text-gray-400 mb-2">Phone 1</label>
                <input type="text"
                       name="phone_1"
                       value="{{ old('phone_1', $info->phone_1) }}"
                       class="w-full bg-gray-800 text-gray-300 border border-gray-800 rounded-xl px-3 py-2 focus:border-orange-500 outline-none">
            </div>

            <div class="p-4 lg:col-span-2">
                <label class="block text-xs text-gray-400 mb-2">Phone 2</label>
                <input type="text"
                       name="phone_2"
                       value="{{ old('phone_2', $info->phone_2) }}"
                       class="w-full bg-gray-800 text-gray-300 border border-gray-800 rounded-xl px-3 py-2 focus:border-orange-500 outline-none">
            </div>
        </div>

        @if ($errors->any())
            <div class="px-4 pb-4 text-sm text-red-400">
                Please check the highlighted fields and try again.
            </div>
        @endif
    </form>

</div>

@endsection
