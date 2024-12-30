/** @type {import('tailwindcss').Config} */
import fluid, { extract, screens, fontSize } from 'fluid-tailwind';

module.exports = {
  content: {
    files: [
      "./public/**/*.{html,js,php}",
      "./app/**/*.{html,js,php}",
    ],
    extract, // Menambahkan extractor bawaan dari plugin fluid-tailwind
  },
  theme: {
    screens, // Default breakpoints Tailwind (dalam rem)
    fontSize, // Default font sizes Tailwind (dalam rem, termasuk line-height)
    extend: {
      colors: {
        main: {
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
        },
      },
    },
  },
  plugins: [
    fluid, // Aktifkan plugin fluid-tailwind
  ],
};
