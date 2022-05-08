const gulp = require('gulp');
const { src, dest, watch } = require('gulp');
const compileSass = require('gulp-sass')(require('sass'));
const concat = require('gulp-concat');

const minifyCss = require('gulp-clean-css');
const sourceMaps = require('gulp-sourcemaps');

compileSass.compiler = require('node-sass');

const bundleSass = async () => {
  
  return src('./assets/sass/main.scss')
    .pipe(compileSass().on('error', compileSass.logError))
    .pipe(minifyCss())
    .pipe(sourceMaps.write())
    .pipe(concat('main.css'))
    .pipe(dest('./assets/css'));
};

const devWatch = () => {
  watch('./assets/sass/**/*.scss', gulp.parallel(bundleSass) );
}

exports.bundleSass = bundleSass;
exports.devWatch = devWatch;