@extends('layouts.app')

@section('title', 'Graphic Design')

@section('content')
<main class="container mx-auto px-4 py-16">
    <div class="max-w-4xl">
        <h1 class="text-4xl md:text-5xl font-extrabold mb-6 text-gray-900 leading-tight">Graphic Design</h1>
        <p class="mb-12 text-xl text-gray-600 leading-relaxed">
            A showcase of visual projects, including branding, logo design, visual identity, and print materials, demonstrating my aesthetic and layout skills.
        </p>
    </div>

    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-10">
        
        {{-- PROJECT CARD 1: BSU --}}
        <div class="flex flex-col bg-white rounded-xl shadow-lg hover:shadow-2xl transition duration-300 overflow-hidden border border-gray-100">
            <div class="pt-6 px-6"> 
                <img class="w-full h-56 object-contain rounded-lg shadow-sm bg-gray-50" 
                     src="{{ asset('photos/graphic_1.JPG') }}" 
                     alt="BSU Creative Work">
            </div>
            <div class="p-8 flex flex-col flex-grow">
                <span class="inline-block bg-pink-50 text-pink-600 text-[10px] font-bold px-3 py-1 rounded-full uppercase tracking-widest mb-4 w-fit">Visual Communication</span>
                <h2 class="text-2xl font-bold text-gray-900 mb-3">BSU Creative Work</h2>
                <p class="text-gray-600 mb-6 flex-grow">Graphic design work developed for Black Student Union centering culture, communication, and community.</p>
                
                <div>
                    <a href="{{ route('bsu-project') }}" class="btn-project">
                        View Project
                    </a>
                </div>
            </div>
        </div>                          

        {{-- PROJECT CARD 2: CLT BRAND DESIGN --}}
        <div class="flex flex-col bg-white rounded-xl shadow-lg hover:shadow-2xl transition duration-300 overflow-hidden border border-gray-100">
            <div class="pt-6 px-6"> 
                <img class="w-full h-56 object-cover rounded-lg shadow-sm" 
                     src="{{ asset('photos//clt/clt-1.jpg') }}" 
                     alt="Cured Leaves Tea Brand Design">
            </div>
            <div class="p-8 flex flex-col flex-grow">
                <span class="inline-block bg-orange-50 text-orange-600 text-[10px] font-bold px-3 py-1 rounded-full uppercase tracking-widest mb-4 w-fit">Branding</span>
                <h2 class="text-2xl font-bold text-gray-900 mb-3">Cured Leaves Tea</h2>
                <p class="text-gray-600 mb-6 flex-grow">Brand-aligned graphic design created for social media content, marketing, and digital storytelling.</p>
                
                <div>
                    <a href="{{ route('clt-design') }}" class="btn-project">
                        View Project
                    </a>
                </div>
            </div>
        </div>

        {{-- PROJECT CARD 3: UPCOMING --}}
        <div class="card-upcoming flex flex-col items-center justify-center min-h-[450px]">
            <div class="w-16 h-16 bg-gray-100 rounded-full flex items-center justify-center mb-4">
                <svg class="w-8 h-8 text-gray-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6"></path>
                </svg>
            </div>
            <h2 class="text-xl font-bold text-gray-400 mb-2 uppercase tracking-widest">Upcoming Project</h2>
            <p class="text-gray-400 text-sm">New visual work in progress.</p>
        </div>

    </div>
</main>
@endsection