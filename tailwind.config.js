/** @type {import('tailwindcss').Config} */
export default {
  content: [
    './storage/framework/views/*.php',
    './resources/views/**/*.blade.php',
    './app/Http/Livewire/**/*.php',
  ],
  theme: {
    extend: {
       colors: {
        'gold': '#FFD700',
      },
    },
  },
  plugins: [],
}

module.exports = {
  content: [
    './storage/framework/views/*.php',
    './resources/views/**/*.blade.php',
    './app/Http/Livewire/**/*.php',
  ],
  theme: {
    extend: { 
      colors: {
         'gold': '#FFD700',
    },},
  },
  plugins: [
    require('@tailwindcss/typography'),
  ],
}