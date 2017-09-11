var gulp = require('gulp'),
sass = require('gulp-sass'),
sass = require('gulp-sass'),
browserSync = require('browser-sync').create();

gulp.task('serve', ['sass'], function() {
    browserSync.init({
        proxy: "heartyjuice/"
    });

    gulp.watch("./app/scss/**/*.scss", ['sass']);
    gulp.watch("./app/**/*.php").on('change', browserSync.reload);
});

gulp.task('sass', function() {
  return gulp.src('./app/scss/**/*.scss')
    .pipe(sass({outputStyle: 'compressed'}).on('error', sass.logError))
    .pipe(gulp.dest('./app/css'))
    .pipe(browserSync.stream());
});
