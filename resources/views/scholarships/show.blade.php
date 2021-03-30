<x-layout>
    <div class="py-6">
        <div class="container 2xl:mx-auto px-6 md:px-8 lg:px-16">

            <!-- MAIN INFO CARD -->
            <section class="rounded-lg p-6 text-white bg-blue w-full mb-6">
                <h2 class="text-base text-lg">{{ $scholarship->institution->name }}</h2>
                <h1 class="text-3xl font-bold">{{ $scholarship->title }}</h1>
                <!--<ul class="loc_Cont">
                    <li class="loc_List">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 800 950" height="calc(9px + 1vw)"
                            width="calc(9px + 1vw)" xmlns:xlink="http://www.w3.org/1999/xlink">
                            <metadata>IcoFont Icons</metadata>
                            <title>location-pin</title>
                            <glyph glyph-name="location-pin" unicode="&#xef79;" horiz-adv-x="1000" />
                            <path class="loc"
                                d="M480.7 916.2c-18.899999999999977-25.700000000000045-37.39999999999998-50.80000000000007-55.19999999999999-76.20000000000005-61.19999999999999-87-117.80000000000001-176.79999999999995-163.5-273.1-22.400000000000006-47.299999999999955-43-95.5-53-147-18.900000000000006-96.59999999999997 3.5-183.39999999999998 68.89999999999998-257.29999999999995 63.10000000000002-71.10000000000002 143.90000000000003-103.70000000000002 238.70000000000005-99.80000000000003 132.29999999999995 5.5 247.79999999999995 105.00000000000001 274.69999999999993 235.09999999999997 11 53.400000000000034 7.400000000000091 105.60000000000002-9 157.60000000000002-32.89999999999998 103.39999999999998-84.39999999999998 197.5-143.29999999999995 287.70000000000005-42.10000000000002 64.39999999999998-87.89999999999998 126.39999999999998-132.10000000000002 189.39999999999998-1.099999999999966 1.5-2.1999999999999886 2.8999999999999773-3.6999999999999886 4.600000000000023-2.1999999999999886 2.3999999999999773-12.199999999999989-7-22.5-21z m164.8-551.8000000000001c3.8999999999999773-75.29999999999995-58.60000000000002-145.49999999999997-133.29999999999995-149.59999999999997-86.20000000000005-4.800000000000011-153.00000000000006 55.19999999999999-157.60000000000002 141.89999999999998-4 75.30000000000001 59.89999999999998 145.2 136.2 148.8 83.90000000000003 4 150.40000000000003-56.80000000000001 154.7-141.10000000000002z" />
                        </svg>
                    </li>
                    <li class="loc_List">Region XII (SOCCSKSARGEN)</li>
                </ul>-->

                <div class="flex flex-col lg:flex-row pt-8">
                    <div class="pb-3 lg:pr-6 lg:pb-0">
                        <h4 class="text-white text-opacity-80">Application Status</h4>
                        <p class="text-2xl font-bold text-white">
                            {{ is_null($scholarship->open_date) ? 'Closed' : $scholarship->close_date }}
                        </p>
                    </div>
                    <div class="pb-3 lg:pr-6 lg:pb-0">
                        <h4 class="text-white text-opacity-80">Deadline of Application </h4>
                        <p class="text-2xl font-bold text-white">
                            {{ is_null($scholarship->close_date) ? 'No date' : $scholarship->close_date }}
                        </p>
                    </div>
                    <div class="pb-3 lg:pr-6 lg:pb-0">
                        <h4 class="text-white text-opacity-80">Go to Website</h4>
                        <a  class="text-2xl font-bold text-white" target="_blank" rel="noopener noreferrer" href="{{ $scholarship->link }}">
                            {{ $scholarship->link }}
                        </a>
                    </div>
                </div>
            </section>

            <!-- PARAGRAPH SECTIONS -->
            <section class="py-8">
                <h3 class="text-md lg:text-base text-gray-500">SUMMARY</h3>
                <p class="text-lg lg:text-base pt-3 text-black">{{ $scholarship->description }}</p>
            </section>

            <!--
            <div class="details">
                <h1>OFFERS</h1>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed elit enim, mollis sed luctus eu,
                    blandit eu mauris. Integer ut blandit urna. Cras lacinia consequat augue. Proin elementum
                    iaculis mollis. Quisque in urna sollicitudin, gravida lacus ac, interdum nisi. Sed condimentum ex
                    at erat ultrices, vel pulvinar tortor tempus. Nulla lobortis felis eu semper pharetra. Maecenas
                    ut quam viverra, pretium felis sed, aliquam lacus. Integer non enim ac ex viverra sollicitudin.</p>
            </div>
            <div class="details">
                <h1>REQUIREMENTS</h1>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed elit enim, mollis sed luctus eu,
                    blandit eu mauris. Integer ut blandit urna. Cras lacinia consequat augue. Proin elementum
                    iaculis mollis. Quisque in urna sollicitudin, gravida lacus ac, interdum nisi. Sed condimentum ex
                    at erat ultrices, vel pulvinar tortor tempus. Nulla lobortis felis eu semper pharetra. Maecenas
                    ut quam viverra, pretium felis sed, aliquam lacus. Integer non enim ac ex viverra sollicitudin.</p>
            </div>
            <div class="contact">
                <h1>CONTACT</h1>
                <p></p>
            </div>
        -->
        </div>
    </div>
</x-layout>
