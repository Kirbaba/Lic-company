var gulp = require('gulp');
var sass = require('gulp-sass');
var uglify = require('gulp-uglify');
var imageop = require('gulp-imagemin');
var minifyCSS = require('gulp-minify-css');
var rename = require('gulp-rename');

gulp.task('minify-css', function() {
  return gulp.src('css/style.css')
    .pipe(minifyCSS({keepBreaks:false}))
    .pipe(rename('style.min.css'))
});


gulp.task('styles', function() {
    gulp.src('src/sass/**/*.scss')
        .pipe(sass({outputStyle: 'compressed'}).on('error', sass.logError))
        .pipe(gulp.dest('./sass/'));
});

gulp.task ('min-image', function(cb) {
   gulp.src(['img/*.png','img/*.jpg','img/*.gif','img/*.jpeg'])
   .pipe(imageop({
        optimizationLevel: 7,
        progressive: true,
        interlaced: true
    }))
   .pipe(gulp.dest('./img')).on('end', cb).on('error', cb);
});

gulp.task('compress', function() {
  return gulp.src('src/js/*.js')
    .pipe(uglify())
    .pipe(rename({
        suffix: ".min",
        extname: ".js"
    }))
    .pipe(gulp.dest('./js/'));
    
});

//Watch task
gulp.task('default',function() {   	
		gulp.run('compress');
    //gulp.run('min-image');
});

gulp.task('watch', function() {
	gulp.watch('src/sass/**/*.scss', function(){
		gulp.run('minify-css');
		gulp.run('styles');
	});
    gulp.watch('src/js/*.js', function(){
		gulp.run('compress');
	});

});