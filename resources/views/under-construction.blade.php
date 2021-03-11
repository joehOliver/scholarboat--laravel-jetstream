<!DOCTYPE html>
<html lang="en">

<head>
    <title>Under Construction | ScholarboatPH</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description"
        content="A scholarship directory and promotion website to help Filipinos easily find opportunities and scholarships for colleges in the Philippines.">
    <meta name="theme-color" content="#ffffff">
    <link rel="preload" href="./fonts/typography/WOFF2/Atkinson-Hyperlegible-Regular-102a.woff2" as="font"
        type="font/woff2" crossorigin>
    <link rel="preload" href="/assets/fonts/typography/WOFF2/Atkinson-Hyperlegible-Bold-102a.woff2" as="font"
        type="font/woff2" crossorigin>
    <link rel="preload" href="/assets/images/Under_construction-min.png" as="image" type="image/png">
    <link rel="preload" href="/assets/images/Under_construction.webp" as="image" type="image/webp">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <link href="./assets/main.css" rel="stylesheet">
    <style>
        html,
        body {
            height: 100%;
            min-height: 540px;
            background-color: #FBFBFF
        }

        a {
            text-decoration: none
        }

        a:hover {
            color: #304FFE
        }

        footer {
            margin: auto;
            text-align: center
        }

        main {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 72%
        }

        .brand {
            color: var(--palette-blue-dark);
            font-size: 1.5rem
        }

        .h-8 {
            height: 80%
        }

        .h-2 {
            height: 20%
        }

        .social-icon:hover .icon {
            fill: #1e52e3;
            transform: translateY(-3px);
            transition: 0.3s
        }

        .icon-link {
            width: 64px;
            height: 64px
        }

        .icon {
            display: inline-block;
            vertical-align: middle;
            fill: #2949A3
        }

        .under-construction {
            display: block;
            width: 360px;
            height: auto
        }

        .text-outline {
            color: transparent;
            text-shadow: none;
            -webkit-text-stroke: 1px #0121D5
        }

        .hide-text {
            opacity: 0 !important
        }

        .fadein-order-1 {
            animation: textTransition 1.5s cubic-bezier(.17, .61, .35, 1)
        }

        .fadein-order-2 {
            animation: textTransition 1.5s cubic-bezier(.17, .61, .35, 1) 0.08s
        }

        .fadein-order-3 {
            animation: textTransition 1.5s cubic-bezier(.17, .61, .35, 1) 0.16s
        }

        .fadein-order-4 {
            animation: textTransition 1.5s cubic-bezier(.17, .61, .35, 1) 0.24s
        }

        .fadein-lg {
            animation: textTransition 1.5s cubic-bezier(.17, .61, .35, 1)
        }

        @keyframes textTransition {
            from {
                transform: translate(0px, 50px);
                opacity: 0
            }

            to {
                transform: translate(0px, 0px);
                opacity: 1
            }
        }

        @keyframes imgTransition {
            from {
                transform: translate(0px, -50px);
                opacity: 0
            }

            to {
                transform: translate(0px, 0px);
                opacity: 1
            }
        }

        @media only screen and (min-width: 992px) {
            .sailing-soon {
                font-size: 3.2rem
            }

            .under-construction {
                display: block;
                width: 560px;
                height: auto
            }

            .fadein-lg {
                animation: imgTransition 1.5s cubic-bezier(.17, .61, .35, 1)
            }
        }
    </style>
</head>
<body>

</body>
</html>