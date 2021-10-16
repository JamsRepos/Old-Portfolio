module.exports = {
  mode: 'jit',
  purge: {
    content: [
      './templates/**/*.html',
      './templates/**/*.twig',
    ],
    safelist: []
  },
  darkMode: false, // or 'media' or 'class'
  theme: {
    colors: {
      transparent: 'transparent',
      white: '#FFFFFF',
      yellow: '#EBCB8B',
      grey: {
        DEFAULT: '#2E3440',
        light: '#3B4252',
      },
    },
    container: {
      center: true,
      padding: {
        DEFAULT: '1.25rem',
        lg: '1rem'
      },
    },
    fontFamily: {
      primary: ['JetBrains Mono'],
      secondary: ['Source Code Pro']
    },
    extend: {
      width: {
        '11/10': '110%'
      },
      height: {
        '11/10': '110%'
      }
    },
  },
  variants: {
    extend: {},
  },
  plugins: [
    require('tailwindcss-pseudo-elements')({
      contentUtilities: true,
      emptyContent: true,
    }),
  ],
}
