const gulp = require('gulp');
const browserSync = require('browser-sync').create();
const concat = require('gulp-concat');
const sass = require('gulp-sass')(require('sass'));


function concatcss(){
    return gulp.src('./sass/**/*.scss')
               .pipe(sass())
               .pipe(concat('style.css'))
               .pipe(gulp.dest('./css/'))
               .pipe(browserSync.stream());
}

function watch(){
    browserSync.init({
        server : {
            baseDir : './'
        }
    })

    gulp.watch('./sass/**/*.scss', concatcss);
    gulp.watch('./js/**/*.js').on('change', browserSync.reload);
    gulp.watch('./**/*.html').on('change', browserSync.reload);
}

exports.watch = watch;
exports.concatcss = concatcss;