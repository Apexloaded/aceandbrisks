module.exports = {
  purge: [
    './resources/**/*.blade.php',
    './resources/**/*.js',
    './resources/**/*.vue',
  ],
  darkMode: false, // or 'media' or 'class'
  theme: {
    extend: {
      screens: {
        'xxl': {'min': '1460px'},
        'xl': {'min':'1200px', 'max': '1459px'},
        'lg': {'min':'992px', 'max': '1199px'},
        'md': {'min':'640px', 'max': '991px'},
        'sm': {'min':'450px', 'max': '639px'},
        'xs': {'min':'0', 'max':'449px'}
      },
      width: {
        '0.5': '0.125rem',
        '1': '0.25rem',
        'w-60': '15rem',
        '70': '18rem'
      },
      maxWidth: {
        '1/4': '25%',
        '1/2': '50%',
        '3/4': '75%',
      },
      minHeight: {
        '0': '0',
        '10': '10vh',
        '20': '20vh',
        '30': '30vh',
        '40': '40vh',
        '50': '50vh',
        '60': '60vh',
        '70': '70vh',
        '80': '80vh',
        '90': '90vh',
      },
      maxHeight: {
        '0': '0',
        '10': '10vh',
        '20': '20vh',
        '30': '30vh',
        '40': '40vh',
        '50': '50vh',
        '60': '60vh',
        '70': '70vh',
        '80': '80vh',
        '90': '90vh',
      },
    },
  },
  variants: {
    extend: {},
  },
  plugins: [],
}
