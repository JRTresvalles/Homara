const { src, dest, watch, series, parallel } = require('gulp');

const sass = require('gulp-sass')(require('sass'));
const concat = require('gulp-concat');
const uglify = require('gulp-uglify');
const cleanCSS = require('gulp-clean-css');
const autoprefixer = require('gulp-autoprefixer').default;
const rename = require('gulp-rename');

const paths = {
    scss: './assets/src/scss/**/*.scss',
    js: './assets/src/js/**/*.js',
    cssOutput: './assets/css',
    jsOutput: './assets/js'
};

function styles() {
    return src(paths.scss)
        .pipe(sass().on('error', sass.logError))
        .pipe(autoprefixer())
        .pipe(cleanCSS())
        .pipe(rename({ suffix: '.min' }))
        .pipe(dest(paths.cssOutput));
}

function scripts() {
    return src(paths.js)
        .pipe(concat('main.min.js'))
        .pipe(uglify())
        .pipe(dest(paths.jsOutput));
}

function watcher() {
    watch(paths.scss, styles);
    watch(paths.js, scripts);
    watch('./**/*.php');
}

exports.default = series(
    parallel(styles, scripts),
    watcher
);