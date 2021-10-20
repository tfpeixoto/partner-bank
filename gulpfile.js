var
gulp = require('gulp');
browserSync = require('browser-sync');
sass = require('gulp-sass');
// imagemin = require('gulp-imagemin');
concat = require('gulp-concat');
rename = require('gulp-rename');
uglify = require('gulp-uglify-es').default;

gulp.task('browser-sync', function () {
  var files = ["public/*.html", 'src/scss/**/*.css', 'src/js/**/*.js'];

  browserSync.init(files, {
    proxy: "http://localhost/partner-bank/public",
    notify: true,
  });
});

gulp.task('sass', function () {
  return gulp.src(['src/scss/*.scss'])
    .pipe(sass({ outputStyle: 'compressed' }).on('error', sass.logError))
    .pipe(gulp.dest('public/css'))
});

/* Imagens */
// gulp.task('imagemin', function () {
//   return gulp.src('gulp/images/**/*')
//     .pipe(imagemin({
//       progressive: true,
//       svgoPlugins: [
//         { removeViewBox: false },
//         { cleanupIDs: false }
//       ]
//     }))
//     .pipe(gulp.dest('images/'))
// });

gulp.task('js', function () {
  return gulp.src([
    'node_modules/jquery/dist/jquery.min.js',
    'node_modules/popper.js/popper.min.js',
    'node_modules/bootstrap/dist/js/bootstrap.min.js',
    'node_modules/owl.carousel/dist/owl.carousel.min.js',
    'node_modules/wow.js/dist/wow.min.js'])
    .pipe(concat('scripts.js'))
    .pipe(gulp.dest('src/js'))
    .pipe(rename('scripts.min.js'))
    .pipe(uglify())
    .pipe(gulp.dest('public/js'))
});

gulp.task('watch', function () {
  gulp.watch(['src/scss/**/*.scss'], ['sass'])
  gulp.watch('src/js/*.js', ['js'])
  // gulp.watch('gulp/images/**/*', ['imagemin'])
});

gulp.task('default', ['sass', 'js', 'watch', 'browser-sync'])