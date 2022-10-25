const defaultTheme = require('tailwindcss/defaultTheme');

/** @type {import('tailwindcss').Config} */
module.exports = {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
    ],

    theme: {
        extend: {
            backgroundImage: {
                'auth-image': "asset('/images/authbg.png')",
              },
        },
        fontFamily: {
            'poppins': ['Poppins','ui-sans-serif'],
            'inter': ['Inter','ui-sans-serif'],
          },
          colors: {
            transparent: 'transparent',
            current: 'currentColor',
            'black': '#141125',
            'dblue': '#4361EE',
            'mblue': '#0096C7',
            'blue': '#0582CA',
            'lblue': '#E9F7FF',
            'white': '#FFFFFF',
            'gray': '#CBD5E1',
            'red': '#EF4444',
          },
    },

    plugins: [require('@tailwindcss/forms')],
};
