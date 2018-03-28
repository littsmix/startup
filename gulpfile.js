
var gulp = require('gulp');
var sass = require('gulp-sass');
var prefix = require('gulp-autoprefixer');
var minifycss = require('gulp-minify-css');
var rename = require('gulp-rename');
var sourcemaps = require('gulp-sourcemaps');
var uglify = require('gulp-uglify');
var concat = require('gulp-concat');

// var svgmin = require('gulp-svgmin');
// var imagemin = require('gulp-imagemin');
// var size = require('gulp-size');


// Compile all your Sass
	gulp.task('sass', function (){
		gulp.src(['./assets/*.scss'])
         .pipe(sourcemaps.init())
			.pipe(sass().on('error', sass.logError))
			.pipe(prefix(
				"last 1 version", "> 1%", "ie 8", "ie 7"
				))
			.pipe(minifycss())
         .pipe(rename({
            suffix: '.min'
         }))
         .pipe(sourcemaps.write('./'))
			.pipe(gulp.dest('./assets/css'));
	});

// Uglify JS
	gulp.task('uglify', function(){
		gulp.src('./assets/js/*.js')
			.pipe(sourcemaps.init())
			.pipe(concat('main.js'))
			.pipe(gulp.dest('./assets/js'))
			.pipe(rename('main.min.js'))
			.pipe(uglify())
			.pipe(sourcemaps.write('./'))
			.pipe(gulp.dest('./assets/js'));
	});

// // Images
// 	gulp.task('svgmin', function() {
// 		gulp.src('./dev/img/svg/*.svg')
// 		.pipe(svgmin())
// 		.pipe(gulp.dest('./dev/img/svg'))
// 		.pipe(gulp.dest('./prod/img/svg'));
// 	});
//
// 	gulp.task('imagemin', function () {
// 		gulp.src('./dev/img/**/*')
// 		.pipe(imagemin())
// 		.pipe(gulp.dest('./dev/img'))
// 		.pipe(gulp.dest('./prod/img'));
// 	});
//
// // Stats and Things
// 	gulp.task('stats', function () {
// 		gulp.src('./prod/**/*')
// 		.pipe(size())
// 		.pipe(gulp.dest('./prod'));
// 	});
//
// //

gulp.task('default', function(){

	// watch me getting Sassy
	gulp.watch("./assets/*.scss", function(event){
		gulp.run('sass');
	});
	// make my JavaScript ugly
	gulp.watch("./assets/js/*.js", function(event){
		gulp.run('uglify');
	});
	// images
	// gulp.watch("./dev/img/**/*", function(event){
	// 	gulp.run('imagemin');
	// 	gulp.run('svgmin');
	// });
});
