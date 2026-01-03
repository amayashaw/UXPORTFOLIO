@extends('layouts.app')

@section('title', 'Thank You')

@section('content')
<main class="container mx-auto px-4 py-24 text-center">
    <h1 class="text-4xl font-bold mb-4 text-gray-800">Message Sent!</h1>
    <p class="text-xl text-gray-600 mb-8">Thanks for reaching out, Maya. I'll get back to you as soon as I can!</p>
    <a href="{{ route('home') }}" class="bg-sage-500 text-white px-6 py-3 rounded-lg font-bold hover:bg-sage-600 transition">
        Back to Portfolio
    </a>
</main>
@endsection