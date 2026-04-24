<?php

namespace App\Http\Controllers\Admin\Contact;

use App\Http\Controllers\Controller;
use App\Models\ContactMessage;
use Illuminate\Http\Request;

class ContactMessageController extends Controller
{
    public function index(Request $request)
    {
        $statuses = ['new', 'read', 'replied', 'archived'];
        $activeStatus = $request->query('status');

        $messagesQuery = ContactMessage::query();

        if ($activeStatus && in_array($activeStatus, $statuses, true)) {
            $messagesQuery->where('status', $activeStatus);
        }

        $messages = $messagesQuery
            ->orderByDesc('created_at')
            ->paginate(20)
            ->withQueryString();

        $counts = collect($statuses)->mapWithKeys(function (string $status) {
            return [$status => ContactMessage::where('status', $status)->count()];
        });

        $counts['all'] = ContactMessage::count();

        $selectedId = $request->query('message');
        $selectedMessage = null;

        if ($selectedId) {
            $selectedMessage = ContactMessage::find($selectedId);
        }

        if (! $selectedMessage && $messages->count() > 0) {
            $selectedMessage = $messages->first();
        }

        return view('backend.page.contact.contact-messages.index', compact('messages', 'selectedMessage', 'counts', 'statuses', 'activeStatus'));
    }

    public function show(string $id)
    {
        $message = ContactMessage::findOrFail($id);

        if ($message->status === 'new') {
            $message->update(['status' => 'read']);
        }

        return redirect()->route('admin.contact-messages.index', ['message' => $message->id]);
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
