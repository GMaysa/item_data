/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    "./public/**/*.{html,js,php}",
    "./app/**/*.{html,js,php}"
  ],
  theme: {
    extend: {
      colors:{
        'main': {
          50: '#F1F8FE',
          100: '#E2F0FC',
          200: '#BEE1F9',
          300: '#84C8F5',
          400: '#43ACED',
          500: '#1A91DD',
          600: '#0D73BC',
          700: '#0C5C98',
          800: '#0F5385',
          900: '#124368',
          950: '#0C2A45',
        }
      }
    },
  },
  plugins: [],
}
