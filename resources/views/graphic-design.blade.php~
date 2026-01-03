@extends('layouts.app')

@section('title', 'Graphic Design')

@section('content')
<main class="container mx-auto px-4 py-8">
    <h1 class="text-4xl font-bold mb-8 text-gray-800">Graphic Design</h1>
    <p class="mb-10 text-xl text-gray-600">A showcase of visual projects, including branding, logo design, visual identity, and print materials, demonstrating my aesthetic and layout skills.</p>

    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
        
        {{-- PROJECT CARD 1: BSU (Logo Fixed to Fit) --}}
        <a href="{{ route('bsu-project') }}" class="block bg-white rounded-xl shadow-lg hover:shadow-2xl hover:scale-[1.02] transition duration-300 overflow-hidden">
            <div class="pt-6 px-6"> 
                {{-- Changed object-cover to object-contain to keep the logo from cutting off --}}
                <img class="w-full h-56 object-contain rounded-lg shadow-sm bg-white" 
                     src="{{ asset('photos/graphic_1.JPG') }}" 
                     alt="BSU Creative Work">
            </div>
            <div class="p-6">
                <span class="inline-block bg-pink-100 text-pink-800 text-xs font-semibold px-3 py-1 rounded-full uppercase mb-2">Visual Communication</span>
                <h2 class="text-2xl font-semibold text-gray-800 mb-2">BSU Creative Work</h2>
                <p class="text-gray-600">Graphic design work developed for Black Student Union centering culture, communication, and community through intentional visual design.</p>
                <p class="mt-4 text-sage-500 font-medium">View Project →</p>
            </div>
        </a>

        {{-- PROJECT CARD 2: CLT BRAND DESIGN --}}
        <a href="{{ route('clt-design') }}" class="block bg-white rounded-xl shadow-lg hover:shadow-2xl hover:scale-[1.02] transition duration-300 overflow-hidden">
            <div class="pt-6 px-6"> 
                <img class="w-full h-56 object-cover rounded-lg shadow-sm" 
                     src="{{ asset('photos/clt-1.jpg') }}" 
                     alt="Cured Leaves Tea Brand Design">
            </div>
            <div class="p-6">
                <span class="inline-block bg-orange-100 text-orange-800 text-xs font-semibold px-3 py-1 rounded-full uppercase mb-2">Branding</span>
                <h2 class="text-2xl font-semibold text-gray-800 mb-2">Cured Leaves Tea Brand Design</h2>
                <p class="text-gray-600">Brand-aligned graphic design created for social media content, marketing, and digital storytelling.</p>
                <p class="mt-4 text-sage-500 font-medium">View Project →</p>
            </div>
        </a>

        {{-- PROJECT CARD 3: UPCOMING PROJECT (Replacing the duplicate BSU card) --}}
        <div class="relative bg-gray-50 rounded-xl border-2 border-dashed border-gray-200 flex flex-col items-center justify-center p-12 text-center min-h-[400px]">
            <h2 class="text-xl font-semibold text-gray-400 mb-2 uppercase tracking-widest">Upcoming Project</h2>
            <p class="text-gray-400 text-sm">New visual work in progress.</p>
        </div>

    </div>
</main>
@endsection