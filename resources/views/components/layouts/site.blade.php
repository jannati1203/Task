<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="dark bg-slate-950 text-slate-100 antialiased selection:bg-cyan-500 selection:text-white">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="description" content="{{ $metaDescription ?? 'TechCare Solutions - Premier Managed IT Services, Cloud Architecture, Zero-Trust Cybersecurity & AI Solutions.' }}" />
    
    <title>{{ isset($title) ? $title . ' | TechCare Solutions' : 'TechCare Solutions - Enterprise Technology & Cloud Services' }}</title>

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@300;400;500;600;700;800&family=JetBrains+Mono:wght@400;500;600&display=swap" rel="stylesheet">

    <!-- Alpine.js for interactive UI components -->
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>

    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <style>
        body {
            font-family: 'Plus Jakarta Sans', sans-serif;
        }
        code, kbd, samp, pre {
            font-family: 'JetBrains Mono', monospace;
        }
    </style>
</head>
<body class="min-h-screen flex flex-col bg-slate-950 text-slate-100 relative overflow-x-hidden">

    <!-- Ambient Grid & Gradient Backgrounds -->
    <div class="fixed inset-0 bg-tech-grid opacity-30 pointer-events-none z-0"></div>
    <div class="fixed top-0 left-1/4 w-[600px] h-[600px] bg-cyan-600/10 rounded-full blur-[140px] pointer-events-none z-0"></div>
    <div class="fixed bottom-0 right-1/4 w-[600px] h-[600px] bg-indigo-600/10 rounded-full blur-[140px] pointer-events-none z-0"></div>

    <!-- Navigation Bar -->
    @include('partials.site-navbar')

    <!-- Main Content Area -->
    <main class="flex-grow relative z-10">
        {{ $slot }}
    </main>

    <!-- Footer -->
    @include('partials.site-footer')

</body>
</html>
