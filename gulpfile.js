var gulp = require('gulp');
var sass = require('gulp-sass')(require('sass'));
var cleanCss = require('gulp-clean-css');
var rename = require('gulp-rename');
var terser = require('gulp-terser');
var gulpSequence = require('gulp-sequence');
var autoPrefixer = require('gulp-autoprefixer');
var concat = require('gulp-concat');
var plumber = require('gulp-plumber');
var sourcemaps = require('gulp-sourcemaps');
var errorHandler = require('gulp-error-handle');
var inject = require('gulp-inject-string');
var del = require('del');


//plumber error 
var onError = function (err) {
	console.log(err);
};

//create sourcemaps, convert scss to css, minify and prefix, include bootstrap and jquery
var myHash =  new Date().getTime();

gulp.task('css', function () {
	
	return gulp.src(['app/scss/**/*.scss','app/components/**/*.scss'])
		.pipe(plumber({
			errorHandler: onError
		}))
		.pipe(sourcemaps.init())
		.pipe(sass())
		.pipe(cleanCss())
		.pipe(rename({
			suffix:  '.min',
		}))
		.pipe(autoPrefixer({
			overrideBrowserslist: ['last 3 versions'],
			cascade: false
		}))
		.pipe(sourcemaps.write('.'))
		.pipe(gulp.dest('fyberV3/css'));
});

//create sourcemaps, compile into one file, minify
gulp.task('js', function () {
	del(['fyberV3/js']);

	return gulp.src(['node_modules/bootstrap/dist/js/bootstrap.js', 'app/js/**/*.js','app/components/**/*.js'])
		.pipe(sourcemaps.init())
		.pipe(concat('all.js'))
		.pipe(terser())
		.pipe(rename({
			suffix:   '.min'
		}))
		.pipe(sourcemaps.write('.'))
		.pipe(gulp.dest('fyberV3/js'));
});



//copy php files to app
gulp.task('phpPush', function () {
	return gulp.src('app/*.php')
		.pipe(plumber({
			errorHandler: onError
		}))
		.pipe(gulp.dest('fyberV3'));
});


gulp.task('PHPHashInject', function () {
	console.log("\x1b[41m%s\x1b[0m" ,"remember to upload functions.php");
	return gulp.src('app/functions.php')
	.pipe(inject.replace('v1.0', 'v=' + myHash))
	.pipe(gulp.dest('fyberV3'));
});

gulp.task('phpPushsvg', function () {
	return gulp.src('app/svgs/*.php')
		.pipe(plumber({
			errorHandler: onError
		}))
		.pipe(gulp.dest('calderdale/svgs'));
});
gulp.task('phpPushTemplates', function () {
	return gulp.src('app/template-parts/*.php')
		.pipe(plumber({
			errorHandler: onError
		}))
		.pipe(gulp.dest('fyberV3/template-parts'));
});
gulp.task('phpPushcomponents', function () {
	return gulp.src('app/components/**/*.php')
		.pipe(plumber({
			errorHandler: onError
		}))
		.pipe(gulp.dest('fyberV3/components'));
});


gulp.task('imagePush', function () {
	return gulp.src('app/images/**/*')
		.pipe(gulp.dest('fyberV3/images'));
});


//run functions on file save
gulp.task('watch', function () {
	gulp.watch('app/scss/**/*.scss', gulp.series('css','PHPHashInject'));
	gulp.watch('app/components/**/*.scss', gulp.series('css','PHPHashInject'));
	gulp.watch('app/*.php', gulp.series('phpPush','PHPHashInject'));
	gulp.watch('app/template-parts/**/*.php', gulp.series('phpPushTemplates'));
	gulp.watch('app/components/**/*.php', gulp.series('phpPushcomponents','PHPHashInject'));
	gulp.watch('app/js/**/*.js', gulp.series('js','PHPHashInject'));
	gulp.watch('app/svgs/**/*.php', gulp.series('phpPushsvg'));
	gulp.watch('app/components/**/*.js', gulp.series('js','PHPHashInject'));
	gulp.watch('app/images/**/*', gulp.series('imagePush'));
	return;
});

//run all functions
gulp.task('default', gulp.parallel('css', 'js', 'phpPush','phpPushsvg', 'phpPushTemplates', 'phpPushcomponents', 'imagePush'));

//run functions on file save
// gulp.task('watch', function () {
// 	gulp.watch('app/scss/**/*.scss', gulp.series('css'));
// 	gulp.watch('app/*.php', gulp.series('phpPush'));
// 	gulp.watch('app/template-parts/*.php', gulp.series('phpPushTemplates'));
// 	gulp.watch('app/js/**/*.js', gulp.series('js'));
// 	gulp.watch('app/images/**/*', gulp.series('imagePush'));
// 	return;
// });

// //run all functions
// gulp.task('default', gulp.parallel('css', 'js', 'phpPush', 'phpPushTemplates', 'imagePush'));