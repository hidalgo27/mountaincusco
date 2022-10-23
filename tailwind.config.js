const colors = require('tailwindcss/colors')
module.exports = {

    purge: [
        './storage/framework/views/*.php',
        './resources/**/*.blade.php',
        './resources/**/*.js',
        './resources/**/*.vue',
    ],
  darkMode: 'media', // or 'media' or 'class'
  theme: {
      colors: {
          blue: colors.blue,
          green: colors.green,
          red: colors.red,
          amber: colors.amber,
          gray: colors.gray,
          white: colors.white,
          primary: '#1f4348',
          secondary: '#01a9b4',
      },
      fontFamily: {
          sans: ['Montserrat', 'sans-serif'],
      },
    extend: {
        backgroundImage: theme => ({
            'hero-pattern': "url('https://gotoperu-com.s3-us-west-1.amazonaws.com/logos/logo-gotoperu-black.png')",
            'footer-texture': "url('/img/footer-texture.png')",
        }),
    },
  },
  variants: {
    extend: {
        fontWeight: ['hover', 'focus'],
        scale: ['group-hover'],
        translate: ['group-hover'],
    },
  },
  plugins: [],
}
