@extends('layouts.app')

@section('title', 'CLT Brand Design | Amaya Shaw')

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

@section('content')

{{-- THE ENTIRE PAGE IS NOW WRAPPED IN A CONSISTENT MAX-WIDTH CONTAINER --}}
{{-- Using max-w-6xl to match the 'gap-x-56' rhythm --}}
<div class="max-w-6xl mx-auto px-4 py-12">
    
    {{-- BACK BUTTON: Now flush with the grid --}}
    <div class="mb-12">
        <a href="{{ route('graphic-design') }}" class="group inline-flex items-center text-sage-500 font-bold hover:text-gray-900 transition duration-150">
            <span class="mr-2 transition-transform group-hover:-translate-x-1">←</span> 
            Back to Gallery
        </a>
    </div>

    {{-- HEADER: Now flush with the grid --}}
    <header class="mb-32">
        <h1 class="text-5xl md:text-7xl font-black mb-6 text-gray-900 tracking-tighter uppercase leading-[0.85]">
            Cured Leaves <br> Tea Brand Design
        </h1>
        <p class="text-xl text-gray-500 max-w-xl leading-relaxed font-medium">
            A comprehensive look at the visual identity developed for CLT, focusing on cohesive digital storytelling and high-energy social assets.
        </p>
    </header>

    {{-- SECTION 1: SQUARE POSTS --}}
    {{-- Changed to gap-x-56 --}}
    <div class="grid grid-cols-1 md:grid-cols-2 gap-x-56 gap-y-40 mb-40">
        @for ($i = 1; $i <= 6; $i++)
            <div class="scroll-spawn">
                <div class="bg-white rounded-2xl shadow-xl overflow-hidden border border-gray-100 transition-transform duration-500 hover:scale-[1.02]">
                    <img src="{{ asset('photos/clt/clt1/' . $i . '.jpg') }}" 
                         class="w-full aspect-square object-cover" alt="CLT Square {{ $i }}">
                </div>
            </div>
        @endfor
    </div>
</div>

{{-- === SECTION 2: THE QUOTE BOX (Remains Full Width) === --}}
<section class="w-full scroll-spawn border-sage bg-white py-24 md:py-32 my-20">
    <div class="container mx-auto px-6 text-center">
        <h2 class="text-3xl md:text-5xl font-extrabold text-sage-dark leading-tight uppercase tracking-tighter max-w-4xl mx-auto">
            "I intentionally create based on the unique ideals and visual heartbeat of every brand."
        </h2>
    </div>
</section>

{{-- BOTTOM CONTAINER --}}
{{-- Using max-w-7xl here because Portraits need a bit more width to handle the gap-x-56 --}}
<div class="max-w-7xl mx-auto px-4 py-12">
    {{-- SECTION 3: PORTRAIT ASSETS & VIDEOS --}}
    {{-- Changed to gap-x-56 --}}
    <div class="grid grid-cols-1 md:grid-cols-2 gap-x-56 gap-y-40 mb-32">
        
        {{-- ROW 1 --}}
        <div class="scroll-spawn">
            <div class="bg-white rounded-2xl shadow-xl overflow-hidden border border-gray-100">
                <img src="{{ asset('photos/clt/clt2/1.jpg') }}" class="w-full aspect-[9/16] object-cover">
            </div>
        </div>

        <div class="scroll-spawn">
            <div class="bg-black rounded-2xl shadow-2xl overflow-hidden h-full min-h-[400px]">
                <video class="w-full h-full object-cover" autoplay loop muted playsinline>
                    <source src="{{ asset('videos/clt/1.mp4') }}" type="video/mp4">
                </video>
            </div>
        </div>

        {{-- ROW 2 --}}
        <div class="scroll-spawn">
            <div class="bg-white rounded-2xl shadow-xl overflow-hidden border border-gray-100">
                <img src="{{ asset('photos/clt/clt2/2.jpg') }}" class="w-full aspect-[9/16] object-cover">
            </div>
        </div>

        <div class="scroll-spawn">
            <div class="bg-white rounded-2xl shadow-xl overflow-hidden border border-gray-100">
                <img src="{{ asset('photos/clt/clt2/3.jpg') }}" class="w-full aspect-[9/16] object-cover">
            </div>
        </div>

        {{-- ROW 3 --}}
        <div class="scroll-spawn">
            <div class="bg-black rounded-2xl shadow-2xl overflow-hidden h-full min-h-[400px]">
                <video class="w-full h-full object-cover" autoplay loop muted playsinline>
                    <source src="{{ asset('videos/clt/2.mp4') }}" type="video/mp4">
                </video>
            </div>
        </div>

        <div class="scroll-spawn">
            <div class="bg-white rounded-2xl shadow-xl overflow-hidden border border-gray-100">
                <img src="{{ asset('photos/clt/clt2/4.jpg') }}" class="w-full aspect-[9/16] object-cover">
            </div>
        </div>

    </div>
</div>
@endsection