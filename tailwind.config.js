/** @type {import('tailwindcss').Config} */
export default {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
    ],
  theme: {
    extend: {
        colors : {
            "off-white" : "#ffffdb",
            "my-red" : '#aa0000',
            "my-green": '#55AA00',
        }
    },
  },
  plugins: [],
}

