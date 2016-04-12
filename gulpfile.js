var gulp = require('gulp'),
    less = require('gulp-less'),
    nano = require('gulp-cssnano'),
    rename = require('gulp-rename');

gulp.task('less', function() {
    return gulp.src(['./assets/wizardnav.less'])
        .pipe(less())
        .pipe(gulp.dest('./assets/css'))
        .pipe(nano())
        .pipe(rename({
            suffix: ".min"
        }))
        .pipe(gulp.dest('./assets/css'));
});

gulp.task('default', ['less'], function() {});