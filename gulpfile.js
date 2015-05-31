var gulp = require('gulp');
var minifycss = require('gulp-minify-css');
var autoprefixer = require('gulp-autoprefixer');
var notify = require('gulp-notify');
var sass = require('gulp-ruby-sass');

gulp.task('css', function() {
    return sass('public/assets/scss/main2.scss', { style: 'expanded' } )
        .pipe(autoprefixer('last 5 version', 'ie'))
        .pipe(gulp.dest('public/assets/css'))
        .pipe(notify({ message: 'All done, master!' }));
});

// gulp-ruby-sass: 1.x
//gulp.task('sass', function() {
  //  return sass('path/to/scss', { style: 'expanded' })
    //    .pipe(gulp.dest('path/to/css'));
//});

gulp.task('default', function() {
    gulp.run('css');

    gulp.watch('public/assets/scss/**/*.scss', function() {
        gulp.run('css');
    });
});