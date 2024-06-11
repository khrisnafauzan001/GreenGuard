/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    "./src/**/*.{html,js}",
  ],
  theme: {
    extend: {
      colors: {
        'primary-50': '#e6f5f3' ,
        'primary-100': '#b0deda' ,
        'primary-200': '#8acfc8' ,
        'primary-300': '#54b9af' ,
        'primary-400': '#33aba0' ,
        'primary-500': '#009688' ,
        'primary-600': '#00897c' ,
        'primary-700': '#006b61' ,
        'primary-800': '#00534b' ,
        'primary-900': '#003f39' ,
      },
      fontFamily: {
        poppins: ['Poppins', 'sans-serif'],
      },
      borderRadius: {
        'lg-10': '10px',
      },
      margin: {
        '18': '72px',
        '32': '132px',
      },
      width: {
        '85': '342px',
        '87': '366px',
      },
      maxWidth: {
        '87': '366px',
      },
      height: {
        '62': '247px',
        '75': '315px',
      },
      maxHeight: {
        '75': '315px',
      },
      space: {
        '18': '77px',
      },
      gap: {
        '18': '77px',
      }
    },
  },
  plugins: [],
}

