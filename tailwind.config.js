/** @type {import('tailwindcss').Config} */
module.exports = {
  content: ["./app/**/*.{html,js,php}"],
  theme: {
    container: {
      center: true,
    },
    extend: {
      colors: {
        transparent: 'transparent',
        current: 'currentColor',
        primary: '#0094F4',
        secondary: '#32C0EE',
        tertiary: "#2e2e2e",
        grey: '#636364',
        dark: '#2F2F2F',
        light: "#ECECEB",
        'dark-grey': "#2b2b2b",
        'dark-teal': "rgba(78, 113, 124, 0.65)",
        'light-teal': "rgba(29, 118, 160, 0.59)",
      },
      fontFamily: {
        articulat: ["articulat-cf", "sans-serif"],
        "articulat-heavy": ["articulat-heavy-cf", "sans-serif"],
      },
      fontSize: {
        '45': '45px',
        '65': '65px'
      },
    },
  },
  plugins: [],
}

