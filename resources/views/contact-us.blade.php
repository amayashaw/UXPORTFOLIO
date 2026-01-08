@extends('layouts.app')

@section('title', 'Contact Maya')

@section('content')
<main class="container mx-auto px-4 py-16">
    <div class="text-center max-w-3xl mx-auto mb-12">
        <h1 class="text-4xl md:text-5xl font-extrabold mb-6 text-gray-900">Let's Connect</h1>
        <p class="text-xl text-gray-600 leading-relaxed">
      Ready to work together? Let’s turn "what if" into what’s next!
        </p>
    </div>

    <div class="max-w-xl mx-auto bg-white p-10 shadow-2xl rounded-2xl border border-gray-50">
        <form id="contact-form" action="https://formspree.io/f/xkogznlg" method="POST" class="space-y-6">
            <div>
                <label for="name" class="block text-xs font-bold uppercase tracking-widest text-gray-500 mb-2">Your Name</label>
                <input type="text" id="name" name="name" required class="w-full px-4 py-3 border border-gray-200 rounded-lg focus:ring-2 focus:ring-sage-400 focus:border-sage-400 transition-all outline-none">
            </div>

            <div>
                <label for="email" class="block text-xs font-bold uppercase tracking-widest text-gray-500 mb-2">Your Email</label>
                <input type="email" id="email" name="email" required class="w-full px-4 py-3 border border-gray-200 rounded-lg focus:ring-2 focus:ring-sage-400 focus:border-sage-400 transition-all outline-none">
            </div>

            <div>
                <label for="message" class="block text-xs font-bold uppercase tracking-widest text-gray-500 mb-2">Message</label>
                <textarea id="message" name="message" rows="5" required class="w-full px-4 py-3 border border-gray-200 rounded-lg focus:ring-2 focus:ring-sage-400 focus:border-sage-400 transition-all outline-none"></textarea>
            </div>

      <div class="mt-8">
    <button type="submit" 
        class="w-full bg-indigo-800 text-white font-bold uppercase tracking-[0.2em] text-[11px] py-4 rounded-xl 
               hover:bg-indigo-700 hover:shadow-2xl hover:shadow-indigo-500/30 
               transition-all duration-500 transform hover:-translate-y-1 active:scale-[0.98]">
        Send Message
    </button>
</div>
            </div>
            <p id="form-status" class="text-center mt-4 text-sm font-medium"></p>
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
          window.location.href = "{{ route('thanks') }}";
        } else {
          status.innerHTML = "Oops! There was a problem submitting your form.";
          status.classList.add("text-red-500");
        }
      }).catch(error => {
        status.innerHTML = "Oops! There was a problem submitting your form.";
        status.classList.add("text-red-500");
      }).finally(() => {
        button.disabled = false;
        button.innerText = "Send Message";
      });
    }
    form.addEventListener("submit", handleSubmit);
</script>
@endsection