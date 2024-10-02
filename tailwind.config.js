import defaultTheme from 'tailwindcss/defaultTheme';
import forms from '@tailwindcss/forms';

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
        './resources/js/**/*.js', // Include JS files for any potential custom JavaScript
    ],

    theme: {
        extend: {
            fontFamily: {
                sans: ['Figtree', ...defaultTheme.fontFamily.sans],
            },
            colors: {
                primary: {
                    light: '#4f46e5',  // Custom light primary color
                    DEFAULT: '#3b82f6', // Default primary color (for buttons, highlights, etc.)
                    dark: '#1e40af',    // Custom dark primary color
                },
            },
        },
    },

    darkMode: 'class', // Enable dark mode using the class strategy

    plugins: [forms],
};
