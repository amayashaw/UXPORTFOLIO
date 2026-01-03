@props(['name', 'description', 'date', 'type', 'image'])

<div class="project-card bg-white border border-gray-200 rounded-lg overflow-hidden shadow-sm hover:shadow-lg transition duration-300 ease-in-out">
    <a href="#">
        <div class="w-full h-48 bg-gray-200 flex items-center justify-center text-gray-500">
            <img src="{{ $image }}" alt="{{ $name }} Cover Image" class="w-full h-full object-cover">
        </div>
    </a>

    <div class="p-6">
        <h3 class="text-xl font-semibold mb-2 text-gray-900">{{ $name }}</h3>
        
        <p class="text-gray-600 mb-4">{{ $description }}</p>

        <div class="flex flex-wrap gap-2 text-sm">
            <span class="bg-indigo-100 text-indigo-700 px-3 py-1 rounded-full font-medium">
                Type: {{ $type }}
            </span>
            <span class="bg-gray-100 text-gray-500 px-3 py-1 rounded-full font-medium">
                Date: {{ $date }}
            </span>
        </div>
    </div>
</div>