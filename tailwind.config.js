import defaultTheme from 'tailwindcss/defaultTheme';
import forms from '@tailwindcss/forms';

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
    ],

    theme: {
        extend: {
            fontFamily: {
                sans: ['Figtree', ...defaultTheme.fontFamily.sans],
            },
            colors:{
                dark: '#40423F',
                light: '#D9D9D9',
                light2: '#7C7C7C',
                lightDark: '#4E4E4E',
                lightDark2: '#848484',
                superLightDark: '#666865',
                orangeCustom: '#FC7A56',
            },
            screens: {
                'sss': '490px',
                'mdm': '908px',
                'xls': '1380px',
                'xlm': '1495px'
            }
        },
    },

    plugins: [forms],
};
