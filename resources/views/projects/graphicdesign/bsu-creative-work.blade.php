@extends('layouts.app')

@section('title', 'Project: BSU Creative | Amaya Shaw')

@section('content')
<main class="bg-white min-h-screen">
    {{-- 1. EDITORIAL HERO SECTION --}}
    <section class="relative pt-44 pb-20 overflow-hidden">
        <div class="absolute inset-0 -z-10 bg-white">
            <div class="absolute top-0 right-0 w-[800px] h-[800px] bg-indigo-50/30 rounded-full blur-[120px] -translate-y-1/2 translate-x-1/4"></div>
            <div class="absolute bottom-0 left-0 w-[800px] h-[800px] bg-blue-50/20 rounded-full blur-[120px] translate-y-1/2 -translate-x-1/4"></div>
        </div>

        <div class="container mx-auto px-6">
            <div class="reveal">
                <nav class="mb-16">
                    <a href="{{ route('graphic-design') }}" class="group inline-flex items-center text-[10px] font-bold uppercase tracking-[0.5em] text-gray-400 hover:text-indigo-600 transition">
                        <span class="mr-2 transform group-hover:-translate-x-2 transition-transform">←</span> Back to Gallery
                    </a>
                </nav>

                <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 lg:gap-16 items-start">
                    <div class="lg:col-span-9">
                        <span class="text-[10px] font-bold uppercase tracking-[0.5em] text-gray-400 mb-4 block">Graphic Design — 2024</span>
                        <h1 class="text-6xl md:text-8xl lg:text-[10rem] font-black tracking-tighter uppercase leading-[0.8] text-gray-900">
                            BSU <br> 
                            <span class="text-gray-900/90">Creative</span>
                        </h1>
                    </div>

                    <div class="lg:col-span-3 lg:pt-24">
                        <div class="border-l-2 border-gray-100 pl-6">
                            <p class="text-gray-500 text-lg md:text-xl font-light leading-snug italic">
                                High-energy motion and brand systems developed for the <span class="font-bold text-gray-900">Black Student Union</span>.
                            </p>
                        </div>
                    </div>
                </div>

                {{-- Stat Bar --}}
                <div class="mt-24 pt-10 border-t border-gray-100 grid grid-cols-2 lg:grid-cols-4 gap-12">
                    <div>
                        <h4 class="text-[10px] font-bold uppercase tracking-widest text-gray-300 mb-3">Role</h4>
                        <p class="text-xs md:text-sm font-bold text-gray-700 uppercase tracking-tight">Lead Designer</p>
                    </div>
                    <div>
                        <h4 class="text-[10px] font-bold uppercase tracking-widest text-gray-300 mb-3">Tools</h4>
                        <p class="text-xs md:text-sm font-bold text-gray-700 uppercase tracking-tight">Canva Pro / Motion</p>
                    </div>
                    <div>
                        <h4 class="text-[10px] font-bold uppercase tracking-widest text-gray-300 mb-3">Methodology</h4>
                        <ul class="text-[10px] font-bold text-gray-700 uppercase tracking-tight">
                            <li>• Motion Graphics</li>
                            <li>• Social Strategy</li>
                            <li>• Brand Cohesion</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- 2. ITEM 1: VIDEO SLIDER --}}
    <section class="py-32 bg-white reveal">
        <div class="container mx-auto px-6">
            <div class="flex flex-col md:flex-row gap-16 items-center">
                <div class="md:w-1/2 w-full relative group">
                    <div class="bg-gray-900 rounded-[40px] overflow-hidden shadow-2xl aspect-square relative border border-gray-800">
                        <div id="slider1" class="flex overflow-x-auto snap-x snap-mandatory scrollbar-hide h-full">
                            @foreach(['1.mp4', '2.mp4', '3.mp4', '4.mp4', '5.mp4', '6.mp4'] as $video)
                            <div class="snap-center shrink-0 w-full h-full">
                                <video src="{{ asset('videos/bsu/bsu1/' . $video) }}" autoplay muted loop playsinline class="w-full h-full object-cover"></video>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>
                <div class="md:w-1/2 w-full">
                    <span class="text-gray-900 font-black text-5xl mb-6 block">01</span>
                    <h3 class="text-4xl font-black text-gray-900 mb-6 tracking-tighter uppercase leading-[0.9]">Motion & <br>Brand Identity</h3>
                    <p class="text-xl text-gray-500 font-light leading-relaxed max-w-md">
                        This series demonstrates the movement of the BSU brand. Each asset was designed with 1080x1080 constraints to ensure maximum clarity.
                    </p>
                </div>
            </div>
        </div>
    </section>

    {{-- 3. ITEM 2: STATIC CAMPAIGN --}}
    <section class="py-32 bg-gray-50/50 border-y border-gray-100 reveal">
        <div class="container mx-auto px-6">
            <div class="flex flex-col md:flex-row-reverse gap-16 items-center">
                <div class="md:w-1/2 w-full">
                    <div class="bg-white p-3 rounded-[40px] shadow-2xl aspect-[4/5] border border-gray-100">
                        <img src="{{ asset('photos/bsu/bsu-2.jpg') }}" class="w-full h-full object-cover rounded-[30px]">
                    </div>
                </div>
                <div class="md:w-1/2 w-full">
                    <span class="text-gray-900 font-black text-5xl mb-6 block">02</span>
                    <h3 class="text-4xl font-black text-gray-900 mb-6 tracking-tighter uppercase leading-[0.9]">Social Media <br>Campaign</h3>
                    <p class="text-xl text-gray-500 font-light leading-relaxed max-w-md">
                        Utilizing a 1080x1350 portrait ratio, these assets maximize screen real estate to capture attention.
                    </p>
                </div>
            </div>
        </div>
    </section>

    {{-- 4. EXTENDED PORTFOLIO (CONVEYOR BELT) --}}
    <section class="py-40 bg-white overflow-hidden">
        <div class="container mx-auto px-6">
            <div class="flex justify-between items-end mb-12">
                <div>
                    <span class="text-[10px] font-bold uppercase tracking-[0.5em] text-gray-400 mb-2 block">More Projects</span>
                    <h2 class="text-4xl font-black tracking-tighter uppercase text-gray-900">Extended Portfolio</h2>
                </div>
                <div class="flex gap-3">
                    <button onclick="slide('left')" class="p-4 rounded-full border border-gray-100 hover:bg-gray-50 transition shadow-sm">←</button>
                    <button onclick="slide('right')" class="p-4 rounded-full border border-gray-100 hover:bg-gray-50 transition shadow-sm">→</button>
                </div>
            </div>

            <div class="portfolio-slider" id="projectSlider">
                <div class="project-item">
                    <div class="card-inner">
                        <video src="{{ asset('videos/bsu/bsu-1.mp4') }}" autoplay muted loop playsinline></video>
                    </div>
                </div>
                <div class="project-item">
                    <div class="card-inner">
                        <img src="{{ asset('photos/bsu/bsu-5.jpg') }}" alt="Project 2">
                    </div>
                </div>
                <div class="project-item">
                    <div class="card-inner">
                        <img src="{{ asset('photos/bsu/bsu-4.jpg') }}" alt="Project 3">
                    </div>
                </div>
                <div class="project-item">
                    <div class="card-inner">
                        <img src="{{ asset('photos/bsu/bsu-2.jpg') }}" alt="Project 4">
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>

