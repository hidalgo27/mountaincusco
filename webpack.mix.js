const mix = require('laravel-mix');

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel applications. By default, we are compiling the CSS
 | file for the application as well as bundling up all the JS files.
 |
 */
// module.exports = {
//     plugins: [
//         [
//             "import",
//             {
//                 libraryName: 'element-plus',
//                 customStyleName: (name) => {
//                     name = name.slice(3)
//                     return `element-plus/packages/theme-chalk/src/${name}.scss`;
//                 },
//             },
//         ],
//     ],
// };
//
// mix.babelConfig({
//         plugins: [
//             [
//                 "import",
//                 {
//                     libraryName: 'element-plus',
//                     customStyleName: (name) => {
//                         // name = name.slice(3)
//                         return `element-plus/lib/theme-chalk/base.css`;
//                     },
//                 },
//             ],
//         ],
//     })
// .js('resources/js/app.js', 'public/js')


mix.js('resources/js/app.js', 'public/js')
    .vue()
    .postCss('resources/css/app.css', 'public/css', [
        require('postcss-import'),
        require('tailwindcss'),
        require('autoprefixer'),
    ]);
mix.postCss('resources/css/plugins.css', 'public/css');
mix.scripts([
    // 'node_modules/feather-icons/dist/feather.js',
    'node_modules/venobox/venobox/venobox.min.js',
], 'public/js/plugins.js');
