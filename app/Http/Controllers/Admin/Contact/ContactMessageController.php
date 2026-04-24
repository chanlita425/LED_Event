<?php

namespace App\Http\Controllers\Admin\Contact;

use App\Http\Controllers\Controller;
use App\Models\ContactMessage;
use Illuminate\Http\Request;

class ContactMessageController extends Controller
{
    public function index()
    {
        $messages = ContactMessage::latest('created_at')->paginate(20);

        return view('backend.page.contact.contact-messages.index', compact('messages'));
    }

    public function show(string $id)
    {
        $message = ContactMessage::findOrFail($id);

        if ($message->status === 'new') {
            $message->update(['status' => 'read']);
        }

        return view('backend.page.contact.message-show', compact('message'));
    }

    public function update(Request $request, string $id)
    {
        $message = ContactMessage::findOrFail($id);

        $request->validate([
            'status' => 'required|in:new,read,replied,archived',
        ]);

        $message->update(['status' => $request->status]);

        return redirect()->back()->with('success', 'Status updated.');
    }

    public function destroy(string $id)
    {
        ContactMessage::findOrFail($id)->delete();

        return redirect()->route('admin.contact-messages.index')->with('success', 'Message deleted.');
    }
}
