import gulp from 'gulp';
import sass from 'gulp-sass';
import browserSync from 'browser-sync';
import cleanCSS from 'gulp-clean-css';

var exports = {};

// Compiler
function stylesheet() {
    //1. Find my sass
    return gulp.src('./wp-content/themes/beargorand/styles/sass/**/stylesheet.sass')
    //2. Pass it thru compiler
        .pipe(sass())
    //3. Save compiled css
        .pipe(cleanCSS())
        .pipe(gulp.dest('./wp-content/themes/beargorand/styles/css'))
    //4. Stream changes across browsers
        .pipe(browserSync.stream());
}

function watch() {
    browserSync.init({
        port: 3000,
        proxy: 'http://localhost:8080/beargorand/',
        /*server: {
            baseDir: './'
        }*/
    });
    gulp.watch('./wp-content/themes/beargorand/styles/sass/**/*.sass', stylesheet);
    gulp.watch('./wp-content/themes/beargorand/**/*.php', stylesheet).on('change', browserSync.reload);
}

exports.stylesheet = stylesheet;
exports.watch = watch;