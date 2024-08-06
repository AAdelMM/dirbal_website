import preset from './vendor/filament/support/tailwind.config.preset'
/** @type {import('tailwindcss').Config} */
export default {
    presets: [preset],
    content: [
      "./src/**/*.{js,jsx,ts,tsx}",
        "./app/Filament/**/*.php",
        "./resources/views/**/*.blade.php",
        "./vendor/filament/**/*.blade.php",
        "./vendor/awcodes/filament-tiptap-editor/resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
        "./public/js/*.js",
        "./public/css/*.css",
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
