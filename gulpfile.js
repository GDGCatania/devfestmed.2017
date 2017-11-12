const gulp = require('gulp');
const sass = require('gulp-sass');
const rename = require('gulp-rename');

gulp.task('default', ['sass']);

gulp.task('sass', function () {
  return gulp.src('./scss/main.scss')
    .pipe(sass({ outputStyle: 'compressed' }).on('error', sass.logError))
    .pipe(rename('style.css'))
    .pipe(gulp.dest('./static'));
});

gulp.task('sass:watch', function () {
  gulp.watch('./scss/**/*.scss', ['sass']);
});
