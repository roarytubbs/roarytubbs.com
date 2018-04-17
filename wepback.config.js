const path = require('path');

module.exports = {
  devtool: 'source-map',
  entry: {
    site: './js/site.js'
  },
  output: {
    path: path.resolve(__dirname, './js'),
    filename: '[name].bundle.js',
  }
};
