@extends('layouts.app')

@section('title', 'Personal Projects')

@section('content')
<main class="container mx-auto px-4">
    
   {{-- 1.  HEADER SECTION --}}
    {{-- Changed from pt-44 to pt-32 to tighten the top gap --}}
    <section class="pt-32 pb-20 max-w-7xl mx-auto">
        <div class="reveal">
            {{-- Category Label --}}
            <span class="text-[10px] font-bold uppercase tracking-[0.4em] text-indigo-600 mb-4 block">Portfolio</span>
            
            {{-- Main Page Title --}}
            <h1 class="text-6xl md:text-8xl font-black tracking-tighter uppercase mb-6 leading-[0.85] text-gray-900">
                Personal <br> Projects
            </h1>
            
            {{-- Subheader --}}
            <p class="text-gray-500 text-lg md:text-xl max-w-2xl font-light leading-relaxed">
                            A collection of self-initiated projects, UX challenges, and explorations demonstrating my passion for design outside of formal work.
            </p>
        </div>
    </section>

    {{-- 2. PROJECT GRID (Your original code starts here) --}}
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-10 pb-40">
        
        {{-- FEATURED: MAIN PORTFOLIO PAGE --}}
        <div class="flex flex-col bg-white rounded-xl shadow-lg hover:shadow-2xl transition duration-300 overflow-hidden border border-gray-100">
            <div class="pt-6 px-6"> 
                {{-- Note: Make sure to update 'personal_1.jpg' with your actual file name later! --}}
                <img class="w-full h-56 object-cover rounded-lg shadow-sm" 
                     src="{{ asset('photos/personal/portfolio.png') }}" 
                     alt="Portfolio Web Design">
            </div>
            <div class="p-8 flex flex-col flex-grow">
                <span class="inline-block bg-sage-50 text-sage-600 text-[10px] font-bold px-3 py-1 rounded-full uppercase tracking-widest mb-4 w-fit">Concept Design</span>
                <h2 class="text-2xl font-bold text-gray-900 mb-3">Professional Portfolio</h2>
                <p class="text-gray-600 mb-6 flex-grow">View the full gallery of client work, case studies, and professional UI/UX contributions.</p>
                
                <div>
                    <a href="{{ route('portfolio') }}" class="btn-project">
                        View Project
                    </a>
                </div>
            </div>
        </div>

        {{-- Upcoming Cards --}}
        <div class="card-upcoming flex flex-col items-center justify-center min-h-[450px] bg-gray-50/50 rounded-3xl border-2 border-dashed border-gray-100">
            <div class="w-16 h-16 bg-white rounded-full flex items-center justify-center mb-4 shadow-sm">
                <svg class="w-8 h-8 text-gray-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6"></path>
                </svg>
            </div>
            <h2 class="text-xl font-bold text-gray-400 mb-2 uppercase tracking-widest">Upcoming</h2>
            <p class="text-gray-400 text-sm">New redesign in progress</p>
        </div>

        <div class="card-upcoming flex flex-col items-center justify-center min-h-[450px] bg-gray-50/50 rounded-3xl border-2 border-dashed border-gray-100">
            <div class="w-16 h-16 bg-white rounded-full flex items-center justify-center mb-4 shadow-sm">
                <svg class="w-8 h-8 text-gray-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6"></path>
                </svg>
            </div>
            <h2 class="text-xl font-bold text-gray-400 mb-2 uppercase tracking-widest">Upcoming</h2>
            <p class="text-gray-400 text-sm">New redesign in progress</p>
        </div>

    </div>
</main>
@endsection

