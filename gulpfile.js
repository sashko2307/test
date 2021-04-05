let preprocessor = "sass";

const { src, dest, parallel, series, watch } = require("gulp");
const browserSync                            = require('browser-sync').create();
const concat 								 = require('gulp-concat');    // конкатенация (объединение) файлов
const uglify								 = require('gulp-uglify-es').default;  // минификация  js
const sass 									 = require('gulp-sass');
const autoprefixer 							 = require('gulp-autoprefixer');
const cleanCSS                               = require('gulp-clean-css');  // минификация css
const imagemin 								 = require('gulp-imagemin');
const del                                    = require('del');
const webp                                   = require('gulp-webp');
const newer                                  = require('gulp-newer');






function browsersync () {
	/*browserSync.init({
        server: {
            baseDir: "assets/"
        },
        notify: false,
        online: true
    });*/

    browserSync.init({
        proxy: "tesssststartTemlateNewGulp4/assets",
        notify: false,
        online: true
    });
}

function scripts() {
	return src([
		"node_modules/jquery/dist/jquery.min.js",
		'assets/libs/magnific-popup/jquery.magnific-popup.min.js',
		'assets/libs/modernizr/modernizr.js', // сейчас только для webp
		'assets/libs/slick_work/slick.min.js',
		//'assets/libs/PageScroll2id.min.js',
		'assets/libs/jquery.inputmask.bundle.min.js',
		'assets/libs/lazyload/lazysizes.min.js',
	])
	.pipe(concat('scripts.min.js')) 
	.pipe(uglify(/* options */))
	.pipe(dest('assets/js'))
	.pipe(browserSync.stream())
}

function styles() {
	return src(["assets/" + preprocessor + "/main." + preprocessor])
	.pipe(eval(preprocessor)())
	.pipe(concat('main.min.css')) 
	.pipe(autoprefixer({overrideBrowserslist: ['last 5 versions'], grid: true}))
	//.pipe(cleanCSS({level: {1: {specialComments: 0}}, /*format: "beautify"*/})) //минификация и  
	.pipe(dest("assets/css/"))
	.pipe(browserSync.stream())
}

function stylesheader() {
	return src(["assets/" + preprocessor + "/header." + preprocessor])
	.pipe(eval(preprocessor)())
	.pipe(concat('header.min.css')) 
	.pipe(autoprefixer({overrideBrowserslist: ['last 5 versions'], grid: true}))
	//.pipe(cleanCSS({level: {1: {specialComments: 0}}, /*format: "beautify"*/})) //минификация и  
	.pipe(dest("assets/css/"))
	.pipe(browserSync.stream())
}

function images() {
	return src("assets/img/**/*")
	.pipe(newer("assets/img/**/*"))
	.pipe(imagemin())
	.pipe(dest("assets/img"))
}

function imagetowebp() {
    return src("assets/img/**/*.{jpg,png}")
    .pipe(webp({quality: 50}))
    .pipe(dest("assets/img"))
}

function deleteDist() {
	return del("dist/", {force: true})
}

function delstart() {
	return del("assets/img/**/*.webp", {force: true})
}


function buildall() {
	return src([
		"assets/css/**/*.min.css",
		"assets/js/**/*.js",
		"assets/fonts/**/*",
		"assets/**/*.html",
		"assets/**/*.php",
		"assets/img/**/*",
		"assets/robots.txt",
		"assets/libs/slick_work/ajax-loader.gif",
		], { base: "assets" })
	.pipe(dest("dist"))
}



function startwatch() {
	watch("assets/" + preprocessor + "/**/*", styles)
	watch("assets/" + preprocessor + "/**/*", stylesheader)
	watch(['assets/libs/**/*.js', 'assets/js/common.js'], scripts)
	watch(['assets/**/*.html', 'assets/**/*.php']).on("change", browserSync.reload)
}

exports.browsersync            = browsersync;
exports.scripts                = scripts;
exports.styles                 = styles;
exports.stylesheader           = stylesheader;
exports.images                 = images;
exports.imagetowebp            = imagetowebp;
exports.delstart               = delstart;    //  для удаления всего поименно

exports.imagesall              = parallel(images, imagetowebp); // для картинок старт

exports.build                  = series(deleteDist, styles, scripts, buildall);



exports.default                = parallel(stylesheader, styles, scripts,  browsersync, startwatch);
// Static server
/*gulp.task('browser-sync', function() {
    
});*/

// or...

/*gulp.task('browser-sync', function() {
    browserSync.init({
        proxy: "yourlocal.dev"
    });
});*/