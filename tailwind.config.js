/** @type {import('tailwindcss').Config} */
export default {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
    ],
  theme: {
    extend: {
        colors : {
            "off-white" : "#F9EFDB",
            "my-red" : '#EE4E4E',
            "my-green": '#A1DD70',
        }
    },
  },
  plugins: [],
}

