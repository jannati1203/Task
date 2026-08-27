<header x-data="{ mobileMenuOpen: false }" class="sticky top-0 z-50 backdrop-blur-xl bg-slate-950/80 border-b border-slate-800/80 transition-all duration-300">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex items-center justify-between h-20">
            <!-- Brand Logo -->
            <a href="{{ route('home') }}" class="flex items-center gap-3 group">
                <div class="w-10 h-10 rounded-xl bg-gradient-to-tr from-cyan-500 via-indigo-600 to-purple-600 p-0.5 shadow-lg shadow-indigo-500/20 group-hover:shadow-indigo-500/40 transition-all">
                    <div class="w-full h-full bg-slate-950 rounded-[10px] flex items-center justify-center">
                        <svg class="w-6 h-6 text-cyan-400 group-hover:scale-110 transition-transform duration-300" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z" />
                        </svg>
                    </div>
                </div>
                <div class="flex flex-col">
                    <span class="text-xl font-bold tracking-tight text-white flex items-center gap-1.5">
                        TechCare <span class="text-cyan-400 font-extrabold">Solutions</span>
                    </span>
                    <span class="text-[10px] tracking-widest uppercase font-mono text-slate-400 -mt-1">Enterprise IT & Security</span>
                </div>
            </a>

            <!-- Desktop Navigation Links -->
            <nav class="hidden md:flex items-center gap-1 bg-slate-900/60 p-1.5 rounded-full border border-slate-800/80">
                <a href="{{ route('home') }}" 
                   class="px-5 py-2 rounded-full text-sm font-medium transition-all duration-200 {{ request()->routeIs('home') ? 'bg-indigo-600 text-white shadow-md shadow-indigo-600/30' : 'text-slate-300 hover:text-white hover:bg-slate-800/60' }}">
                    Home
                </a>
                <a href="{{ route('services') }}" 
                   class="px-5 py-2 rounded-full text-sm font-medium transition-all duration-200 {{ request()->routeIs('services') ? 'bg-indigo-600 text-white shadow-md shadow-indigo-600/30' : 'text-slate-300 hover:text-white hover:bg-slate-800/60' }}">
                    Services
                </a>
                <a href="{{ route('contact') }}" 
                   class="px-5 py-2 rounded-full text-sm font-medium transition-all duration-200 {{ request()->routeIs('contact') ? 'bg-indigo-600 text-white shadow-md shadow-indigo-600/30' : 'text-slate-300 hover:text-white hover:bg-slate-800/60' }}">
                    Contact
                </a>
            </nav>

            <!-- CTA Right Action Button & System Badge -->
            <div class="hidden lg:flex items-center gap-4">
                <div class="flex items-center gap-2 px-3 py-1.5 rounded-full bg-slate-900/80 border border-emerald-500/30 text-xs font-mono text-emerald-400">
                    <span class="relative flex h-2 w-2">
                        <span class="animate-ping absolute inline-flex h-full w-full rounded-full bg-emerald-400 opacity-75"></span>
                        <span class="relative inline-flex rounded-full h-2 w-2 bg-emerald-500"></span>
                    </span>
                    24/7 SOC Active
                </div>

                <a href="{{ route('contact') }}" class="relative group inline-flex items-center gap-2 px-5 py-2.5 rounded-xl font-semibold text-sm text-white overflow-hidden shadow-lg shadow-indigo-500/25 hover:shadow-indigo-500/40 transition-all duration-300">
                    <span class="absolute inset-0 bg-gradient-to-r from-cyan-500 via-indigo-600 to-purple-600 group-hover:scale-105 transition-transform duration-300"></span>
                    <span class="relative flex items-center gap-2">
                        Consultation
                        <svg class="w-4 h-4 group-hover:translate-x-1 transition-transform" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3" />
                        </svg>
                    </span>
                </a>
            </div>

            <!-- Mobile Hamburger Menu Button -->
            <div class="flex md:hidden">
                <button @click="mobileMenuOpen = !mobileMenuOpen" 
                        type="button" 
                        class="p-2.5 rounded-xl bg-slate-900 text-slate-400 hover:text-white border border-slate-800 focus:outline-none"
                        aria-label="Toggle menu">
                    <svg x-show="!mobileMenuOpen" class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                    </svg>
                    <svg x-show="mobileMenuOpen" class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" style="display: none;">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
        </div>
    </div>

    <!-- Mobile Navigation Drawer -->
    <div x-show="mobileMenuOpen" 
         x-transition:enter="transition ease-out duration-200"
         x-transition:enter-start="opacity-0 -translate-y-4"
         x-transition:enter-end="opacity-100 translate-y-0"
         x-transition:leave="transition ease-in duration-150"
         x-transition:leave-start="opacity-100 translate-y-0"
         x-transition:leave-end="opacity-0 -translate-y-4"
         class="md:hidden bg-slate-950/95 border-b border-slate-800 backdrop-blur-2xl px-4 pt-3 pb-6 space-y-3"
         style="display: none;">
        <a href="{{ route('home') }}" 
           class="block px-4 py-3 rounded-xl font-medium text-base {{ request()->routeIs('home') ? 'bg-indigo-600/20 text-cyan-400 border border-indigo-500/30' : 'text-slate-300 hover:bg-slate-900' }}">
            Home
        </a>
        <a href="{{ route('services') }}" 
           class="block px-4 py-3 rounded-xl font-medium text-base {{ request()->routeIs('services') ? 'bg-indigo-600/20 text-cyan-400 border border-indigo-500/30' : 'text-slate-300 hover:bg-slate-900' }}">
            Services
        </a>
        <a href="{{ route('contact') }}" 
           class="block px-4 py-3 rounded-xl font-medium text-base {{ request()->routeIs('contact') ? 'bg-indigo-600/20 text-cyan-400 border border-indigo-500/30' : 'text-slate-300 hover:bg-slate-900' }}">
            Contact Us
        </a>
        <div class="pt-2">
            <a href="{{ route('contact') }}" class="w-full flex items-center justify-center gap-2 py-3 rounded-xl font-semibold bg-gradient-to-r from-cyan-500 to-indigo-600 text-white shadow-lg">
                Schedule Consultation
            </a>
        </div>
    </div>
</header>
