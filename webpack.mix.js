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

mix.js('resources/js/site.js', 'public/js')

mix.postCss('resources/css/tailwind.css', 'public/css', [
    require('postcss-import'),
    require('tailwindcss/nesting'),
    require('tailwindcss'),
])

if (mix.inProduction()) {
   mix.version();
}

/*
 |--------------------------------------------------------------------------
 | Statamic Control Panel
 |--------------------------------------------------------------------------
 |
 | Feel free to add your own JS or CSS to the Statamic Control Panel.
 | https://statamic.dev/extending/control-panel#adding-css-and-js-assets
 |
 */

// mix.js('resources/js/cp.js', 'public/vendor/app/js')
//    .postCss('resources/css/cp.css', 'public/vendor/app/css', [
//     require('postcss-import'),
//     require('tailwindcss/nesting'),
//     require('tailwindcss'),
// ])



/*
 |--------------------------------------------------------------------------
 | Browser Sync
 |--------------------------------------------------------------------------
 |
 | https://laravel-mix.com/docs/main/browsersync
 |
 | ist über essort.test:3000 erreichbar
 |
 */

mix.browserSync({
    // proxy ist für valet nötig
    proxy: 'essort.test',
    // host und open ermöglichen, die Seite über essort.test:3000 zu öffnen -> ohne die beiden wird localhost:3000 geöffnet
    host: 'essort.test',
    open: 'external',
    // Inject CSS changes -> ist true bei default
    // injectChanges: true,
    // Don't show any notifications in the browser.
    notify: false,
    browser: 'google chrome',
    // ghostMode ist eine Empfehlung von Sizzy -> https://dev.to/superterrific/how-to-turn-off-browsersync-ghostmode-in-eleventy-2ofh
    ghostMode: false,
    files: [
        './content/**/*.(yaml|md)',
        './resources/views/**/*.html',
        './public/**/*.(css|js)',
    ]
});
