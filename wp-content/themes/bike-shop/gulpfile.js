/**
 * Created by im on 8/9/17.
 *
 */

var gulp = require('gulp');

var sass = require('gulp-sass');
var concat = require('gulp-concat');
var uglify = require('gulp-uglify');
var rename = require('gulp-rename');
var cleanCSS = require('gulp-clean-css');

var path = {
    // libs: {},

    src: {
        scss: './assets/src/scss/main.scss',
        js: './assets/src/js/main.js'
    },

    public: {
        css: './assets/public/css/',
        js: './assets/public/js/'
    },

    watch: {
        stylesheets: './assets/src/scss/**/*.scss'
    },

    build: {
        mincss: './',
        js: './'
    }
}

gulp.task('compile-sass', function(){
     gulp.src([path.src.scss])
        .pipe(sass())
        .pipe(gulp.dest(path.public.css))
});

gulp.task ('concatenate-and-minify-css', function () {
    return gulp.src(path.public.css + "*.css")
        .pipe(concat('main.css'))
        .pipe(cleanCSS({compatibility: 'ie8'}))
        .pipe(rename({
            suffix: ".min"}))
        .pipe(gulp.dest(path.build.mincss));
});

gulp.task ('concatenate-and-minify-js', function () {
    return gulp.src(path.src.js)
        .pipe(concat('main.js'))
        .pipe(uglify())
        .pipe(rename({
            suffix: ".min"
        }))
        .pipe(gulp.dest(path.build.js));
});


gulp.task('watch', function(){
    gulp.watch(path.watch.stylesheets, ['compile-sass','concatenate-and-minify-css', 'concatenate-and-minify-js']);
});

gulp.task('default', ['compile-sass' , 'concatenate-and-minify-css', 'watch']);