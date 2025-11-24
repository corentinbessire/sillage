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
          DEFAULT: 'var(--primary)',
          'light': 'var(--primary-light)',
          'dark' : 'var(--primary-dark)',
        },
        secondary: {
          DEFAULT: 'var(--secondary)',
          'light': 'var(--secondary-light)',
          'dark': 'var(--secondary-dark)',
        },
        accent: {
          DEFAULT: 'var(--accent)',
          'light': 'var(--accent-light)',
          'dark': 'var(--accent-dark)',
        },
        info: {
          DEFAULT: 'var(--info)',
        },
        warning: {
          DEFAULT: 'var(--warning)',
        },
        error: {
          DEFAULT: 'var(--error)',
        },
        success: {
          DEFAULT: 'var(--success)',
        },
      },
    }
  }
};
