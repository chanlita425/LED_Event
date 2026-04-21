@extends('backend.layout.app')

@section('title', 'Privacy Policy')
@section('page-title', 'Privacy Policy')
@section('page-subtitle', 'How we collect, use, and protect your information')

@section('content')

<div class="max-w-4xl mx-auto">

    {{-- Header Card --}}
    <div class="relative overflow-hidden rounded-2xl border border-orange-500/15 bg-gradient-to-br from-[#1a1a2e] to-[#16213e] p-6 sm:p-8 mb-6">
        <div class="relative z-10 flex flex-col sm:flex-row sm:items-center gap-4">
            <div class="w-12 h-12 rounded-xl bg-orange-500/15 border border-orange-500/25 flex items-center justify-center flex-shrink-0">
                <svg class="w-6 h-6 text-orange-400" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75L11.25 15 15 9.75m-3-7.036A11.959 11.959 0 013.598 6 11.99 11.99 0 003 9.749c0 5.592 3.824 10.29 9 11.623 5.176-1.332 9-6.03 9-11.622 0-1.31-.21-2.571-.598-3.751h-.152c-3.196 0-6.1-1.248-8.25-3.285z"/>
                </svg>
            </div>
            <div>
                <h2 class="text-lg sm:text-xl font-bold text-white">Privacy Policy</h2>
                <p class="text-xs text-gray-400 mt-0.5">Last updated: {{ date('F d, Y') }} &nbsp;·&nbsp; LED Events Admin Panel</p>
            </div>
        </div>
        <div class="absolute -top-8 -right-8 w-40 h-40 rounded-full bg-orange-500/5 blur-2xl pointer-events-none"></div>
    </div>

    {{-- Content --}}
    <div class="space-y-4">

        {{-- Introduction --}}
        <x-policy-section title="1. Introduction" icon="information-circle">
            <p>LED Events ("we", "our", or "us") is committed to protecting your personal information. This Privacy Policy explains how we collect, use, disclose, and safeguard your information when you use our admin management platform.</p>
            <p class="mt-3">By accessing or using this system, you agree to the terms described in this policy. If you do not agree, please discontinue use immediately.</p>
        </x-policy-section>

        {{-- Information We Collect --}}
        <x-policy-section title="2. Information We Collect" icon="collection">
            <p class="mb-3">We may collect the following types of information:</p>
            <ul class="space-y-2">
                <li class="flex items-start gap-2.5">
                    <span class="mt-1.5 w-1.5 h-1.5 rounded-full bg-orange-500 flex-shrink-0"></span>
                    <span><strong class="text-white">Account Information:</strong> Name, email address, and password used to log in to the admin panel.</span>
                </li>
                <li class="flex items-start gap-2.5">
                    <span class="mt-1.5 w-1.5 h-1.5 rounded-full bg-orange-500 flex-shrink-0"></span>
                    <span><strong class="text-white">Usage Data:</strong> Pages visited, actions performed, timestamps, and IP address for security and audit purposes.</span>
                </li>
                <li class="flex items-start gap-2.5">
                    <span class="mt-1.5 w-1.5 h-1.5 rounded-full bg-orange-500 flex-shrink-0"></span>
                    <span><strong class="text-white">Content Data:</strong> Any media, text, or files you upload or manage through this platform.</span>
                </li>
                <li class="flex items-start gap-2.5">
                    <span class="mt-1.5 w-1.5 h-1.5 rounded-full bg-orange-500 flex-shrink-0"></span>
                    <span><strong class="text-white">Device & Browser Information:</strong> Browser type, operating system, and screen resolution for compatibility purposes.</span>
                </li>
            </ul>
        </x-policy-section>

        {{-- How We Use Information --}}
        <x-policy-section title="3. How We Use Your Information" icon="cog">
            <p class="mb-3">Your information is used to:</p>
            <ul class="space-y-2">
                <li class="flex items-start gap-2.5"><span class="mt-1.5 w-1.5 h-1.5 rounded-full bg-blue-500 flex-shrink-0"></span><span>Authenticate and authorise access to the admin panel</span></li>
                <li class="flex items-start gap-2.5"><span class="mt-1.5 w-1.5 h-1.5 rounded-full bg-blue-500 flex-shrink-0"></span><span>Maintain security logs and detect suspicious activity</span></li>
                <li class="flex items-start gap-2.5"><span class="mt-1.5 w-1.5 h-1.5 rounded-full bg-blue-500 flex-shrink-0"></span><span>Improve platform performance and user experience</span></li>
                <li class="flex items-start gap-2.5"><span class="mt-1.5 w-1.5 h-1.5 rounded-full bg-blue-500 flex-shrink-0"></span><span>Send administrative notifications (system alerts, updates)</span></li>
                <li class="flex items-start gap-2.5"><span class="mt-1.5 w-1.5 h-1.5 rounded-full bg-blue-500 flex-shrink-0"></span><span>Comply with legal obligations and internal policies</span></li>
            </ul>
        </x-policy-section>

        {{-- Data Storage & Security --}}
        <x-policy-section title="4. Data Storage & Security" icon="server">
            <p>All data is stored on secured servers. We implement industry-standard security measures including:</p>
            <div class="mt-3 grid grid-cols-1 sm:grid-cols-2 gap-3">
                @foreach([
                    ['icon' => 'lock-closed', 'label' => 'Encrypted data at rest and in transit (TLS/HTTPS)'],
                    ['icon' => 'shield-check', 'label' => 'Role-based access control for all admin accounts'],
                    ['icon' => 'clock',        'label' => 'Regular automated backups of all content'],
                    ['icon' => 'eye-slash',    'label' => 'Passwords stored using bcrypt hashing'],
                ] as $item)
                <div class="flex items-start gap-3 p-3 rounded-lg bg-white/3 border border-white/5">
                    <svg class="w-4 h-4 text-green-400 flex-shrink-0 mt-0.5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/>
                    </svg>
                    <span class="text-xs text-gray-400">{{ $item['label'] }}</span>
                </div>
                @endforeach
            </div>
        </x-policy-section>

        {{-- Data Sharing --}}
        <x-policy-section title="5. Data Sharing & Disclosure" icon="users">
            <p>We do <strong class="text-white">not</strong> sell, trade, or rent your personal information to third parties. We may disclose information only in the following circumstances:</p>
            <ul class="mt-3 space-y-2">
                <li class="flex items-start gap-2.5"><span class="mt-1.5 w-1.5 h-1.5 rounded-full bg-yellow-500 flex-shrink-0"></span><span>When required by law, court order, or government authority</span></li>
                <li class="flex items-start gap-2.5"><span class="mt-1.5 w-1.5 h-1.5 rounded-full bg-yellow-500 flex-shrink-0"></span><span>To trusted service providers acting on our behalf (hosting, maintenance) under strict confidentiality agreements</span></li>
                <li class="flex items-start gap-2.5"><span class="mt-1.5 w-1.5 h-1.5 rounded-full bg-yellow-500 flex-shrink-0"></span><span>To protect the rights, property, or safety of LED Events and its users</span></li>
            </ul>
        </x-policy-section>

        {{-- Cookies --}}
        <x-policy-section title="6. Cookies & Sessions" icon="document">
            <p>This admin panel uses session cookies to maintain your authenticated state. These cookies are:</p>
            <ul class="mt-3 space-y-2">
                <li class="flex items-start gap-2.5"><span class="mt-1.5 w-1.5 h-1.5 rounded-full bg-purple-500 flex-shrink-0"></span><span>Strictly necessary — the panel cannot function without them</span></li>
                <li class="flex items-start gap-2.5"><span class="mt-1.5 w-1.5 h-1.5 rounded-full bg-purple-500 flex-shrink-0"></span><span>Session-scoped — deleted automatically when you log out or close the browser</span></li>
                <li class="flex items-start gap-2.5"><span class="mt-1.5 w-1.5 h-1.5 rounded-full bg-purple-500 flex-shrink-0"></span><span>Not used for tracking, advertising, or analytics</span></li>
            </ul>
        </x-policy-section>

        {{-- Your Rights --}}
        <x-policy-section title="7. Your Rights" icon="badge-check">
            <p class="mb-3">As an admin user, you have the right to:</p>
            <div class="grid grid-cols-1 sm:grid-cols-2 gap-2">
                @foreach(['Access your personal data', 'Correct inaccurate information', 'Request account deletion', 'Export your data', 'Withdraw consent', 'Lodge a complaint'] as $right)
                <div class="flex items-center gap-2 text-xs text-gray-400">
                    <svg class="w-3.5 h-3.5 text-orange-400 flex-shrink-0" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"/>
                    </svg>
                    {{ $right }}
                </div>
                @endforeach
            </div>
            <p class="mt-3">To exercise any of these rights, contact the system administrator.</p>
        </x-policy-section>

        {{-- Changes --}}
        <x-policy-section title="8. Changes to This Policy" icon="refresh">
            <p>We may update this Privacy Policy from time to time. The "Last updated" date at the top of this page will reflect any changes. Continued use of the platform after changes constitutes acceptance of the updated policy.</p>
        </x-policy-section>

        {{-- Contact --}}
        <x-policy-section title="9. Contact Us" icon="mail">
            <p>If you have questions or concerns about this Privacy Policy, please contact us:</p>
            <div class="mt-4 inline-flex flex-col gap-2 p-4 rounded-xl bg-white/3 border border-white/8">
                <div class="flex items-center gap-2 text-xs">
                    <svg class="w-4 h-4 text-orange-400 flex-shrink-0" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"/></svg>
                    <span class="text-gray-300 font-medium">LED Events Sdn Bhd</span>
                </div>
                <div class="flex items-center gap-2 text-xs">
                    <svg class="w-4 h-4 text-orange-400 flex-shrink-0" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/></svg>
                    <span class="text-gray-400">admin@ledevents.com.my</span>
                </div>
                <div class="flex items-center gap-2 text-xs">
                    <svg class="w-4 h-4 text-orange-400 flex-shrink-0" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/><path stroke-linecap="round" stroke-linejoin="round" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/></svg>
                    <span class="text-gray-400">Kuala Lumpur, Malaysia</span>
                </div>
            </div>
        </x-policy-section>

    </div>

    {{-- Back button --}}
    <div class="mt-6 flex items-center justify-between">
        <a href="{{ route('admin.dashboard') }}" class="inline-flex items-center gap-2 text-xs text-gray-400 hover:text-orange-400 transition">
            <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M10 19l-7-7m0 0l7-7m-7 7h18"/></svg>
            Back to Dashboard
        </a>
        <a href="{{ route('terms') }}" class="inline-flex items-center gap-2 text-xs text-orange-400 hover:text-orange-300 transition">
            View Terms of Service
            <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M14 5l7 7m0 0l-7 7m7-7H3"/></svg>
        </a>
    </div>

</div>

@endsection
