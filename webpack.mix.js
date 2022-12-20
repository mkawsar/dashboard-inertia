const mix = require("laravel-mix");
const path = require('path');

mix.disableSuccessNotifications();


mix.js("resources/js/app.js", "public/js")
    .vue(3)
    .postCss("resources/css/app.css", "public/css")
    .copy("resources/img/**/*", "public/assets/img")
    .copy("resources/scripts/*", "public/assets/js")
    .version();

mix.alias({ ziggy: path.resolve('vendor/tightenco/ziggy/dist') });

mix.webpackConfig({
    resolve: {
        extensions: ['.js', '.json', '.vue'],
        alias: {
            '@': path.join(__dirname, './resources/js'),
            ziggy: path.resolve('vendor/tightenco/ziggy/dist'),
        }
    }
});
