@extends('layouts.app')

@section('title', 'Personal Projects')

@section('content')
<main class="container mx-auto px-4 py-8">
    <h1 class="text-4xl font-bold mb-8 text-gray-800">Personal Projects</h1>
    <p class="mb-10 text-xl text-gray-600">A collection of self-initiated projects, UX challenges, and explorations demonstrating my passion and skill outside of formal work.</p>

    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
        
        {{-- FEATURED: MAIN PORTFOLIO PAGE --}}
        <a href="{{ route('portfolio') }}" class="block bg-white rounded-xl shadow-lg hover:shadow-2xl hover:scale-[1.02] transition duration-300 overflow-hidden">
            <div class="pt-6 px-6"> 
                <img class="w-full h-56 object-cover rounded-lg shadow-sm" 
                     src="path/to/image/personal_1.jpg" 
                     alt="Portfolio Web Design">
            </div>
            <div class="p-6">
                <span class="inline-block bg-sage-100 text-sage-600 text-xs font-semibold px-3 py-1 rounded-full uppercase mb-2">Concept Design</span>
                <h2 class="text-2xl font-semibold text-gray-800 mb-2">Professional Portfolio</h2>
                <p class="text-gray-600">View my full gallery of client work, case studies, and professional UI/UX contributions.</p>
                <p class="mt-4 text-sage-500 font-medium">View Project →</p>
            </div>
        </a>

        {{-- UPCOMING PROJECT SLOT 1 --}}
        <div class="relative bg-gray-50 rounded-xl border-2 border-dashed border-gray-200 flex flex-col items-center justify-center p-12 text-center min-h-[400px]">
            <h2 class="text-xl font-semibold text-gray-400 mb-2 uppercase tracking-widest">Upcoming</h2>
            <p class="text-gray-400 text-sm">New project in progress</p>
        </div>

        {{-- UPCOMING PROJECT SLOT 2 --}}
        <div class="relative bg-gray-50 rounded-xl border-2 border-dashed border-gray-200 flex flex-col items-center justify-center p-12 text-center min-h-[400px]">
            <h2 class="text-xl font-semibold text-gray-400 mb-2 uppercase tracking-widest">Upcoming</h2>
            <p class="text-gray-400 text-sm">New research in progress</p>
        </div>

    </div>
</main>
@endsection