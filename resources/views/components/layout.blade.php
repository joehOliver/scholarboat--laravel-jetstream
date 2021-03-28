<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ isset($title) ? $title : 'ScholarboatPH | All Aboard the Scholarboat!'}}</title>
    <meta name="description"
        content="A scholarship directory and promotion website to help Filipinos easily find opportunities and scholarships for colleges in the Philippines.">
    <title>ScholarboatPH | All Aboard!</title>
    <link rel="icon" href="static\media\favicon.ico">
    <link rel="apple-touch-icon" sizes="180x180" href="static\media\apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="static\media\favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="static\media\favicon-16x16.png">
    <link rel="manifest" href="/site.webmanifest">

    <!-- Styles -->
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
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
            transform: translateX(-30%);
            
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

            #hero-image {
                transform: translateX(-70vw);
            }
        }
    </style>

    <!-- Scripts -->
    <script src="{{ mix('js/app.js') }}" defer></script>
</head>

<body>
    <div class="font-sans">
        {{ $slot }}
    </div>
</body>

</html>
