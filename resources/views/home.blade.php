<x-layouts.site>
    <x-slot:title>Home - Modern IT Infrastructure & Security</x-slot:title>
    <x-slot:metaDescription>TechCare Solutions delivers managed IT, zero-trust cybersecurity, multi-cloud architecture, and enterprise AI automation for high-growth businesses.</x-slot:metaDescription>

    <!-- HERO SECTION -->
    <section class="relative pt-12 pb-24 lg:pt-20 lg:pb-32 overflow-hidden">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
            <div class="text-center max-w-4xl mx-auto space-y-8">
                
                <!-- Trust Badge -->
                <div class="inline-flex items-center gap-2.5 px-4 py-2 rounded-full bg-indigo-950/60 border border-indigo-500/30 text-indigo-300 text-xs sm:text-sm font-mono shadow-inner shadow-indigo-500/10">
                    <span class="flex h-2 w-2 rounded-full bg-cyan-400 animate-ping"></span>
                    <span>SOC2 Type II Certified &bull; ISO 27001 Enterprise Protection</span>
                </div>

                <!-- Main Hero Headline -->
                <h1 class="text-4xl sm:text-6xl lg:text-7xl font-extrabold tracking-tight text-white leading-[1.1]">
                    Intelligent IT Infrastructure & <span class="text-gradient">Cyber Security Solutions</span>
                </h1>

                <!-- Hero Subtitle -->
                <p class="text-lg sm:text-xl text-slate-300 max-w-3xl mx-auto leading-relaxed">
                    TechCare Solutions empowers modern businesses with zero-trust cyber defense, seamless multi-cloud orchestration, 24/7 SOC monitoring, and autonomous IT workflows.
                </p>

                <!-- Hero Action Buttons -->
                <div class="flex flex-col sm:flex-row items-center justify-center gap-4 pt-4">
                    <a href="{{ route('contact') }}" class="w-full sm:w-auto inline-flex items-center justify-center gap-3 px-8 py-4 rounded-xl text-base font-semibold text-white bg-gradient-to-r from-cyan-500 via-indigo-600 to-purple-600 hover:opacity-95 shadow-xl shadow-indigo-600/30 transition-all duration-300 transform hover:-translate-y-0.5">
                        Schedule Free Audit
                        <svg class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3" />
                        </svg>
                    </a>

                    <a href="{{ route('services') }}" class="w-full sm:w-auto inline-flex items-center justify-center gap-2.5 px-8 py-4 rounded-xl text-base font-semibold text-slate-200 bg-slate-900/90 border border-slate-800 hover:border-slate-700 hover:text-white transition-all duration-300">
                        Explore Our Services
                        <svg class="w-5 h-5 text-cyan-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                        </svg>
                    </a>
                </div>

                <!-- KPI / Performance Counters Grid -->
                <div class="grid grid-cols-2 lg:grid-cols-4 gap-4 sm:gap-6 pt-12 text-left">
                    <div class="glass-card p-6 rounded-2xl border border-slate-800/80">
                        <div class="text-3xl sm:text-4xl font-extrabold text-cyan-400 font-mono">99.999%</div>
                        <div class="text-xs uppercase tracking-wider text-slate-400 font-semibold mt-1">Uptime Guarantee SLA</div>
                        <div class="text-xs text-slate-500 mt-2">Zero unplanned cloud downtime</div>
                    </div>

                    <div class="glass-card p-6 rounded-2xl border border-slate-800/80">
                        <div class="text-3xl sm:text-4xl font-extrabold text-indigo-400 font-mono">&lt; 15 Mins</div>
                        <div class="text-xs uppercase tracking-wider text-slate-400 font-semibold mt-1">SOC Threat Response</div>
                        <div class="text-xs text-slate-500 mt-2">Active containment response</div>
                    </div>

                    <div class="glass-card p-6 rounded-2xl border border-slate-800/80">
                        <div class="text-3xl sm:text-4xl font-extrabold text-purple-400 font-mono">500+</div>
                        <div class="text-xs uppercase tracking-wider text-slate-400 font-semibold mt-1">Enterprise Clients</div>
                        <div class="text-xs text-slate-500 mt-2">Global infrastructure managed</div>
                    </div>

                    <div class="glass-card p-6 rounded-2xl border border-slate-800/80">
                        <div class="text-3xl sm:text-4xl font-extrabold text-emerald-400 font-mono">$45M+</div>
                        <div class="text-xs uppercase tracking-wider text-slate-400 font-semibold mt-1">Cloud Cost Optimized</div>
                        <div class="text-xs text-slate-500 mt-2">Saved across customer workloads</div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- TECH PARTNER ECOSYSTEM -->
    <section class="py-10 border-y border-slate-900 bg-slate-950/60">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <p class="text-center text-xs font-mono uppercase tracking-widest text-slate-400 mb-8">
                Trusted Technology Partners & Enterprise Standards
            </p>
            <div class="flex flex-wrap items-center justify-center gap-8 md:gap-14 opacity-75 grayscale hover:grayscale-0 transition-all duration-500">
                <div class="flex items-center gap-2 font-bold text-lg text-slate-300">
                    <span class="w-3 h-3 rounded-full bg-amber-500"></span> AWS Premier
                </div>
                <div class="flex items-center gap-2 font-bold text-lg text-slate-300">
                    <span class="w-3 h-3 rounded-full bg-blue-500"></span> Microsoft Azure
                </div>
                <div class="flex items-center gap-2 font-bold text-lg text-slate-300">
                    <span class="w-3 h-3 rounded-full bg-red-500"></span> Google Cloud
                </div>
                <div class="flex items-center gap-2 font-bold text-lg text-slate-300">
                    <span class="w-3 h-3 rounded-full bg-cyan-500"></span> Cisco Certified
                </div>
                <div class="flex items-center gap-2 font-bold text-lg text-slate-300">
                    <span class="w-3 h-3 rounded-full bg-emerald-500"></span> CrowdStrike SOC
                </div>
                <div class="flex items-center gap-2 font-bold text-lg text-slate-300">
                    <span class="w-3 h-3 rounded-full bg-indigo-500"></span> NVIDIA AI Partner
                </div>
            </div>
        </div>
    </section>

    <!-- CORE SERVICES OVERVIEW -->
    <section class="py-24 relative">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            
            <div class="text-center max-w-3xl mx-auto space-y-4 mb-16">
                <h2 class="text-xs font-mono uppercase tracking-widest text-cyan-400">Our Expertise</h2>
                <h3 class="text-3xl sm:text-5xl font-bold tracking-tight text-white">
                    End-to-End Technology Solutions
                </h3>
                <p class="text-slate-400 text-base sm:text-lg">
                    Engineered to streamline enterprise workflows, eliminate security vulnerabilities, and accelerate digital transformation.
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
                
                <!-- Service Card 1 -->
                <div class="glass-card glass-card-hover p-8 rounded-3xl relative group flex flex-col justify-between">
                    <div class="space-y-5">
                        <div class="w-14 h-14 rounded-2xl bg-cyan-500/10 border border-cyan-500/30 flex items-center justify-center text-cyan-400 group-hover:scale-110 transition-transform">
                            <svg class="w-7 h-7" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 15a4 4 0 004 4h9a5 5 0 001-9.999 5.002 5.002 0 00-9.78 2.096A4.001 4.001 0 003 15z" />
                            </svg>
                        </div>
                        <h4 class="text-xl font-bold text-white group-hover:text-cyan-400 transition-colors">
                            Multi-Cloud Architecture
                        </h4>
                        <p class="text-sm text-slate-400 leading-relaxed">
                            Scalable AWS, Azure, and GCP hybrid cloud environments built with zero friction, auto-scaling, and cost governance.
                        </p>
                    </div>
                    <div class="pt-6">
                        <a href="{{ route('services') }}" class="inline-flex items-center text-sm font-semibold text-cyan-400 hover:text-cyan-300 gap-1.5">
                            Learn More 
                            <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/></svg>
                        </a>
                    </div>
                </div>

                <!-- Service Card 2 -->
                <div class="glass-card glass-card-hover p-8 rounded-3xl relative group flex flex-col justify-between">
                    <div class="space-y-5">
                        <div class="w-14 h-14 rounded-2xl bg-indigo-500/10 border border-indigo-500/30 flex items-center justify-center text-indigo-400 group-hover:scale-110 transition-transform">
                            <svg class="w-7 h-7" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z" />
                            </svg>
                        </div>
                        <h4 class="text-xl font-bold text-white group-hover:text-indigo-400 transition-colors">
                            Zero-Trust Cyber Defense
                        </h4>
                        <p class="text-sm text-slate-400 leading-relaxed">
                            24/7 Security Operations Center (SOC), active threat hunting, endpoint protection, and SIEM automated mitigation.
                        </p>
                    </div>
                    <div class="pt-6">
                        <a href="{{ route('services') }}" class="inline-flex items-center text-sm font-semibold text-indigo-400 hover:text-indigo-300 gap-1.5">
                            Learn More 
                            <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/></svg>
                        </a>
                    </div>
                </div>

                <!-- Service Card 3 -->
                <div class="glass-card glass-card-hover p-8 rounded-3xl relative group flex flex-col justify-between">
                    <div class="space-y-5">
                        <div class="w-14 h-14 rounded-2xl bg-purple-500/10 border border-purple-500/30 flex items-center justify-center text-purple-400 group-hover:scale-110 transition-transform">
                            <svg class="w-7 h-7" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z" />
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                            </svg>
                        </div>
                        <h4 class="text-xl font-bold text-white group-hover:text-purple-400 transition-colors">
                            Managed IT Operations
                        </h4>
                        <p class="text-sm text-slate-400 leading-relaxed">
                            Complete IT helpdesk, infrastructure patch management, network monitoring, and remote workstation support.
                        </p>
                    </div>
                    <div class="pt-6">
                        <a href="{{ route('services') }}" class="inline-flex items-center text-sm font-semibold text-purple-400 hover:text-purple-300 gap-1.5">
                            Learn More 
                            <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/></svg>
                        </a>
                    </div>
                </div>

                <!-- Service Card 4 -->
                <div class="glass-card glass-card-hover p-8 rounded-3xl relative group flex flex-col justify-between">
                    <div class="space-y-5">
                        <div class="w-14 h-14 rounded-2xl bg-emerald-500/10 border border-emerald-500/30 flex items-center justify-center text-emerald-400 group-hover:scale-110 transition-transform">
                            <svg class="w-7 h-7" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z" />
                            </svg>
                        </div>
                        <h4 class="text-xl font-bold text-white group-hover:text-emerald-400 transition-colors">
                            AI & DevOps Automation
                        </h4>
                        <p class="text-sm text-slate-400 leading-relaxed">
                            Continuous delivery pipelines (CI/CD), Infrastructure as Code (Terraform), and generative AI process integration.
                        </p>
                    </div>
                    <div class="pt-6">
                        <a href="{{ route('services') }}" class="inline-flex items-center text-sm font-semibold text-emerald-400 hover:text-emerald-300 gap-1.5">
                            Learn More 
                            <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/></svg>
                        </a>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- WHY TECHCARE SOLUTIONS (DIFFERENTIATORS) -->
    <section class="py-24 bg-slate-900/40 border-y border-slate-900">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            
            <div class="flex flex-col lg:flex-row items-start lg:items-end justify-between mb-16 gap-6">
                <div class="space-y-4 max-w-2xl">
                    <h2 class="text-xs font-mono uppercase tracking-widest text-indigo-400">Why TechCare Solutions</h2>
                    <h3 class="text-3xl sm:text-5xl font-bold text-white tracking-tight">
                        Built for Modern Enterprise Demands
                    </h3>
                </div>
                <p class="text-slate-400 max-w-md text-sm leading-relaxed">
                    We combine elite engineering talent with proactive threat intelligence to deliver unparalleled speed, reliability, and security.
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                
                <div class="glass-card p-8 rounded-3xl space-y-4 border border-slate-800/80">
                    <div class="w-12 h-12 rounded-xl bg-slate-900 flex items-center justify-center text-cyan-400 border border-slate-800">
                        <svg class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                        </svg>
                    </div>
                    <h4 class="text-lg font-bold text-white">99.999% SLA Guarantee</h4>
                    <p class="text-sm text-slate-400 leading-relaxed">
                        Strict financial SLAs backing uptime performance across cloud workloads, networks, and communication systems.
                    </p>
                </div>

                <div class="glass-card p-8 rounded-3xl space-y-4 border border-slate-800/80">
                    <div class="w-12 h-12 rounded-xl bg-slate-900 flex items-center justify-center text-indigo-400 border border-slate-800">
                        <svg class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                        </svg>
                    </div>
                    <h4 class="text-lg font-bold text-white">15-Minute Response Time</h4>
                    <p class="text-sm text-slate-400 leading-relaxed">
                        Dedicated Tier-3 Security Operations Center (SOC) engineers respond immediately to high-priority alerts.
                    </p>
                </div>

                <div class="glass-card p-8 rounded-3xl space-y-4 border border-slate-800/80">
                    <div class="w-12 h-12 rounded-xl bg-slate-900 flex items-center justify-center text-purple-400 border border-slate-800">
                        <svg class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 14l6-6m-5.5.5h.01m4.99 5h.01M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16l3.5-2 3.5 2 3.5-2 3.5 2z" />
                        </svg>
                    </div>
                    <h4 class="text-lg font-bold text-white">Automated Compliance Shield</h4>
                    <p class="text-sm text-slate-400 leading-relaxed">
                        Continuous audit logging and compliance monitoring for HIPAA, SOC2 Type II, ISO 27001, and GDPR standards.
                    </p>
                </div>

            </div>
        </div>
    </section>

    <!-- TESTIMONIALS & CASE STUDIES -->
    <section class="py-24">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center max-w-3xl mx-auto space-y-4 mb-16">
                <h2 class="text-xs font-mono uppercase tracking-widest text-cyan-400">Client Feedback</h2>
                <h3 class="text-3xl sm:text-5xl font-bold text-white tracking-tight">Trusted by Industry Leaders</h3>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                
                <div class="glass-card p-8 rounded-3xl border border-slate-800 space-y-6 flex flex-col justify-between">
                    <div class="space-y-4">
                        <div class="flex text-amber-400 gap-1">
                            ★★★★★
                        </div>
                        <p class="text-sm text-slate-300 leading-relaxed italic">
                            "TechCare Solutions migrated our entire legacy infrastructure to AWS in under 3 weeks without a single minute of downtime. Their SOC team caught a ransomware attack before it even hit our perimeter."
                        </p>
                    </div>
                    <div class="flex items-center gap-3 pt-4 border-t border-slate-800">
                        <div class="w-10 h-10 rounded-full bg-gradient-to-tr from-cyan-500 to-indigo-600 flex items-center justify-center font-bold text-white text-sm">
                            SK
                        </div>
                        <div>
                            <div class="text-sm font-bold text-white">Sarah Jenkins</div>
                            <div class="text-xs text-slate-400">CTO, FinTech Global</div>
                        </div>
                    </div>
                </div>

                <div class="glass-card p-8 rounded-3xl border border-slate-800 space-y-6 flex flex-col justify-between">
                    <div class="space-y-4">
                        <div class="flex text-amber-400 gap-1">
                            ★★★★★
                        </div>
                        <p class="text-sm text-slate-300 leading-relaxed italic">
                            "Partnering with TechCare Solutions cut our cloud infrastructure spending by 38% while improving API response times by 2.5x. Their managed services team is truly world-class."
                        </p>
                    </div>
                    <div class="flex items-center gap-3 pt-4 border-t border-slate-800">
                        <div class="w-10 h-10 rounded-full bg-gradient-to-tr from-indigo-500 to-purple-600 flex items-center justify-center font-bold text-white text-sm">
                            MR
                        </div>
                        <div>
                            <div class="text-sm font-bold text-white">Marcus Vance</div>
                            <div class="text-xs text-slate-400">VP Infrastructure, HealthCore</div>
                        </div>
                    </div>
                </div>

                <div class="glass-card p-8 rounded-3xl border border-slate-800 space-y-6 flex flex-col justify-between">
                    <div class="space-y-4">
                        <div class="flex text-amber-400 gap-1">
                            ★★★★★
                        </div>
                        <p class="text-sm text-slate-300 leading-relaxed italic">
                            "The peace of mind knowing TechCare Solutions handles our cybersecurity around the clock is priceless. They handled our SOC2 audit seamlessly!"
                        </p>
                    </div>
                    <div class="flex items-center gap-3 pt-4 border-t border-slate-800">
                        <div class="w-10 h-10 rounded-full bg-gradient-to-tr from-purple-500 to-emerald-500 flex items-center justify-center font-bold text-white text-sm">
                            EL
                        </div>
                        <div>
                            <div class="text-sm font-bold text-white">Elena Rostova</div>
                            <div class="text-xs text-slate-400">Head of DevOps, Logistics AI</div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- CALL TO ACTION BANNER -->
    <section class="py-20 relative overflow-hidden">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="relative glass-card p-10 sm:p-16 rounded-3xl border border-indigo-500/30 overflow-hidden text-center space-y-6 glow-indigo">
                <div class="max-w-2xl mx-auto space-y-4">
                    <h3 class="text-3xl sm:text-4xl font-extrabold text-white">
                        Ready to Elevate Your IT & Security Posture?
                    </h3>
                    <p class="text-slate-300 text-base">
                        Get a comprehensive technology assessment from our senior solutions architects.
                    </p>
                </div>
                <div class="pt-4">
                    <a href="{{ route('contact') }}" class="inline-flex items-center justify-center gap-3 px-8 py-4 rounded-xl text-base font-semibold text-white bg-gradient-to-r from-cyan-500 via-indigo-600 to-purple-600 hover:opacity-95 shadow-lg shadow-indigo-600/30 transition-all">
                        Schedule Your Free Infrastructure Audit
                        <svg class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"/></svg>
                    </a>
                </div>
            </div>
        </div>
    </section>

</x-layouts.site>
