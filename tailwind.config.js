/** @type {import('tailwindcss').Config} */
export default {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
    './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
  ],
  theme: {
    extend: {
      colors:{
        'primario': '#5680C1',
        'secundario': '#58BEBE',
        'terciario': '#599EC0',
        'fondo': '#FEFEFE',
        'tL': '#3A6EC0',
        'tG': '#3F5270',
        'subtitulos': '#222222',
      }
    },
  },
  plugins: [],
}

