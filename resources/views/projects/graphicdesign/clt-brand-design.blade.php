@extends('layouts.app')

@section('title', 'CLT Brand Design | Amaya Shaw')

@section('content')
<style>
    /* 1. FIX NAVBAR SQUISHING */
    nav a, .nav-item {
        white-space: nowrap !important;
    }

    /* 2. SCROLL ANIMATION */
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

    /* 3. SAGE BRAND COLORS */
    .border-sage { border: 4px solid #556b55 !important; }
    .text-sage-dark { color: #556b55; }
</style>

{{-- UNIFIED CONTAINER: Matches BSU's max-w-6xl, py-16, and px-6 --}}
<div class="max-w-6xl mx-auto py-16 px-6">
    
    {{-- BACK LINK: Matched to BSU style --}}
    <a href="{{ route('graphic-design') }}" class="text-sage-600 hover:text-sage-700 font-bold flex items-center mb-12 transition group">
        <span class="mr-2 transition-transform group-hover:-translate-x-1">←</span> Back to Gallery
    </a>

    {{-- HEADER: Matched to BSU typography and margins --}}
    <header class="mb-24">
        <h1 class="text-6xl font-black text-gray-900 mb-6 tracking-tighter uppercase">Cured Leaves Tea</h1>
        <p class="text-xl text-gray-500 max-w-2xl leading-relaxed font-medium">
            A comprehensive look at the visual identity developed for CLT, focusing on cohesive digital storytelling and high-energy social assets.
        </p>
    </header>

    {{-- SECTION 1: SQUARE POSTS --}}
    {{-- Adjusted gap to 16 to keep images large while maintaining the 6xl container --}}
    <div class="grid grid-cols-1 md:grid-cols-2 gap-16 mb-40">
        @for ($i = 1; $i <= 6; $i++)
            <div class="scroll-spawn">
                <div class="bg-white rounded-3xl shadow-xl overflow-hidden border border-gray-100 transition-transform duration-500 hover:scale-[1.02]">
                    <img src="{{ asset('photos/clt/clt1/' . $i . '.jpg') }}" 
                         class="w-full aspect-square object-cover" alt="CLT Square {{ $i }}">
                </div>
            </div>
        @endfor
    </div>

    {{-- SECTION 2: THE QUOTE BOX --}}
    {{-- Now aligned within the 6xl grid for consistency --}}
    <section class="scroll-spawn border-sage bg-white py-24 my-40 rounded-3xl">
        <div class="text-center px-6">
            <h2 class="text-3xl md:text-5xl font-extrabold text-sage-dark leading-tight uppercase tracking-tighter max-w-4xl mx-auto">
                "I intentionally create based on the unique ideals and visual heartbeat of every brand."
            </h2>
        </div>
    </section>

    {{-- SECTION 3: PORTRAIT ASSETS & VIDEOS --}}
    <div class="grid grid-cols-1 md:grid-cols-2 gap-16">
        
        {{-- Row 1 --}}
        <div class="scroll-spawn">
            <div class="bg-white rounded-3xl shadow-xl overflow-hidden border border-gray-100">
                <img src="{{ asset('photos/clt/clt2/1.jpg') }}" class="w-full aspect-[9/16] object-cover">
            </div>
        </div>

        <div class="scroll-spawn">
            <div class="bg-black rounded-3xl shadow-2xl overflow-hidden aspect-[9/16]">
                <video class="w-full h-full object-cover" autoplay loop muted playsinline>
                    <source src="{{ asset('videos/clt/1.mp4') }}" type="video/mp4">
                </video>
            </div>
        </div>

        {{-- Row 2 --}}
        <div class="scroll-spawn">
            <div class="bg-white rounded-3xl shadow-xl overflow-hidden border border-gray-100">
                <img src="{{ asset('photos/clt/clt2/2.jpg') }}" class="w-full aspect-[9/16] object-cover">
            </div>
        </div>

        <div class="scroll-spawn">
            <div class="bg-white rounded-3xl shadow-xl overflow-hidden border border-gray-100">
                <img src="{{ asset('photos/clt/clt2/3.jpg') }}" class="w-full aspect-[9/16] object-cover">
            </div>
        </div>

        {{-- Row 3 --}}
        <div class="scroll-spawn">
            <div class="bg-black rounded-3xl shadow-2xl overflow-hidden aspect-[9/16]">
                <video class="w-full h-full object-cover" autoplay loop muted playsinline>
                    <source src="{{ asset('videos/clt/2.mp4') }}" type="video/mp4">
                </video>
            </div>
        </div>

        <div class="scroll-spawn">
            <div class="bg-white rounded-3xl shadow-xl overflow-hidden border border-gray-100">
                <img src="{{ asset('photos/clt/clt2/4.jpg') }}" class="w-full aspect-[9/16] object-cover">
            </div>
        </div>

    </div>
</div>
@endsection