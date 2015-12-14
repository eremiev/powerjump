var elixir = require('laravel-elixir');
var gulp = require('gulp');
var sass = require('gulp-sass');
var autoprefixer = require('gulp-autoprefixer');

/*
 |--------------------------------------------------------------------------
 | Elixir Asset Management
 |--------------------------------------------------------------------------
 |
 | Elixir provides a clean, fluent API for defining some basic Gulp tasks
 | for your Laravel application. By default, we are compiling the Less
 | file for our application, as well as publishing vendor resources.
 |
 */

elixir(function (mix) {
    mix.styles([
        "main.css"
    ]);
});

elixir(function (mix) {
    mix
        .scripts(['../../../node_modules/angular/angular.js',
            '../../../node_modules/angular-route/angular-route.js'], 'public/js/angular.js');
});

//gulp.task('css', function () {
//    gulp.src('resources/assets/sass/main.sass')
//        .pipe(sass())
//        .pipe(autoprefixer('last 10 version'))
//        .pipe(gulp.dest('public/css'))
//});
//
//gulp.task('watch', function () {
//    gulp.watch('resources/assets/sass/**/*.sass', ['css']);
//});
//
//gulp.task('default', ['watch']);
