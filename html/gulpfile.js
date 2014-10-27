/* global require */
/*
gulp tasks:
	dev - watchers
	css - compile sass
	fonts - cop fonts
	images - optimize images
	js - compile js
 */

var gulp = require( 'gulp' ),
	sass = require( 'gulp-sass' ),
	plumber = require( 'gulp-plumber' ),
	autoprefixer = require( 'gulp-autoprefixer' ),
	merge_stream = require( 'merge-stream' ),
	path = require( 'path' ),
	livereload = require( 'gulp-livereload' ),
	uglify = require( 'gulp-uglify' ),
	concat = require( 'gulp-concat' ),
	shell = require( 'gulp-shell' ),
	sync = require( 'gulp-sync' )(gulp),
	svg_sprites = require( 'gulp-svg-sprites' ),
	fs = require( 'fs' ),
	imagemin = require( 'gulp-imagemin' );

var sass_config = {
	outputStyle: 'compressed'
};

var imagemin_config = {
	progressive: true
};

var plumber_config = {
	errorHandler: function(e) {
		console.log( e.toString() );
		this.emit('end');
	}
};

var dev_tasks = [];

/*
SVG Sprite
 */
gulp.task( 'svg_sprite', function(){
	return gulp.src( 'source_svg_sprite/**/*.svg' )
		.pipe( plumber() )
		.pipe( imagemin() )
		.pipe( svg_sprites({
			cssFile: "../source_css/modules/_svg_sprite.scss",
			svg: {
				sprite: "images/svg_sprite.svg"
			},
			svgPath: '../%f',
			preview: false,
			templates: {
				css: require( 'fs' ).readFileSync("source_svg_sprite/scss_template.tmpl", "utf-8")
			},
			padding: 10
		}) )
		.pipe( gulp.dest( 'build' ) );
} );

/*
CSS
 */
gulp.task( 'css', ['svg_sprite'], function(){
	return gulp.src( 'source_css/**/*.scss', { base: 'source_css' } )
		.pipe( plumber() )
		.pipe( sass( sass_config ) )
		.pipe( autoprefixer() )
		.pipe( gulp.dest( 'build/css' ) );

} );


gulp.task( 'css_watch', function() {
	gulp.watch( ['source_css/**/*.scss'], function( evt ){

		if( path.basename( evt.path ).substr( 0, 1 ) == '_' ) {
			return gulp.src( 'source_css/**/*.scss', { base: 'source_css' } )
				.pipe( plumber() )
				.pipe( sass( sass_config ) )
				.pipe( autoprefixer() )
				.pipe( gulp.dest( 'build/css' ) );
		}

		return gulp.src( evt.path, { base: 'source_css' } )
			.pipe( plumber() )
			.pipe( sass( sass_config ) )
			.pipe( autoprefixer() )
			.pipe( gulp.dest( 'build/css' ) );
	} );
} );
dev_tasks.push( 'css_watch' );


/*
JS
 */
gulp.task( 'js', function(){

	var html = fs.readFileSync( 'index.html' ).toString();
	var script_block = html.match( /<!-- build:js -->([\s\S])+<!-- \/build:js -->/g )[0];
	var regexp = /src="(.+?)"/g;
	var scripts = [];
	var match = true;
	while (match !== null) {
		// matched text: match[0]
		// match start: match.index
		// capturing group n: match[n]
		match = regexp.exec( script_block );
		if( match !== null ) {
			scripts.push( match[1] );
		}
	}

	return gulp.src( scripts )
		.pipe( concat( 'layout.js', {newLine: ';'} ) )
		.pipe( uglify() )
		.pipe( gulp.dest( 'build/js' ) );

} );

/*
Images
 */
gulp.task( 'images', function(){

	var non_supported = gulp.src( [ 'source_images/**/*', '!*.{jpg,jpeg,gif,png,svg}'], { base: 'source_images' } )
		.pipe( gulp.dest( 'build/images' ) );

	var supported = gulp.src( [ 'source_images/**/*.{jpg,jpeg,gif,png,svg}'], { base: 'source_images' } )
		.pipe( plumber() )
		.pipe( imagemin( imagemin_config ) )
		.pipe( gulp.dest( 'build/images' ) );

	return merge_stream( non_supported, supported );

} );
gulp.task( 'images_watch', function(){
	gulp.watch( 'source_images/**/*', ['images'] );
} );
dev_tasks.push( 'images_watch' );

/*
Fonts
 */
gulp.task( 'fonts', function(){
	return gulp.src( 'source_fonts/**/*', { base: 'source_fonts' } )
		.pipe( gulp.dest( 'build/fonts' ) );
} );


/*
SSG
 */
gulp.task( 'ssg', function() {

	return gulp.src('')
		.pipe( plumber( plumber_config ) )
		.pipe( shell( 'php -f generate.php', { cwd: 'source_ssg' } ) );

} );
gulp.task( 'ssg_watch', function() {
	gulp.watch( 'source_ssg/**/*', [ 'ssg' ] );
} );
dev_tasks.push( 'ssg_watch' );


/*
Livereload
 */
gulp.task( 'livereload', function(){
	livereload.listen();
	gulp.watch( ['*.html', 'build/**/*', 'source_js/**/*'], function( evt ){
		livereload.changed( evt.path );
	} );
} );
dev_tasks.push( 'livereload' );

/*
Task def
 */
gulp.task( 'dev', dev_tasks );
gulp.task( 'frontend', [ 'css', 'fonts', 'images', 'js' ] );
gulp.task( 'default', sync.sync( [ 'frontend', 'ssg' ] ) );