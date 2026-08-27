<x-layouts.site>
    <x-slot:title>Services - Enterprise Cloud, Security & Managed IT</x-slot:title>
    <x-slot:metaDescription>Explore TechCare Solutions' comprehensive technology service offerings: Multi-Cloud, Zero-Trust Cybersecurity, 24/7 Managed IT, and DevOps Automation.</x-slot:metaDescription>

    <!-- SERVICES HERO -->
    <section class="py-16 lg:py-24 relative">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <div class="max-w-3xl mx-auto space-y-6">
                <div class="inline-flex items-center gap-2 px-4 py-2 rounded-full bg-cyan-950/60 border border-cyan-500/30 text-cyan-300 text-xs font-mono">
                    Enterprise Technology Catalog
                </div>
                <h1 class="text-4xl sm:text-6xl font-extrabold text-white tracking-tight leading-tight">
                    Comprehensive IT & <span class="text-gradient">Cyber Security Services</span>
                </h1>
                <p class="text-slate-300 text-lg leading-relaxed">
                    Designed for high-growth companies requiring 99.999% uptime, strict regulatory compliance, and rapid infrastructure scalability.
                </p>
            </div>
        </div>
    </section>

    <!-- INTERACTIVE SERVICE CATALOG (ALPINE.JS TAB FILTER) -->
    <section class="pb-24" x-data="{ activeTab: 'all' }">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            
            <!-- Category Filter Buttons -->
            <div class="flex flex-wrap items-center justify-center gap-2 sm:gap-3 mb-16">
                <button @click="activeTab = 'all'" 
                        :class="activeTab === 'all' ? 'bg-indigo-600 text-white shadow-lg shadow-indigo-600/30' : 'bg-slate-900 text-slate-400 hover:text-white border border-slate-800'"
                        class="px-5 py-2.5 rounded-full text-sm font-semibold transition-all duration-200">
                    All Solutions
                </button>
                <button @click="activeTab = 'cloud'" 
                        :class="activeTab === 'cloud' ? 'bg-indigo-600 text-white shadow-lg shadow-indigo-600/30' : 'bg-slate-900 text-slate-400 hover:text-white border border-slate-800'"
                        class="px-5 py-2.5 rounded-full text-sm font-semibold transition-all duration-200">
                    Cloud Architecture
                </button>
                <button @click="activeTab = 'security'" 
                        :class="activeTab === 'security' ? 'bg-indigo-600 text-white shadow-lg shadow-indigo-600/30' : 'bg-slate-900 text-slate-400 hover:text-white border border-slate-800'"
                        class="px-5 py-2.5 rounded-full text-sm font-semibold transition-all duration-200">
                    Cyber Security & SOC
                </button>
                <button @click="activeTab = 'managed'" 
                        :class="activeTab === 'managed' ? 'bg-indigo-600 text-white shadow-lg shadow-indigo-600/30' : 'bg-slate-900 text-slate-400 hover:text-white border border-slate-800'"
                        class="px-5 py-2.5 rounded-full text-sm font-semibold transition-all duration-200">
                    Managed IT Support
                </button>
                <button @click="activeTab = 'devops'" 
                        :class="activeTab === 'devops' ? 'bg-indigo-600 text-white shadow-lg shadow-indigo-600/30' : 'bg-slate-900 text-slate-400 hover:text-white border border-slate-800'"
                        class="px-5 py-2.5 rounded-full text-sm font-semibold transition-all duration-200">
                    DevOps & AI
                </button>
            </div>

            <!-- Service Cards Grid -->
            <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                
                <!-- Service 1: Multi-Cloud Architecture -->
                <div x-show="activeTab === 'all' || activeTab === 'cloud'" 
                     x-transition:enter="transition ease-out duration-300"
                     x-transition:enter-start="opacity-0 scale-95"
                     x-transition:enter-end="opacity-100 scale-100"
                     class="glass-card glass-card-hover p-8 sm:p-10 rounded-3xl border border-slate-800 space-y-6 flex flex-col justify-between">
                    <div class="space-y-6">
                        <div class="flex items-center justify-between">
                            <span class="px-3.5 py-1 rounded-full bg-cyan-500/10 text-cyan-400 border border-cyan-500/30 text-xs font-mono">
                                Cloud Solutions
                            </span>
                            <span class="text-xs font-mono text-slate-400">99.999% SLA Uptime</span>
                        </div>
                        
                        <h3 class="text-2xl font-bold text-white">Multi-Cloud Architecture & Migration</h3>
                        <p class="text-sm text-slate-400 leading-relaxed">
                            End-to-end cloud strategy, cloud-native migration, containerization, and automated cost management across AWS, Azure, and Google Cloud Platform.
                        </p>

                        <div class="space-y-3 pt-2">
                            <div class="text-xs font-semibold uppercase tracking-wider text-slate-300">Key Capabilities:</div>
                            <ul class="space-y-2 text-sm text-slate-400">
                                <li class="flex items-center gap-2.5">
                                    <svg class="w-4 h-4 text-cyan-400 shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg>
                                    Seamless Zero-Downtime Database & App Migration
                                </li>
                                <li class="flex items-center gap-2.5">
                                    <svg class="w-4 h-4 text-cyan-400 shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg>
                                    Automated FinOps & Cloud Spending Optimization
                                </li>
                                <li class="flex items-center gap-2.5">
                                    <svg class="w-4 h-4 text-cyan-400 shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg>
                                    Kubernetes Cluster Orchestration & Serverless Architecture
                                </li>
                            </ul>
                        </div>
                    </div>

                    <div class="pt-6 border-t border-slate-800/80 flex items-center justify-between">
                        <div class="text-xs text-slate-500 font-mono">Tech Stack: AWS, Azure, GCP, K8s</div>
                        <a href="{{ route('contact') }}?service=cloud" class="px-5 py-2 rounded-xl bg-slate-900 border border-slate-700 hover:border-cyan-500 text-sm font-semibold text-white hover:text-cyan-400 transition-all">
                            Get Proposal &rarr;
                        </a>
                    </div>
                </div>

                <!-- Service 2: Zero-Trust Cyber Defense -->
                <div x-show="activeTab === 'all' || activeTab === 'security'" 
                     x-transition:enter="transition ease-out duration-300"
                     x-transition:enter-start="opacity-0 scale-95"
                     x-transition:enter-end="opacity-100 scale-100"
                     class="glass-card glass-card-hover p-8 sm:p-10 rounded-3xl border border-slate-800 space-y-6 flex flex-col justify-between">
                    <div class="space-y-6">
                        <div class="flex items-center justify-between">
                            <span class="px-3.5 py-1 rounded-full bg-indigo-500/10 text-indigo-400 border border-indigo-500/30 text-xs font-mono">
                                Cybersecurity
                            </span>
                            <span class="text-xs font-mono text-slate-400">&lt; 15-Min SOC Response</span>
                        </div>
                        
                        <h3 class="text-2xl font-bold text-white">Zero-Trust Cyber Defense & 24/7 SOC</h3>
                        <p class="text-sm text-slate-400 leading-relaxed">
                            Proactive threat hunting, continuous vulnerability management, EDR/XDR threat isolation, and 24/7 Security Operations Center monitoring.
                        </p>

                        <div class="space-y-3 pt-2">
                            <div class="text-xs font-semibold uppercase tracking-wider text-slate-300">Key Capabilities:</div>
                            <ul class="space-y-2 text-sm text-slate-400">
                                <li class="flex items-center gap-2.5">
                                    <svg class="w-4 h-4 text-indigo-400 shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg>
                                    Real-time SIEM Threat Correlation & Incident Response
                                </li>
                                <li class="flex items-center gap-2.5">
                                    <svg class="w-4 h-4 text-indigo-400 shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg>
                                    SOC2, HIPAA & ISO 27001 Regulatory Audits
                                </li>
                                <li class="flex items-center gap-2.5">
                                    <svg class="w-4 h-4 text-indigo-400 shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg>
                                    Penetration Testing & Ransomware Defense Mitigation
                                </li>
                            </ul>
                        </div>
                    </div>

                    <div class="pt-6 border-t border-slate-800/80 flex items-center justify-between">
                        <div class="text-xs text-slate-500 font-mono">Tech Stack: CrowdStrike, Sentinel, Splunk</div>
                        <a href="{{ route('contact') }}?service=security" class="px-5 py-2 rounded-xl bg-slate-900 border border-slate-700 hover:border-indigo-500 text-sm font-semibold text-white hover:text-indigo-400 transition-all">
                            Get Proposal &rarr;
                        </a>
                    </div>
                </div>

                <!-- Service 3: Managed IT Infrastructure -->
                <div x-show="activeTab === 'all' || activeTab === 'managed'" 
                     x-transition:enter="transition ease-out duration-300"
                     x-transition:enter-start="opacity-0 scale-95"
                     x-transition:enter-end="opacity-100 scale-100"
                     class="glass-card glass-card-hover p-8 sm:p-10 rounded-3xl border border-slate-800 space-y-6 flex flex-col justify-between">
                    <div class="space-y-6">
                        <div class="flex items-center justify-between">
                            <span class="px-3.5 py-1 rounded-full bg-purple-500/10 text-purple-400 border border-purple-500/30 text-xs font-mono">
                                Managed IT Operations
                            </span>
                            <span class="text-xs font-mono text-slate-400">24/7 Dedicated Support</span>
                        </div>
                        
                        <h3 class="text-2xl font-bold text-white">24/7 Managed IT Operations & Helpdesk</h3>
                        <p class="text-sm text-slate-400 leading-relaxed">
                            Complete IT department outsourcing, employee onboarding/offboarding, endpoint patch management, and enterprise network administration.
                        </p>

                        <div class="space-y-3 pt-2">
                            <div class="text-xs font-semibold uppercase tracking-wider text-slate-300">Key Capabilities:</div>
                            <ul class="space-y-2 text-sm text-slate-400">
                                <li class="flex items-center gap-2.5">
                                    <svg class="w-4 h-4 text-purple-400 shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg>
                                    Tier 1-3 Desktop & Server Remote Helpdesk
                                </li>
                                <li class="flex items-center gap-2.5">
                                    <svg class="w-4 h-4 text-purple-400 shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg>
                                    Active Directory & Identity Access Management (SSO)
                                </li>
                                <li class="flex items-center gap-2.5">
                                    <svg class="w-4 h-4 text-purple-400 shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg>
                                    Network Infrastructure & Firewall Management
                                </li>
                            </ul>
                        </div>
                    </div>

                    <div class="pt-6 border-t border-slate-800/80 flex items-center justify-between">
                        <div class="text-xs text-slate-500 font-mono">Tech Stack: Cisco, Meraki, Okta, Jamf</div>
                        <a href="{{ route('contact') }}?service=managed" class="px-5 py-2 rounded-xl bg-slate-900 border border-slate-700 hover:border-purple-500 text-sm font-semibold text-white hover:text-purple-400 transition-all">
                            Get Proposal &rarr;
                        </a>
                    </div>
                </div>

                <!-- Service 4: DevOps & AI Automation -->
                <div x-show="activeTab === 'all' || activeTab === 'devops'" 
                     x-transition:enter="transition ease-out duration-300"
                     x-transition:enter-start="opacity-0 scale-95"
                     x-transition:enter-end="opacity-100 scale-100"
                     class="glass-card glass-card-hover p-8 sm:p-10 rounded-3xl border border-slate-800 space-y-6 flex flex-col justify-between">
                    <div class="space-y-6">
                        <div class="flex items-center justify-between">
                            <span class="px-3.5 py-1 rounded-full bg-emerald-500/10 text-emerald-400 border border-emerald-500/30 text-xs font-mono">
                                DevOps & AI Integration
                            </span>
                            <span class="text-xs font-mono text-slate-400">Autonomous Pipelines</span>
                        </div>
                        
                        <h3 class="text-2xl font-bold text-white">DevOps Engineering & AI Automation</h3>
                        <p class="text-sm text-slate-400 leading-relaxed">
                            Infrastructure as Code (IaC), CI/CD deployment pipelines, automated disaster recovery, and custom AI agent workflow integration.
                        </p>

                        <div class="space-y-3 pt-2">
                            <div class="text-xs font-semibold uppercase tracking-wider text-slate-300">Key Capabilities:</div>
                            <ul class="space-y-2 text-sm text-slate-400">
                                <li class="flex items-center gap-2.5">
                                    <svg class="w-4 h-4 text-emerald-400 shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg>
                                    Terraform & Ansible Infrastructure Provisioning
                                </li>
                                <li class="flex items-center gap-2.5">
                                    <svg class="w-4 h-4 text-emerald-400 shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg>
                                    Automated GitHub Actions / GitLab CI Pipelines
                                </li>
                                <li class="flex items-center gap-2.5">
                                    <svg class="w-4 h-4 text-emerald-400 shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg>
                                    Generative AI API & Private LLM Integration
                                </li>
                            </ul>
                        </div>
                    </div>

                    <div class="pt-6 border-t border-slate-800/80 flex items-center justify-between">
                        <div class="text-xs text-slate-500 font-mono">Tech Stack: Terraform, Docker, Python, OpenAI</div>
                        <a href="{{ route('contact') }}?service=devops" class="px-5 py-2 rounded-xl bg-slate-900 border border-slate-700 hover:border-emerald-500 text-sm font-semibold text-white hover:text-emerald-400 transition-all">
                            Get Proposal &rarr;
                        </a>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- 4-STEP SERVICE DELIVERY WORKFLOW -->
    <section class="py-24 bg-slate-900/40 border-y border-slate-900">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center max-w-3xl mx-auto space-y-4 mb-16">
                <h2 class="text-xs font-mono uppercase tracking-widest text-indigo-400">Our Onboarding Process</h2>
                <h3 class="text-3xl sm:text-5xl font-bold text-white tracking-tight">Seamless 4-Step Engagement Model</h3>
            </div>

            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-8">
                
                <div class="glass-card p-8 rounded-3xl border border-slate-800 space-y-4 relative">
                    <div class="w-10 h-10 rounded-full bg-cyan-500/20 text-cyan-400 font-mono font-bold flex items-center justify-center">01</div>
                    <h4 class="text-lg font-bold text-white">Discovery Audit</h4>
                    <p class="text-xs text-slate-400 leading-relaxed">
                        Comprehensive architecture review, vulnerability scan, and infrastructure efficiency evaluation.
                    </p>
                </div>

                <div class="glass-card p-8 rounded-3xl border border-slate-800 space-y-4 relative">
                    <div class="w-10 h-10 rounded-full bg-indigo-500/20 text-indigo-400 font-mono font-bold flex items-center justify-center">02</div>
                    <h4 class="text-lg font-bold text-white">Blueprint Design</h4>
                    <p class="text-xs text-slate-400 leading-relaxed">
                        Custom multi-cloud strategy, zero-trust security mapping, and SLA agreement design.
                    </p>
                </div>

                <div class="glass-card p-8 rounded-3xl border border-slate-800 space-y-4 relative">
                    <div class="w-10 h-10 rounded-full bg-purple-500/20 text-purple-400 font-mono font-bold flex items-center justify-center">03</div>
                    <h4 class="text-lg font-bold text-white">Execution & Deploy</h4>
                    <p class="text-xs text-slate-400 leading-relaxed">
                        Automated zero-downtime migration, security agent installation, and staff onboarding.
                    </p>
                </div>

                <div class="glass-card p-8 rounded-3xl border border-slate-800 space-y-4 relative">
                    <div class="w-10 h-10 rounded-full bg-emerald-500/20 text-emerald-400 font-mono font-bold flex items-center justify-center">04</div>
                    <h4 class="text-lg font-bold text-white">24/7 Operations</h4>
                    <p class="text-xs text-slate-400 leading-relaxed">
                        Continuous SOC threat monitoring, performance telemetry, and quarterly strategic reviews.
                    </p>
                </div>

            </div>
        </div>
    </section>

    <!-- PRICING & SLA TIERS SECTION -->
    <section id="pricing" class="py-24">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center max-w-3xl mx-auto space-y-4 mb-16">
                <h2 class="text-xs font-mono uppercase tracking-widest text-cyan-400">Transparent Service Plans</h2>
                <h3 class="text-3xl sm:text-5xl font-bold text-white tracking-tight">Flexible Managed Infrastructure Plans</h3>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                
                <!-- Plan 1: Essential IT -->
                <div class="glass-card p-8 sm:p-10 rounded-3xl border border-slate-800 space-y-6 flex flex-col justify-between">
                    <div class="space-y-6">
                        <div class="space-y-2">
                            <h4 class="text-xl font-bold text-white">Essential Managed IT</h4>
                            <p class="text-xs text-slate-400">Ideal for growing teams (15-50 employees)</p>
                        </div>
                        <div class="text-3xl sm:text-4xl font-mono font-extrabold text-white">
                            $1,499 <span class="text-sm font-sans font-normal text-slate-400">/mo</span>
                        </div>
                        <ul class="space-y-3 text-xs sm:text-sm text-slate-300">
                            <li class="flex items-center gap-2.5">✓ 8am - 8pm Remote IT Helpdesk</li>
                            <li class="flex items-center gap-2.5">✓ Endpoint Patch Management</li>
                            <li class="flex items-center gap-2.5">✓ Cloud Backup & Recovery</li>
                            <li class="flex items-center gap-2.5">✓ 99.9% Uptime Guarantee SLA</li>
                        </ul>
                    </div>
                    <a href="{{ route('contact') }}?plan=essential" class="w-full py-3 rounded-xl bg-slate-900 border border-slate-700 hover:border-cyan-500 text-center font-semibold text-sm text-white transition-all">
                        Select Plan
                    </a>
                </div>

                <!-- Plan 2: Enterprise Pro (Featured) -->
                <div class="glass-card p-8 sm:p-10 rounded-3xl border-2 border-indigo-500 space-y-6 flex flex-col justify-between relative glow-indigo bg-indigo-950/20">
                    <div class="absolute -top-3.5 left-1/2 -translate-x-1/2 px-4 py-1 rounded-full bg-gradient-to-r from-cyan-500 to-indigo-600 text-white text-[11px] font-bold uppercase tracking-wider">
                        Most Popular Enterprise Choice
                    </div>
                    <div class="space-y-6">
                        <div class="space-y-2 pt-2">
                            <h4 class="text-xl font-bold text-white">Advanced Cloud & SOC</h4>
                            <p class="text-xs text-slate-300">For mid-market enterprises (50-250 employees)</p>
                        </div>
                        <div class="text-3xl sm:text-4xl font-mono font-extrabold text-cyan-400">
                            $3,999 <span class="text-sm font-sans font-normal text-slate-400">/mo</span>
                        </div>
                        <ul class="space-y-3 text-xs sm:text-sm text-slate-200">
                            <li class="flex items-center gap-2.5">✓ 24/7 Security Operations Center (SOC)</li>
                            <li class="flex items-center gap-2.5">✓ Multi-Cloud AWS/Azure Management</li>
                            <li class="flex items-center gap-2.5">✓ Active Ransomware & Threat Mitigation</li>
                            <li class="flex items-center gap-2.5">✓ 99.999% SLA Uptime Guarantee</li>
                            <li class="flex items-center gap-2.5">✓ SOC2 & HIPAA Audit Compliance</li>
                        </ul>
                    </div>
                    <a href="{{ route('contact') }}?plan=pro" class="w-full py-3.5 rounded-xl bg-gradient-to-r from-cyan-500 to-indigo-600 hover:opacity-95 text-center font-semibold text-sm text-white shadow-lg shadow-indigo-600/30 transition-all">
                        Get Enterprise Plan
                    </a>
                </div>

                <!-- Plan 3: Custom Dedicated -->
                <div class="glass-card p-8 sm:p-10 rounded-3xl border border-slate-800 space-y-6 flex flex-col justify-between">
                    <div class="space-y-6">
                        <div class="space-y-2">
                            <h4 class="text-xl font-bold text-white">Global Dedicated Infrastructure</h4>
                            <p class="text-xs text-slate-400">For large scale enterprises & high-compliance</p>
                        </div>
                        <div class="text-3xl sm:text-4xl font-mono font-extrabold text-white">
                            Custom
                        </div>
                        <ul class="space-y-3 text-xs sm:text-sm text-slate-300">
                            <li class="flex items-center gap-2.5">✓ Dedicated Solutions Architect</li>
                            <li class="flex items-center gap-2.5">✓ Custom On-Prem & Multi-Cloud Hybrid</li>
                            <li class="flex items-center gap-2.5">✓ Instant &lt; 5-Min SLA Escalation</li>
                            <li class="flex items-center gap-2.5">✓ Private Generative AI Infrastructure</li>
                        </ul>
                    </div>
                    <a href="{{ route('contact') }}?plan=custom" class="w-full py-3 rounded-xl bg-slate-900 border border-slate-700 hover:border-purple-500 text-center font-semibold text-sm text-white transition-all">
                        Contact Enterprise Team
                    </a>
                </div>

            </div>
        </div>
    </section>

    <!-- FAQ ACCORDION SECTION (ALPINE.JS) -->
    <section id="faq" class="py-24 bg-slate-900/40 border-t border-slate-900" x-data="{ openFaq: null }">
        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center space-y-4 mb-16">
                <h2 class="text-xs font-mono uppercase tracking-widest text-indigo-400">Frequently Asked Questions</h2>
                <h3 class="text-3xl sm:text-4xl font-bold text-white tracking-tight">Got Questions? We Have Answers.</h3>
            </div>

            <div class="space-y-4">
                
                <!-- FAQ 1 -->
                <div class="glass-card rounded-2xl border border-slate-800 overflow-hidden">
                    <button @click="openFaq = openFaq === 1 ? null : 1" class="w-full p-6 text-left font-semibold text-white flex items-center justify-between gap-4 focus:outline-none">
                        <span>How fast can TechCare Solutions onboard our company?</span>
                        <svg class="w-5 h-5 text-cyan-400 transition-transform duration-200" :class="openFaq === 1 ? 'rotate-180' : ''" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/></svg>
                    </button>
                    <div x-show="openFaq === 1" x-collapse class="px-6 pb-6 text-sm text-slate-400 leading-relaxed">
                        Standard enterprise onboarding takes between 3 to 10 business days depending on network complexity. Emergency security response or cloud disaster recovery support can be deployed within hours.
                    </div>
                </div>

                <!-- FAQ 2 -->
                <div class="glass-card rounded-2xl border border-slate-800 overflow-hidden">
                    <button @click="openFaq = openFaq === 2 ? null : 2" class="w-full p-6 text-left font-semibold text-white flex items-center justify-between gap-4 focus:outline-none">
                        <span>What is your guaranteed response time for critical security alerts?</span>
                        <svg class="w-5 h-5 text-cyan-400 transition-transform duration-200" :class="openFaq === 2 ? 'rotate-180' : ''" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/></svg>
                    </button>
                    <div x-show="openFaq === 2" x-collapse class="px-6 pb-6 text-sm text-slate-400 leading-relaxed">
                        Our Tier 1 critical security alerts carry a strict SLA response window of under 15 minutes, 24 hours a day, 365 days a year, monitored by our global Security Operations Centers.
                    </div>
                </div>

                <!-- FAQ 3 -->
                <div class="glass-card rounded-2xl border border-slate-800 overflow-hidden">
                    <button @click="openFaq = openFaq === 3 ? null : 3" class="w-full p-6 text-left font-semibold text-white flex items-center justify-between gap-4 focus:outline-none">
                        <span>Can you assist with compliance audits like SOC2, HIPAA, and ISO 27001?</span>
                        <svg class="w-5 h-5 text-cyan-400 transition-transform duration-200" :class="openFaq === 3 ? 'rotate-180' : ''" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/></svg>
                    </button>
                    <div x-show="openFaq === 3" x-collapse class="px-6 pb-6 text-sm text-slate-400 leading-relaxed">
                        Yes! We provide complete compliance auditing readiness, automated evidence collection, policy documentation, and continuous monitoring to guarantee seamless SOC2 Type II, HIPAA, and ISO certifications.
                    </div>
                </div>

            </div>
        </div>
    </section>

</x-layouts.site>
