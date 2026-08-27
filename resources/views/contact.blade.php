<x-layouts.site>
    <x-slot:title>Contact Us - TechCare Solutions Support & Consultation</x-slot:title>
    <x-slot:metaDescription>Connect with TechCare Solutions enterprise technical team for custom cloud architecture, cybersecurity audits, or 24/7 managed IT support inquiries.</x-slot:metaDescription>

    <!-- CONTACT HERO & LIVE STATUS BAR -->
    <section class="py-12 lg:py-16 relative">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            
            <!-- Live Status Banner -->
            <div class="max-w-3xl mx-auto mb-10 p-3 rounded-2xl bg-slate-900/80 border border-slate-800 flex items-center justify-between gap-4 text-xs font-mono text-slate-300">
                <div class="flex items-center gap-2">
                    <span class="flex h-2.5 w-2.5 relative">
                        <span class="animate-ping absolute inline-flex h-full w-full rounded-full bg-emerald-400 opacity-75"></span>
                        <span class="relative inline-flex rounded-full h-2.5 w-2.5 bg-emerald-500"></span>
                    </span>
                    <span class="text-emerald-400 font-bold">ALL SYSTEMS OPERATIONAL</span>
                </div>
                <div class="hidden sm:block text-slate-400">SOC Response SLA: &lt; 15 Mins</div>
                <div class="text-slate-400">24/7 Support Available</div>
            </div>

            <div class="text-center max-w-3xl mx-auto space-y-4">
                <h1 class="text-4xl sm:text-6xl font-extrabold text-white tracking-tight">
                    Let's Build Your Tech <span class="text-gradient">Future Together</span>
                </h1>
                <p class="text-slate-300 text-lg leading-relaxed">
                    Have questions about cloud migration, zero-trust security, or managed IT? Speak directly with our solutions architects.
                </p>
            </div>
        </div>
    </section>

    <!-- MAIN CONTACT FORM & INFO SECTION -->
    <section class="pb-24 relative">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            
            <!-- FLASH MESSAGES -->
            @if(session('success'))
                <div class="max-w-4xl mx-auto mb-10 p-6 rounded-2xl bg-emerald-950/80 border border-emerald-500/50 text-emerald-200 flex items-start gap-4 shadow-xl glow-cyan">
                    <div class="w-8 h-8 rounded-full bg-emerald-500/20 text-emerald-400 flex items-center justify-center shrink-0">
                        <svg class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                        </svg>
                    </div>
                    <div>
                        <h4 class="font-bold text-white text-base">Inquiry Submitted Successfully!</h4>
                        <p class="text-sm text-emerald-300/90 mt-1">{{ session('success') }}</p>
                    </div>
                </div>
            @endif

            @if($errors->any())
                <div class="max-w-4xl mx-auto mb-10 p-6 rounded-2xl bg-red-950/80 border border-red-500/50 text-red-200 space-y-2 shadow-xl">
                    <h4 class="font-bold text-white text-base">Please correct the highlighted fields below:</h4>
                    <ul class="list-disc list-inside text-sm text-red-300 space-y-1">
                        @foreach($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 items-start">
                
                <!-- LEFT COLUMN: INTERACTIVE FORM (7 COLS) -->
                <div class="lg:col-span-7 glass-card p-8 sm:p-12 rounded-3xl border border-slate-800 space-y-8">
                    
                    <div class="space-y-2 border-b border-slate-800/80 pb-6">
                        <h3 class="text-2xl font-bold text-white">Send Us a Message</h3>
                        <p class="text-xs text-slate-400">Fill in your inquiry details and our senior engineers will reach out.</p>
                    </div>

                    <form action="{{ route('contact.submit') }}" method="POST" class="space-y-6">
                        @csrf

                        <div class="grid grid-cols-1 sm:grid-cols-2 gap-6">
                            <!-- Name Field -->
                            <div class="space-y-2">
                                <label for="name" class="block text-xs font-semibold uppercase tracking-wider text-slate-300">
                                    Full Name <span class="text-cyan-400">*</span>
                                </label>
                                <input type="text" id="name" name="name" value="{{ old('name') }}" required placeholder="e.g. Alex Morgan"
                                       class="w-full px-4 py-3 rounded-xl bg-slate-900 border border-slate-800 text-white placeholder-slate-500 focus:outline-none focus:border-cyan-500 transition-colors text-sm" />
                            </div>

                            <!-- Email Field -->
                            <div class="space-y-2">
                                <label for="email" class="block text-xs font-semibold uppercase tracking-wider text-slate-300">
                                    Work Email <span class="text-cyan-400">*</span>
                                </label>
                                <input type="email" id="email" name="email" value="{{ old('email') }}" required placeholder="alex@company.com"
                                       class="w-full px-4 py-3 rounded-xl bg-slate-900 border border-slate-800 text-white placeholder-slate-500 focus:outline-none focus:border-cyan-500 transition-colors text-sm" />
                            </div>
                        </div>

                        <div class="grid grid-cols-1 sm:grid-cols-2 gap-6">
                            <!-- Phone Field -->
                            <div class="space-y-2">
                                <label for="phone" class="block text-xs font-semibold uppercase tracking-wider text-slate-300">
                                    Phone Number
                                </label>
                                <input type="text" id="phone" name="phone" value="{{ old('phone') }}" placeholder="+1 (555) 000-0000"
                                       class="w-full px-4 py-3 rounded-xl bg-slate-900 border border-slate-800 text-white placeholder-slate-500 focus:outline-none focus:border-cyan-500 transition-colors text-sm" />
                            </div>

                            <!-- Company Field -->
                            <div class="space-y-2">
                                <label for="company" class="block text-xs font-semibold uppercase tracking-wider text-slate-300">
                                    Company Name
                                </label>
                                <input type="text" id="company" name="company" value="{{ old('company') }}" placeholder="Acme Enterprises Inc."
                                       class="w-full px-4 py-3 rounded-xl bg-slate-900 border border-slate-800 text-white placeholder-slate-500 focus:outline-none focus:border-cyan-500 transition-colors text-sm" />
                            </div>
                        </div>

                        <div class="grid grid-cols-1 sm:grid-cols-2 gap-6">
                            <!-- Service Required Select -->
                            <div class="space-y-2">
                                <label for="service" class="block text-xs font-semibold uppercase tracking-wider text-slate-300">
                                    Service Needed <span class="text-cyan-400">*</span>
                                </label>
                                <select id="service" name="service" required
                                        class="w-full px-4 py-3 rounded-xl bg-slate-900 border border-slate-800 text-white focus:outline-none focus:border-cyan-500 transition-colors text-sm">
                                    <option value="">Select Primary Service</option>
                                    <option value="cloud" {{ old('service', request('service')) === 'cloud' ? 'selected' : '' }}>Multi-Cloud Architecture</option>
                                    <option value="security" {{ old('service', request('service')) === 'security' ? 'selected' : '' }}>Zero-Trust Cybersecurity & SOC</option>
                                    <option value="managed" {{ old('service', request('service')) === 'managed' ? 'selected' : '' }}>Managed IT Operations</option>
                                    <option value="devops" {{ old('service', request('service')) === 'devops' ? 'selected' : '' }}>DevOps & AI Automation</option>
                                    <option value="general" {{ old('service') === 'general' ? 'selected' : '' }}>General Audit Consultation</option>
                                </select>
                            </div>

                            <!-- Budget Range Select -->
                            <div class="space-y-2">
                                <label for="budget" class="block text-xs font-semibold uppercase tracking-wider text-slate-300">
                                    Monthly Tech Budget
                                </label>
                                <select id="budget" name="budget"
                                        class="w-full px-4 py-3 rounded-xl bg-slate-900 border border-slate-800 text-white focus:outline-none focus:border-cyan-500 transition-colors text-sm">
                                    <option value="">Select Range</option>
                                    <option value="under_5k" {{ old('budget') === 'under_5k' ? 'selected' : '' }}>Under $5,000 / mo</option>
                                    <option value="5k_15k" {{ old('budget') === '5k_15k' ? 'selected' : '' }}>$5,000 - $15,000 / mo</option>
                                    <option value="15k_50k" {{ old('budget') === '15k_50k' ? 'selected' : '' }}>$15,000 - $50,000 / mo</option>
                                    <option value="50k_plus" {{ old('budget') === '50k_plus' ? 'selected' : '' }}>$50,000+ / mo</option>
                                </select>
                            </div>
                        </div>

                        <!-- Message Field -->
                        <div class="space-y-2">
                            <label for="message" class="block text-xs font-semibold uppercase tracking-wider text-slate-300">
                                Project Overview & Details <span class="text-cyan-400">*</span>
                            </label>
                            <textarea id="message" name="message" rows="5" required placeholder="Describe your current IT setup, security concerns, or migration timeline..."
                                      class="w-full px-4 py-3 rounded-xl bg-slate-900 border border-slate-800 text-white placeholder-slate-500 focus:outline-none focus:border-cyan-500 transition-colors text-sm resize-y">{{ old('message') }}</textarea>
                        </div>

                        <!-- Submit Button -->
                        <button type="submit" class="w-full py-4 rounded-xl bg-gradient-to-r from-cyan-500 via-indigo-600 to-purple-600 hover:opacity-95 text-white font-bold text-base shadow-xl shadow-indigo-600/30 transition-all flex items-center justify-center gap-3">
                            Submit Consultation Request
                            <svg class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3" />
                            </svg>
                        </button>
                    </form>

                </div>

                <!-- RIGHT COLUMN: OFFICE LOCATIONS & HOTLINES (5 COLS) -->
                <div class="lg:col-span-5 space-y-8">
                    
                    <!-- Direct Support Contact Card -->
                    <div class="glass-card p-8 rounded-3xl border border-slate-800 space-y-6">
                        <h3 class="text-xl font-bold text-white flex items-center gap-2">
                            <svg class="w-5 h-5 text-cyan-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" />
                            </svg>
                            Direct Escalation Lines
                        </h3>

                        <div class="space-y-4 text-sm text-slate-300">
                            <div class="p-4 rounded-xl bg-slate-900 border border-slate-800 space-y-1">
                                <div class="text-xs font-mono text-cyan-400 uppercase font-semibold">Toll-Free Support Line</div>
                                <div class="text-base font-bold text-white">+1 (800) 555-TECH (8324)</div>
                                <div class="text-xs text-slate-400">Available Mon - Fri, 8am - 8pm EST</div>
                            </div>

                            <div class="p-4 rounded-xl bg-slate-900 border border-slate-800 space-y-1">
                                <div class="text-xs font-mono text-emerald-400 uppercase font-semibold">24/7 SOC Emergency Hotline</div>
                                <div class="text-base font-bold text-white">soc-incident@techcaresolutions.test</div>
                                <div class="text-xs text-slate-400">Guaranteed &lt; 15 min incident response</div>
                            </div>

                            <div class="p-4 rounded-xl bg-slate-900 border border-slate-800 space-y-1">
                                <div class="text-xs font-mono text-indigo-400 uppercase font-semibold">General Enterprise Sales</div>
                                <div class="text-base font-bold text-white">sales@techcaresolutions.test</div>
                                <div class="text-xs text-slate-400">Custom RFP & SLA inquiries</div>
                            </div>
                        </div>
                    </div>

                    <!-- Global Offices Card with Map Visualization -->
                    <div class="glass-card p-8 rounded-3xl border border-slate-800 space-y-6">
                        <h3 class="text-xl font-bold text-white">Global Headquarters</h3>
                        
                        <!-- Map Representation Graphic -->
                        <div class="relative h-44 rounded-2xl bg-slate-900 border border-slate-800 overflow-hidden flex items-center justify-center p-4">
                            <!-- Simulated Grid Map Graphic -->
                            <div class="absolute inset-0 bg-tech-grid opacity-60"></div>
                            
                            <!-- Location Dots -->
                            <div class="relative z-10 w-full h-full flex items-center justify-around">
                                <!-- NY -->
                                <div class="text-center group cursor-pointer">
                                    <span class="relative flex h-3 w-3 mx-auto mb-1">
                                        <span class="animate-ping absolute inline-flex h-full w-full rounded-full bg-cyan-400 opacity-75"></span>
                                        <span class="relative inline-flex rounded-full h-3 w-3 bg-cyan-500"></span>
                                    </span>
                                    <span class="text-xs font-mono text-white font-bold block">New York</span>
                                    <span class="text-[10px] text-slate-400 font-mono">Headquarters</span>
                                </div>

                                <!-- SF -->
                                <div class="text-center group cursor-pointer">
                                    <span class="relative flex h-3 w-3 mx-auto mb-1">
                                        <span class="animate-ping absolute inline-flex h-full w-full rounded-full bg-indigo-400 opacity-75"></span>
                                        <span class="relative inline-flex rounded-full h-3 w-3 bg-indigo-500"></span>
                                    </span>
                                    <span class="text-xs font-mono text-white font-bold block">San Francisco</span>
                                    <span class="text-[10px] text-slate-400 font-mono">Cloud Hub</span>
                                </div>

                                <!-- London -->
                                <div class="text-center group cursor-pointer">
                                    <span class="relative flex h-3 w-3 mx-auto mb-1">
                                        <span class="animate-ping absolute inline-flex h-full w-full rounded-full bg-purple-400 opacity-75"></span>
                                        <span class="relative inline-flex rounded-full h-3 w-3 bg-purple-500"></span>
                                    </span>
                                    <span class="text-xs font-mono text-white font-bold block">London</span>
                                    <span class="text-[10px] text-slate-400 font-mono">EMEA SOC</span>
                                </div>
                            </div>
                        </div>

                        <div class="space-y-4 text-xs text-slate-400 pt-2">
                            <div>
                                <strong class="text-white block text-sm">New York Office (HQ)</strong>
                                100 Technology Plaza, Floor 42, New York, NY 10001
                            </div>
                            <div>
                                <strong class="text-white block text-sm">San Francisco Innovation Hub</strong>
                                500 Cyber Security Way, Suite 800, San Francisco, CA 94105
                            </div>
                        </div>

                    </div>

                </div>

            </div>

        </div>
    </section>

</x-layouts.site>
