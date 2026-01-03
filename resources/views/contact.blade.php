@extends('layouts.app')

@section('title', 'Contact Me')

@section('content')
    <h1 class="text-4xl font-extrabold text-gray-900 mb-4 text-center">Let's Connect</h1>
    <p class="text-xl text-gray-600 mb-10 text-center">I'm currently looking for new opportunities and collaborations.</p>

    <div class="max-w-xl mx-auto bg-white p-8 rounded-xl shadow-lg border border-gray-200">
        <form action="#" method="POST">
            @csrf <div class="mb-5">
                <label for="name" class="block text-sm font-medium text-gray-700 mb-1">Full Name</label>
                <input type="text" name="name" id="name" required class="w-full border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 p-3" placeholder="John Doe">
            </div>

            <div class="mb-5">
                <label for="email" class="block text-sm font-medium text-gray-700 mb-1">Email Address</label>
                <input type="email" name="email" id="email" required class="w-full border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 p-3" placeholder="you@example.com">
            </div>

            <div class="mb-6">
                <label for="message" class="block text-sm font-medium text-gray-700 mb-1">Your Message</label>
                <textarea name="message" id="message" rows="5" required class="w-full border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 p-3" placeholder="Tell me about your project..."></textarea>
            </div>

            <button type="submit" class="w-full bg-indigo-600 text-white font-semibold py-3 px-4 rounded-md hover:bg-indigo-700 transition duration-150 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2">
                Send Message
            </button>
        </form>
    </div>
@endsection