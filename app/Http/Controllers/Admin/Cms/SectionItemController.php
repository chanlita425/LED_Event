<?php

namespace App\Http\Controllers\Admin\Cms;

use App\Http\Controllers\Controller;
use App\Models\SectionItem;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class SectionItemController extends Controller
{
    public function index()
    {
        $items = SectionItem::orderBy('section_key')->orderBy('sort_order')->paginate(20);

        return view('backend.page.cms.section-items.index', compact('items'));
    }

    public function create()
    {
        return view('backend.page.section-items.create');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'section_key'    => 'required|string|max:255',
            'component_type' => 'nullable|string|max:255',
            'group_title'    => 'nullable|string|max:255',
            'page'           => 'nullable|string|max:255',
            'title_en'       => 'nullable|string|max:255',
            'title_km'       => 'nullable|string|max:255',
            'description_en' => 'nullable|string',
            'description_km' => 'nullable|string',
            'image'          => 'nullable|file|mimes:jpg,jpeg,png,gif,webp|max:4096',
            'icon'           => 'nullable|string|max:255',
            'link'           => 'nullable|string|max:255',
            'button_text_en' => 'nullable|string|max:255',
            'button_text_km' => 'nullable|string|max:255',
            'sort_order'     => 'nullable|integer',
            'is_active'      => 'boolean',
            'type'           => 'nullable|string|max:255',
            'meta'           => 'nullable|array',
        ]);

        if ($request->hasFile('image')) {
            $data['image'] = $request->file('image')->store('section-items', 'public');
        }

        $data['is_active'] = $request->boolean('is_active', true);

        SectionItem::create($data);

        return redirect()->route('admin.section-items.index')->with('success', 'Item created.');
    }

    public function show(string $id)
    {
        $item = SectionItem::findOrFail($id);

        return view('backend.page.section-items.show', compact('item'));
    }

    public function edit(string $id)
    {
        $item = SectionItem::findOrFail($id);

        return view('backend.page.section-items.edit', compact('item'));
    }

    public function update(Request $request, string $id)
    {
        $item = SectionItem::findOrFail($id);

        $data = $request->validate([
            'section_key'    => 'required|string|max:255',
            'component_type' => 'nullable|string|max:255',
            'group_title'    => 'nullable|string|max:255',
            'page'           => 'nullable|string|max:255',
            'title_en'       => 'nullable|string|max:255',
            'title_km'       => 'nullable|string|max:255',
            'description_en' => 'nullable|string',
            'description_km' => 'nullable|string',
            'image'          => 'nullable|file|mimes:jpg,jpeg,png,gif,webp|max:4096',
            'icon'           => 'nullable|string|max:255',
            'link'           => 'nullable|string|max:255',
            'button_text_en' => 'nullable|string|max:255',
            'button_text_km' => 'nullable|string|max:255',
            'sort_order'     => 'nullable|integer',
            'is_active'      => 'boolean',
            'type'           => 'nullable|string|max:255',
            'meta'           => 'nullable|array',
        ]);

        if ($request->hasFile('image')) {
            if ($item->image) {
                Storage::disk('public')->delete($item->image);
            }
            $data['image'] = $request->file('image')->store('section-items', 'public');
        }

        $data['is_active'] = $request->boolean('is_active');

        $item->update($data);

        return redirect()->route('admin.section-items.index')->with('success', 'Item updated.');
    }

    public function destroy(string $id)
    {
        $item = SectionItem::findOrFail($id);

        if ($item->image) {
            Storage::disk('public')->delete($item->image);
        }

        $item->delete();

        return redirect()->route('admin.section-items.index')->with('success', 'Item deleted.');
    }
}
