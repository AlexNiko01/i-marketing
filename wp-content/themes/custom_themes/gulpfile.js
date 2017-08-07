var gulp = require('gulp'),
    scss = require('gulp-sass'),
    cssmin = require('gulp-cssmin'),
    uglify = require("gulp-uglify"),
    rename = require("gulp-rename"),
    ftp = require('gulp-ftp'),
    order = require("gulp-order"),
    sourcemaps = require('gulp-sourcemaps'),
    concat = require('gulp-concat');

function swallowError(error) {
    console.log(error.toString());
    this.emit('end');
}

function getFtpOptions(path) {
    return {
        user: 'setwork_digity03',
        pass: 'r3v50s3b',
        port: 21,
        host: 'setwork.ftp.ukraine.com.ua',
        remotePath: '/wp-content/themes/custom_themes/' + path
    };
}
gulp.task('styles', function () {
    gulp.src('scss/custom-2.scss')
        .pipe(sourcemaps.init())
        .pipe(scss({style: 'expanded',}))
        // .pipe(cssmin())
        .pipe(rename({
            suffix: '.min'
        }))
        .pipe(sourcemaps.write())
        .pipe(ftp(getFtpOptions('css')))
        .pipe(gulp.dest('css'))

        .on('error', swallowError);
});


gulp.task('default', ['styles'], function () {
    gulp.watch('scss/single/*.scss', ['styles']);
    gulp.watch('scss/custom/*.scss', ['styles']);
    // gulp.watch('js/*.js', ['minify-js']);
});

