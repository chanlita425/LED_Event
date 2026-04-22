<?php

namespace App\Http\Controllers\Admin\Cms;

use App\Http\Controllers\Controller;
use App\Models\PageSection;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PageSectionController extends Controller
{
    public function index()
    {
        $sections = PageSection::orderBy('page')->orderBy('sort_order')->paginate(20);

        return view('backend.page.cms.page-sections.index', compact('sections'));
    }

    public function create()
    {
        return view('backend.page.page-sections.create');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'page'            => 'required|string|max:255',
            'section_key'     => 'required|string|max:255',
            'title_en'        => 'nullable|string|max:255',
            'title_km'        => 'nullable|string|max:255',
            'subtitle_en'     => 'nullable|string|max:255',
            'subtitle_km'     => 'nullable|string|max:255',
            'description_en'  => 'nullable|string',
            'description_km'  => 'nullable|string',
            'button_text_en'  => 'nullable|string|max:255',
            'button_text_km'  => 'nullable|string|max:255',
            'button_link_en'  => 'nullable|string|max:255',
            'button_link_km'  => 'nullable|string|max:255',
            'media_type'      => 'nullable|string|max:255',
            'media_url'       => 'nullable|file|mimes:jpg,jpeg,png,gif,webp,mp4|max:20480',
            'sort_order'      => 'nullable|integer',
            'is_active'       => 'boolean',
        ]);

        if ($request->hasFile('media_url')) {
            $data['media_url'] = $request->file('media_url')->store('sections', 'public');
        }

        $data['is_active'] = $request->boolean('is_active', true);

        PageSection::create($data);

        return redirect()->route('admin.page-sections.index')->with('success', 'Section created.');
    }

    public function show(string $id)
    {
        $section = PageSection::findOrFail($id);

        return view('backend.page.page-sections.show', compact('section'));
    }

    public function edit(string $id)
    {
        $section = PageSection::findOrFail($id);

        return view('backend.page.page-sections.edit', compact('section'));
    }

    public function update(Request $request, string $id)
    {
        $section = PageSection::findOrFail($id);

        $data = $request->validate([
            'page'            => 'required|string|max:255',
            'section_key'     => 'required|string|max:255',
            'title_en'        => 'nullable|string|max:255',
            'title_km'        => 'nullable|string|max:255',
            'subtitle_en'     => 'nullable|string|max:255',
            'subtitle_km'     => 'nullable|string|max:255',
            'description_en'  => 'nullable|string',
            'description_km'  => 'nullable|string',
            'button_text_en'  => 'nullable|string|max:255',
            'button_text_km'  => 'nullable|string|max:255',
            'button_link_en'  => 'nullable|string|max:255',
            'button_link_km'  => 'nullable|string|max:255',
            'media_type'      => 'nullable|string|max:255',
            'media_url'       => 'nullable|file|mimes:jpg,jpeg,png,gif,webp,mp4|max:20480',
            'sort_order'      => 'nullable|integer',
            'is_active'       => 'boolean',
        ]);

        if ($request->hasFile('media_url')) {
            if ($section->media_url) {
                Storage::disk('public')->delete($section->media_url);
            }
            $data['media_url'] = $request->file('media_url')->store('sections', 'public');
        }

        $data['is_active'] = $request->boolean('is_active');

        $section->update($data);

        return redirect()->route('admin.page-sections.index')->with('success', 'Section updated.');
    }

    public function destroy(string $id)
    {
        $section = PageSection::findOrFail($id);

        if ($section->media_url) {
            Storage::disk('public')->delete($section->media_url);
        }

        $section->delete();

        return redirect()->route('admin.page-sections.index')->with('success', 'Section deleted.');
    }
}
