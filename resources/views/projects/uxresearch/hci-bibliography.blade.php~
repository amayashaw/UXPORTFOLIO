@extends('layouts.app')

@section('title', 'Project: HCI Safety Redesign | Amaya Shaw')

@section('content')
<main class="bg-white min-h-screen">
    {{-- 1. EDITORIAL HERO SECTION (Unchanged) --}}
    <section class="relative pt-44 pb-20 overflow-hidden">
        <div class="absolute inset-0 -z-10 bg-white">
            <div class="absolute top-0 right-0 w-[800px] h-[800px] bg-indigo-50/30 rounded-full blur-[120px] -translate-y-1/2 translate-x-1/4"></div>
            <div class="absolute bottom-0 left-0 w-[800px] h-[800px] bg-blue-50/20 rounded-full blur-[120px] translate-y-1/2 -translate-x-1/4"></div>
        </div>

        <div class="container mx-auto px-6">
            <div class="reveal">
                <nav class="mb-16">
                    <a href="{{ route('ux-research') }}" class="group inline-flex items-center text-[10px] font-bold uppercase tracking-[0.5em] text-gray-400 hover:text-indigo-600 transition">
                        <span class="mr-2 transform group-hover:-translate-x-2 transition-transform">←</span> Back to UX Research
                    </a>
                </nav>

                <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 lg:gap-16 items-start">
                    <div class="lg:col-span-9">
                        <span class="text-[10px] font-bold uppercase tracking-[0.5em] text-gray-400 mb-4 block">Human-Computer Interaction — 2025</span>
                        <h1 class="text-6xl md:text-8xl lg:text-[10rem] font-black tracking-tighter uppercase leading-[0.8] text-gray-900">
                            Safety <br> 
                            <span class="text-gray-900/90">Redesign</span>
                        </h1>
                    </div>

                    <div class="lg:col-span-3 lg:pt-24">
                        <div class="border-l-2 border-gray-100 pl-6">
                            <p class="text-gray-500 text-lg md:text-xl font-light leading-snug italic">
                                A deep-dive into the "Safety" interaction principle within the <span class="font-bold text-gray-900">HCI Bibliography</span> archive.
                            </p>
                        </div>
                    </div>
                </div>

                <div class="mt-24 pt-10 border-t border-gray-100 grid grid-cols-2 lg:grid-cols-4 gap-12">
                    <div>
                        <h4 class="text-[10px] font-bold uppercase tracking-widest text-gray-300 mb-3">Role</h4>
                        <p class="text-xs md:text-sm font-bold text-gray-700 uppercase tracking-tight">UX Research</p>
                    </div>
               
                    <div>
                        <h4 class="text-[10px] font-bold uppercase tracking-widest text-gray-300 mb-3">Principle</h4>
                        <p class="text-xs md:text-sm font-bold text-gray-700 uppercase tracking-tight">Safety & Recovery</p>
                    </div>
                   <div>
    <h4 class="text-[10px] font-bold uppercase tracking-widest text-gray-300 mb-3">Methodology</h4>
    <ul class="text-[10px] font-bold text-gray-700 uppercase tracking-tight">
        <li>• Heuristic Evaluation</li>
        <li>• User Flow Audit</li>
        <li>• Gap Analysis</li>
    </ul>
</div>
                </div>
            </div>
        </div>
    </section>

    {{-- 2. THE MISSION (Unchanged) --}}
    <section class="py-32 bg-white reveal">
        <div class="container mx-auto px-6">
            <div class="max-w-4xl">
                <h2 class="text-[10px] font-bold uppercase tracking-[0.5em] text-gray-400 mb-8">The Mission</h2>
                <h3 class="text-4xl md:text-6xl font-black uppercase tracking-tighter mb-10 leading-[0.9] text-gray-900">
                    Restoring User Control <br> and Efficiency.
                </h3>
                <p class="text-xl md:text-2xl text-gray-500 leading-relaxed font-light">
                    Identifying specific violations of the <span class="font-bold text-gray-900">Safety</span> principle on the hcibib.org site. This project focuses on redesigning components to protect users from errors and provide intuitive recovery paths.
                </p>
            </div>
        </div>
    </section>

    {{-- 3. THE "SAFETY" QUOTE (Unchanged) --}}
    <section class="py-32 bg-gray-900 text-white reveal">
        <div class="container mx-auto px-6 text-center">
            <blockquote class="text-3xl md:text-6xl font-bold italic leading-tight tracking-tighter max-w-5xl mx-auto">
                “Safety is the idea of protecting users from making errors and providing them with the means to <span class="text-indigo-300">recover</span> from them.”
            </blockquote>
            <cite class="block mt-10 text-[10px] text-gray-500 font-black uppercase tracking-[0.5em]">— Sidas Saulynas (2025)</cite>
        </div>
    </section>

    {{-- 4. CASE STUDY: SECTION 01 (UPDATED SIZING) --}}
    <section class="py-32 bg-white reveal">
        <div class="container mx-auto px-6">
            {{-- Text Intro - Stacked on top now --}}
            <div class="max-w-3xl mb-16">
                <div class="flex items-center gap-6 mb-6">
                    <span class="text-gray-900 font-black text-5xl">01</span>
                    <h3 class="text-3xl font-black uppercase tracking-tighter text-gray-900">Homepage Error Traps</h3>
                </div>
                <p class="text-xl text-gray-500 font-light leading-relaxed">
                    In the original design, the search failure leaves the user at an unexplained dead end. The redesigned interface replaces this with clear, actionable feedback while keeping the navigation accessible.
                </p>
            </div>
            
            {{-- PROBLEM IMAGES: Now larger in a main grid --}}
            <div class="grid grid-cols-1 md:grid-cols-2 gap-8 mb-24">
                <div class="space-y-4">
                     <img src="{{ asset('photos/case/case1/1.jpg') }}" class="w-full rounded-2xl border border-gray-100 shadow-lg" alt="Violation 1">
                     <p class="text-center text-[10px] text-gray-400 uppercase font-bold tracking-widest">Fig 1.1: Incorrect Mapping</p>
                </div>
                <div class="space-y-4">
                    <img src="{{ asset('photos/case/case1/2.jpg') }}" class="w-full rounded-2xl border border-gray-100 shadow-lg" alt="Violation 2">
                    <p class="text-center text-[10px] text-gray-400 uppercase font-bold tracking-widest">Fig 1.2: The Dead End</p>
               </div>
            </div>

            {{-- SOLUTION CARD: Image constrained with caption restored --}}
