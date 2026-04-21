@extends('backend.layout.app')

@section('title', 'Terms of Service')
@section('page-title', 'Terms of Service')
@section('page-subtitle', 'Rules and guidelines for using the LED Events Admin Panel')

@section('content')

<div class="max-w-4xl mx-auto">

    {{-- Header Card --}}
    <div class="relative overflow-hidden rounded-2xl border border-blue-500/15 bg-gradient-to-br from-[#1a1a2e] to-[#16213e] p-6 sm:p-8 mb-6">
        <div class="relative z-10 flex flex-col sm:flex-row sm:items-center gap-4">
            <div class="w-12 h-12 rounded-xl bg-blue-500/15 border border-blue-500/25 flex items-center justify-center flex-shrink-0">
                <svg class="w-6 h-6 text-blue-400" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 14.25v-2.625a3.375 3.375 0 00-3.375-3.375h-1.5A1.125 1.125 0 0113.5 7.125v-1.5a3.375 3.375 0 00-3.375-3.375H8.25m0 12.75h7.5m-7.5 3H12M10.5 2.25H5.625c-.621 0-1.125.504-1.125 1.125v17.25c0 .621.504 1.125 1.125 1.125h12.75c.621 0 1.125-.504 1.125-1.125V11.25a9 9 0 00-9-9z"/>
                </svg>
            </div>
            <div>
                <h2 class="text-lg sm:text-xl font-bold text-white">Terms of Service</h2>
                <p class="text-xs text-gray-400 mt-0.5">Last updated: {{ date('F d, Y') }} &nbsp;·&nbsp; LED Events Admin Panel</p>
            </div>
        </div>
        <div class="absolute -top-8 -right-8 w-40 h-40 rounded-full bg-blue-500/5 blur-2xl pointer-events-none"></div>
    </div>

    {{-- Agreement Banner --}}
    <div class="flex items-start gap-3 p-4 rounded-xl border border-yellow-500/20 bg-yellow-500/5 mb-6 text-xs text-yellow-300">
        <svg class="w-4 h-4 flex-shrink-0 mt-0.5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" d="M12 9v3.75m-9.303 3.376c-.866 1.5.217 3.374 1.948 3.374h14.71c1.73 0 2.813-1.874 1.948-3.374L13.949 3.378c-.866-1.5-3.032-1.5-3.898 0L2.697 16.126zM12 15.75h.007v.008H12v-.008z"/>
        </svg>
        <span>By accessing or using the LED Events Admin Panel, you confirm that you have read, understood, and agree to be bound by these Terms of Service.</span>
    </div>

    {{-- Content --}}
    <div class="space-y-4">

        {{-- 1. Acceptance --}}
        <x-policy-section title="1. Acceptance of Terms" icon="check-circle">
            <p>These Terms of Service ("Terms") govern your access to and use of the LED Events Admin Panel ("Platform"). These Terms constitute a legally binding agreement between you ("User") and LED Events Sdn Bhd ("Company").</p>
            <p class="mt-3">If you are accessing the Platform on behalf of an organisation, you represent that you have the authority to bind that organisation to these Terms.</p>
        </x-policy-section>

        {{-- 2. Authorised Use --}}
        <x-policy-section title="2. Authorised Use" icon="shield-check">
            <p class="mb-3">Access to this Platform is granted exclusively to:</p>
            <ul class="space-y-2">
                <li class="flex items-start gap-2.5"><span class="mt-1.5 w-1.5 h-1.5 rounded-full bg-blue-500 flex-shrink-0"></span><span>Employees and contractors of LED Events Sdn Bhd who have been issued valid credentials</span></li>
                <li class="flex items-start gap-2.5"><span class="mt-1.5 w-1.5 h-1.5 rounded-full bg-blue-500 flex-shrink-0"></span><span>Authorised third-party developers working under a signed agreement</span></li>
                <li class="flex items-start gap-2.5"><span class="mt-1.5 w-1.5 h-1.5 rounded-full bg-blue-500 flex-shrink-0"></span><span>Users who have been explicitly granted admin access by a system administrator</span></li>
            </ul>
            <p class="mt-3">Unauthorised access is strictly prohibited and may result in legal action.</p>
        </x-policy-section>

        {{-- 3. Account Responsibilities --}}
        <x-policy-section title="3. Account Responsibilities" icon="user">
            <p class="mb-3">As a registered user of this Platform, you are responsible for:</p>
            <div class="space-y-2">
                @foreach([
                    ['color' => 'orange', 'text' => 'Maintaining the confidentiality of your login credentials'],
                    ['color' => 'orange', 'text' => 'All activities that occur under your account'],
                    ['color' => 'orange', 'text' => 'Notifying the system administrator immediately of any unauthorised access'],
                    ['color' => 'orange', 'text' => 'Ensuring your account is not shared with or accessed by unauthorised persons'],
                    ['color' => 'orange', 'text' => 'Logging out properly after each session, especially on shared devices'],
                ] as $item)
                <div class="flex items-start gap-2.5">
                    <span class="mt-1.5 w-1.5 h-1.5 rounded-full bg-orange-500 flex-shrink-0"></span>
                    <span>{{ $item['text'] }}</span>
                </div>
                @endforeach
            </div>
        </x-policy-section>

        {{-- 4. Prohibited Activities --}}
        <x-policy-section title="4. Prohibited Activities" icon="ban">
            <p class="mb-3">The following activities are strictly prohibited on this Platform:</p>
            <div class="grid grid-cols-1 sm:grid-cols-2 gap-2">
                @foreach([
                    'Attempting to gain unauthorised access to any system or data',
                    'Uploading malicious code, viruses, or malware',
                    'Scraping, harvesting, or extracting data in bulk',
                    'Impersonating another user or administrator',
                    'Defacing, tampering with, or destroying content',
                    'Using the platform for illegal purposes',
                    'Circumventing security measures or access controls',
                    'Sharing credentials or session tokens with others',
                ] as $item)
                <div class="flex items-start gap-2 p-2.5 rounded-lg bg-red-500/5 border border-red-500/10 text-xs text-gray-400">
                    <svg class="w-3.5 h-3.5 text-red-400 flex-shrink-0 mt-0.5" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12"/>
                    </svg>
                    {{ $item }}
                </div>
                @endforeach
            </div>
        </x-policy-section>

        {{-- 5. Content Ownership --}}
        <x-policy-section title="5. Content Ownership & Intellectual Property" icon="photograph">
            <p>All content created, uploaded, or managed through this Platform — including but not limited to images, videos, text, and project data — remains the intellectual property of LED Events Sdn Bhd unless otherwise agreed in writing.</p>
            <p class="mt-3">You are granted a limited, non-exclusive, non-transferable licence to use the Platform solely for managing LED Events' official content. You may not reproduce, distribute, or commercialise any Platform content outside of your authorised role.</p>
        </x-policy-section>

        {{-- 6. Availability --}}
        <x-policy-section title="6. Platform Availability & Maintenance" icon="server">
            <p>We strive to maintain high availability, but we do not guarantee uninterrupted access. The Platform may be temporarily unavailable due to:</p>
            <ul class="mt-3 space-y-2">
                <li class="flex items-start gap-2.5"><span class="mt-1.5 w-1.5 h-1.5 rounded-full bg-gray-500 flex-shrink-0"></span><span>Scheduled maintenance — announced in advance where possible</span></li>
                <li class="flex items-start gap-2.5"><span class="mt-1.5 w-1.5 h-1.5 rounded-full bg-gray-500 flex-shrink-0"></span><span>Emergency repairs or security patches</span></li>
                <li class="flex items-start gap-2.5"><span class="mt-1.5 w-1.5 h-1.5 rounded-full bg-gray-500 flex-shrink-0"></span><span>Events beyond our control (force majeure, ISP outages, natural disasters)</span></li>
            </ul>
        </x-policy-section>

        {{-- 7. Limitation of Liability --}}
        <x-policy-section title="7. Limitation of Liability" icon="exclamation">
            <p>To the fullest extent permitted by law, LED Events Sdn Bhd shall not be liable for any indirect, incidental, special, or consequential damages arising from your use of the Platform, including loss of data, revenue, or business opportunities.</p>
            <p class="mt-3">Our total liability to you for any claim arising from these Terms shall not exceed the amount paid by you (if any) to access the Platform in the preceding 12 months.</p>
        </x-policy-section>

        {{-- 8. Termination --}}
        <x-policy-section title="8. Account Termination" icon="x-circle">
            <p>We reserve the right to suspend or permanently terminate your access to the Platform at our sole discretion, without prior notice, if we believe you have:</p>
            <ul class="mt-3 space-y-2">
                <li class="flex items-start gap-2.5"><span class="mt-1.5 w-1.5 h-1.5 rounded-full bg-red-500 flex-shrink-0"></span><span>Violated these Terms of Service</span></li>
                <li class="flex items-start gap-2.5"><span class="mt-1.5 w-1.5 h-1.5 rounded-full bg-red-500 flex-shrink-0"></span><span>Engaged in fraudulent or illegal activity</span></li>
                <li class="flex items-start gap-2.5"><span class="mt-1.5 w-1.5 h-1.5 rounded-full bg-red-500 flex-shrink-0"></span><span>Posed a security risk to the Platform or its users</span></li>
                <li class="flex items-start gap-2.5"><span class="mt-1.5 w-1.5 h-1.5 rounded-full bg-red-500 flex-shrink-0"></span><span>Had your employment or contract with LED Events terminated</span></li>
            </ul>
            <p class="mt-3">Upon termination, your right to access the Platform ceases immediately.</p>
        </x-policy-section>

        {{-- 9. Governing Law --}}
        <x-policy-section title="9. Governing Law" icon="globe">
            <p>These Terms are governed by and construed in accordance with the laws of <strong class="text-white">Malaysia</strong>. Any disputes arising from these Terms shall be subject to the exclusive jurisdiction of the courts of Malaysia.</p>
            <p class="mt-3">If any provision of these Terms is found to be unenforceable, the remaining provisions shall continue in full force and effect.</p>
        </x-policy-section>

        {{-- 10. Changes --}}
        <x-policy-section title="10. Changes to These Terms" icon="refresh">
            <p>We may revise these Terms at any time. The updated version will be indicated by the "Last updated" date above. Continued use of the Platform following any changes constitutes your acceptance of the new Terms.</p>
            <p class="mt-3">For significant changes, we will make reasonable efforts to notify active users via in-platform notification or email.</p>
        </x-policy-section>

        {{-- 11. Contact --}}
        <x-policy-section title="11. Contact & Dispute Resolution" icon="mail">
            <p>For questions regarding these Terms, or to report a violation, please contact:</p>
            <div class="mt-4 inline-flex flex-col gap-2 p-4 rounded-xl bg-white/3 border border-white/8">
                <div class="flex items-center gap-2 text-xs">
                    <svg class="w-4 h-4 text-blue-400 flex-shrink-0" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"/></svg>
                    <span class="text-gray-300 font-medium">LED Events Sdn Bhd — Legal & Compliance</span>
                </div>
                <div class="flex items-center gap-2 text-xs">
                    <svg class="w-4 h-4 text-blue-400 flex-shrink-0" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/></svg>
                    <span class="text-gray-400">legal@ledevents.com.my</span>
                </div>
                <div class="flex items-center gap-2 text-xs">
                    <svg class="w-4 h-4 text-blue-400 flex-shrink-0" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/><path stroke-linecap="round" stroke-linejoin="round" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/></svg>
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
        <a href="{{ route('privacy') }}" class="inline-flex items-center gap-2 text-xs text-orange-400 hover:text-orange-300 transition">
            View Privacy Policy
            <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M14 5l7 7m0 0l-7 7m7-7H3"/></svg>
        </a>
    </div>

</div>

@endsection
