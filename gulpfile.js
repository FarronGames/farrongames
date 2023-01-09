'use strict';

const { src, dest } = require('gulp');
const gulp = require('gulp');
const sass = require('gulp-sass')(require('sass'));
const concat = require('gulp-concat');

//define default task
gulp.task('default', function () {
   
});

exports.watch = function () {

  gulp.watch('./resources/css/**/*.scss',function(){

    // return gulp.src('./resources/css/**/*.scss')
    // .pipe(sass({outputStyle: 'compressed'}).on('error', sass.logError))
    // .pipe(dest('./public/css/'));
    
    return gulp.src('./resources/css/**/*.scss')
    .pipe(concat('app.css'))
    .pipe(sass({outputStyle: 'compressed'}).on('error', sass.logError))
    .pipe(gulp.dest('./public/css/'));
    
  });

};


 
gulp.task('scripts', function() {
 
});


