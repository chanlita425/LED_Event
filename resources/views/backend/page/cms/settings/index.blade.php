@extends('backend.layout.app')

@section('title', 'Settings')
@section('page-title', 'Settings')
@section('page-subtitle', 'Manage system configuration')

@section('content')

<div class="space-y-4">

    @foreach($settings as $groupName => $items)

        {{-- GROUP CARD --}}
        <div class="bg-gray-900 border border-gray-800 rounded-xl overflow-hidden shadow-lg">

            {{-- GROUP TITLE --}}
            <div class="px-6 py-4 border-b ">
                <h2 class="text-white font-semibold uppercase text-sm tracking-widest">
                    {{ $groupName }}
                </h2>
            </div>

            {{-- TABLE --}}
            <table class="w-full text-sm text-left text-gray-300">

                <thead class="text-xs text-gray-400 border-b border-gray-800 bg-gray-800/20">
                    <tr>
                        <th class="px-6 py-3 w-1/4">Key</th>
                        <th class="px-6 py-3 w-1/3">Value (EN)</th>
                        <th class="px-6 py-3 w-1/3">Value (KM)</th>
                        <th class="px-6 py-3 text-center">Action</th>
                    </tr>
                </thead>

                <tbody>

                    @foreach($items as $setting)

                        <tr class="border-b border-gray-800 last:border-b-0 hover:bg-gray-800/40 transition-colors duration-150">

                            {{-- KEY --}}
                            <td class="px-6 py-4 text-white font-medium">
                                {{ $setting->key_name }}
                            </td>

                            {{-- VALUE EN --}}
                            <td class="px-6 py-4">
                                <input type="text"
                                       form="form-{{ $setting->id }}"
                                       name="value_en"
                                       value="{{ $setting->value_en }}"
                                       class="w-full bg-gray-800 text-white px-3 py-2 rounded-lg border border-gray-700 focus:outline-none focus:border-blue-500 focus:ring-1 focus:ring-blue-500 transition-colors duration-150">
                            </td>

                            {{-- VALUE KM --}}
                            <td class="px-6 py-4">
                                <input type="text"
                                       form="form-{{ $setting->id }}"
                                       name="value_km"
                                       value="{{ $setting->value_km }}"
                                       class="w-full bg-gray-800 text-white px-3 py-2 rounded-lg border border-gray-700 focus:outline-none focus:border-blue-500 focus:ring-1 focus:ring-blue-500 transition-colors duration-150">
                            </td>

                            {{-- ACTION --}}
                            <td class="px-6 py-4 text-center">

                                <form id="form-{{ $setting->id }}"
                                      action="{{ route('admin.settings.update', $setting->id) }}"
                                      method="POST">
                                    @csrf
                                    @method('PUT')

                                    <button class="px-4 py-1.5 text-xs font-medium bg-green-500/20 text-green-400 rounded-lg hover:bg-green-500/30 border border-green-500/20 hover:border-green-500/40 transition-all duration-150">
                                        Save
                                    </button>
                                </form>

                            </td>

                        </tr>

                    @endforeach

                </tbody>

            </table>

        </div>

    @endforeach

</div>

@endsection