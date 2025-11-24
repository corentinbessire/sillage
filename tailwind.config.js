module.exports = {
  mode: 'jit',
  content: [
    './templates/**/*.html.twig',
    './components/**/*.twig',
    './js/**/*.js',
  ],
  theme: {
    extend: {
      colors: {
        primary: {
          DEFAULT: 'rgb(var(--primary))',
          'light': 'rgb(var(--primary-light))',
          'dark': 'rgb(var(--primary-dark))',
        },
        secondary: {
          DEFAULT: 'rgb(var(--secondary))',
          'light': 'rgb(var(--secondary-light))',
          'dark': 'rgb(var(--secondary-dark))',
        },
        accent: {
          DEFAULT: 'rgb(var(--accent))',
          'light': 'rgb(var(--accent-light))',
          'dark': 'rgb(var(--accent-dark))',
        },
        info: {
          DEFAULT: 'rgb(var(--info))',
        },
        warning: {
          DEFAULT: 'rgb(var(--warning))',
        },
        error: {
          DEFAULT: 'rgb(var(--error))',
        },
        success: {
          DEFAULT: 'rgb(var(--success))',
        },
      },
    }
  }
};
