import defaultTheme from "tailwindcss/defaultTheme";

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        "./vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php",
        "./storage/framework/views/*.php",
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
    ],
    theme: {
        extend: {
            fontFamily: {
                sans: ["Roboto", ...defaultTheme.fontFamily.sans],
                aileron: ["Aileron", "sans-serif"],
            },
            colors: {
                Primary: "#222831",
                Secondary: "#E7E8D1",
                Background: "#222831",
                Depressed: "#D1D7E0",
                DepressedSecondary: "#BDBDBD",
                Border: "#BDBDBD",
                Folder: "#0D73CC",
            },
        },
    },
    plugins: [],
};
