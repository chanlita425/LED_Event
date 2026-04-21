<?php

namespace App\Http\Controllers\Admin\Cms;

use App\Http\Controllers\Controller;
use App\Models\Setting;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class SettingController extends Controller
{
    public function index()
    {
        $settings = Setting::orderBy('group_name')->orderBy('sort_order')->get()->groupBy('group_name');

        return view('backend.page.settings.index', compact('settings'));
    }

    public function create()
    {
        return view('backend.page.settings.create');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'group_name' => 'required|string|max:255',
            'key_name'   => 'required|string|max:255',
            'value_en'   => 'nullable|string',
            'value_km'   => 'nullable|string',
            'type'       => 'nullable|string|max:255',
            'sort_order' => 'nullable|integer',
            'is_active'  => 'boolean',
            'file'       => 'nullable|file|mimes:jpg,jpeg,png,gif,svg,webp|max:2048',
        ]);

        if ($request->hasFile('file')) {
            $data['value_en'] = $request->file('file')->store('settings', 'public');
            $data['type'] = 'image';
        }

        $data['is_active'] = $request->boolean('is_active', true);

        Setting::create($data);

        return redirect()->route('admin.settings.index')->with('success', 'Setting created.');
    }

    public function edit(string $id)
    {
        $setting = Setting::findOrFail($id);

        return view('backend.page.settings.edit', compact('setting'));
    }

    public function update(Request $request, string $id)
    {
        $setting = Setting::findOrFail($id);

        $data = $request->validate([
            'group_name' => 'required|string|max:255',
            'key_name'   => 'required|string|max:255',
            'value_en'   => 'nullable|string',
            'value_km'   => 'nullable|string',
            'type'       => 'nullable|string|max:255',
            'sort_order' => 'nullable|integer',
            'is_active'  => 'boolean',
            'file'       => 'nullable|file|mimes:jpg,jpeg,png,gif,svg,webp|max:2048',
        ]);

        if ($request->hasFile('file')) {
            if ($setting->value_en && $setting->type === 'image') {
                Storage::disk('public')->delete($setting->value_en);
            }
            $data['value_en'] = $request->file('file')->store('settings', 'public');
            $data['type'] = 'image';
        }

        $data['is_active'] = $request->boolean('is_active');

        $setting->update($data);

        return redirect()->route('admin.settings.index')->with('success', 'Setting updated.');
    }

    public function destroy(string $id)
    {
        $setting = Setting::findOrFail($id);

        if ($setting->type === 'image' && $setting->value_en) {
            Storage::disk('public')->delete($setting->value_en);
        }

        $setting->delete();

        return redirect()->route('admin.settings.index')->with('success', 'Setting deleted.');
    }
}
