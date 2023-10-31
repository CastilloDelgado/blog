import defaultTheme from 'tailwindcss/defaultTheme';
import forms from '@tailwindcss/forms';

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
        './resources/js/**/*.vue',
    ],

    theme: {
        fontFamily: {
            'sans': ['acumin-pro', 'sans'],
        },
        fontWeight: {
            normal: '100',
            bold: '500',
        },
        extend: {
            colors: {
                primary: {
                    50: "#FBF8FB",
                    100: "#F6F0F7",
                    200: "#EBE0EE",
                    300: "#DDC7E0",
                    400: "#C9A5CD", 
                    500: "#AF80B5",
                    600: "#936198",
                    700: "#7A4E7D",
                    800: "#654167",
                    900: "#4C334D",
                    950: "#341D35"
                },
                light: {
                    50: "#FAF7F6",
                    100: "#F5EDEB",
                    200: "#EDDEDB",
                    300: "#D8BBB4",
                    400: "#CBA79E",
                    500: "#B6887D",
                    600: "#A06E62",
                    700: "#855A50",
                    800: "#6F4D45",
                    900: "#5F443D",
                    950: "#31221E"
                },
                secondary: {
                    50: "#FBF0EF",
                    100: "#F7E2DE",
                    200: "#F0C8C2",
                    300: "#E7ABA1",
                    400: "#E09185",
                    500: "#D87464",
                    600: "#CC4833",
                    700: "#973526",
                    800: "#66241A",
                    900: "#31110C",
                    950: "#180906"
                },
                dark: {
                    50: "#EDEEF2",
                    100: "#DCDEE5",
                    200: "#B6BAC9",
                    300: "#9299AF",
                    400: "#6C7593",
                    500: "#52596F",
                    600: "#414658",
                    700: "#323643",
                    800: "#21232C",
                    900: "#111317",
                    950: "#09090C"
                }
            },
        },
    },

    plugins: [forms],
};
