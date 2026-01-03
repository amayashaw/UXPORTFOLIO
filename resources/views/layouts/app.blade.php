<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title') | Amaya Shaw Portfolio</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        sage: {
                            50: '#f4f7f4',
                            100: '#e7ede7',
                            400: '#87a68d',
                            500: '#8ca38c', 
                            600: '#7a8f7a',
                        }
                    }
                }
            }
        }
    </script>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700;900&display=swap');
        body { font-family: 'Inter', sans-serif; }

        /* Component: Active Navigation Link */
        .nav-active {
            color: #8ca38c !important; /* sage-500 */
            border-bottom: 2px solid #8ca38c;
            padding-bottom: 4px;
        }

        /* Component: Project Button (For Case Studies/Graphic Design pages) */
        .btn-project {
            display: inline-block;
            padding: 0.75rem 1.5rem;
            background-color: #8ca38c;
            color: white;
            border-radius: 0.5rem;
            font-size: 0.75rem;
            font-weight: 700;
            text-transform: uppercase;
            letter-spacing: 0.1em;
            transition: all 0.3s ease;
            text-decoration: none;
        }
        .btn-project:hover {
            background-color: #7a8f7a;
            transform: translateY(-2px);
        }

        /* Component: Upcoming Project Card */
        .card-upcoming {
            border: 2px dashed #e5e7eb;
            background-color: #f9fafb;
            border-radius: 1rem;
            padding: 3rem;
            text-align: center;
            opacity: 0.7;
        }
    </style>
</head>
<body class="bg-white text-gray-900 flex flex-col min-h-screen">

    <nav class="bg-white border-b border-gray-100 sticky top-0 z-50">
        <div class="container mx-auto px-4">
            <div class="flex justify-between items-center h-20">
                
                {{-- LOGO --}}
                <a href="/" class="text-2xl font-black tracking-tighter text-sage-500 uppercase">
                    Amaya Shaw
                </a>

                {{-- DESKTOP MENU --}}
                <div class="hidden md:flex space-x-8 uppercase text-xs font-bold tracking-widest items-center">
                    <a href="{{ route('case-studies') }}" class="{{ request()->routeIs('case-studies') ? 'nav-active' : 'text-gray-500' }} hover:text-sage-500 transition">Case Studies</a>
                    <a href="{{ route('graphic-design') }}" class="{{ request()->routeIs('graphic-design') ? 'nav-active' : 'text-gray-500' }} hover:text-sage-500 transition">Graphic Design</a>
                    <a href="{{ route('webpage-redesign') }}" class="{{ request()->routeIs('webpage-redesign') ? 'nav-active' : 'text-gray-500' }} hover:text-sage-500 transition">Webpage Redesign</a>
                    <a href="{{ route('personal-projects') }}" class="{{ request()->routeIs('personal-projects') ? 'nav-active' : 'text-gray-500' }} hover:text-sage-500 transition">Personal Projects</a>
                    <a href="{{ route('contact') }}" class="{{ request()->routeIs('contact') ? 'nav-active' : 'text-gray-500' }} hover:text-sage-500 transition">Contact Me</a>
                </div>

                {{-- MOBILE HAMBURGER BUTTON --}}
                <div class="md:hidden flex items-center">
                    <button id="mobile-menu-button" class="text-gray-500 hover:text-sage-500 focus:outline-none">
                        <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path id="menu-icon" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
                        </svg>
                    </button>
                </div>
            </div>

            {{-- MOBILE MENU DROPDOWN --}}
            <div id="mobile-menu" class="hidden md:hidden pb-6 space-y-4 uppercase text-center font-bold tracking-widest text-gray-600 text-sm">
                <a href="{{ route('case-studies') }}" class="block py-2 border-b border-gray-50 {{ request()->routeIs('case-studies') ? 'text-sage-500' : '' }}">Case Studies</a>
                <a href="{{ route('graphic-design') }}" class="block py-2 border-b border-gray-50 {{ request()->routeIs('graphic-design') ? 'text-sage-500' : '' }}">Graphic Design</a>
                <a href="{{ route('webpage-redesign') }}" class="block py-2 border-b border-gray-50 {{ request()->routeIs('webpage-redesign') ? 'text-sage-500' : '' }}">Webpage Redesign</a>
                <a href="{{ route('personal-projects') }}" class="block py-2 border-b border-gray-50 {{ request()->routeIs('personal-projects') ? 'text-sage-500' : '' }}">Personal Projects</a>
                <a href="{{ route('contact') }}" class="block py-2 {{ request()->routeIs('contact') ? 'text-sage-500' : '' }}">Contact Me</a>
            </div>
        </div>
    </nav>

    <div class="flex-grow">
        @yield('content')
    </div>

    <footer class="bg-white border-t border-gray-100 pt-16 pb-12 mt-20">
        <div class="container mx-auto px-4 text-center">
            <div class="mb-8">
                <p class="text-xl font-black tracking-tighter text-sage-500 uppercase mb-2">Amaya Shaw</p>
                <p class="text-gray-400 text-sm tracking-wide">UX/UI Designer & Visual Storyteller</p>
            </div>
            
            <div class="flex justify-center items-center space-x-4 mb-10 text-xs font-bold tracking-widest text-gray-500 uppercase">
                <a href="/" class="hover:text-sage-500 transition">Work</a>
                <span class="text-gray-200">|</span>
                <a href="{{ route('contact') }}" class="hover:text-sage-500 transition">Contact</a>
                <span class="text-gray-200">|</span>
                <a href="https://www.linkedin.com/in/amaya-shaw/" target="_blank" class="hover:text-sage-500 transition">LinkedIn</a>
                <span class="text-gray-200">|</span>
                <a href="https://github.com/amayashaw" target="_blank" class="hover:text-sage-500 transition">GitHub</a>
            </div>

            <div class="pt-8 border-t border-gray-50">
                <p class="text-gray-400 text-[10px] uppercase tracking-[0.2em]">
                    &copy; {{ date('Y') }} Amaya Shaw. All Rights Reserved.
                </p>
            </div>
        </div>
    </footer>

    <script>
        const btn = document.getElementById('mobile-menu-button');
        const menu = document.getElementById('mobile-menu');

        btn.addEventListener('click', () => {
            menu.classList.toggle('hidden');
        });
    </script>
</body>
</html>