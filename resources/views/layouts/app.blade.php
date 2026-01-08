<!DOCTYPE html>
<html lang="en" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Amaya Shaw | Portfolio')</title>
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

    <nav class="fixed top-6 left-1/2 -translate-x-1/2 z-[100] w-[90%] max-w-4xl">
        <div class="glass rounded-full px-8 py-4 flex items-center justify-between shadow-2xl shadow-black/5 border border-white/20 backdrop-blur-xl bg-white/70">
            <a href="/" class="hover indigo-800 text-xl font-black tracking-tighter uppercase italic">AS</a>
            
            <div class="hidden md:flex items-center gap-8 text-[10px] font-bold uppercase tracking-[0.2em]">
                <a href="/" class="hover:opacity-50 transition">Home</a>
                <a href="{{ route('webpage-redesign') }}" class="hover:opacity-50 transition">Web Design</a>
                <a href="{{ route('personal-projects') }}" class="hover:opacity-50 transition">Projects</a>    
                <a href="/case-studies" class="hover:opacity-50 transition">UX Research</a>
                <a href="/graphic-design" class="hover:opacity-50 transition">Graphic Design</a>
                <a href="{{ route('contact') }}" class="bg-black text-white px-5 py-2 rounded-full hover:bg-indigo-800 transition">Contact</a>
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