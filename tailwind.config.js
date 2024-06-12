import preset from './vendor/filament/support/tailwind.config.preset'
/** @type {import('tailwindcss').Config} */
export default {
    presets: [preset],
    content: [
        "./app/Filament/**/*.php",
        "./resources/views/**/*.blade.php",
        "./vendor/filament/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
        "./public/**/*.js",
        "./public/**/*.css",
    ],
    theme: {
        extend: {
          fontFamily: {
            'Zahra Arabic': ['url(./public/fonts/ZahraArabic-Regular.woff)', 'Zahra Arabic'],
          },
        },
      },
      screens: {
        '3xl': '1920px',
        '4xl': '2560px',
        '5xl': '3840px'
     }
}
module.exports = {
   
  };