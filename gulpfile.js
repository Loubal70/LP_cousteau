const gulp = require('gulp');
const { src, dest, watch } = require('gulp');
const compileSass = require('gulp-sass')(require('sass'));
const autoprefixer = require('gulp-autoprefixer');
const concat = require('gulp-concat');

const minifyCss = require('gulp-clean-css');
const sourceMaps = require('gulp-sourcemaps');

// FTP
var gutil = require( 'gulp-util' );
var ftp = require( 'vinyl-ftp' );

compileSass.compiler = require('node-sass');

const bundleSass = async () => {
  
  return src('./assets/sass/main.scss')
  .pipe(compileSass().on('error', compileSass.logError))
  .pipe(autoprefixer({
      cascade: false
  }))
    .pipe(minifyCss())
    .pipe(sourceMaps.write())
    .pipe(concat('main.css'))
    .pipe(dest('./assets/css'));
};

const devWatch = () => {
  watch('./assets/sass/**/*.scss', gulp.parallel(bundleSass, deploy) );
  watch('./assets/js/**/*.js', gulp.parallel(deploy) );
  watch('./*.php', deploy);
}

const deploy = () => {
  var conn = ftp.create( {
    host:     'ftp.bolo1678.odns.fr',
    user:     'bolo1678_lyceecousteau@lyceecousteau.prod.louis-boulanger.fr',
    password: '-f%X?(@U^G?j'
  } );

  var globs = [
    'assets/css/**','assets/js/**','*.php'
  ];

	return gulp.src( globs, { base: '.', buffer: false } )
        .pipe( conn.newer( '/cousteau/' ) ) // only upload newer files
        .pipe( conn.dest( '/cousteau/' ) );
}

exports.bundleSass = bundleSass;
exports.devWatch = devWatch;