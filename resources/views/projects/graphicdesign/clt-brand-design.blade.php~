@extends('layouts.app')

@section('title', 'Project: Cured Leaves Tea | Amaya Shaw')

@section('content')
<style>
    /* 1. NAVBAR FIX */
    nav a, .nav-item { white-space: nowrap !important; }

    /* 2. YOUR SCROLL ANIMATIONS */
    @keyframes fadeInUp {
        from { opacity: 0; transform: translateY(50px); }
        to { opacity: 1; transform: translateY(0); }
    }
    .scroll-spawn {
        opacity: 0;
        animation: fadeInUp 0.8s ease-out forwards;
        animation-timeline: view();
        animation-range: entry 5% cover 25%;
    }

    /* 3. SAGE BRAND COLORS (Kept for the content blocks) */
    .border-sage { border: 4px solid #556b55 !important; }
    .text-sage-dark { color: #556b55; }
</style>

<main class="bg-white min-h-screen">
    {{-- 1. HERO SECTION (Matched to BSU/Indigo Layout) --}}
    <section class="relative pt-44 pb-20 overflow-hidden">
        <div class="absolute inset-0 -z-10 bg-white">
            {{-- Keeping the Indigo/Blue accents as requested --}}
            <div class="absolute top-0 right-0 w-[800px] h-[800px] bg-indigo-50/30 rounded-full blur-[120px] -translate-y-1/2 translate-x-1/4"></div>
            <div class="absolute bottom-0 left-0 w-[800px] h-[800px] bg-blue-50/20 rounded-full blur-[120px] translate-y-1/2 -translate-x-1/4"></div>
        </div>

        <div class="container mx-auto px-6">
            <nav class="mb-16">
                <a href="{{ route('graphic-design') }}" class="group inline-flex items-center text-[10px] font-bold uppercase tracking-[0.5em] text-gray-400 hover:text-indigo-600 transition">
                    <span class="mr-2 transform group-hover:-translate-x-2 transition-transform">←</span> Back to Gallery
                </a>
            </nav>

            <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 lg:gap-16 items-start">
                <div class="lg:col-span-9">
                    <span class="text-[10px] font-bold uppercase tracking-[0.5em] text-gray-400 mb-4 block">Visual Storytelling — 2024</span>
                    <h1 class="text-6xl md:text-8xl lg:text-[10rem] font-black tracking-tighter uppercase leading-[0.8] text-gray-900">
                        Cured <br> 
                        <span class="text-gray-900/90">Leaves Tea.</span>
                    </h1>
                </div>

                <div class="lg:col-span-3 lg:pt-24">
                    <div class="border-l-2 border-gray-100 pl-6">
                        <p class="text-gray-500 text-lg md:text-xl font-light leading-snug italic">
                            A comprehensive look at the visual identity developed for CLT, focusing on cohesive digital storytelling.
                        </p>
                    </div>
                </div>
            </div>

            {{-- STAT BAR: Matched to BSU Layout --}}
            <div class="mt-24 pt-10 border-t border-gray-100 grid grid-cols-2 lg:grid-cols-4 gap-12">
                <div>
                    <h4 class="text-[10px] font-bold uppercase tracking-widest text-gray-300 mb-3">Role</h4>
                    <p class="text-xs md:text-sm font-bold text-gray-700 uppercase tracking-tight">Content Lead</p>
                </div>
                <div>
                    <h4 class="text-[10px] font-bold uppercase tracking-widest text-gray-300 mb-3">Focus</h4>
                    <p class="text-xs md:text-sm font-bold text-gray-700 uppercase tracking-tight">Digital Strategy</p>
                </div>
                <div>
                    <h4 class="text-[10px] font-bold uppercase tracking-widest text-gray-300 mb-3">Vibe</h4>
                    <p class="text-xs md:text-sm font-bold text-gray-700 uppercase tracking-tight">Organic & Bold</p>
                </div>
                <div>
                    <h4 class="text-[10px] font-bold uppercase tracking-widest text-gray-300 mb-3">Platform</h4>
                    <p class="text-xs md:text-sm font-bold text-gray-700 uppercase tracking-tight">Instagram / TikTok</p>
                </div>
            </div>
        </div>
    </section>

    {{-- CONTENT WRAPPER --}}
    <div class="max-w-6xl mx-auto px-6">
        
        {{-- 2. SQUARE POST GRID --}}
        <div class="grid grid-cols-1 md:grid-cols-2 gap-16 mb-40">
            @for ($i = 1; $i <= 6; $i++)
                <div class="scroll-spawn">
                    <div class="bg-white rounded-[40px] shadow-xl overflow-hidden border border-gray-100 transition-transform duration-500 hover:scale-[1.02]">
                        <img src="{{ asset('photos/clt/clt1/' . $i . '.jpg') }}" 
                             class="w-full aspect-square object-cover" alt="CLT Square {{ $i }}">
                    </div>
                </div>
            @endfor
        </div>

        {{-- 3. QUOTE BOX (Using your sage border logic) --}}
        <section class="scroll-spawn border-sage bg-white py-24 my-40 rounded-[60px]">
            <div class="text-center px-6">
                <h2 class="text-3xl md:text-5xl font-extrabold text-sage-dark leading-tight uppercase tracking-tighter max-w-4xl mx-auto">
                    "I intentionally create based on the unique ideals and visual heartbeat of every brand."
                </h2>
            </div>
        </section>

        {{-- 4. PORTRAIT ASSETS & VIDEOS (The Story Grid) --}}
        <div class="grid grid-cols-1 md:grid-cols-2 gap-16 pb-40">
            
            {{-- Row 1 --}}
            <div class="scroll-spawn">
                <div class="bg-white rounded-[40px] shadow-xl overflow-hidden border border-gray-100">
                    <img src="{{ asset('photos/clt/clt2/1.jpg') }}" class="w-full aspect-[9/16] object-cover">
                </div>
            </div>
            <div class="scroll-spawn">
                <div class="bg-black rounded-[40px] shadow-2xl overflow-hidden aspect-[9/16]">
                    <video class="w-full h-full object-cover" autoplay loop muted playsinline>
                        <source src="{{ asset('videos/clt/1.mp4') }}" type="video/mp4">
                    </video>
                </div>
            </div>

            {{-- Row 2 --}}
            <div class="scroll-spawn">
                <div class="bg-white rounded-[40px] shadow-xl overflow-hidden border border-gray-100">
                    <img src="{{ asset('photos/clt/clt2/2.jpg') }}" class="w-full aspect-[9/16] object-cover">
                </div>
            </div>
            <div class="scroll-spawn">
                <div class="bg-white rounded-[40px] shadow-xl overflow-hidden border border-gray-100">
                    <img src="{{ asset('photos/clt/clt2/3.jpg') }}" class="w-full aspect-[9/16] object-cover">
                </div>
            </div>

            {{-- Row 3 --}}
            <div class="scroll-spawn">
                <div class="bg-black rounded-[40px] shadow-2xl overflow-hidden aspect-[9/16]">
                    <video class="w-full h-full object-cover" autoplay loop muted playsinline>
                        <source src="{{ asset('videos/clt/2.mp4') }}" type="video/mp4">
                    </video>
                </div>
            </div>
            <div class="scroll-spawn">
                <div class="bg-white rounded-[40px] shadow-xl overflow-hidden border border-gray-100">
                    <img src="{{ asset('photos/clt/clt2/4.jpg') }}" class="w-full aspect-[9/16] object-cover">
                </div>
            </div>

        </div>
    </div>
</main>
@endsection