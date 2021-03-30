<x-layout>
    <x-slot name="header">
        <h1 class="font-bold text-5xl lg:text-6xl text-blue-darkest">
            Scholarships
        </h1>
    </x-slot>

    <div class="py-6">
        <div class="container 2xl:mx-auto px-6 md:px-8 lg:px-16">
            <div class="grid grid-cols-1 lg:grid-cols-3 gap-2">
                @foreach ($scholarships as $scholarship)
                    <section class="rounded-lg p-8 hover:shadow-lg w-100 border border-gray-300 transition">
                        <h4 class="text-base font-bold text-gray-600">{{ $scholarship->institution->name }}</h4>
                        <h2 class="text-2xl font-bold text-black">{{ $scholarship->title }}</h2>
                        <!--
                            TAGS UNDER DEVELOPMENT
                            <div class="flex flex-row pt-2">
                            <a href="#" class="px-4 py-3 mr-2 rounded-full bg-gray-200 text-gray-500 hover:shadow-md transition">Lorem ipsum</a>
                            <a href="#" class="px-4 py-3 mr-2 rounded-full bg-gray-200 text-gray-500 hover:shadow-md transition">Tag 2</a>
                            <a href="#" class="px-4 py-3 mr-2 rounded-full bg-gray-200 text-gray-500 hover:shadow-md transition">Tag 3</a>
                        </div>
                        -->
                        <p class="pt-8 pb-4 text-base text-gray-500">{{ $scholarship->description }}
                        </p>
                        <div class="flex flex-row">
                            <a href="{{ $scholarship->path() }}">
                                <div class="rounded-lg p-4 bg-blue-dark text-white mr-2 hover:shadow-lg hover:bg-blue-darkest transition">
                                    More information
                                </div>
                            </a>
                            <a target="_blank" rel="noopener noreferrer" href="{{ $scholarship->link }}">
                                <div class="rounded-lg p-4 border border-gray-600 text-black mr-2 hover:border-blue hover:text-blue transition">
                                    Visit webpage
                                </div>
                            </a>
                        </div>
                    </section>
                    
                @endforeach
                @empty($scholarships)
                    <section class="rounded-lg p-8 hover:shadow-lg w-100 border border-gray-300 transition">
                        <h4 class="text-base font-bold text-gray-600">University goes here</h4>
                        <h2 class="text-2xl font-bold text-black">Scholarship grant goes here</h2>
                        <div class="flex flex-row pt-2">
                            <a href="#" class="px-4 py-3 mr-2 rounded-full bg-gray-200 text-gray-500 hover:shadow-md transition">Lorem ipsum</a>
                            <a href="#" class="px-4 py-3 mr-2 rounded-full bg-gray-200 text-gray-500 hover:shadow-md transition">Tag 2</a>
                            <a href="#" class="px-4 py-3 mr-2 rounded-full bg-gray-200 text-gray-500 hover:shadow-md transition">Tag 3</a>
                        </div>
                        <p class="pt-8 pb-4 text-base text-gray-500">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed elit
                            enim, mollis sed luctus eu, blandit eu mauris. Integer ut blandit urna.
                        </p>
                        <div class="flex flex-row">
                            <a href="#">
                                <div class="rounded-lg p-4 bg-blue-dark text-white mr-2 hover:shadow-lg hover:bg-blue-darkest transition">
                                    More information
                                </div>
                            </a>
                            <a href="#">
                                <div class="rounded-lg p-4 border border-gray-600 text-black mr-2 hover:border-blue hover:text-blue transition">
                                    Visit webpage
                                </div>
                            </a>
                        </div>
                    </section>
                    
                @endempty
            </div>
            
        </div>
    </div>
</x-layout>