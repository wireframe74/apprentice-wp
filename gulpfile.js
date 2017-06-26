var gulp = require('gulp');
var imagemin = require('gulp-imagemin');
var uglify = require('gulp-uglify');
var sass = require('gulp-sass');
var sourcemaps = require('gulp-sourcemaps');
var concat = require('gulp-concat');
var uncss = require('gulp-uncss');
var livereload = require('gulp-livereload');
var connect = require('gulp-connect');



gulp.task('copyHtml', function() {
	gulp.src('src/*html')
	.pipe(gulp.dest('dist'));
});


gulp.task('imageMin',  function() {
	gulp.src('src/images/*')
	.pipe(imagemin())
	.pipe(gulp.dest('dist/images'))
});


gulp.task('connect', function() {
    connect.server({
        livereload: true
    });
});




gulp.task('sass', function () {
 return gulp.src('./sass/**/*.scss')
  .pipe(sourcemaps.init())
  .pipe(sass().on('error', sass.logError))
  .pipe(sourcemaps.write())
  .pipe(gulp.dest('css'))
  .pipe(connect.reload());
 
});



// gulp.task('sass',  function() {
// 	gulp.src('src/sass/*.scss')
// 	.pipe(sass().on('error', sass.logError))
// 	.pipe(gulp.dest('src/css'));
// });


gulp.task('scripts',  function() {
	gulp.src('src/js/*.js')
	.pipe(concat('main.js'))
	.pipe(uglify())
	.pipe(gulp.dest('dist/js'));
});


gulp.task('watch',  function() {
	// gulp.watch('src/js/*.js',['scripts']);
	// gulp.watch('src/images/*',['imageMin']);
	 livereload.listen();
	gulp.watch('./sass/**/*.scss',['sass']);

	// gulp.watch('src/*.html',['copyHtml']);
});



gulp.task('uncss', function () {
    return gulp.src('PayPal Merchant Account and Merchant Services_files/6e475171671745535d851e864e639ec2861e3f.css')
        .pipe(uncss({
            html: ['index.html']
        }))
        .pipe(gulp.dest('./out/styles.css'));
});




// gulp.task('minify', function() {
// gulp.src('src/js/*.js')
// .pipe(uglify())
// .pipe(gulp.dest('dist/js'))
// });


gulp.task('default', ['watch', 'connect']);

// gulp.task('default',['copyHtml','imageMin','scripts']);


