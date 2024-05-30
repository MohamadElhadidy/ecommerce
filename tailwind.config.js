/** @type {import('tailwindcss').Config} */
export default {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
    ],
  theme: {
      extend: {
          keyframes: {
              slide: {
                  '0%': { transform: 'translateX(0)' },
                  '100%': { transform: 'translateX(-100%)' },
              },
          },
          animation: {
              slide: 'slide 10s linear infinite',
          },
      },
  },
  plugins: [],
}