<style>
    /* Slider Container Logic */
    .portfolio-slider {
        display: flex;
        overflow-x: auto;
        scroll-behavior: smooth;
        scroll-snap-type: x mandatory;
        gap: 24px;
        padding-bottom: 30px;
        scrollbar-width: none; /* Hide for Firefox */
    }

    .portfolio-slider::-webkit-scrollbar {
        display: none; /* Hide for Chrome */
    }

    /* Smaller, Clean Card Size (The "Not Too Big" fix) */
    .project-item {
        flex: 0 0 320px; /* Adjust width as needed */
        scroll-snap-align: start;
    }

    .card-inner {
        width: 100%;
        height: 420px; /* Uniform height */
        border-radius: 24px;
        overflow: hidden;
        background: #f8f8f8;
        transition: transform 0.5s cubic-bezier(0.2, 1, 0.3, 1);
    }

    .card-inner:hover {
        transform: scale(0.98);
    }

    .card-inner img, .card-inner video {
        width: 100%;
        height: 100%;
        object-fit: cover;
    }

    /* Layout Utility */
    .scrollbar-hide::-webkit-scrollbar {
        display: none;
    }
</style>

<script>
    function slide(direction) {
        const slider = document.getElementById('projectSlider');
        const scrollAmount = 344; // Card width (320) + gap (24)
        if (direction === 'left') {
            slider.scrollBy({ left: -scrollAmount, behavior: 'smooth' });
        } else {
            slider.scrollBy({ left: scrollAmount, behavior: 'smooth' });
        }
    }
</script>
@endsection