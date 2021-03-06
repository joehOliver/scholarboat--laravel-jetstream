<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ isset($title) ? $title : 'ScholarboatPH | All Aboard the Scholarboat!'}}</title>
    <meta name="description"
        content="A scholarship directory and promotion website to help Filipinos easily find opportunities and scholarships for colleges in the Philippines.">
    <link rel="icon" href="static\media\favicon.ico">
    <link rel="apple-touch-icon" sizes="180x180" href="static\media\apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="static\media\favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="static\media\favicon-16x16.png">
    <link rel="manifest" href="/site.webmanifest">

    <!-- Styles -->
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
    {{ isset($customCSS) ? $customCSS : '' }}
    <style>
        :root {
            --duration: .6s;
        }

        #menu-button {
            -webkit-tap-highlight-color: transparent;
            -webkit-touch-callout: none;
            user-select: none;
            touch-action: manipulation;
        }

        #hero-image {
            min-width: 1200px;
        }

        @media (max-width: 640px) {
            #menu-open {
                transform: translateX(-110vw);
                will-change: transform;
                transition: transform var(--duration) cubic-bezier(0.16, 1, 0.3, 1),
                    visibility 0s linear var(--duration);
            }

            #menu-open:target {
                visibility: visible;
                transform: translateX(0);
                transition: transform var(--duration) cubic-bezier(0.16, 1, 0.3, 1);
            }
        }

    </style>

    <!-- Scripts -->
    <script src="{{ mix('js/app.js') }}" defer></script>
</head>

<body class="grid grid-cols-1 2xl:container 2xl:m-auto font-sans">
    <x-sidenav />
    <main>
        <x-nav />
        @if (isset($header))
            <div class="px-6 py-2 mt-4 md:px-8 lg:px-16">
                {{ $header }}
            </div>
        @endif
        {{ $slot }}
    </main>
    <x-footer />

    <script>
        //close sidenav with escape key
        const sidenav = document.querySelector('#menu-open');
        sidenav.addEventListener('keyup', e => {
            if (e.code === 'Escape') {
                document.location.hash = "";
            }
        });

        const closeNav = document.querySelector('#menu-close');
        const openNav = document.querySelector('#menu-button');

        sidenav.addEventListener('transitionend', e => {
            if (e.propertyName !== 'transform') {
                return;
            }
            const isOpen = document.location.hash === '#menu-open';
            isOpen ? closeNav.focus() : openNav.focus();
        });
    </script>
</body>
</html>
