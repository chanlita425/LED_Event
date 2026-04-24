@extends('backend.layout.app')

@section('title', 'Contact Messages')
@section('page-title', 'Contact Messages')
@section('page-subtitle', 'Messages submitted via your website contact form')

@section('content')

<div class="rounded-2xl border border-gray-800 bg-gray-900 overflow-hidden">
    <div class="grid grid-cols-1 lg:grid-cols-[380px_1fr] min-h-[680px]">
        <div class="border-r border-gray-800">
            <div class="px-5 py-4 border-b border-gray-800 space-y-4">
                <div>
                    <h2 class="text-lg font-semibold text-white">Contact messages</h2>
                    <p class="text-xs text-gray-400">{{ $counts['all'] ?? $messages->total() }} total messages</p>
                </div>

                <div class="flex flex-wrap gap-2">
                    <a href="{{ route('admin.contact-messages.index', array_filter(['message' => optional($selectedMessage)->id])) }}"
                       class="px-3 py-1.5 rounded-full text-xs border transition {{ ! $activeStatus ? 'bg-orange-500/15 text-orange-300 border-orange-500/30' : 'bg-white/5 text-gray-300 border-gray-700 hover:border-gray-600' }}">
                        All <span class="ml-1 text-gray-500">{{ $counts['all'] ?? 0 }}</span>
                    </a>

                    @foreach ($statuses as $status)
                        <a href="{{ route('admin.contact-messages.index', array_filter(['status' => $status, 'message' => optional($selectedMessage)->id])) }}"
                           class="px-3 py-1.5 rounded-full text-xs border transition {{ $activeStatus === $status ? 'bg-blue-500/15 text-blue-300 border-blue-500/30' : 'bg-white/5 text-gray-300 border-gray-700 hover:border-gray-600' }}">
                            {{ ucfirst($status) }} <span class="ml-1 text-gray-500">{{ $counts[$status] ?? 0 }}</span>
                        </a>
                    @endforeach
                </div>
            </div>

            <div class="max-h-[620px] overflow-y-auto">
                @forelse ($messages as $message)
                    @php
                        $isSelected = $selectedMessage && (int) $selectedMessage->id === (int) $message->id;
                    @endphp

                    <a href="{{ route('admin.contact-messages.show', $message->id) }}"
                       class="block px-5 py-4 border-b border-gray-800/80 transition {{ $isSelected ? 'bg-blue-500/15' : 'hover:bg-white/5' }}">
                        <div class="flex items-start justify-between gap-3">
                            <div class="min-w-0">
                                <div class="flex items-center gap-2">
                                    <span class="inline-block w-2 h-2 rounded-full {{ $message->status === 'new' ? 'bg-blue-400' : 'bg-gray-600' }}"></span>
                                    <p class="text-base font-semibold text-gray-100 truncate">{{ trim($message->first_name . ' ' . $message->last_name) }}</p>
                                    <span class="ml-auto inline-flex items-center rounded-full px-2 py-0.5 text-[10px] font-semibold uppercase tracking-wider
                                        {{ $message->status === 'new' ? 'bg-blue-500/20 text-blue-300' : '' }}
                                        {{ $message->status === 'read' ? 'bg-gray-600/30 text-gray-300' : '' }}
                                        {{ $message->status === 'replied' ? 'bg-emerald-500/20 text-emerald-300' : '' }}
                                        {{ $message->status === 'archived' ? 'bg-amber-500/20 text-amber-300' : '' }}">
                                        {{ $message->status }}
                                    </span>
                                </div>

                                <p class="mt-1 text-sm text-gray-300 truncate">{{ $message->project_type ?: 'General enquiry' }}</p>
                                <p class="text-sm text-gray-500 truncate mt-0.5">{{ $message->message ?: 'No message content' }}</p>
                            </div>

                            <p class="text-xs text-gray-400 whitespace-nowrap">
                                {{ optional($message->created_at)->isToday() ? optional($message->created_at)->format('g:i A') : optional($message->created_at)->format('M j') }}
                            </p>
                        </div>
                    </a>
                @empty
                    <div class="px-5 py-10 text-center text-sm text-gray-500">
                        No contact messages yet.
                    </div>
                @endforelse
            </div>

            <div class="p-4 border-t border-gray-800">
                {{ $messages->appends(array_filter(['message' => optional($selectedMessage)->id, 'status' => $activeStatus]))->links() }}
            </div>
        </div>

        <div class="p-5 sm:p-6">
            @if ($selectedMessage)
                <div class="rounded-2xl border border-gray-800 bg-[#131320] p-5">
                    <div class="flex flex-wrap items-center justify-between gap-4 pb-4 border-b border-gray-800">
                        <div class="flex items-center gap-3 min-w-0">
                            <div class="w-12 h-12 rounded-full bg-green-500/20 text-green-300 flex items-center justify-center font-semibold text-lg">
                                {{ strtoupper(substr($selectedMessage->first_name, 0, 1) . substr($selectedMessage->last_name, 0, 1)) }}
                            </div>

                            <div class="min-w-0">
                                <p class="text-2xl font-semibold text-white truncate">{{ trim($selectedMessage->first_name . ' ' . $selectedMessage->last_name) }}</p>
                                <p class="text-sm text-gray-400 truncate">{{ $selectedMessage->email }}</p>
                            </div>
                        </div>

                        <div class="flex items-center gap-2">
                            <span class="inline-flex items-center rounded-full px-3 py-1 text-xs font-semibold
                                {{ $selectedMessage->status === 'new' ? 'bg-blue-500/20 text-blue-300' : '' }}
                                {{ $selectedMessage->status === 'read' ? 'bg-gray-600/30 text-gray-300' : '' }}
                                {{ $selectedMessage->status === 'replied' ? 'bg-emerald-500/20 text-emerald-300' : '' }}
                                {{ $selectedMessage->status === 'archived' ? 'bg-amber-500/20 text-amber-300' : '' }}">
                                {{ ucfirst($selectedMessage->status) }}
                            </span>
                        </div>
                    </div>

                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-3 mt-5">
                        <div class="rounded-xl bg-[#1b1b27] border border-gray-800 p-4">
                            <p class="text-xs text-gray-500 uppercase tracking-wider">First Name</p>
                            <p class="text-2xl text-gray-100 mt-1">{{ $selectedMessage->first_name }}</p>
                        </div>

                        <div class="rounded-xl bg-[#1b1b27] border border-gray-800 p-4">
                            <p class="text-xs text-gray-500 uppercase tracking-wider">Last Name</p>
                            <p class="text-2xl text-gray-100 mt-1">{{ $selectedMessage->last_name }}</p>
                        </div>

                        <div class="rounded-xl bg-[#1b1b27] border border-gray-800 p-4">
                            <p class="text-xs text-gray-500 uppercase tracking-wider">Email Address</p>
                            <p class="text-2xl text-gray-100 mt-1 break-all">{{ $selectedMessage->email }}</p>
                        </div>

                        <div class="rounded-xl bg-[#1b1b27] border border-gray-800 p-4">
                            <p class="text-xs text-gray-500 uppercase tracking-wider">Project Type</p>
                            <p class="text-2xl text-gray-100 mt-1">{{ $selectedMessage->project_type ?: 'General enquiry' }}</p>
                        </div>

                        <div class="rounded-xl bg-[#1b1b27] border border-gray-800 p-4">
                            <p class="text-xs text-gray-500 uppercase tracking-wider">Received</p>
                            <p class="text-2xl text-gray-100 mt-1">{{ optional($selectedMessage->created_at)->format('M d, Y - g:i A') }}</p>
                        </div>
                    </div>

                    <div class="mt-5">
                        <p class="text-xs text-gray-500 uppercase tracking-wider mb-2">Message</p>
                        <div class="rounded-xl bg-[#1b1b27] border border-gray-800 p-4 text-gray-200 leading-relaxed whitespace-pre-line">
                            {{ $selectedMessage->message ?: 'No message content.' }}
                        </div>
                    </div>

                    <div class="mt-5 rounded-xl bg-[#1b1b27] border border-gray-800 p-4 flex flex-wrap items-center justify-between gap-3">
                        <div>
                            <p class="text-xs text-gray-500 uppercase tracking-wider">Status</p>
                            <p class="text-sm text-gray-300 mt-1">Current state of this enquiry</p>
                        </div>

                        <form action="{{ route('admin.contact-messages.update', $selectedMessage->id) }}" method="POST" class="flex items-center gap-2">
                            @csrf
                            @method('PUT')
                            <select name="status"
                                    onchange="this.form.submit()"
                                    class="bg-[#0f0f18] border border-gray-700 rounded-lg px-3 py-2 text-sm text-gray-200 focus:outline-none focus:border-orange-500">
                                @foreach (['new', 'read', 'replied', 'archived'] as $status)
                                    <option value="{{ $status }}" @selected($selectedMessage->status === $status)>
                                        {{ ucfirst($status) }}
                                    </option>
                                @endforeach
                            </select>
                        </form>
                    </div>

                    <div class="mt-5 flex justify-end">
                        <button type="button"
                                onclick="openDeleteModal('{{ route('admin.contact-messages.destroy', $selectedMessage->id) }}', '{{ trim($selectedMessage->first_name . ' ' . $selectedMessage->last_name) }}')"
                                class="px-4 py-2 rounded-lg text-sm bg-red-500/20 text-red-300 border border-red-500/30 hover:bg-red-500/30 transition">
                            Delete message
                        </button>
                    </div>
                </div>
            @else
                <div class="h-full rounded-2xl border border-dashed border-gray-700 flex items-center justify-center text-gray-500">
                    Select a message to view details.
                </div>
            @endif
        </div>
    </div>
</div>

@include('backend.components.destroy')

@if ($errors->any())
    <div class="mt-4 rounded-lg border border-red-500/30 bg-red-500/10 px-4 py-3 text-sm text-red-300">
        Please check the message status and try again.
    </div>
@endif

@endsection
