const mix = require("laravel-mix");

mix
  .js("assets/js/app.js", "dist/")
  .sass("assets/scss/app.scss", "dist/")
  .options({
    processCssUrls: false, // Process/optimize relative stylesheet url()'s. Set to false, if you don't want them touched.
  });
