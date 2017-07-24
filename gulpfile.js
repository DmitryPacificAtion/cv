var gulp = require('gulp');
var sass = require('gulp-sass');
const cssmin = require('gulp-cssmin');
const jsmin = require('gulp-jsmin');
const rename = require('gulp-rename');
const htmlmin = require('gulp-htmlmin');

// gulp.task('normalize', function(){
// 	return ;
// 	})
// ;
gulp.task('sass', function () {
	return gulp.src('./node_modules/normalize.scss/normalize.scss')
	.pipe(rename({prefix: '_'}))
	.pipe(gulp.dest('./src/scss')) && gulp.src('./src/scss/*.scss')
	.pipe(sass().on('error', sass.logError))
	.pipe(cssmin())
	.pipe(rename({suffix: '.min'}))
	.pipe(gulp.dest('build'));
	});

gulp.task('js', function () {
	gulp.src('src/js/*.js')
	.pipe(jsmin())
	.pipe(rename({suffix: '.min'}))
	.pipe(gulp.dest('build'));
	});

gulp.task('html', function() {
	return gulp.src('src/*.html')
	.pipe(htmlmin({collapseWhitespace: true}))
	.pipe(gulp.dest('build'));
	});

gulp.task('fonts', function(){
	return gulp.src('src/fonts/**/*')
	.pipe(gulp.dest('build/fonts'));
	});

gulp.task('watch', function () {
	gulp.watch('./src/scss/**/*.scss', ['sass']);
	gulp.watch('./src/js/*.js');
	gulp.watch('./src/*.html');
	});

gulp.task('default', ['watch']);