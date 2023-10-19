/** @type {import('tailwindcss').Config} */
module.exports = {
  content: ["./app/**/*.{html,js,php}"],
  theme: {
    screens: {
      'sm': '640px',
      'md': '768px',
      'lg': '1024px',
      'xl': '1442px',
      '2xl': '1600px',
    },
    container: {
      center: true,
      padding: '12px',
    },
    extend: {
      colors: {
        transparent: 'transparent',
        current: 'currentColor',
        'primary': '#A78949',
        'secondary': '#232323',
        'tertiary': '#252E3A',
        'dark': '#282828',
        'quaternary': 'rgba(37, 46, 58, 0.74)',
        'light': '#F4F4F4',
        'grey': '#a2a2a2',
        'white': '#ffffff',
        'red': 'red'
      },
      fontFamily: {
        raleway: ['Raleway', 'sans-serif'],
        helvetica: ['Helvetica Neue', 'sans-serif'],
        'helvetica-condensed': ['Helvetica Neue Condensed', 'sans-serif'],
      }
    },
  },
  plugins: [],
}

