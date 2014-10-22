// Include gulp
var gulp = require('gulp');

// Include Our Plugins
var concat  = require('gulp-concat');
var rename  = require('gulp-rename');
var plumber = require('gulp-plumber');
var notify  = require('gulp-notify');
var sass    = require('gulp-sass');

// Compile Our Sass
gulp.task('sass', function() {
    return gulp.src('public/styles/sass/*.scss')
        .pipe(plumber())
        .on('error', function (err) { console.log(err.message); })
        .pipe(sass())
        .pipe(gulp.dest('public/styles/css/'));
});

// Watch Files For Changes
gulp.task('watch', function() {
    gulp.watch('public/styles/sass/*.scss', ['sass']);
});

// Default Task
gulp.task('default', ['sass', 'watch']);