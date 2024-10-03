/** @type {import('tailwindcss').Config} */
export default {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
    ],
    theme: {
        extend: {
            gridTemplateColumns: {
                minmax220: "repeat(auto-fill, minmax(200px, 1fr))",
            },
            fontSize: {
                xxs: ["0.625rem", "0.875rem"],
                10: [
                    "0.625rem",
                    {
                        lineHeight: "0.875rem",
                    },
                ],
                12: [
                    "0.75rem",
                    {
                        lineHeight: "1rem",
                    },
                ],
                14: [
                    "0.875rem",
                    {
                        lineHeight: "1.25rem",
                        letterSpacing: "-0.006rem",
                    },
                ],
                16: [
                    "1rem",
                    {
                        lineHeight: "1.5rem",
                        letterSpacing: "-0.013rem",
                    },
                ],
                24: [
                    "1.5rem",
                    {
                        lineHeight: "2rem",
                        letterSpacing: "-0.043rem",
                    },
                ],
                32: [
                    "2rem",
                    {
                        lineHeight: "2.25rem",
                        letterSpacing: "-0.074rem",
                    },
                ],
                48: [
                    "3rem",
                    {
                        lineHeight: "3.5rem",
                        letterSpacing: "-0.125rem",
                    },
                ],
                64: [
                    "4rem",
                    {
                        lineHeight: "4rem",
                        letterSpacing: "-0.156rem",
                    },
                ],
            },
            colors: {
                primary1: "#9f01ae",
                primary2: "#6101a0",
            },
        },
        screens: {
            sm: "480px",
            md: "768px",
            lg: "960px",
            smallDesktop: "1024px",
            xl: "1280px",
            xxl: "1440px",
            xxxl: "1920px",
        },
    },
    plugins: [],
};
