const mix = require('laravel-mix');

// mix.disableNotifications();

// mix.webpackConfig({
//   resolve: {
//     alias: {
//       vue: 'vue/dist/vue.js'
//     }
//   }
// });

mix.js('resources/js/app.js', 'public/js')
    .postCss('resources/css/app.css', 'public/css', [
        //
    ]);
