/** @type {import('tailwindcss').Config} */
module.exports = {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
    ],
    theme: {
        extend: {
            fontFamily: {
                Poppins: ["Poppins, sans-serif"],
            },
            colors: {
                "bookmark-blue": "#242A45",
                "bookmark-white": "#ffffff",
            },
            container: {
                center: true,
                padding: "1rem",
            },
            screens: {
                lg: "1124px",
                xl: "1124px",
                "2xl": "1124px",
            },
        },
    },
    plugins: [],
};
