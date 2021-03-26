<x-layout>
    <!-- HEADER -->
    <x-nav />

    <!-- CONTENT -->

    <!-- hero boats -->
    <div class="overflow-hidden">
        <img id="hero-image" class="p-6 z-10" src="static\media\svg\boats\boat-rows.svg" width="1200"/>
    </div>
    <main class="px-6">
        <section class="h-80">
            <!-- hero text -->
            <div class="container py-6">
                <h6 class="text-base text-gray-500">All aboard the Scholarboat!</h6>
                <h1 class="text-2xl font-bold text-blue-darkest pb-12">
                    A scholarship database to help Filipinos find opportunities for colleges in the Philippines
                </h1>
                <a href="/scholarships" class="font-bold bg-yellow p-4 text-black-700 rounded-md">
                    Browse Scholarships
                </a>
            </div>
        </section>

        <section>
            <!-- temp number -->
            <div class="container h-60 bg-yellow rounded-md"
            style="background: url('/static/media/images/wave-boat-yellow-min.png') no-repeat bottom;
            background-size: cover;">
                <span class="text-7
                xl font-bold">20+</span>
                <h6>Scholarships in the database</h6>
            </div>
        </section>
    </main>

    <footer>

    </footer>

</x-layout>
