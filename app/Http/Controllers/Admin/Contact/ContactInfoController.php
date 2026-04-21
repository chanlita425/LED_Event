<?php

namespace App\Http\Controllers\Admin\Contact;

use App\Http\Controllers\Controller;
use App\Models\ContactInfo;
use Illuminate\Http\Request;

class ContactInfoController extends Controller
{
    public function index()
    {
        $info = ContactInfo::first() ?? new ContactInfo();

        return view('backend.page.contact.info', compact('info'));
    }

    public function update(Request $request)
    {
        $data = $request->validate([
            'address'       => 'nullable|string',
            'email'         => 'nullable|email|max:255',
            'phone_1'       => 'nullable|string|max:50',
            'phone_2'       => 'nullable|string|max:50',
            'working_hours' => 'nullable|string|max:255',
        ]);

        ContactInfo::updateOrCreate(['id' => 1], $data);

        return redirect()->route('admin.contact-info.index')->with('success', 'Contact info updated.');
    }
}
