// webpack.mix.js

let mix      = require('laravel-mix');
const {sass} = require("laravel-mix");

mix.sass('node_modules/milligram/src/milligram.sass', 'assets/css/milligram.css');