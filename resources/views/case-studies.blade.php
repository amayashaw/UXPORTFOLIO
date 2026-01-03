@extends('layouts.app')

@section('title', 'Case Studies')

@section('content')
<main class="container mx-auto px-4 py-16">
    <div class="max-w-4xl">
        <h1 class="text-4xl md:text-5xl font-extrabold mb-6 text-gray-900 leading-tight">Case Studies</h1>
        <p class="mb-12 text-xl text-gray-600 leading-relaxed">
            In-depth explorations of user experience problems, psychological principles, and strategic design solutions.
        </p>
    </div>

    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-10">
        
        {{-- PROJECT CARD: HCI BIBLIOGRAPHY --}}
        <div class="flex flex-col bg-white rounded-xl shadow-lg hover:shadow-2xl transition duration-300 overflow-hidden border border-gray-100">
            <div class="pt-6 px-6"> 
                <img class="w-full h-56 object-cover rounded-lg shadow-sm" 
                     src="{{ asset('photos/case/case1/5.jpg') }}" 
                     alt="HCI Bibliography Redesign">
            </div>
            <div class="p-8 flex flex-col flex-grow">
                <span class="inline-block bg-sage-50 text-sage-600 text-[10px] font-bold px-3 py-1 rounded-full uppercase tracking-widest mb-4 w-fit">HCI / Interaction Design</span>
                <h2 class="text-2xl font-bold text-gray-900 mb-3">HCI Bibliography</h2>
                <p class="text-gray-600 mb-6 flex-grow">A technical analysis and redesign focused on the Safety principle and error recovery paths.</p>
                
                <div>
                    <a href="{{ route('hci-bibliography') }}" class="btn-project">
                        View Case Study
                    </a>
                </div>
            </div>
        </div>

        {{-- UPCOMING CASE STUDY SLOTS --}}
        <div class="card-upcoming flex flex-col items-center justify-center min-h-[450px]">
            <div class="w-16 h-16 bg-gray-100 rounded-full flex items-center justify-center mb-4">
                <svg class="w-8 h-8 text-gray-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6"></path>
                </svg>
            </div>
            <h2 class="text-xl font-bold text-gray-400 mb-2 uppercase tracking-widest">Upcoming</h2>
            <p class="text-gray-400 text-sm">New research in progress</p>
        </div>
        
        <div class="card-upcoming flex flex-col items-center justify-center min-h-[450px]">
            <div class="w-16 h-16 bg-gray-100 rounded-full flex items-center justify-center mb-4">
                <svg class="w-8 h-8 text-gray-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6"></path>
                </svg>
            </div>
            <h2 class="text-xl font-bold text-gray-400 mb-2 uppercase tracking-widest">Upcoming</h2>
            <p class="text-gray-400 text-sm">New research in progress</p>
        </div>

    </div>
</main>
@endsection