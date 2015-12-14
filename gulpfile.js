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
        '../../../node_modules/bootstrap/dist/css/bootstrap.min.css',
        '../../../node_modules/bootstrap/dist/css/bootstrap-theme.css',
        '../../../node_modules/bootstrap/dist/css/font-awesome.min.css',
        "main.css"
    ]);
});

elixir(function (mix) {
    mix
        .scripts([
            '../../../node_modules/angular/angular.js',
            '../../../node_modules/angular-route/angular-route.js',
            'app.js',
            'controllers/eventController.js',
            'services/eventService.js'
        ]);
});

gulp.task('css', function () {
    gulp.src('resources/assets/css/main.css')
        .pipe(sass())
        .pipe(autoprefixer('last 10 version'))
        .pipe(gulp.dest('public/css'))
});

//gulp.task('watch', function () {
//    gulp.watch('resources/assets/sass/**/*.sass', ['css']);
//});

//gulp.task('default', ['watch']);
