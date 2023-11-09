/** @type {import('tailwindcss').Config} config */
const config = {
  content: ['./index.php', './app/**/*.php', './resources/**/*.{php,vue,js}'],
  theme: {
    screens: {
      sm: '640px',
      md: '768px',
      lg: '1024px',
      xl: '1280px',
      '2xl': '1440px',
      '3xl': '1600px',
      '4xl': '1920px',
    },
    container: {
      center: true,
      padding: '1rem',
    },
    extend: {
      colors: {
        'dark': '#0E0E0E',
      },
      fontFamily: {
        sans: ['Geist', 'sans-serif']
      }
    },
  },
  plugins: [],
};

export default config;
