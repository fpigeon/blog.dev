var gulp = require('gulp');
var minifycss = require('gulp-minify-css');
var autoprefixer = require('gulp-autoprefixer');
var notify = require('gulp-notify');
var sass = require('gulp-ruby-sass');
var sassDir = 'app/assets/scss';
var targetCSSDir = 'public/assets/css';

gulp.task('css', function() {
    return sass( sassDir + '/main.scss', { style: 'compressed', sourcemap: true } )
        .pipe(autoprefixer('last 5 version', 'ie'))
        .pipe(gulp.dest(targetCSSDir))
        .pipe(notify({ message: 'All done, Frank!' }));
});

gulp.task('default', function() {
    gulp.run('css');

    gulp.watch( sassDir + '/**/*.scss', function() {
        gulp.run('css');
    });
});