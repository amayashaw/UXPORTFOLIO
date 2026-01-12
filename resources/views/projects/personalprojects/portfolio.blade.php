@extends('layouts.app')

@section('title', 'Project: Portfolio Build | Amaya Shaw')

@section('content')
<main class="bg-white min-h-screen">
    {{-- 1. REFINED EDITORIAL HERO (MUTED COLORS) --}}
    <section class="relative pt-44 pb-20 overflow-hidden">
        {{-- Muted Mesh Gradient - Lower opacity for a more "expensive" feel --}}
        <div class="absolute inset-0 -z-10 bg-white">
            <div class="absolute top-0 right-0 w-[800px] h-[800px] bg-pink-50/40 rounded-full blur-[120px] -translate-y-1/2 translate-x-1/4"></div>
            <div class="absolute bottom-0 left-0 w-[800px] h-[800px] bg-blue-50/30 rounded-full blur-[120px] translate-y-1/2 -translate-x-1/4"></div>
        </div>

        <div class="container mx-auto px-6">
            <div class="reveal">
                {{-- Back Link --}}
                <nav class="mb-16">
                    <a href="{{ route('personal-projects') }}" class="group inline-flex items-center text-[10px] font-bold uppercase tracking-[0.5em] text-gray-400 hover:text-indigo-600 transition">
                        <span class="mr-2 transform group-hover:-translate-x-2 transition-transform">←</span> Back to Projects
                    </a>
                </nav>

                {{-- The Header Grid --}}
                <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 lg:gap-16 items-start">
                    {{-- Left Side: Massive Muted Title --}}
                    <div class="lg:col-span-9">
                        <span class="text-[10px] font-bold uppercase tracking-[0.5em] text-gray-400 mb-4 block">Meta Case Study — 2024</span>
                        {{-- Changed from vibrant gradient to solid deep gray-900 to match "AMAYA" on home page --}}
                        <h1 class="text-6xl md:text-8xl lg:text-[10rem] font-black tracking-tighter uppercase leading-[0.8] text-gray-900">
                            The <br> 
                            <span class="text-gray-900/90">Portfolio</span>
                        </h1>
                    </div>

                    {{-- Right Side: Description --}}
                    <div class="lg:col-span-3 lg:pt-24">
                        <div class="border-l-2 border-gray-100 pl-6">
                            <p class="text-gray-500 text-lg md:text-xl font-light leading-snug italic">
                                Developing a custom digital showcase to master <span class="font-bold text-gray-900">Laravel</span> and <span class="font-bold text-indigo-600/80">AI-prompting</span> workflows.
                            </p>
                        </div>
                    </div>
                </div>

                {{-- Project Stat Bar (Muted colors) --}}
                <div class="mt-24 pt-10 border-t border-gray-100 grid grid-cols-2 lg:grid-cols-4 gap-12">
                    <div>
                        <h4 class="text-[10px] font-bold uppercase tracking-widest text-gray-300 mb-3">Role</h4>
                        <p class="text-xs md:text-sm font-bold text-gray-700 uppercase tracking-tight">Lead Developer & Designer</p>
                    </div>
                    <div>
                        <h4 class="text-[10px] font-bold uppercase tracking-widest text-gray-300 mb-3">Stack</h4>
                        <p class="text-xs md:text-sm font-bold text-gray-700 uppercase tracking-tight">Laravel / Tailwind / Vite</p>
                    </div>
                    <div>
                        <h4 class="text-[10px] font-bold uppercase tracking-widest text-gray-300 mb-3">Duration</h4>
                        <p class="text-xs md:text-sm font-bold text-gray-700 uppercase tracking-tight">6 Weeks (Continuous)</p>
                    </div>
                    <div>
                        <h4 class="text-[10px] font-bold uppercase tracking-widest text-gray-300 mb-3">Status</h4>
                        {{-- Subtle Indigo instead of bright blue --}}
                        <p class="text-xs md:text-sm font-bold text-indigo-400 uppercase tracking-[0.2em]">Active Development</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- 2. THE MISSION (High Contrast, Low Color) --}}
    <section class="py-32 bg-white reveal">
        <div class="container mx-auto px-6">
            <div class="max-w-4xl">
                <h2 class="text-[10px] font-bold uppercase tracking-[0.5em] text-gray-400 mb-8">The Mission</h2>
                <h3 class="text-4xl md:text-6xl font-black uppercase tracking-tighter mb-10 leading-[0.9] text-gray-900">
                    Moving Beyond <br> Template-Based Web.
                </h3>
                <p class="text-xl md:text-2xl text-gray-500 leading-relaxed font-light">
                    As I transition into more technical roles, I wanted to move beyond template-based portfolio builders. This project was a commitment to learning the <span class="font-bold text-gray-900">Laravel framework</span> and <span class="font-bold text-gray-900">Tailwind CSS</span>.
                </p>
            </div>
        </div>
    </section>

    {{-- 3. THE "VIBE" QUOTE (Dark Minimalist) --}}
    <section class="py-32 bg-gray-900 text-white reveal">
        <div class="container mx-auto px-6 text-center">
            <blockquote class="text-3xl md:text-6xl font-bold italic leading-tight tracking-tighter max-w-5xl mx-auto">
                “The best way to understand the web is to build for it—one line of code and <span class="text-indigo-300">one prompt</span> at a time.”
            </blockquote>
        </div>
    </section>

    {{-- 4. SECTION 01: AI PARTNERSHIP --}}
    <section class="py-32 bg-white reveal">
        <div class="container mx-auto px-6">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-20 items-center">
                <div>
                    <div class="flex items-center gap-6 mb-10">
                        <span class="text-gray-900 font-black text-5xl">01</span>
                        <h3 class="text-3xl font-black uppercase tracking-tighter text-gray-900">AI as a Thought Partner</h3>
                    </div>
                    <div class="space-y-8 text-xl text-gray-500 font-light leading-relaxed">
                        <p>
                            A major component of this build was practicing <span class="font-bold text-gray-900">AI Prompt Engineering</span>. Using Gemini as a pair-programmer, I navigated complex technical hurdles.
                        </p>
                    </div>
                </div>

                <div class="bg-gray-50 rounded-[40px] p-10 md:p-16 border border-gray-100 shadow-sm">
                    <h4 class="text-[10px] font-bold uppercase tracking-[0.4em] mb-10 text-gray-400">Technical Toolkit</h4>
                    <ul class="space-y-6">
                        @foreach(['Modular Blade Components', 'Vite Asset Pipelines', 'PostCSS Configuration', 'Utility-First Architecture'] as $skill)
                        <li class="flex items-center text-gray-700 font-bold text-lg uppercase tracking-tight">
                            <span class="w-2 h-2 bg-indigo-400 rounded-full mr-4"></span>
                            {{ $skill }}
                        </li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </section>

    {{-- 5. FINAL SYNTHESIS --}}
    <section class="py-40 border-t border-gray-100 text-center reveal">
        <div class="container mx-auto px-6 max-w-3xl">
            <span class="text-[10px] font-bold uppercase tracking-[0.5em] text-gray-400 mb-8 block">Project Status</span>
            <h2 class="text-4xl md:text-6xl font-black uppercase tracking-tighter text-gray-900 mb-10 leading-none">
                A synthesis of design <br> & development.
            </h2>
            <p class="text-gray-400 italic text-lg leading-relaxed">
                This project is currently still under construction as I refine the mobile experience and add more interactive case studies.
            </p>
        </div>
    </section>
</main>
@endsection