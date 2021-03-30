<x-layout>
        <!-- CONTENT -->
        <div class="min-h-screen md:min-h-0 md:h-auto">
            <!-- hero boats overflowing from screen -->
            <div class="overflow-hidden 2xl:overflow-auto">
                <img id="hero-image"
                class="inline p-6 transform -translate-x-80 md:-translate-x-1/4"
                src="static\media\svg\boats\boat-rows.svg"
                width="1200"/>
            </div>
            <!-- hero text -->
            <section class="px-6 md:px-8 lg:px-16 lg:mb-28 h-96">
                <h6 class="block text-lg lg:text-xl text-gray-500">All aboard the Scholarboat!</h6>
                <h1 class="block text-2xl md:text-4xl lg:text-6xl font-bold text-blue-darkest mb-12 lg:mb-14">
                    A scholarship database to help Filipinos find opportunities for colleges in the Philippines
                </h1>
                <a href="/scholarships" class="font-bold bg-yellow p-5 lg:text-lg text-black-700 rounded-md 
                transition hover:bg-yellow-dark hover:shadow-xl
                border-b-4 border-yellow-darkest">
                    Browse Scholarships
                </a>
            </section>
        </div>
    
        <section class="px-6 md:px-8 lg:px-16 lg:h-screen">
            <!-- temp number -->
            <div class="container h-60 lg:h-4/5 bg-yellow rounded-md p-8 lg:p-16 text-right"
            style="background: url('/static/media/images/wave-boat-yellow-min.png') no-repeat bottom;
            background-size: cover;">
                <span class="text-6xl lg:text-8xl font-bold">20+</span>
                <h6 class="lg:text-xl">Scholarships in the database</h6>
            </div>
        </section>

        <footer>

        </footer>

    
    

  

</x-layout>
