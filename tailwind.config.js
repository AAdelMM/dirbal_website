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
    ],
    theme: {
        extend: {
          fontFamily: {
            'Zahra Arabic': ['url(./public/fonts/ZahraArabic-Regular.woff)', 'Zahra Arabic'],
          },
        },
      },
}
module.exports = {
   
  };