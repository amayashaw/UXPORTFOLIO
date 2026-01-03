@extends('layouts.app')

@section('title', 'Project: Portfolio | Amaya Shaw')

@section('content')
<main class="container mx-auto px-6 py-12 max-w-4xl">
    
    {{-- Back Link --}}
    <nav class="mb-12 text-xs uppercase tracking-widest font-bold">
        <a href="{{ route('personal-projects') }}" class="text-sage-500 hover:text-sage-600 transition">← Back to Projects</a>
    </nav>

    {{-- Project Header --}}
    <header class="mb-16">
        <h1 class="text-5xl font-black text-gray-900 mb-6 uppercase tracking-tighter leading-none">The Portfolio Build:<br>Code & Collaboration</h1>
        <p class="text-xl text-gray-500 leading-relaxed italic">
            Developing a custom digital showcase to master Laravel and AI-prompting workflows.
        </p>
    </header>

    {{-- Section 1: The Goal --}}
    <section class="mb-16">
        <h2 class="text-xl font-bold text-gray-800 mb-4 border-b border-sage-100 pb-2 uppercase tracking-wide">The Mission</h2>
        <div class="prose text-gray-600">
            <p>
                As I transition into more technical roles, I wanted to move beyond template-based portfolio builders. This project was a commitment to learning the <strong>Laravel</strong> framework and <strong>Tailwind CSS</strong> to create a site that is as fast as it is visually intentional.
            </p>
        </div>
    </section>

    {{-- The "Vibe" Quote --}}
    <section class="py-12 my-12 border-y border-gray-100 text-center">
        <blockquote class="text-3xl md:text-4xl font-bold italic text-gray-800 leading-tight tracking-tight max-w-2xl mx-auto">
            “The best way to understand the web is to build for it—one line of code and one prompt at a time.”
        </blockquote>
    </section>

    <div class="space-y-24">
        {{-- Section 2: AI Interaction --}}
        <article>
            <div class="flex items-center gap-4 mb-8">
                <span class="text-sage-500 font-black text-3xl">01</span>
                <h3 class="text-2xl font-bold text-gray-900 uppercase tracking-tight">AI as a Thought Partner</h3>
            </div>
            
            <div class="flex flex-col md:flex-row gap-12 items-center">
                <div class="md:w-1/2 prose text-gray-600">
                    <p>
                        A major component of this build was practicing <strong>AI Prompt Engineering</strong>. Using Gemini as a pair-programmer, I navigated complex technical hurdles—from configuring Vite and PostCSS to refining CSS Flexbox logic.
                    </p>
                    <p>
                        This iterative process taught me how to communicate technical requirements clearly and how to audit AI-generated code for performance and best practices.
                    </p>
                </div>
                <div class="md:w-1/2 bg-gray-900 rounded-3xl p-10 text-white shadow-2xl">
                    <h4 class="text-xs font-black uppercase tracking-[0.2em] mb-4 text-sage-400">Collaboration Skills</h4>
                    <ul class="space-y-4 text-sm font-medium">
                        <li class="flex items-start"><span class="text-sage-500 mr-2">→</span> Modular Blade Component Design</li>
                        <li class="flex items-start"><span class="text-sage-500 mr-2">→</span> Debugging Asset Build Pipelines</li>
                        <li class="flex items-start"><span class="text-sage-500 mr-2">→</span> Utility-First Layout Architecture</li>
                    </ul>
                </div>
            </div>
        </article>

        {{-- Section 3: Technical Growth --}}
        <article>
            <div class="flex items-center gap-4 mb-8">
                <span class="text-sage-500 font-black text-3xl">02</span>
                <h3 class="text-2xl font-bold text-gray-900 uppercase tracking-tight">Responsive Logic</h3>
            </div>
            
            <div class="space-y-10">
                <div class="bg-white p-2 rounded-2xl shadow-xl border border-gray-100 aspect-video overflow-hidden">
                    {{-- Replace with a screenshot of your site on mobile/desktop --}}
                    <div class="w-full h-full bg-sage-50 flex items-center justify-center text-sage-200 italic font-bold">
                        [Mobile & Desktop UI Comparison]
                    </div>
                </div>
                
                <div class="prose text-gray-600 max-w-none">
                    <p>
                        Every page was designed with a mobile-first mindset. By utilizing Tailwind's responsive prefixes, I ensured that the heavy visual storytelling (like the BSU motion graphics) remains impactful across all devices without sacrificing load speeds.
                    </p>
                </div>
            </div>
        </article>

        {{-- Final Synthesis --}}
        <section class="py-16 border-t border-gray-100 text-center">
            <p class="text-lg text-gray-500 leading-relaxed italic font-medium max-w-2xl mx-auto">
                Building this portfolio has been a synthesis of my design background and my developing technical toolkit, resulting in a space that truly represents my professional journey.
            </p>
        </section>
    </div>
</main>
@endsection