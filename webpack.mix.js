let mix = require('laravel-mix');

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel application. By default, we are compiling the Sass
 | file for the application as well as bundling up all the JS files.
 |
 */
// mix.webpackConfig({
//     module: {
//       rules: [
//         {
//           test: /\.jsx?$/,
//           use: {
//             loader: 'babel-loader',
//             options: {
//               presets: ['es2015'] // default == env
//             }
//           }
//         }
//       ]
//     }
//   });

mix.react('resources/assets/js/app.js', 'public/js')
   .sass('resources/assets/sass/app.scss', 'public/css');
