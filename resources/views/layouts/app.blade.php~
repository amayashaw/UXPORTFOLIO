<!DOCTYPE html>
<html lang="en" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Amaya Shaw | Portfolio')</title>
    <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link href="https://fonts.googleapis.com/css2?family=Instrument+Sans:ital,wght@0,400..700;1,400..700&display=swap" rel="stylesheet">
    <style>
        body { font-family: 'Instrument Sans', sans-serif; }
        /* Add a subtle grain texture to the background */
        .grainy-bg::before {
            content: "";
            position: fixed;
            top: 0; left: 0; width: 100%; height: 100%;
            opacity: 0.03;
            pointer-events: none;
            background-image: url("https://grainy-gradients.vercel.app/noise.svg");
            z-index: 50;
        }
    </style>
</head>
<body class="bg-[#fafafa] text-gray-900 selection:bg-black selection:text-white grainy-bg antialiased">

  <nav x-data="{ open: false }" class="fixed top-6 left-1/2 -translate-x-1/2 z-[100] w-[90%] max-w-4xl">
    {{-- Main Navbar Pill --}}
    <div class="glass rounded-full px-8 py-4 flex items-center justify-between shadow-2xl shadow-black/5 border border-white/20 backdrop-blur-xl bg-white/70">
        
        <a href="/" class="hover indigo-800 text-xl font-black tracking-tighter uppercase italic">AS</a>
        
        {{-- Desktop Navigation (Remains exactly as you had it) --}}
        <div class="hidden md:flex items-center gap-8 text-[10px] font-bold uppercase tracking-[0.2em]">
            <a href="/" class="hover:opacity-50 transition">Home</a>
            <a href="{{ route('webpage-redesign') }}" class="hover:opacity-50 transition">Web Design</a>
            <a href="{{ route('personal-projects') }}" class="hover:opacity-50 transition">Projects</a>    
            <a href="/case-studies" class="hover:opacity-50 transition">UX Research</a>
            <a href="/graphic-design" class="hover:opacity-50 transition">Graphic Design</a>
            <a href="{{ route('contact') }}" class="bg-black text-white px-5 py-2 rounded-full hover:bg-indigo-800 transition">Contact</a>
        </div>

        {{-- Mobile Menu Button (Only shows on mobile) --}}
        <button @click="open = !open" class="md:hidden flex flex-col gap-1.5 p-2 focus:outline-none z-[110]">
            <span class="w-6 h-0.5 bg-black transition-all duration-300" :class="open ? 'rotate-45 translate-y-2' : ''"></span>
            <span class="w-6 h-0.5 bg-black transition-all duration-300" :class="open ? 'opacity-0' : ''"></span>
            <span class="w-6 h-0.5 bg-black transition-all duration-300" :class="open ? '-rotate-45 -translate-y-2' : ''"></span>
        </button>
    </div>

    {{-- Mobile Dropdown Menu --}}
    <div x-show="open" 
         x-transition:enter="transition ease-out duration-200"
         x-transition:enter-start="opacity-0 scale-95"
         x-transition:enter-end="opacity-100 scale-100"
         @click.away="open = false"
         class="absolute top-20 left-0 w-full bg-white/95 backdrop-blur-2xl rounded-3xl p-8 shadow-2xl md:hidden border border-white/20">
        <div class="flex flex-col gap-6 text-center text-[12px] font-bold uppercase tracking-[0.3em]">
            <a href="/" class="hover:text-indigo-600 transition">Home</a>
            <a href="{{ route('webpage-redesign') }}" class="hover:text-indigo-600 transition">Web Design</a>
            <a href="{{ route('personal-projects') }}" class="hover:text-indigo-600 transition">Projects</a>
            <a href="/case-studies" class="hover:text-indigo-600 transition">UX Research</a>
            <a href="/graphic-design" class="hover:text-indigo-600 transition">Graphic Design</a>
            <a href="{{ route('contact') }}" class="bg-black text-white py-4 rounded-full transition">Contact Me</a>
        </div>
    </div>
</nav>

    {{-- Added pt-28 to push content below the navbar!! --}}
    <main class="pt-28">
        @yield('content')
    </main>

    <footer class="py-20 text-center border-t border-gray-100 bg-[#f5f5f7]">
        <p class="text-[10px] font-bold uppercase tracking-[0.4em] text-gray-400">© 2026 Amaya Shaw — Visual Storyteller</p>
    </footer>

    <script>
        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) entry.target.classList.add('active');
            });
        }, { threshold: 0.1 });
        document.querySelectorAll('.reveal').forEach(el => observer.observe(el));
    </script>
</body>
</html>