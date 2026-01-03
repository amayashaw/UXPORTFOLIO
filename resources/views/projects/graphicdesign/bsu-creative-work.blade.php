@extends('layouts.app')

@section('title', 'BSU Creative Work | Amaya Shaw')

@section('content')
<div class="max-w-6xl mx-auto py-16 px-6">
    
    {{-- Back Link --}}
    <a href="{{ route('graphic-design') }}" class="text-sage-600 hover:text-sage-700 font-bold flex items-center mb-12 transition group">
        <span class="mr-2 transition-transform group-hover:-translate-x-1">←</span> Back to Gallery
    </a>

    {{-- Title Header --}}
    <header class="mb-24">
        <h1 class="text-6xl font-black text-gray-900 mb-6 tracking-tighter">BSU Creative Work</h1>
        <p class="text-xl text-gray-500 max-w-2xl leading-relaxed font-medium">
            A comprehensive look at the brand system developed for the Black Student Union, focusing on high-energy motion and portrait-format social assets.
        </p>
    </header>

    {{-- Design Showcase --}}
    <div class="space-y-32">

        {{-- ITEM 1: Video Slider --}}
        <div class="flex flex-col md:flex-row gap-16 items-center"> {{-- items-center centers text vertically --}}
            <div class="md:w-1/2 w-full relative group">
                <div class="bg-gray-900 rounded-3xl overflow-hidden shadow-2xl aspect-square relative">
                    <div id="slider1" class="flex overflow-x-auto snap-x snap-mandatory scrollbar-hide h-full" onscroll="updateProgress(this, 'dots1')">
                        @foreach(['1.mp4', '2.mp4', '3.mp4', '4.mp4', '5.mp4', '6.mp4'] as $video)
                        <div class="snap-center shrink-0 w-full h-full">
                            <video src="{{ asset('videos/bsu/bsu1/' . $video) }}" autoplay muted loop playsinline class="w-full h-full object-cover"></video>
                        </div>
                        @endforeach
                    </div>
                    <div class="absolute bottom-6 left-1/2 -translate-x-1/2 z-20 w-11/12">
                        <div id="dots1" class="flex gap-2 bg-black/20 backdrop-blur-md p-2 rounded-full border border-white/10">
                            @for ($i = 0; $i < 6; $i++) 
                                <div class="progress-segment h-1.5 rounded-full transition-all duration-500 {{ $i == 0 ? 'bg-white flex-[2]' : 'bg-white/20 flex-1' }}"></div> 
                            @endfor
                        </div>
                    </div>
                </div>
            </div>

            <div class="md:w-1/2 w-full">
                <h3 class="text-4xl font-black text-gray-900 mb-6 tracking-tighter leading-tight">Motion & <br>Brand Identity</h3>
                <p class="text-lg text-gray-600 leading-relaxed max-w-md">
                    This series demonstrates the movement of the BSU brand. Each asset was designed with 1080x1080 constraints to ensure maximum clarity on social media apps.
                </p>
                <p class="text-[10px] uppercase tracking-[0.4em] font-black text-sage-600 mt-6">Designed with Canva Pro.</p>
            </div>
        </div>

        {{-- ITEM 2: 1080x1350 Static Image --}}
        <div class="flex flex-col md:flex-row-reverse gap-16 items-center">
            <div class="md:w-1/2 w-full">
                <div class="bg-gray-100 rounded-3xl overflow-hidden shadow-2xl aspect-[4/5]">
                    <img src="{{ asset('photos/bsu/bsu-2.jpg') }}" class="w-full h-full object-cover">
                </div>
            </div>

            <div class="md:w-1/2 w-full">
                <h3 class="text-4xl font-black text-gray-900 mb-6 tracking-tighter leading-tight">Social Media <br>Campaign</h3>
                <p class="text-lg text-gray-600 leading-relaxed max-w-md">
                    Utilizing a 1080x1350 portrait ratio, these assets maximize screen real estate to capture attention in a crowded feed.
                </p>
                <p class="text-[10px] uppercase tracking-[0.4em] font-black text-sage-600 mt-6">Designed with Canva Pro.</p>
            </div>
        </div>

        {{-- ITEM 3: 1080x1440 Image Swipe --}}
        <div class="flex flex-col md:flex-row gap-16 items-center">
            <div class="md:w-1/2 w-full relative group">
                <div class="bg-gray-200 rounded-3xl overflow-hidden shadow-2xl aspect-[3/4] relative">
                    <div id="slider3" class="flex overflow-x-auto snap-x snap-mandatory scrollbar-hide h-full" onscroll="updateProgress(this, 'dots3')">
                        @for ($i = 1; $i <= 5; $i++)
                        <div class="snap-center shrink-0 w-full h-full">
                            <img src="{{ asset('photos/bsu/bsu1/' . $i . '.jpg') }}" class="w-full h-full object-cover">
                        </div>
                        @endfor
                    </div>
                    <div class="absolute bottom-6 left-1/2 -translate-x-1/2 z-20 w-11/12">
                        <div id="dots3" class="flex gap-1.5 bg-black/20 backdrop-blur-md p-2 rounded-full border border-white/10">
                            @for ($i = 0; $i < 5; $i++) 
                                <div class="progress-segment h-1.5 rounded-full transition-all duration-500 {{ $i == 0 ? 'bg-white flex-[2]' : 'bg-white/20 flex-1' }}"></div> 
                            @endfor
                        </div>
                    </div>
                </div>
            </div>

            <div class="md:w-1/2 w-full">
                <h3 class="text-4xl font-black text-gray-900 mb-6 tracking-tighter leading-tight">Extended <br>Visual Story</h3>
                <p class="text-lg text-gray-600 leading-relaxed max-w-md">
                    This series utilizes a 1080x1440 portrait canvas. By using the 3:4 ratio, these assets provide a more cinematic vertical experience.
                </p>
                <p class="text-[10px] uppercase tracking-[0.4em] font-black text-sage-600 mt-6">Designed with Canva Pro.</p>
            </div>
        </div>

        {{-- ITEM 4: More Designs --}}
        <div class="pt-24 border-t border-gray-100">
            <h2 class="text-2xl font-black text-gray-900 mb-12 uppercase tracking-widest">More Designs</h2>
            
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                {{-- Graphic 1 --}}
                <div class="bg-gray-100 rounded-3xl overflow-hidden shadow-xl aspect-[4/5]">
                    <img src="{{ asset('photos/bsu/bsu-4.jpg') }}" class="w-full h-full object-cover">
                </div>

                {{-- Graphic 2 --}}
                <div class="bg-gray-900 rounded-3xl overflow-hidden shadow-xl aspect-[4/5]">
                    <video src="{{ asset('videos/bsu/bsu-1.mp4') }}" autoplay muted loop playsinline class="w-full h-full object-cover"></video>
                </div>

                {{-- Graphic 3 --}}
                <div class="bg-gray-100 rounded-3xl overflow-hidden shadow-xl aspect-[4/5]">
                    <img src="{{ asset('photos/bsu/bsu-5.jpg') }}" class="w-full h-full object-cover">
                </div>
            </div>
        </div>

    </div>

    {{-- Script --}}
    <script>
    function updateProgress(slider, dotsId) {
        const scrollLeft = slider.scrollLeft;
        const width = slider.clientWidth;
        const activeIndex = Math.round(scrollLeft / width);
        const dotsContainer = document.getElementById(dotsId);
        const segments = dotsContainer.querySelectorAll('.progress-segment');
        segments.forEach((segment, index) => {
            if (index === activeIndex) {
                segment.classList.remove('bg-white/20', 'flex-1');
                segment.classList.add('bg-white', 'flex-[2]');
            } else {
                segment.classList.remove('bg-white', 'flex-[2]');
                segment.classList.add('bg-white/20', 'flex-1');
            }
        });
    }
    </script>
</div>
@endsection