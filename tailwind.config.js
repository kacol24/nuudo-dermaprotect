module.exports = {
  content: require('fast-glob').sync([
    'source/**/*.{blade.php,blade.md,md,html,vue}',
    '!source/**/_tmp/*' // exclude temporary files
  ], {dot: true}),
  theme: {
    fontFamily: {
      'gotham-rounded': 'Gotham Rounded, sans-serif',
      'gotham-book': 'Gotham Rounded Book, sans-serif'
    },
    extend: {
      colors: {
        primary: '#a2d7f4',
        'nuudo-primary': '#f7931e'
      },
      textColor: {
        body: '#707579',
      }
    }
  },
  plugins: []
};
