"use strict";
/**
 * Imports
 */
const gulp          = require('gulp');
const sass          = require('gulp-sass');
const cssnano       = require('gulp-cssnano');
const sourcemaps    = require('gulp-sourcemaps');
const concat        = require('gulp-concat');
const uglify        = require('gulp-uglify');
const phplint       = require('gulp-phplint');
const rename		= require('gulp-rename');
const browserSync   = require('browser-sync').create();
var reload          = browserSync.reload;

/**
 * Sass
 */
function css() {
    return  gulp
    .src('assets/sass/load.scss')
    .pipe(sourcemaps.init())
		.pipe(sass({outputStyle: "expanded"}))
		.pipe(cssnano())
		.pipe(rename('style.css'))
    .pipe(sourcemaps.write('./assets/sourcemaps'))
    .pipe(gulp.dest('./'));
}

/**
 * JavaScript
 */
var jsFiles = [
    './assets/js/plugins/bideo.js',
    './assets/js/componentes/hero.js',
    './assets/js/componentes/botoes.js',
    './assets/js/componentes/menu.js',
    './assets/js/componentes/accordion.js',
	'./assets/js/scripts.js'
];
function js() {
    return (
        gulp
        .src(jsFiles)
        .pipe(concat('./scripts.js'))
        .pipe(uglify())
        .pipe(gulp.dest('./'))
    );
}

/**
 * PHP Task
 */
function php() {
    return (
        gulp
        .src('./**/*.php')
        .pipe(phplint('', {skipPassedFiles: true}))
    );
}
/**
 * Watch Task
 */
function watchFiles() {
    browserSync.init(null, {
        proxy: 'http://pagu.localhost',
        browser: "google chrome",
                port: 3000,
    });
    gulp.watch('assets/sass/**/*.scss', gulp.series(css)).on("change", reload);
    gulp.watch(jsFiles, gulp.series(js)).on("change", reload);
    gulp.watch('./**/*.php', gulp.series(php)).on("change", reload);
}

const build = gulp.series(css, js, php);
const watch = gulp.series(watchFiles);

exports.default = build;
exports.watch = watch;