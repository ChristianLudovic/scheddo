/** @type {import('tailwindcss').Config} */
export default {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
  ],
  theme: {
    extend: {
      colors: {
        text: "#1A1A1A",
        primary: "#322A7D",
        secondary: "#FFA101",
        tertiary: "#354052",
        gray: "#F7F8FA"
      },
      backgroundColor: {
        primary: "#322A7D",
        secondary: "#FFA101",
        gray: "#F7F8FA"
      },
      borderColor: {
        outline: "#D5D7DA"
      },
    },
  },
  plugins: [],
}