<div class="bg-gray-50 rounded-[40px] p-8 md:p-16 border border-gray-100 relative overflow-hidden">
    <div class="absolute top-0 right-0 w-64 h-64 bg-indigo-100/30 rounded-full blur-3xl"></div>
    <h4 class="text-[10px] font-bold uppercase tracking-[0.4em] mb-10 text-indigo-600">The Solution</h4>
    
    {{-- This is the wrapper that fixes the size --}}
    <div class="max-w-2xl mx-auto">
        <div class="bg-white p-2 rounded-2xl shadow-2xl mb-8 border border-gray-100">
             <img src="{{ asset('photos/case/case1/5.jpg') }}" class="w-full rounded-xl" alt="Homepage Redesign">
        </div>
        
        {{-- Restoring your missing text here --}}
        <p class="text-gray-600 text-lg italic text-center leading-relaxed">
            Integrated Homepage Redesign: Providing actionable feedback for "No Results" states.
        </p>
    </div>
</div>

    {{-- 5. CASE STUDY: SECTION 02 (UPDATED SIZING) --}}
    <section class="py-32 bg-gray-50/50 border-y border-gray-100 reveal">
        <div class="container mx-auto px-6">
             {{-- Text Intro - Stacked on top now --}}
             <div class="max-w-3xl mb-16">
                <div class="flex items-center gap-6 mb-6">
                    <span class="text-gray-900 font-black text-5xl">02</span>
                    <h3 class="text-3xl font-black uppercase tracking-tighter text-gray-900">Logical Constraints</h3>
                </div>
                <p class="text-xl text-gray-500 font-light leading-relaxed">
                    Redesigning secondary pages to remove duplicate, non-working elements and ensuring every user action receives a consistent, logical response from the system.
                </p>
            </div>
            
             {{-- PROBLEM IMAGES: Now larger in a main grid --}}
            <div class="grid grid-cols-1 md:grid-cols-2 gap-8 mb-24">
                <div class="space-y-4">
                    <img src="{{ asset('photos/case/case1/3.jpg') }}" class="w-full rounded-2xl border border-white shadow-lg" alt="Secondary Violation 1">
                    <p class="text-center text-[10px] text-gray-400 uppercase font-bold tracking-widest">Fig 2.1: No Feedback</p>
                </div>
                <div class="space-y-4">
                    <img src="{{ asset('photos/case/case1/4.jpg') }}" class="w-full rounded-2xl border border-white shadow-lg" alt="Secondary Violation 2">
                    <p class="text-center text-[10px] text-gray-400 uppercase font-bold tracking-widest">Fig 2.2: Broken Redundancy</p>
                </div>
            </div>

            <h4 class="text-[10px] font-bold uppercase tracking-[0.4em] mb-10 text-indigo-600 text-center">The Solutions</h4>
            {{-- SOLUTION IMAGES: Wrapped in max-w-5xl to constrain width --}}
            <div class="max-w-5xl mx-auto grid grid-cols-1 md:grid-cols-2 gap-12">
                <div class="bg-white p-4 rounded-[30px] shadow-xl border border-gray-100">
                    <img src="{{ asset('photos/case/case1/6.jpg') }}" class="w-full rounded-[20px]" alt="Secondary Redesign 1">
                    <p class="text-center text-gray-500 italic mt-4">Clear error handling added.</p>
                </div>
                <div class="bg-white p-4 rounded-[30px] shadow-xl border border-gray-100">
                    <img src="{{ asset('photos/case/case1/7.jpg') }}" class="w-full rounded-[20px]" alt="Secondary Redesign 2">
                    <p class="text-center text-gray-500 italic mt-4">Broken elements removed.</p>
                </div>
            </div>
        </div>
    </section>

    {{-- 6. FINAL SYNTHESIS (Unchanged) --}}
    <section class="py-40 bg-white text-center reveal">
        <div class="container mx-auto px-6 max-w-3xl">
            <span class="text-[10px] font-bold uppercase tracking-[0.5em] text-gray-400 mb-8 block">Final Synthesis</span>
            <h2 class="text-4xl md:text-6xl font-black uppercase tracking-tighter text-gray-900 mb-10 leading-none">
                Actionable Feedback. <br> User Control.
            </h2>
            <p class="text-gray-500 italic text-lg leading-relaxed font-light">
                The final redesign ensures that all interaction points meet modern HCI standards, restoring the user’s ability to navigate safely and recover from errors without frustration.
            </p>
        </div>
    </section>
</main>
@endsection