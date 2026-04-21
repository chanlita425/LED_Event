<aside id="sidebar" class="fixed top-0 left-0 h-full w-64 bg-gray-900 border-r border-orange-500/10 flex flex-col z-50 -translate-x-full lg:translate-x-0 transition-transform duration-300 ease-in-out">

    {{-- Logo --}}
    <div class="flex items-center justify-between px-5 py-5 border-b border-orange-500/10">
        <div class="flex items-center gap-3">
            <div class="w-9 h-9 bg-orange-500 rounded-lg flex items-center justify-center flex-shrink-0">
                <svg class="w-5 h-5 text-white" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                    <rect x="2" y="3" width="20" height="14" rx="2"/><path d="M8 21h8M12 17v4"/>
                </svg>
            </div>
            <div>
                <p class="text-sm font-medium leading-tight">LED Events</p>
                <p class="text-[11px] text-gray-500">Admin Panel</p>
            </div>
        </div>
        {{-- Close button — mobile only --}}
        <button id="sidebar-close"
                class="lg:hidden p-1.5 rounded-lg text-gray-500 hover:text-white hover:bg-white/10 transition">
            <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12"/>
            </svg>
        </button>
    </div>

    {{-- Nav --}}
    <nav class="flex-1 overflow-y-auto py-4 space-y-1 scrollbar-thin">

        {{-- Main --}}
        <x-admin.nav-label>Main</x-admin.nav-label>
        <x-admin.nav-item route="admin.dashboard" icon="grid">Dashboard</x-admin.nav-item>

        {{-- Home --}}
        <x-admin.nav-label>Home</x-admin.nav-label>
        <x-admin.nav-item route="admin.home.why-led-event.index" icon="star">Why LED Events</x-admin.nav-item>
        <x-admin.nav-item route="admin.home.our-services.index" icon="lightning">Our Services</x-admin.nav-item>
        <x-admin.nav-item route="admin.home.feature-project.index" icon="briefcase">Feature Project</x-admin.nav-item>
        <x-admin.nav-item route="admin.home.how-we-work.index" icon="cog">How We Work</x-admin.nav-item>

        {{-- Services --}}
        <x-admin.nav-label>Services</x-admin.nav-label>
        <x-admin.nav-item route="admin.services.led-screen-rental.index" icon="monitor">LED Screen Rental</x-admin.nav-item>
        <x-admin.nav-item route="admin.services.stage-rental.index" icon="template">Stage Rental</x-admin.nav-item>
        <x-admin.nav-item route="admin.services.sound-system.index" icon="volume">Sound System</x-admin.nav-item>
        <x-admin.nav-item route="admin.services.lighting-production.index" icon="sun">Lighting Production</x-admin.nav-item>
        <x-admin.nav-item route="admin.services.full-event-production.index" icon="collection">Full Event Production</x-admin.nav-item>

        {{-- Projects --}}
        <x-admin.nav-label>Projects</x-admin.nav-label>
        <x-admin.nav-item route="admin.projects.all.index" icon="folder">All Projects</x-admin.nav-item>
        <x-admin.nav-item route="admin.projects.concert.index" icon="music">Concert Events</x-admin.nav-item>
        <x-admin.nav-item route="admin.projects.corporate.index" icon="office">Corporate Events</x-admin.nav-item>
        <x-admin.nav-item route="admin.projects.festival.index" icon="flag">Festival Events</x-admin.nav-item>
        <x-admin.nav-item route="admin.projects.outdoor.index" icon="globe">Outdoor Events</x-admin.nav-item>

        {{-- Why Us --}}
        <x-admin.nav-label>Why Us</x-admin.nav-label>
        <x-admin.nav-item route="admin.whyus.system.index" icon="chip">System</x-admin.nav-item>
        <x-admin.nav-item route="admin.whyus.backup.index" icon="server">Backup</x-admin.nav-item>
        <x-admin.nav-item route="admin.whyus.team.index" icon="users">Team</x-admin.nav-item>
        <x-admin.nav-item route="admin.whyus.execution.index" icon="check">Execution</x-admin.nav-item>
        <x-admin.nav-item route="admin.whyus.experience.index" icon="badge">Experience</x-admin.nav-item>

        {{-- Media --}}
        <x-admin.nav-label>Media</x-admin.nav-label>
        <x-admin.nav-item route="admin.media.event-video.index" icon="film">Event Video</x-admin.nav-item>
        <x-admin.nav-item route="admin.media.gallery.index" icon="photo">Gallery</x-admin.nav-item>
        <x-admin.nav-item route="admin.media.behind-scenes.index" icon="camera">Behind the Scenes</x-admin.nav-item>

        {{-- Blog --}}
        <x-admin.nav-label>Blog</x-admin.nav-label>
        <x-admin.nav-item route="admin.blog.articles.index" icon="document">All Articles</x-admin.nav-item>
        <x-admin.nav-item route="admin.blog.event-guides.index" icon="book">Event Guides</x-admin.nav-item>
        <x-admin.nav-item route="admin.blog.led-knowledge.index" icon="lightbulb">LED Knowledge</x-admin.nav-item>
        <x-admin.nav-item route="admin.blog.production-tips.index" icon="pencil">Production Tips</x-admin.nav-item>

        {{-- Products --}}
        <x-admin.nav-label>Products</x-admin.nav-label>
        <x-admin.nav-item route="admin.products.fox-effects.index" icon="sparkles">Fox &amp; Effects</x-admin.nav-item>
        <x-admin.nav-item route="admin.products.led-display.index" icon="desktop">LED Display Sales</x-admin.nav-item>

        {{-- Contact --}}
        <x-admin.nav-label>Contact</x-admin.nav-label>
        <x-admin.nav-item route="admin.contact.form-info.index" icon="clipboard">Form Info</x-admin.nav-item>
        <x-admin.nav-item route="admin.contact.contact-info.index" icon="phone">Contact Info</x-admin.nav-item>

        {{-- Legal --}}
        <x-admin.nav-label>Legal</x-admin.nav-label>

        @php $isPrivacy = request()->routeIs('privacy'); @endphp
        <a href="{{ route('privacy') }}"
           class="group flex items-center gap-3 mx-2 px-3 py-2 rounded-lg text-xs font-medium transition-all duration-150
                  {{ $isPrivacy ? 'bg-orange-500/15 text-orange-400 border border-orange-500/20' : 'text-gray-400 hover:text-gray-200 hover:bg-white/5' }}">
            <svg class="w-4 h-4 flex-shrink-0 {{ $isPrivacy ? 'text-orange-400' : 'text-gray-500 group-hover:text-gray-300' }}"
                 fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75L11.25 15 15 9.75m-3-7.036A11.959 11.959 0 013.598 6 11.99 11.99 0 003 9.749c0 5.592 3.824 10.29 9 11.623 5.176-1.332 9-6.03 9-11.622 0-1.31-.21-2.571-.598-3.751h-.152c-3.196 0-6.1-1.248-8.25-3.285z"/>
            </svg>
            <span class="truncate">Privacy Policy</span>
            @if($isPrivacy)<span class="ml-auto w-1.5 h-1.5 rounded-full bg-orange-500 flex-shrink-0"></span>@endif
        </a>

        @php $isTerms = request()->routeIs('terms'); @endphp
        <a href="{{ route('terms') }}"
           class="group flex items-center gap-3 mx-2 px-3 py-2 rounded-lg text-xs font-medium transition-all duration-150
                  {{ $isTerms ? 'bg-orange-500/15 text-orange-400 border border-orange-500/20' : 'text-gray-400 hover:text-gray-200 hover:bg-white/5' }}">
            <svg class="w-4 h-4 flex-shrink-0 {{ $isTerms ? 'text-orange-400' : 'text-gray-500 group-hover:text-gray-300' }}"
                 fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"/>
            </svg>
            <span class="truncate">Terms of Service</span>
            @if($isTerms)<span class="ml-auto w-1.5 h-1.5 rounded-full bg-orange-500 flex-shrink-0"></span>@endif
        </a>

    </nav>

    {{-- Footer --}}
    <div class="px-5 py-4 border-t border-orange-500/10">
        <div class="flex items-center gap-3">
            <div class="w-8 h-8 rounded-full bg-orange-500 flex items-center justify-center text-xs font-medium text-white">AD</div>
            <div>
                <p class="text-xs font-medium">Admin</p>
                <p class="text-[11px] text-gray-500">{{ auth()->user()->email ?? 'admin@led.com' }}</p>
            </div>
        </div>
    </div>

</aside>