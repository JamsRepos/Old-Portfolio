module.exports = {
  mode: 'jit',
  purge: {
    content: [
      './templates/**/*.html',
      './templates/**/*.twig',
    ],
    safelist: [
      'border',
      'bg-green-100',
      'border-green-500',
      'text-green-700',
      'bg-red-100',
      'border-red-400',
      'text-red-700',
      'text-red-500',
      'px-4',
      'py-3',
      'mb-4',
    ]
  },
  darkMode: false, // or 'media' or 'class'
  theme: {
    colors: {
      transparent: 'transparent',
      white: '#FFFC',
      yellow: '#EBCB8B',
      red: {
        100: '#8b0000',
        500: '#ff0016',
        700: '#ff0016',
      },
      green: {
        100: '#006400',
        400: '#228b22',
        700: '#4cbb17',
      },
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
