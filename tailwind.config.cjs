/** @type {import('tailwindcss').Config} */
export default {
  content: [
    "./resources/views/**/*.blade.php", // Make sure this line is exactly like this
    "./resources/js/**/*.js",
    "./resources/css/**/*.css",
  ],
  theme: {
    extend: {
      colors: {
        sage: {
          600: '#6b8e73',
          700: '#54715a',
        },
      },
    },
  },
  plugins: [],
}