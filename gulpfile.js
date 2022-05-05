const gulp = require('gulp');
const { src, dest, watch } = require('gulp');
const compileSass = require('gulp-sass')(require('sass'));
const concat = require('gulp-concat');

const minifyCss = require('gulp-clean-css');
const sourceMaps = require('gulp-sourcemaps');

compileSass.compiler = require('node-sass');

const bundleSass = async () => {
  
  return src('./resources/scss/style.scss')
    .pipe(compileSass().on('error', compileSass.logError))
    .pipe(minifyCss())
    .pipe(sourceMaps.write())
    .pipe(concat('style.css'))
    .pipe(dest('./public/'));
};

const devWatch = () => {
  watch('./resources/scss/**/*.scss', gulp.parallel(bundleSass) );
}

exports.bundleSass = bundleSass;
exports.devWatch = devWatch;