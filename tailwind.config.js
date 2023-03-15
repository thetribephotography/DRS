const defaultTheme = require("tailwindcss/defaultTheme");

/** @type {import('tailwindcss').Config} */
module.exports = {
    content: [
        "./vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php",
        "./storage/framework/views/*.php",
        "./resources/views/**/*.blade.php",
        "./resources/views/**/*.html",
    ],

    theme: {
        extend: {
            fontFamily: {
                poppins: "'Poppins', sans-serif",
                inter: "'Inter', sans-serif",
            },
            colors: {
                cgray: "#7A7A7A",
                clgray: "#505762",
                cmblue: "#0092CA",
                clblue: "#00B7FD",
                cdblack: "#22252A",
                clblack: "#393E46",
                gg: "#969AB8",
                gl: "#E0E2E9",
                gb: "#0381B1",
            },
            fontSize: {
                s1: "3.812rem", //61px
                s2: "3.062rem", //49px
                s3: "2.438rem", //39px
                s4: "1.938rem", //31px
                s5: "1.562rem", //25px
                s6: "1.250rem", //20px
                s7: "1.000rem", //16px
                s8: "0.812rem", //13px
                s9: "0.625rem", //10px
                s10: "0.500rem", //8px
            },
            fontWeight: {
                regular: "400",
                medium: "500",
                semibold: "600",
                bold: "700",
            },
        },
    },

    plugins: [require("@tailwindcss/forms")],
};
