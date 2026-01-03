@extends('layouts.app')

@section('title', 'Contact Maya')

@section('content')
<main class="container mx-auto px-4 py-12">
    <h1 class="text-4xl font-bold mb-4 text-gray-800 text-center">Let's Connect</h1>
    <p class="text-xl text-gray-600 mb-10 text-center max-w-2xl mx-auto">
        I'm always open to discussing new opportunities, collaborations, or just talking shop about UX, design, and development.
    </p>

    <div class="max-w-xl mx-auto bg-white p-8 shadow-2xl rounded-xl">
        {{-- 1. Added id="contact-form" 2. Keep your Formspree ID in the action --}}
        <form id="contact-form" action="https://formspree.io/f/xkogznlg" method="POST" class="space-y-6">
            <div>
                <label for="name" class="block text-sm font-medium text-gray-700 mb-1">Your Name</label>
                <input type="text" id="name" name="name" required class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-sage-400 focus:border-sage-400">
            </div>

            <div>
                <label for="email" class="block text-sm font-medium text-gray-700 mb-1">Your Email</label>
                <input type="email" id="email" name="email" required class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-sage-400 focus:border-sage-400">
            </div>

            <div>
                <label for="message" class="block text-sm font-medium text-gray-700 mb-1">Message</label>
                <textarea id="message" name="message" rows="5" required class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-sage-400 focus:border-sage-400"></textarea>
            </div>

            <div class="pt-4">
                <button type="submit" id="submit-button" class="w-full bg-sage-500 text-white font-semibold py-3 px-4 rounded-lg hover:bg-sage-700 transition duration-150 shadow-md">
                    Send Message
                </button>
            </div>
            <p id="form-status" class="text-center mt-4"></p>
        </form>
    </div>
</main>

{{-- This script overrides the Formspree redirect --}}
<script>
    const form = document.getElementById("contact-form");
    
    async function handleSubmit(event) {
      event.preventDefault();
      const status = document.getElementById("form-status");
      const button = document.getElementById("submit-button");
      const data = new FormData(event.target);
      
      button.disabled = true;
      button.innerText = "Sending...";

      fetch(event.target.action, {
        method: form.method,
        body: data,
        headers: { 'Accept': 'application/json' }
      }).then(response => {
        if (response.ok) {
          // This sends them to your custom page instead of Formspree's
          window.location.href = "{{ route('thanks') }}";
        } else {
          status.innerHTML = "Oops! There was a problem submitting your form.";
        }
      }).catch(error => {
        status.innerHTML = "Oops! There was a problem submitting your form.";
      }).finally(() => {
        button.disabled = false;
        button.innerText = "Send Message";
      });
    }
    form.addEventListener("submit", handleSubmit);
</script>
@endsection