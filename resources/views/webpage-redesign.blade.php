@extends('layouts.app')

@section('title', 'Webpage Redesigns')

@section('content')
<main class="container mx-auto px-4 py-8">
    <h1 class="text-4xl font-bold mb-8 text-gray-800">Webpage Redesigns</h1>
    <p class="mb-10 text-xl text-gray-600">Identifying user experience issues and designing solutions to improve usability.</p>

    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
        
        {{-- PROJECT CARD 1: San Diego Coupons --}}
        <a href="{{ route('san-diego-coupons') }}" class="block bg-white rounded-xl shadow-lg hover:shadow-2xl hover:scale-[1.02] transition duration-300 overflow-hidden">
            <img class="w-full h-48 object-cover" src="{{ asset('photos/web/web1/profile.png') }}" alt="San Diego Coupons Redesign">
            <div class="p-6">
                <span class="inline-block bg-indigo-100 text-indigo-800 text-xs font-semibold px-3 py-1 rounded-full uppercase mb-2">HCI Lab</span>
                <h2 class="text-2xl font-semibold text-gray-800 mb-2">San Diego Coupons</h2>
                <p class="text-gray-600">Improving learning and familiarity by reorganizing the site's navigation hierarchy.</p>
                <p class="mt-4 text-sage-500 font-medium">View Project →</p>
            </div>
        </a>

        {{-- Upcoming Cards --}}
        <div class="bg-gray-50 rounded-xl border-2 border-dashed border-gray-200 flex flex-col items-center justify-center min-h-[400px]">
            <h2 class="text-xl font-semibold text-gray-400 uppercase tracking-widest">Upcoming</h2>
        </div>
        <div class="bg-gray-50 rounded-xl border-2 border-dashed border-gray-200 flex flex-col items-center justify-center min-h-[400px]">
            <h2 class="text-xl font-semibold text-gray-400 uppercase tracking-widest">Upcoming</h2>
        </div>

    </div>
</main>
@endsection