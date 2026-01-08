@extends('layouts.app')

@section('content')
<main>
    {{-- 1. THE HERO: Bold & Dynamic with Background Image --}}
    <section class="relative min-h-[90vh] flex items-center justify-center px-6 overflow-hidden">
        {{-- Background Image & Overlay --}}
        <div class="absolute inset-0 z-0">
            <img src="{{ asset('photos/home.jpg') }}" alt="Background" class="w-full h-full object-cover">
            <div class="absolute inset-0 bg-gradient-to-b from-[#fafafa] via-transparent to-[#fafafa]"></div>
        </div>

        <div class="max-w-6xl w-full relative z-10 pt-20">
            
            <h1 class="text-7xl md:text-[120px] font-black tracking-tighter leading-[0.85] mb-12 reveal">
                AMAYA <br> <span class="text-gray-300 italic">SHAW.</span>
            </h1>
  <span class="text-gray-500 font-bold uppercase tracking-[0.4em] mb-6 block reveal text-xs">Senior Info Systems Major & UX & HCC Minor</span>
  	<br/>
            <div class="flex flex-col md:flex-row justify-between items-end gap-12 reveal">
                <p class="text-xl md:text-2xl text-gray-500 max-w-xl leading-relaxed">
                    Designing intentionally for <span class="text-gray-900 font-medium underline decoration-gray-300 underline-offset-8">intuitive flow and structural impact.</span> I build beautiful digital experiences that are rooted in evidence, elevated by narrative, and <span class="text-gray-900 font-medium underline decoration-gray-300 underline-offset-8">designed for the people who use them.</span> 
                </p>
                <div class="flex gap-4">
                   <div class="w-12 h-12 rounded-full border border-gray-200 flex items-center justify-center animate-bounce text-gray-400">
                       ↓
                   </div>
                </div>
            </div>
        </div>
    </section>
    
    {{-- 2. GRID TITLE !!--}}
<section class="w-full py-32 bg-gradient-to-b from-transparent to-white">
    
    <div class="max-w-3xl mx-auto px-8 md:px-0">
        
        <h2 class="text-4xl md:text-5xl font-black tracking-tight text-gray-900 leading-[1.2]">
            Check out my work—<br class="hidden md:block"> 
            where <span class="italic font-serif text-gray-800">intentionality.</span> meets
            <span class="italic font-serif text-gray-800"> aesthetic.</span>
        </h2>

    </div>
</section>

    {{-- 3. THE COMPACT ICON GRID --}}
<section class="py-24 px-6 relative">
    <div class="max-w-5xl mx-auto">
        <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
            
            {{-- PROJECT 1: CASE STUDIES --}}
            <div class="reveal">
                <a href="/case-studies" class="group block p-10 rounded-[2rem] glass border border-white/40 hover:border-indigo-300 transition-all duration-700">
                    <div class="w-16 h-16 mb-8 rounded-2xl bg-indigo-50 flex items-center justify-center text-indigo-800 group-hover:scale-110 transition-transform duration-500">
                        <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path></svg>
                    </div>
                    <div class="flex justify-between items-end">
                        <div>
                            <h3 class="text-2xl font-bold tracking-tighter uppercase">Case Studies</h3>
                            <p class="text-gray-500 uppercase text-[10px] tracking-widest font-bold mt-2">UX Research & Strategy</p>
                        </div>
                        <span class="w-10 h-10 rounded-full border border-black flex items-center justify-center group-hover:bg-[#3730a3] group-hover:border-[#3730a3] group-hover:text-white transition-all duration-500">→</span>
                    </div>
                </a>
            </div>

            {{-- PROJECT 2: GRAPHIC DESIGN --}}
            <div class="reveal">
                <a href="/graphic-design" class="group block p-10 rounded-[2rem] glass border border-white/40 hover:border-indigo-300 transition-all duration-700">
                    <div class="w-16 h-16 mb-8 rounded-2xl bg-indigo-50 flex items-center justify-center text-indigo-800 group-hover:scale-110 transition-transform duration-500">
                        <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" 
          d="M6.13 1L6 16a2 2 0 002 2h15M1 6.13L16 6a2 2 0 012 2v15" />
