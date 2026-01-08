@extends('layouts.app')

@section('title', 'Amaya Shaw | UX Design Portfolio')

@section('content')

    {{-- 1. HERO SECTION --}}
    <section class="bg-white py-20 md:py-32">
        <div class="container mx-auto px-4 flex flex-col md:flex-row items-center">
            
            {{-- Text Content --}}
            <div class="md:w-1/2 md:pr-12 mb-10 md:mb-0"> 
                <h2 class="text-xl font-semibold text-sage-500 uppercase tracking-wider mb-2">
                    {{-- Updated Title to match Footer consistency --}}
                    UX/UI Designer & Visual Storyteller
                </h2>
                <h1 class="text-6xl md:text-7xl font-extrabold text-gray-900 leading-tight">
                    Hi, I'm Amaya Shaw.
                </h1>
                <p class="mt-6 text-2xl text-gray-600 max-w-lg">
                    I design simple, intuitive digital experiences that drive business results and delight users. Focusing on 
                    <span class="font-extrabold text-sage-500">research-backed solutions</span> 
                    for complex problems.
                </p>
                
                {{-- Separator line: Fixed the color class from sage-00 to sage-500 --}}
                <div class="flex justify-start mt-12">
                    <div class="w-40 h-1 bg-sage-500 rounded"></div>
                </div>

            </div>

            {{-- Image --}}
            <div class="md:w-1/2 flex justify-center">
                <div class="w-64 h-64 md:w-80 md:h-80 bg-gray-300 rounded-full shadow-2xl flex items-center justify-center text-gray-600 text-center text-sm overflow-hidden">
                    <img src="{{ asset('photos/profile.jpg') }}" alt="Amaya Shaw Profile Photo" class="w-full h-full object-cover">
                </div>
            </div>
            
        </div>
    </section>

  {{-- 2. PORTFOLIO CATEGORY HUB --}}
    <section class="py-16 bg-gray-50">
        <div class="container mx-auto px-4">
            <h2 class="text-4xl font-bold text-gray-800 text-center mb-4">Explore My Work By Category</h2>
            <p class="text-xl text-gray-600 text-center mb-12">
                Select a category to view the full projects.
            </p>
            
            {{-- GRID USES md:grid-cols-4 --}}
            <div class="grid grid-cols-2 md:grid-cols-4 gap-6">
                
                {{-- Card 1: Case Studies --}}
                <a href="{{ route('case-studies') }}" class="flex flex-col items-center justify-center p-6 bg-white rounded-xl shadow-lg hover:shadow-2xl hover:scale-[1.05] transition duration-300 text-center">
                    <img src="{{ asset('photos/case/case1/4.jpg') }}" alt="Case Study Category" class="h-24 w-24 object-cover mb-3 rounded-md border border-gray-200">
                    <h3 class="text-xl font-semibold text-gray-800">Case Studies</h3>
                </a>

                {{-- Card 2: Webpage Redesigns --}}
                <a href="{{ route('webpage-redesign') }}" class="flex flex-col items-center justify-center p-6 bg-white rounded-xl shadow-lg hover:shadow-2xl hover:scale-[1.05] transition duration-300 text-center">
                    <img src="{{ asset('photos/web/web1/4.png') }}" alt="Redesigns Category" class="h-24 w-24 object-cover mb-3 rounded-md border border-gray-200">
                    <h3 class="text-xl font-semibold text-gray-800">Redesigns</h3>
                </a>
                
                {{-- Card 3: Personal Projects --}}
                <a href="{{ route('personal-projects') }}" class="flex flex-col items-center justify-center p-6 bg-white rounded-xl shadow-lg hover:shadow-2xl hover:scale-[1.05] transition duration-300 text-center">
                    <img src="{{ asset('photos/personal/portfolio.png') }}" alt="Personal Projects Category" class="h-24 w-24 object-cover mb-3 rounded-md border border-gray-200">
                    <h3 class="text-xl font-semibold text-gray-800">Personal Projects</h3>
                </a>

                {{-- Card 4: Graphic Design --}}
                <a href="{{ route('graphic-design') }}" class="flex flex-col items-center justify-center p-6 bg-white rounded-xl shadow-lg hover:shadow-2xl hover:scale-[1.05] transition duration-300 text-center">
                    <img src="{{ asset('photos/clt/clt1/2.jpg') }}" alt="Graphic Design Category" class="h-24 w-24 object-cover mb-3 rounded-md border border-gray-200">
                    <h3 class="text-xl font-semibold text-gray-800">Graphic Design</h3>
                </a>
                
            </div>
        </div>
    </section>

    {{-- 3. FINAL CALL TO ACTION --}}
    <section class="bg-sage-500 py-16">
        <div class="container mx-auto px-4 text-center">
            <h2 class="text-4xl font-bold text-white mb-4">Ready to collaborate?</h2>
            <p class="text-xl text-sage-200 mb-8">
                I'm always open to discussing new opportunities, collaborations, or just talking shop about UX.
            </p>
            <a href="{{ route('contact') }}" class="inline-block px-10 py-4 bg-white text-black-600 text-xl font-bold rounded-lg shadow-2xl hover:bg-gray-100 transition duration-300 transform hover:scale-105">
                Contact Me
            </a>
        </div>
    </section>

@endsection