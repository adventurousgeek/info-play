'use strict';

var gulp = require('gulp'),
	sass = require('gulp-sass');
var cleanCSS = require('gulp-clean-css');
var prettify = require('gulp-prettify');
var minify = require('gulp-minify');
var concat = require('gulp-concat');  
var uglify = require('gulp-uglify');  

// Compile & Generate Style File
gulp.task('styles', function () {
    gulp.src('./scss/style.scss')
        .pipe(sass())
        .pipe(cleanCSS({compatibility: 'ie8'})) //Later on
        .pipe(gulp.dest('../'));
       // .pipe(gulp.dest('../../wp-content/themes/info-play/'))
});

// Compile & Generate Javscript File
 gulp.task('scripts', function() {
      return gulp.src([

            //jQuery
          	'javascripts/vendor-components/jquery/jquery.1.12.4.min.js',
          	//'javascripts/vendor-components/jquery-wheel/jquery.mousewheel.min.js',

      		//Bootstrap Components

            //'javascripts/bootstrap-components/affix.js',
			//'javascripts/bootstrap-components/alert.js',
			'javascripts/bootstrap-components/button.js',
			'javascripts/bootstrap-components/carousel.js',
			'javascripts/bootstrap-components/collapse.js',
			'javascripts/bootstrap-components/dropdown.js',
			'javascripts/bootstrap-components/modal.js',
			//'javascripts/bootstrap-components/popover.js',
			//'javascripts/bootstrap-components/scrollspy.js',
			//'javascripts/bootstrap-components/tab.js',
			//'javascripts/bootstrap-components/tooltip.js',
			'javascripts/bootstrap-components/transition.js',

            //Vendor Components

			'javascripts/vendor-components/three/three.min.js',
			'javascripts/vendor-components/three/threex.windowresize.js',
			'javascripts/vendor-components/three/orbit-controls.js',
			'javascripts/vendor-components/perlin/perlin.js',

          	'javascripts/vendor-components/green-sock/TweenMax.min.js',
          	'javascripts/vendor-components/green-sock/plugins/ScrollToPlugin.min.js',





          	//Common Components
            'javascripts/common-components/global.js',

          	//Components

          	'javascripts/components/maze.js',
         	'javascripts/components/beam.js',
          	'javascripts/components/sphere.js',
          	'javascripts/components/markets.js',
          	'javascripts/components/background-dots.js',
          	'javascripts/components/ux.js',
            'javascripts/components/loader.js',




      ])
	   .pipe(concat('scripts.js'))
	   .pipe(uglify())
	   .pipe( gulp.dest('../assets/js/'));
       //.pipe(gulp.dest('../../wp-content/themes/info-play/assets/js/'))

 });


// Watch If SCSS File Changes
gulp.task('styles:watch', function () {
	gulp.watch('./scss/**/*.scss', ['styles']);
});

// Watch If Javascript File Changes
gulp.task('scripts:watch', function () {
	gulp.watch('./javascripts/**/*.js', ['scripts']);
});

gulp.task('default', ['styles', 'scripts' , 'styles:watch' , 'scripts:watch']);