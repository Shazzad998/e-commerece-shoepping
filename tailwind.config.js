const defaultTheme = require("tailwindcss/defaultTheme");
const colors = require("tailwindcss/colors");

module.exports = {
    mode: "jit",
    purge: [
        "./vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php",
        "./vendor/laravel/jetstream/**/*.blade.php",
        "./storage/framework/views/*.php",
        "./resources/views/**/*.blade.php",
    ],

    theme: {
        screens: {
            xs: "475px",
            ...defaultTheme.screens,
        },
        extend: {
            colors: {
                gray: colors.gray,
            },
            fontFamily: {
                sans: ["Nunito", ...defaultTheme.fontFamily.sans],
                nunito: ["nunito", "sans-serif"],

                cus: ["Roboto", "sans-serif"],
            },
            animation: {
                wiggle: "wiggle 5s ease-in-out infinite",
            },
            keyframes: {
                wiggle: {
                    "0%, 100%": { transform: "rotate(-25deg)" },
                    "50%": { transform: "rotate(-20deg)" },
                },
            },
        },
    },

    variants: {
        extend: {},
    },

    plugins: [
        require("@tailwindcss/forms"),
        require("@tailwindcss/typography"),
    ],
};
