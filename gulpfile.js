var
  gulp = require('gulp');
browserSync = require('browser-sync');
sass = require('gulp-sass');
imagemin = require('gulp-imagemin');
purgecss = require('gulp-purgecss');
concat = require('gulp-concat');
rename = require('gulp-rename');
uglify = require('gulp-uglify-es').default;

// CONSTANTES
const dir = {
  src: 'wp-content/themes/partner-bank/gulp',
  node: 'node_modules',
  build: 'wp-content/themes/partner-bank'
}

// BROWSER SYNC
gulp.task('browser-sync', function () {
  var files = [
    `${dir.build}/**/*.php`,
    `${dir.build}/css/*.css`,
    `${dir.build}/js/*.js`
  ];

  browserSync.init(files, {
    proxy: 'http://localhost/partner-bank',
    notify: true,
  });
});

// SASS
gulp.task('sass', function () {
  return gulp.src([`${dir.src}/scss/*.scss`])
    .pipe(sass({ outputStyle: 'compressed' }).on('error', sass.logError))
    .pipe(gulp.dest(`${dir.src}/css`))
});

// PURGECSS
gulp.task('purgecss', ['sass'], function () {
  return gulp.src(`${dir.src}/css/*.css`)
    .pipe(purgecss({
      content: [`${dir.build}/*.html`],
      whitelist: ['.owl-nav', '.carousel-fade'],
      whitelistPatterns: [/^owl/, /^carousel/]
    }))
    .pipe(gulp.dest(`${dir.build}/css`))
});

// IMAGEMIN
gulp.task('imagemin', function () {
  return gulp.src(`${dir.src}/images/**/*`)
    .pipe(imagemin({
      progressive: true,
      svgoPlugins: [
        { removeViewBox: false },
        { cleanupIDs: false }
      ]
    }))
    .pipe(gulp.dest(`${dir.build}/images`))
});

// JS
gulp.task('js', function () {
  return gulp.src([
    `${dir.node}/jquery/dist/jquery.min.js`,
    `${dir.node}/popper.js/popper.min.js`,
    `${dir.node}/bootstrap/dist/js/bootstrap.min.js`,
    `${dir.node}/owl.carousel/dist/owl.carousel.min.js`,
    `${dir.node}/wow.js/dist/wow.min.js`])
    .pipe(concat('scripts.js'))
    .pipe(gulp.dest(`${dir.src}/js`))
    .pipe(rename('scripts.min.js'))
    .pipe(uglify())
    .pipe(gulp.dest(`${dir.build}/js`))
});

// WATCH
gulp.task('watch', function () {
  gulp.watch(`${dir.src}/scss/*.scss`, ['purgecss'])
  gulp.watch(`${dir.src}/js/*.js`, ['js'])
  gulp.watch(`${dir.src}/images/*`, ['imagemin'])
});

gulp.task('default', ['watch', 'browser-sync'])