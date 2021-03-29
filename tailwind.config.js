const defaultTheme = require('tailwindcss/defaultTheme');
const colors = require('tailwindcss/colors')

module.exports = {
    purge: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './vendor/laravel/jetstream/**/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
    ],

    theme: {
        extend: {
            fontFamily: {
                sans: ['Atkinson Hyperlegible', ...defaultTheme.fontFamily.sans],
            },
            fill: ['hover', 'focus'],
            borderWidth: ['hover', 'focus']
        },
        colors: {
            transparent: 'transparent',
            current: 'currentColor',

      
            black: {
              light: '#292929',
              DEFAULT: '#121212',
              dark: '#000000'
            },
            white: colors.white,
            gray: colors.coolGray,
            red: colors.red,
            yellow: {
              light: '#fdff87',
              DEFAULT: '#F9C600',
              dark: '#ebb30c',
              darkest: '#f29807'
            },
            green: colors.emerald,
            blue: {
                lightest: '#9BA6C0',
                light: '#4B5877',
                DEFAULT: '#1E52E3',
                dark: '#2949A3',
                darkest: '#011945'
            },
            boatRed: {
                DEFAULT: '#CC2728',
                dark: '#722E2E'
            },
            indigo: colors.indigo,
            purple: colors.violet,
            pink: colors.pink,
          },
    },

    variants: {
        extend: {
            opacity: ['disabled'],
        },
    },

    plugins: [require('@tailwindcss/forms'), require('@tailwindcss/typography')],
};
