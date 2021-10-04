// webpack.mix.js

let mix      = require('laravel-mix');
const {sass} = require("laravel-mix");

mix.sass('node_modules/milligram/src/milligram.sass', 'assets/css/milligram.css')
.sass('node_modules/font-awesome/scss/font-awesome.scss', 'assets/css/font-awesome.css');