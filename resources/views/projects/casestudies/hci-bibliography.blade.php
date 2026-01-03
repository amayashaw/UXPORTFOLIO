@extends('layouts.app')

@section('title', 'HCI Bibliography: Safety Redesign')

@section('content')
<main class="container mx-auto px-6 py-12 max-w-4xl"> {{-- Reduced max-width for better readability --}}
    
    {{-- Breadcrumb --}}
    <nav class="mb-12 text-xs uppercase tracking-widest font-bold">
        <a href="{{ route('case-studies') }}" class="text-sage-500 hover:text-sage-600 transition">← Back to Case Studies</a>
    </nav>

    {{-- Project Header --}}
    <header class="mb-16">
        <h1 class="text-5xl font-black text-gray-900 mb-6 uppercase tracking-tighter leading-none">HCI Bibliography:<br>Safety Redesign</h1>
        <p class="text-xl text-gray-500 leading-relaxed italic">
            A deep-dive into the "Safety" interaction principle.
        </p>
    </header>

    {{-- Section: Intro --}}
    <section class="mb-16">
        <h2 class="text-xl font-bold text-gray-800 mb-4 border-b border-sage-100 pb-2 uppercase tracking-wide">The Mission</h2>
        <div class="prose prose-slate text-gray-600">
            <p>
                As a HCC student, I identified specific violations of the <strong>Safety</strong> principle on the hcibib.org site and redesigned components to restore user control and efficiency.
            </p>
        </div>
    </section>

    {{-- The Quote: Now styled like a traditional editorial blockquote --}}
    <section class="py-12 my-12 border-y border-gray-100 text-center">
        <blockquote class="text-3xl md:text-4xl font-bold italic text-gray-800 leading-tight tracking-tight max-w-3xl mx-auto">
            “Safety is the idea of protecting users from making errors and providing them with the means to recover from them.”
        </blockquote>
        <cite class="block mt-6 text-sm text-gray-400 font-black uppercase tracking-widest">— Sidas Saulynas (2025)</cite>
    </section>

    {{-- NARRATIVE: VIOLATION & REDESIGN PAIRS --}}
    <div class="space-y-24"> {{-- Reduced from 32 to 24 for tighter flow --}}

        {{-- SECTION 1: HOMEPAGE --}}
        <article>
            <div class="flex items-center gap-4 mb-8">
                <span class="text-sage-500 font-black text-3xl">01</span>
                <h3 class="text-2xl font-bold text-gray-900 uppercase tracking-tight">Homepage: Mapping & Error Traps</h3>
            </div>
            
            <div class="space-y-10">
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <img src="{{ asset('photos/case/case1/1.jpg') }}" class="w-full rounded-lg shadow-sm border border-gray-100" alt="Violation 1">
                    <img src="{{ asset('photos/case/case1/2.jpg') }}" class="w-full rounded-lg shadow-sm border border-gray-100" alt="Violation 2">
                </div>
                <p class="text-center text-[10px] text-gray-400 uppercase font-bold tracking-widest">Figure 1.1 & 1.2: Original Homepage Violations</p>

                <div class="prose text-gray-600 max-w-none">
                    <p>In <strong>Figure 1.1</strong>, the "language-changing" buttons provide feedback linked to the wrong action, representing a failure in <strong>Mapping</strong>. In <strong>Figure 1.2</strong>, a search failure leaves the user at an unexplained dead end with no recovery path.</p>
                </div>

                {{-- Redesign Image: Pulled in max-width to make it less overwhelming --}}
                <div class="max-w-3xl mx-auto">
                    <div class="bg-white p-2 rounded-xl shadow-lg border border-gray-100">
                        <img src="{{ asset('photos/case/case1/5.jpg') }}" class="w-full rounded-lg" alt="Homepage Redesign">
                    </div>
                    <p class="text-center text-[10px] text-sage-500 mt-4 uppercase font-bold tracking-widest">Figure 1.3: Integrated Homepage Redesign</p>
                    <div class="prose text-gray-600 max-w-none mt-6">
                        <p>
                            The redesign replaces the dead end with a clear error message: <strong>“"books" not found. try searching again...”</strong> This update preserves safety by providing actionable feedback and ensuring the navigation menu remains accessible.
                        </p>
                    </div>
                </div>
            </div>
        </article>

        {{-- SECTION 2: SECONDARY PAGE --}}
        <article>
            <div class="flex items-center gap-4 mb-8">
                <span class="text-sage-500 font-black text-3xl">02</span>
                <h3 class="text-2xl font-bold text-gray-900 uppercase tracking-tight">Secondary Page: Logical Constraints</h3>
            </div>
            
            <div class="space-y-10">
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <img src="{{ asset('photos/case/case1/3.jpg') }}" class="w-full rounded-lg shadow-sm border border-gray-100" alt="Secondary Violation 1">
                    <img src="{{ asset('photos/case/case1/4.jpg') }}" class="w-full rounded-lg shadow-sm border border-gray-100" alt="Secondary Violation 2">
                </div>
                <p class="text-center text-[10px] text-gray-400 uppercase font-bold tracking-widest">Figure 2.1 & 2.2: Secondary Page Analysis</p>

                <div class="prose text-gray-600 max-w-none">
                    <p>In <strong>Figure 2.1</strong>, the system provides no feedback to a user action, failing to deliver appropriate response. In <strong>Figure 2.2</strong>, consistency is poor with multiple non-working elements for the same feature.</p>
                </div>

                {{-- Redesign Images: Now matches the layout of Section 1 --}}
                <div class="max-w-3xl mx-auto">
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <div class="bg-white p-2 rounded-xl shadow-lg border border-gray-100">
                            <img src="{{ asset('photos/case/case1/6.jpg') }}" class="w-full rounded-lg" alt="Secondary Redesign 1">
                        </div>
                        <div class="bg-white p-2 rounded-xl shadow-lg border border-gray-100">
                            <img src="{{ asset('photos/case/case1/7.jpg') }}" class="w-full rounded-lg" alt="Secondary Redesign 2">
                        </div>
                    </div>
                    <p class="text-center text-[10px] text-sage-500 mt-4 uppercase font-bold tracking-widest">Figure 2.3 & 2.4: Secondary Page Solutions</p>
                    
                    <div class="prose text-gray-600 max-w-none mt-8">
                        <p>
                            The redesign resolves these issues by introducing robust error handling and removing duplicate, non-working elements. By ensuring links work properly and providing recovery paths, the new interface improves <strong>safety</strong> through reliable feedback.
                        </p>
                    </div>
                </div>
            </div>
        </article>

        {{-- Final Note: Integrated into the flow instead of feeling like a footer --}}
        <section class="py-16 border-t border-gray-100">
            <div class="max-w-2xl mx-auto text-center">
                <p class="text-lg text-gray-500 leading-relaxed italic font-medium">
                    The final synthesis ensures that all interaction points provide actionable feedback and restore user control, meeting the safety requirements of modern HCI standards.
                </p>
            </div>
        </section>

    </div>
</main>
@endsection