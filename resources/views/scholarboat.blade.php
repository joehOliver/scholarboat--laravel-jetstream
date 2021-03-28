<x-layout>
    <!-- HEADER -->
    <x-nav />

    <!-- CONTENT -->

    <!-- hero boats -->
        <div class="overflow-hidden">
            <img id="hero-image" class="p-6 z-10" src="static\media\svg\boats\boat-rows.svg" width="1200"/>
        </div>
        <main class="px-6 md:px-8 lg:px-12 h-screen">
            <!-- hero text -->
            <div class="container py-6">
                <h6 class="text-base lg:text-xl text-gray-500">All aboard the Scholarboat!</h6>
                <h1 class="text-2xl md:text-4xl lg:text-6xl font-bold text-blue-darkest pb-12">
                    A scholarship database to help Filipinos find opportunities for colleges in the Philippines
                </h1>
                <a href="/scholarships" class="font-bold bg-yellow p-4 text-black-700 rounded-md 
                transition hover:bg-yellow-dark hover:shadow-xl">
                    Browse Scholarships
                </a>
            </div>
        </main>
    

    <section class="px-6 md:px-8 lg:px-12 lg:h-screen">
        <!-- temp number -->
        <div class="container h-60 lg:h-4/5 bg-yellow rounded-md p-8 lg:p-16 text-right"
        style="background: url('/static/media/images/wave-boat-yellow-min.png') no-repeat bottom;
        background-size: cover;">
            <span class="text-3xl md:text-5xl lg:text-8xl font-bold">20+</span>
            <h6 class="lg:text-xl">Scholarships in the database</h6>
        </div>
    </section>

    <footer>

    </footer>

</x-layout>
