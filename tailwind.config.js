/** @type {import('tailwindcss').Config} config */
const config = {
  content: ['./index.php', './app/**/*.php', './resources/**/*.{php,vue,js,svg}'],
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
        'active-green': '#33FF00',
      },
      fontFamily: {
        sans: ['Geist', 'sans-serif']
      },
      animation: {
        'pulse-before': 'pulse 3s 1s linear infinite',
        'pulse-after': 'pulse 3s linear infinite',
        'pulse-shadow': '3s 2s linear infinite',
        'marquee': 'marquee 30s linear infinite',
      },
      keyframes: {
        'pulse': {
          '0%': {
            transform: 'scale(1)',
            opacity: 0.4
          },
          '100%': {
            transform: 'scale(3)',
            opacity: 0
          },
        },
        'pulse-shadow': {
          '0%': {
            boxShadow: '0 0 0 0 fade-out(#33FF00, 0.6)',
          },
          '100%': {
            boxShadow: '0 0 0 calc((3 - 1) * 0.75rem / 2) #3F00',
          },
        },
        'marquee': {
          from: {
            transform: 'translateX(0%)',
          },
          to: {
            transform: 'translateX(calc(-100% - 2.5rem))',
          },
        }
      },
    },
  },
  plugins: [],
};

export default config;
