'use strict';
const gulp = require('gulp');
const sass = require('gulp-sass');
const sourcemaps = require('gulp-sourcemaps');

// Compile sass to css for dev.
gulp.task('sass:dev', function() {
    return gulp.src('./sass/*.scss')
      // Initializes sourcemaps.
      .pipe(sourcemaps.init())
      .pipe(sass.sync().on('error', sass.logError))
      // Writes sourcemaps into the CSS file.
      .pipe(sourcemaps.write())
      .pipe(gulp.dest('./css'));
});

// Watch for file changes.
gulp.task('watch', function() {
    gulp.watch('./sass/*.scss', ['sass:dev']);
});

// Compile sass to css.
gulp.task('sass', function() {
    return gulp.src('./sass/*.scss')
      .pipe(sass.sync({outputStyle: 'compressed'}).on('error', sass.logError))
      .pipe(gulp.dest('./css'));
});

// Default task.
gulp.task('default', ['sass:dev', 'watch']);
