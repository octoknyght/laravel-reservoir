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
                "reservoir-blue": "#242A45",
                "reservoir-white": "#F7F7F7",
                "reservoir-red": "#FA5959",
                "reservoir-grey": "#9194A2",
            },
            container: {
                center: true,
                padding: "1rem",
                screens: {
                    lg: "1124px",
                    xl: "1124px",
                    "2xl": "1124px",
                },
            },
        },
    },
    plugins: [],
};