</svg>
                    </div>
                    <div class="flex justify-between items-end">
                        <div>
                            <h3 class="text-2xl font-bold tracking-tighter uppercase">Graphic Design</h3>
                            <p class="text-gray-500 uppercase text-[10px] tracking-widest font-bold mt-2">Visual Brand Identity</p>
                        </div>
                        <span class="w-10 h-10 rounded-full border border-black flex items-center justify-center group-hover:bg-[#3730a3] group-hover:border-[#3730a3] group-hover:text-white transition-all duration-500">→</span>
                    </div>
                </a>
            </div>

            {{-- PROJECT 3: WEB DESIGN --}}
            <div class="reveal">
                <a href="/webpage-redesign" class="group block p-10 rounded-[2rem] glass border border-white/40 hover:border-indigo-300 transition-all duration-700">
                    <div class="w-16 h-16 mb-8 rounded-2xl bg-indigo-50 flex items-center justify-center text-indigo-800 group-hover:scale-110 transition-transform duration-500">
                        <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4"></path></svg>
                    </div>
                    <div class="flex justify-between items-end">
                        <div>
                            <h3 class="text-2xl font-bold tracking-tighter uppercase">Web Design</h3>
                            <p class="text-gray-500 uppercase text-[10px] tracking-widest font-bold mt-2">Systems & Redesign</p>
                        </div>
                        <span class="w-10 h-10 rounded-full border border-black flex items-center justify-center group-hover:bg-[#3730a3] group-hover:border-[#3730a3] group-hover:text-white transition-all duration-500">→</span>
                    </div>
                </a>
            </div>

            {{-- PROJECT 4: PROJECTS --}}
            <div class="reveal">
                <a href="/personal-projects" class="group block p-10 rounded-[2rem] glass border border-white/40 hover:border-indigo-300 transition-all duration-700">
                    <div class="w-16 h-16 mb-8 rounded-2xl bg-indigo-50 flex items-center justify-center text-indigo-800 group-hover:scale-110 transition-transform duration-500">
                        <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" 
          d="M20 16V4a2 2 0 00-2-2H6a2 2 0 00-2 2v12m-2 0h20M3 20h18" />
</svg>
                    </div>
                    <div class="flex justify-between items-end">
                        <div>
                            <h3 class="text-2xl font-bold tracking-tighter uppercase">Projects</h3>
                            <p class="text-gray-500 uppercase text-[10px] tracking-widest font-bold mt-2">Creative Experiments</p>
                        </div>
                        <span class="w-10 h-10 rounded-full border border-black flex items-center justify-center group-hover:bg-[#3730a3] group-hover:border-[#3730a3] group-hover:text-white transition-all duration-500">→</span>
                    </div>
                </a>
            </div>

        </div>
    </div>
</section>

    {{-- 3. CALL TO ACTION --}}
    <section class="py-40 bg-[#120d1d] text-white px-6 overflow-hidden relative"> {{-- Deep Midnight Orchid --}}
    
    {{-- Subtle 'Whimsy' Glow --}}
    <div class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 w-[600px] h-[600px] bg-indigo-500/10 rounded-full blur-[120px] pointer-events-none"></div>

    <div class="max-w-4xl mx-auto text-center reveal relative z-10">
        
        {{-- Creative Header --}}
        <h2 class="text-6xl md:text-8xl font-black tracking-tighter uppercase mb-8 leading-[0.85]">
            Let's Create <br> 
            <span class="text-transparent bg-clip-text bg-gradient-to-r from-indigo-300 via-pink-300 to-purple-300 italic font-light">something new.</span>
        </h2>
        
        {{-- Whimsical Subtext --}}
        <p class="text-indigo-100/60 text-lg md:text-xl mb-12 max-w-xl mx-auto font-light tracking-wide">
            Blending intentional design with a dash of creative curiosity.<br class="hidden md:block"> 
             Currently seeking new spaces to build, design, and explore.
        </p>

        {{-- The Button (Indigo 800 Hover) --}}
        <a href="{{ route('contact') }}" 
           class="inline-flex items-center gap-6 px-12 py-5 bg-white text-[#120d1d] font-bold uppercase tracking-[0.3em] text-[10px] rounded-full 
                  hover:bg-indigo-50 hover:scale-105 transition-all duration-500 shadow-2xl shadow-indigo-500/20">
            Contact Me <span>→</span>
        </a>
        
    </div>
</section>
</main>
@endsection