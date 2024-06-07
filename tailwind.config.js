/** @type {import('tailwindcss').Config} */
export default {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
    "./content/**/*.md",
  ],
    theme: {
        fontWeight: {
            normal: 400,
            medium: 500,
            bold: 800,
        },
        extend: {
            colors: {
                primary: {
                    lightCyan: "#cee3e9",
                    neonGreen: "#52ffa8",
                },
                neutral: {
                    grayishBlue: "#4e5d73",
                    darkGrayishBlue: "#323a49",
                    darkBlue: "#1f2632",
                }
            },
            fontFamily: {
                manrope : ["Manrope", "sans-serif"],
            },
            boxShadow: {
                'custom': '0 0 32px  hsl(150, 100%, 66%)',
              },
        },
    },
    plugins: [],
    };
