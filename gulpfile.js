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
   gulp.src(['img/*.png','img/*.jpg','img/*.gif','img/*.jpeg']).pipe(imageop({
        use: [pngquant()]
    }))
   .pipe(gulp.dest('./img')).on('end', cb).on('error', cb);
});

gulp.task('compress', function() {
  return gulp.src('src/*.js')
    .pipe(uglify())
    .pipe(gulp.dest('js'));
});

//Watch task
gulp.task('default',function() {    
	gulp.watch("./js/*.js", function(event){
		gulp.run('compress');
	});
});

gulp.task('watch', function() {
	gulp.watch('src/sass/**/*.scss', function(){
		gulp.run('minify-css');
		gulp.run('styles');
	});
});