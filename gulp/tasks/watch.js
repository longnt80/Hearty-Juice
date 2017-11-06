var gulp = require('gulp');
var sass = require('gulp-sass');
var browserSync = require('browser-sync').create();


gulp.task('serve', ['sass'], function () {
    browserSync.init({
        proxy: "heartyjuice/",
    });

    gulp.watch("./app/scss/**/*.scss", function () {
        gulp.start('cssInject');
    });

    gulp.watch("./app/**/*.php").on('change', browserSync.reload);
});

gulp.task('cssInject', ['sass'], function () {
    return gulp.src('./app/css/**/*.css')
        .pipe(browserSync.stream());
});