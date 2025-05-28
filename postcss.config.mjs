module.exports = {
  plugins: [

    require('postcss-import'),
    tailwindcss('./tailwind.config.js'),
    require('autoprefixer')
] }

